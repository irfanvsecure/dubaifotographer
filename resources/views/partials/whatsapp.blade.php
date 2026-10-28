{{-- WhatsApp chat button. Its scripts (whatsapp.js, then whatsapp-init.js) load on the visitor's first
     scroll, touch, mouse move or key press, so they stay off the first page load.
     SiteRenderer turns the data-*src URLs into the .min?v= files like any script src. --}}
<div id="wa" data-src="%%BASE%%/assets/js/whatsapp.js" data-init-src="%%BASE%%/assets/js/whatsapp-init.js"></div>
<script>
    (function () {
        var box = document.getElementById("wa");
        var events = ["scroll", "pointerdown", "pointermove", "touchstart", "keydown"];
        function load() {
            events.forEach(function (name) { window.removeEventListener(name, load); });
            var lib = document.createElement("script");
            lib.src = box.getAttribute("data-src");
            lib.onload = function () {
                var init = document.createElement("script");
                init.src = box.getAttribute("data-init-src");
                document.body.appendChild(init);
            };
            document.body.appendChild(lib);
        }
        events.forEach(function (name) { window.addEventListener(name, load, { once: true, passive: true }); });
    })();
</script>
