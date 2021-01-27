<?php

$lists = [
    'C#'  => 1,
    'VB.NET'  => 2,
    'F#'  => 3,
    'Java'  => 4,
    'Python'  => 5,
    'C (gcc)'  => 6,
    'C++ (gcc)'  => 7,
    'Php'  => 8,
    'Pascal'  => 9,
    'Objective-C'  => 10,
    'Haskell'  => 11,
    'Ruby'  => 12,
    'Perl'  => 13,
    'Lua'  => 14,
    'Nasm'  => 15,
    'Sql Server'  => 16,
    'Javascript'  => 17,
    'Lisp'  => 18,
    'Prolog'  => 19,
    'Go'  => 20,
    'Scala'  => 21,
    'Scheme'  => 22,
    'Node.js'  => 23,
    'Python 3'  => 24,
    'Octave'  => 25,
    'C (clang)'  => 26,
    'C++ (clang)'  => 27,
    'C++ (vc++)'  => 28,
    'C (vc)'  => 29,
    'D'  => 30,
    'R'  => 31,
    'Tcl'  => 32,
    'MySQL'  => 33,
    'PostgreSQL'  => 34,
    'Oracle'  => 35,
    'Swift'  => 37,
    'Bash'  => 38,
    'Ada'  => 39,
    'Erlang'  => 40,
    'Elixir'  => 41,
    'Ocaml'  => 42,
    'Kotlin'  => 43,
    'Brainf***'  => 44,
    'Fortran'  => 45,
    'Rust'  => 46,
    'Clojure'  => 47,
];

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/fullpage.css">

    <style>
        body {
            font-family: 'Poppins',
                sans-serif;
        }
    </style>

    <title>Barra Lab</title>
</head>

<body>

    <div id="fullpage">
        <div class="section active bg-warning" data-anchor='home'>
            <div class="container text-center">
                <h1>Welcome to Barra Lab</h1>
                <p>Kamu bisa menjalankan kode program secara online</p>
                <a class="btn btn-primary px-4 py-2" href="index.php#list">Lihat sekarang!</a>
            </div>
        </div>
        <div class="section bg-info" data-anchor='list'>
            <div class="container text-center text-white">
                <h1>List Code Editor</h1>
                <p></p>
                <a class="btn btn-warning px-4 py-2" href="php/#ambiance">PHP</a>
                <a class="btn btn-warning px-4 py-2" href="python/#ambiance">Python 3</a>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="src/fullpage.js"></script>
    <script>
        $(document).ready(function() {
            $('#fullpage').fullpage({
                anchors: ['home', 'list']
            });
        });
    </script>
</body>

</html>