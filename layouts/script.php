<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="../lib/codemirror.js"></script>
<script src="../addon/scroll/simplescrollbars.js"></script>
<script src="../addon/hint/show-hint.js"></script>
<script src="../addon/hint/anyword-hint.js"></script>
<script src="../addon/display/fullscreen.js"></script>
<script src="../addon/display/panel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>
<script>
    function addDarkmodeWidget() {
        var darkmode = new Darkmode({
            label: '🌓',
        });
        darkmode.showWidget();
    }
    window.addEventListener('load', addDarkmodeWidget);
</script>
<script>
    if ('serviceWorker' in navigator && 'PushManager' in window) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register("../sw.js").then(function(
                registration) {
                // Registration was successful
            }, function(err) {
                // registration failed :(
                console.log('ServiceWorker registration failed: ', err);
            });
        });
    }
</script>