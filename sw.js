var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    '/',
    'src/fullpage.css',
    "icon/apple-icon-57x57.png",
    "icon/apple-icon-60x60.png",
    "icon/apple-icon-72x72.png",
    "icon/apple-icon-76x76.png",
    "icon/apple-icon-114x114.png",
    "icon/apple-icon-120x120.png",
    "icon/apple-icon-144x144.png",
    "icon/apple-icon-152x152.png",
    "icon/apple-icon-180x180.png",
    "icon/android-icon-192x192.png",
    "icon/favicon-32x32.png",
    "icon/favicon-96x96.png",
    "icon/favicon-16x16.png",
    "icon/ms-icon-144x144.png",
    "lib/codemirror.css",
    "theme/3024-day.css",
    "theme/3024-night.css",
    "theme/abcdef.css",
    "theme/ambiance.css",
    "theme/ayu-dark.css",
    "theme/ayu-mirage.css",
    "theme/base16-dark.css",
    "theme/bespin.css",
    "theme/base16-light.css",
    "theme/blackboard.css",
    "theme/cobalt.css",
    "theme/colorforth.css",
    "theme/dracula.css",
    "theme/duotone-dark.css",
    "theme/duotone-light.css",
    "theme/eclipse.css",
    "theme/elegant.css",
    "theme/erlang-dark.css",
    "theme/gruvbox-dark.css",
    "theme/hopscotch.css",
    "theme/icecoder.css",
    "theme/isotope.css",
    "theme/lesser-dark.css",
    "theme/liquibyte.css",
    "theme/lucario.css",
    "theme/material.css",
    "theme/material-darker.css",
    "theme/material-palenight.css",
    "theme/material-ocean.css",
    "theme/mbo.css",
    "theme/mdn-like.css",
    "theme/midnight.css",
    "theme/monokai.css",
    "theme/moxer.css",
    "theme/neat.css",
    "theme/neo.css",
    "theme/night.css",
    "theme/nord.css",
    "theme/oceanic-next.css",
    "theme/panda-syntax.css",
    "theme/paraiso-dark.css",
    "theme/paraiso-light.css",
    "theme/pastel-on-dark.css",
    "theme/railscasts.css",
    "theme/rubyblue.css",
    "theme/seti.css",
    "theme/shadowfox.css",
    "theme/solarized.css",
    "theme/the-matrix.css",
    "theme/tomorrow-night-bright.css",
    "theme/tomorrow-night-eighties.css",
    "theme/ttcn.css",
    "theme/twilight.css",
    "theme/vibrant-ink.css",
    "theme/xq-dark.css",
    "theme/xq-light.css",
    "theme/yeti.css",
    "theme/idea.css",
    "theme/darcula.css",
    "theme/yonce.css",
    "theme/zenburn.css",
    "addon/scroll/simplescrollbars.css",
    "addon/display/fullscreen.css",
    "addon/hint/show-hint.css",
    "addon/edit/matchbrackets.js",
    "mode/htmlmixed/htmlmixed.js",
    "mode/xml/xml.js",
    "mode/javascript/javascript.js",
    "mode/css/css.js",
    "mode/clike/clike.js",
    "mode/php/php.js",
    "mode/python/python.js",
    "lib/codemirror.js",
    "addon/scroll/simplescrollbars.js",
    "addon/hint/show-hint.js",
    "addon/hint/anyword-hint.js",
    "addon/display/fullscreen.js",
    "addon/display/panel.js",
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
        .then(cache => {
            return cache.addAll(filesToCache);
        })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                .filter(cacheName => (cacheName.startsWith("pwa-")))
                .filter(cacheName => (cacheName !== staticCacheName))
                .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", function (event) {

});
