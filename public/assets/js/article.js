/*
 * Articles: Table of Contents collapse toggle; on posts (.article-has-cta) also the reading
 * progress bar and the sidebar "In this article" list with the current section highlighted.
 */
(function () {
    "use strict";

    var each = function (list, fn) { Array.prototype.forEach.call(list, fn); };

    each(document.querySelectorAll(".toc-toggle"), function (button) {
        button.addEventListener("click", function () {
            var toc = button.closest(".toc");
            var open = toc.classList.toggle("is-collapsed") === false;
            button.setAttribute("aria-expanded", open ? "true" : "false");
        });
    });

    var article = document.querySelector(".article-has-cta");
    if (!article) {
        return;
    }

    // reading progress: how far the card has been read
    var bar = article.querySelector(".article-progress span");
    var main = article.querySelector(".article-main");
    if (bar && main) {
        var ticking = false;
        var update = function () {
            ticking = false;
            var rect = main.getBoundingClientRect();
            var total = rect.height - window.innerHeight * 0.6;
            var done = total > 0 ? Math.min(1, Math.max(0, -rect.top / total)) : 1;
            bar.style.transform = "scaleX(" + done.toFixed(4) + ")";
        };
        var request = function () {
            if (!ticking) {
                ticking = true;
                window.requestAnimationFrame(update);
            }
        };
        window.addEventListener("scroll", request, { passive: true });
        window.addEventListener("resize", request);
        update();
    }

    // sidebar list built from the headings the Table of Contents links to (two levels)
    var aside = article.querySelector(".aside-toc");
    var tocLinks = article.querySelectorAll(".toc nav a[href^='#']");
    if (!aside || !tocLinks.length) {
        return;
    }
    var list = document.createElement("ol");
    var entries = [];
    var topDepth = null;
    each(tocLinks, function (link) {
        var target = document.getElementById(decodeURIComponent(link.getAttribute("href").slice(1)));
        if (!target || target.classList.contains("article-title")) {
            return;
        }
        var depth = 0;
        for (var node = link.parentNode; node && !node.matches(".toc nav"); node = node.parentNode) {
            if (node.tagName === "UL") {
                depth++;
            }
        }
        if (topDepth === null || depth < topDepth) {
            topDepth = depth;
        }
        entries.push({ link: link, target: target, depth: depth });
    });
    entries = entries.filter(function (e) { return e.depth <= topDepth + 1; });
    if (!entries.length) {
        return;
    }
    entries.forEach(function (e) {
        var li = document.createElement("li");
        if (e.depth > topDepth) {
            li.className = "is-sub";
        }
        var a = document.createElement("a");
        a.href = e.link.getAttribute("href");
        a.textContent = e.link.textContent;
        li.appendChild(a);
        list.appendChild(li);
        e.item = a;
    });
    aside.appendChild(list);
    aside.hidden = false;

    var current = null;
    var spy = function () {
        var active = null;
        entries.forEach(function (e) {
            if (e.target.getBoundingClientRect().top < 140) {
                active = e;
            }
        });
        if (active === current) {
            return;
        }
        if (current) {
            current.item.classList.remove("is-active");
        }
        current = active;
        if (current) {
            current.item.classList.add("is-active");
            var box = list.getBoundingClientRect();
            var r = current.item.getBoundingClientRect();
            if (r.top < box.top || r.bottom > box.bottom) {
                list.scrollTop += r.top - box.top - box.height / 3;
            }
        }
    };
    var spyTicking = false;
    window.addEventListener("scroll", function () {
        if (!spyTicking) {
            spyTicking = true;
            window.requestAnimationFrame(function () { spyTicking = false; spy(); });
        }
    }, { passive: true });
    spy();
})();
