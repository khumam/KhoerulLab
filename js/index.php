<?php include('../layouts/head.php'); ?>

<div class="container">
    <h1 class="text-center mb-5 mt-mobile">Welcome to Javascript Area!</h1>
    <?php include('../layouts/selectTheme.php') ?>
    <div class="row d-flex justify-content-center">
        <div class="col-md-3">
            <div class="form-group">
                <button id="run" class="btn btn-primary btn-block">Run</button>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 padding">
            <div class="form-group">
                <div>
                    <div id="panel-4" class="panel top"><span>Code Editor</span></div>
                </div>
                <textarea id="code" class="form-control" rows="10"></textarea>
            </div>
        </div>
        <div class="col-md-6 padding">
            <div class="form-group">
                <div class="form-group">
                    <div>
                        <div id="panel-4" class="panel top"><span>Code Editor</span></div>
                    </div>
                    <textarea id="result" class="form-control readonly" rows="10" readonly>Jalankan dengan mengklik tombol Run.&#13;&#10;Hasilnya akan tampil di sini</textarea>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../layouts/script.php') ?>
<?php include('../layouts/js/js.php') ?>

</body>

</html>