<!DOCTYPE html>

<html lang="en">



<head>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>



    <!-- Google Font: Source Sans Pro -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->

    <link rel="stylesheet" href=<?= base_url("public/admin/plugins/fontawesome-free/css/all.min.css") ?>>



    <link rel="stylesheet" href="<?= base_url('public/') ?>assets/css/boxicons.min.css">



    <!-- overlayScrollbars -->

    <link rel="stylesheet" href=<?= base_url("public/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css") ?>>

    <!-- Theme style -->

    <link rel="stylesheet" href=<?= base_url("public/admin/dist/css/adminlte.min.css") ?>>



    <link rel="stylesheet" href=<?= base_url("public/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css") ?>>

    <link rel="stylesheet" href=<?= base_url("public/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css") ?>>

    <link rel="stylesheet" href=<?= base_url("public/admin/plugins/datatables-buttons/css/buttons.bootstrap4.min.css") ?>>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>



    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.2/dist/css/adminlte.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>




    <script src="<?= base_url("public/admin/ckeditor/ckeditor_4.19.1_basic/ckeditor/ckeditor.js") ?>"></script>

    <link rel="icon" type="image/png" href="<?= base_url('public/web/') ?>fav.png">




</head>



<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

    <div class="wrapper">



        <!-- Navbar -->

        <nav class="main-header navbar navbar-expand navbar-dark">

            <!-- Left navbar links -->

            <ul class="navbar-nav">

                <li class="nav-item">

                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

                </li>



                <li class="nav-item d-none d-sm-inline-block">

                    <a href="<?= base_url('admin') ?>" class="nav-link">Home</a>

                </li>



            </ul>

        </nav>

        <!-- /.navbar -->