<?php

namespace App\Support\Sections;

use DOMDocument;
use DOMElement;
use DOMNode;

/**
 * HTML allowed in section fields: p, a, strong, em, ul, li, br, h2, h3 (b/i are turned into
 * strong/em). script, style, iframe and similar are removed with their content; any other
 * tag is removed but its text kept. Links keep only href (http, https, mailto, tel, #, /,
 * %%BASE%%), target and rel; every other attribute is dropped.
 */
class HtmlSanitizer
{
    private const ALLOWED = ['p', 'a', 'strong', 'em', 'ul', 'li', 'br', 'h2', 'h3'];

    private const RENAME = ['b' => 'strong', 'i' => 'em'];

    private const DROP_WITH_CONTENT = ['script', 'style', 'iframe', 'object', 'embed', 'form', 'input', 'button', 'select', 'textarea', 'svg', 'math', 'template', 'noscript', 'link', 'meta', 'base'];

    public static function clean(string $html): string
    {
        if (! preg_match('/[<&]/', $html)) {
            return $html;
        }
        $doc = new DOMDocument('1.0', 'UTF-8');
        libxml_use_internal_errors(true);
        $doc->loadHTML('<?xml encoding="utf-8"?><div id="__root">'.$html.'</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
        $root = $doc->getElementById('__root');
        if (! $root) {
            return e(strip_tags($html));
        }
        self::walk($root);

        $out = '';
        foreach ($root->childNodes as $child) {
            $out .= $doc->saveHTML($child);
        }

        return $out;
    }

    private static function walk(DOMNode $node): void
    {
        foreach (iterator_to_array($node->childNodes) as $child) {
            if (! $child instanceof DOMElement) {
                if ($child->nodeType === XML_COMMENT_NODE) {
                    $node->removeChild($child);
                }

                continue;
            }
            $tag = strtolower($child->tagName);
            if (in_array($tag, self::DROP_WITH_CONTENT, true)) {
                $node->removeChild($child);

                continue;
            }
            self::walk($child);

            if (isset(self::RENAME[$tag])) {
                $renamed = $child->ownerDocument->createElement(self::RENAME[$tag]);
                while ($child->firstChild) {
                    $renamed->appendChild($child->firstChild);
                }
                $node->replaceChild($renamed, $child);

                continue;
            }
            if (! in_array($tag, self::ALLOWED, true)) {
                while ($child->firstChild) {
                    $node->insertBefore($child->firstChild, $child);
                }
                $node->removeChild($child);

                continue;
            }

            foreach (iterator_to_array($child->attributes) as $attribute) {
                $name = strtolower($attribute->name);
                $keep = $tag === 'a' && (
                    ($name === 'href' && self::safeHref($attribute->value))
                    || ($name === 'target' && in_array($attribute->value, ['_blank', '_self'], true))
                    || $name === 'rel'
                );
                if (! $keep) {
                    $child->removeAttribute($attribute->name);
                }
            }
        }
    }

    public static function safeHref(string $href): bool
    {
        $href = trim($href);

        return (bool) preg_match('#^(https?://|mailto:|tel:|\#|/|%%BASE%%)#i', $href);
    }
}
