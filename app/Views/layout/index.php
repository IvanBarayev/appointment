<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Appointment System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4@5.1.2/build/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/icheck-bootstrap@3.0.1/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css">
    <link rel="stylesheet" href="/public/assets/dist/css/adminlte.min.css">
    <!--<link rel="stylesheet" href="/public/assets/dist/css/adminlte.min.css">-->
    <link rel="stylesheet" href="/public/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/daterangepicker@3.0.5/daterangepicker.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.3.0/css/flag-icon.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <?= $this->include('layout/top'); ?>
    <?= $this->include('layout/leftmenu'); ?>
    <div class="content-wrapper">
        <nav class="navbar navbar-expand navbar-primary navbar-dark pr-1">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link"><?= $title ?></a>
                </li>
            </ul>
            <form class="form-inline ml-3 mr-5">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" name="dtsearch" id="dtsearch" type="search" placeholder="Ara" aria-label="Ara">
                    <div class="input-group-append">
                        <button class="btn btn-navbar" type="submit">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </form>
            <?= $this->renderSection('linemenu'); ?>
            <?= $this->renderSection('ddownmenu'); ?>
        </nav>
        <section class="content">
            <div class="container-fluid">
                <?= $this->renderSection('content'); ?>
            </div>
        </section>
    </div>
    <?/*= $this->include('layout/footer'); */?>
    <?= $this->include('layout/controlsidebar'); ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-ui-dist@1.12.1/jquery-ui.min.js"></script>
<script>$.widget.bridge('uibutton', $.ui.button)</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/jquery-knob@1.2.11/dist/jquery.knob.min.js"></script>
<script src="/public/assets/plugins/moment/moment.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/daterangepicker@3.0.5/daterangepicker.js"></script>
<script src="https://cdn.jsdelivr.net/npm/tempusdominus-bootstrap-4@5.1.2/build/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote-bs4.min.js"></script>
<script src="/public/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<script src="/public/assets/dist/js/adminlte.js"></script>
<script src="/public/assets/dist/js/pages/dashboard.js"></script>
<script src="/public/assets/dist/js/demo.js"></script>
<!--<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.21/af-2.3.5/b-1.6.2/b-colvis-1.6.2/b-flash-1.6.2/b-html5-1.6.2/b-print-1.6.2/cr-1.5.2/r-2.2.5/sl-1.3.1/datatables.min.js"></script>-->

<?php if(strstr($_SERVER['REQUEST_URI'], "list")) { ?>
<script src="/public/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/public/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/public/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/public/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<?php } ?>
<?= $this->renderSection('plugins'); ?>

<script>
    $(function () {
        var table = $("#DTable").DataTable({
            "responsive"  : true,
            "autoWidth"   : false,
            "searching"   : true,
            "lengthChange": false,
            "info"        : true,
            "pageLength"  : 20,
            "processing"  : true,
            "serverSide"  : true,
            "ajax"        : {
                "url" : "https://api.beautysoft.ml/cus/list",
                "type": "POST"
            }
        });
        $('#dtsearch').on('keyup', function () {
            table.search(this.value).draw();
        });
        $('#example2').DataTable({
            "paging"      : true,
            "lengthChange": false,
            "searching"   : false,
            "ordering"    : true,
            "info"        : true,
            "autoWidth"   : false,
            "responsive"  : true,
        });
    });
</script>

</body>
</html>
