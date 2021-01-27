<script src="../addon/edit/matchbrackets.js"></script>
<script src="../mode/htmlmixed/htmlmixed.js"></script>
<script src="../mode/xml/xml.js"></script>
<script src="../mode/javascript/javascript.js"></script>
<script src="../mode/css/css.js"></script>
<script src="../mode/clike/clike.js"></script>
<script src="../mode/php/php.js"></script>

<script>
    var editor = CodeMirror.fromTextArea(document.getElementById("code"), {
        lineNumbers: true,
        styleActiveLine: true,
        matchBrackets: true,
        mode: "application/x-httpd-php",
        indentUnit: 4,
        indentWithTabs: true,
        scrollbarStyle: "simple",
        extraKeys: {
            "F11": function(cm) {
                cm.setOption("fullScreen", !cm.getOption("fullScreen"));
            },
            "Esc": function(cm) {
                if (cm.getOption("fullScreen")) cm.setOption("fullScreen", false);
            },
            "Ctrl-Enter": function(cm) {
                run();
            },
            "Ctrl-Space": function(cm) {
                cm.showHint({
                    hint: CodeMirror.hint.anyword
                });
            }
        }
    });

    editor.setSize(null, 450);

    var result = CodeMirror.fromTextArea(document.getElementById("result"), {
        styleActiveLine: true,
        readOnly: true,
        scrollbarStyle: "simple"
    });

    result.setSize(null, 450);

    var input = document.getElementById("select");

    function selectTheme() {
        var theme = input.options[input.selectedIndex].textContent;
        editor.setOption("theme", theme);
        result.setOption("theme", theme);
        location.hash = "#" + theme;
    }
    var choice = (location.hash && location.hash.slice(1)) ||
        (document.location.search &&
            decodeURIComponent(document.location.search.slice(1)));
    if (choice) {
        input.value = choice;
        editor.setOption("theme", choice);
        result.setOption("theme", choice);
    }
    CodeMirror.on(window, "hashchange", function() {
        var theme = location.hash.slice(1);
        if (theme) {
            input.value = theme;
            selectTheme();
        }
    });

    $(document).ready(function() {
        $("#run").click(function() {
            run();
        });
    });

    function run() {
        var to_compile = {
            "LanguageChoice": '8',
            "Program": editor.getValue(),
            "Input": "",
            "CompilerArgs": ""
        };

        $.ajax({
            url: "https://rextester.com/rundotnet/api",
            type: "POST",
            data: to_compile
        }).done(function(data) {

            var resultCode = '';

            if (data.Errors != null) {
                resultCode += data.Errors
            } else {
                resultCode += data.Result;
            }

            resultCode += "\n\n" + data.Stats.replaceAll(', ', "\n");
            result.getDoc().setValue(resultCode);

        }).fail(function(data, err) {
            result.getDoc().setValue("fail " + JSON.stringify(data) + " " + JSON.stringify(err));
        });
    }
</script>