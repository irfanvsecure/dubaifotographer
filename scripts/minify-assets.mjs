// Rebuilds the .min.css / .min.js next to every source file in public/assets
// (SiteController serves the .min file when it exists). Run after editing CSS or JS:
//   node scripts/minify-assets.mjs
import { readdirSync, statSync } from 'node:fs';
import { join } from 'node:path';
import { execFileSync } from 'node:child_process';

const root = 'public/assets';
const skip = new Set(['vendor', 'images', 'fonts']);
const files = [];

(function walk(dir) {
    for (const name of readdirSync(dir)) {
        const path = join(dir, name);
        if (statSync(path).isDirectory()) {
            if (!skip.has(name)) walk(path);
        } else if (/\.(css|js)$/.test(name) && !name.includes('.min.')) {
            files.push(path);
        }
    }
})(root);

execFileSync('npx', [
    '--yes', 'esbuild@0.24.0', ...files,
    '--minify', `--outdir=${root}`, `--outbase=${root}`,
    '--out-extension:.css=.min.css', '--out-extension:.js=.min.js',
    '--log-level=warning',
], { stdio: 'inherit', shell: true });

console.log(`minified ${files.length} files`);
