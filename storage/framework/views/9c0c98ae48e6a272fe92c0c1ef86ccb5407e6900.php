<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo e(isset($page_title) ? $page_title : "TODS SYSTEM"); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo e(asset("/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css")); ?>" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?php echo e(asset("/bower_components/AdminLTE/dist/css/AdminLTE.min.css")); ?>" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
    -->
    <!-- DataTables -->
    <link rel="stylesheet" href="/bower_components/AdminLTE/plugins/datatables/dataTables.bootstrap.css">
    <link href="<?php echo e(asset("/bower_components/AdminLTE/dist/css/skins/skin-blue.min.css")); ?>" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body class="skin-blue">
<div class="wrapper">

    <!-- Header -->
<?php echo $__env->make('layouts.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Sidebar -->
<?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                <?php echo e(isset($page_title) ? $page_title : "Tools Ordering & Distribution System"); ?>

                <small><?php echo e(isset($page_description) ? $page_description : null); ?></small>
            </h1>
            <!-- You can dynamically generate breadcrumbs here -->
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i>Home</a></li>
                <li class="active">Here</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Your Page Content Here -->
            <?php echo $__env->yieldContent('content'); ?>
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    <!-- Footer -->
    <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

</div><!-- ./wrapper -->
<?php /*<!-- jQuery 2.2.3 -->*/ ?>
<?php /*<script src="/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js"></script>*/ ?>
<?php /*<!-- Bootstrap 3.3.6 -->*/ ?>
<?php /*<script src="/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js"></script>*/ ?>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience -->
</body>
</html>
