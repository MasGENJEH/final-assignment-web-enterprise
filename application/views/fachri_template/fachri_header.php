<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Dashboard</title>



    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url('assets/templates')?>/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="<?= base_url('assets/templates')?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?= base_url('assets/templates')?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="<?= base_url('assets/templates')?>/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url('assets/templates')?>/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="<?= base_url('assets/templates')?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url('assets/templates')?>/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="<?= base_url('assets/templates')?>/plugins/summernote/summernote-bs4.min.css">
    

    <script language="javascript" src="<?= base_url('assets/templates')?>/plugins/jquery/jquery.min.js"></script>
    <script language="javascript">
    $(document).ready(function() {
        $("#button1").click(function() {
            alert("hello button 1!");
        });
        $("#button2").click(function() {
            alert("hello button 2!");
        });
        $("#txtbox").click(function() {
            alert("hello txtbox");
        });

        $(".btn-dnager").click(function() {
            alert("id button1!");
        });
        $(".btn-success").click(function() {
            alert("id button 2!");
        });
        $(".btn-muted").click(function() {
            alert("id button 3!");
        });
        $(".danger").click(function() {
            alert("id txtbox");
        });

        $("#judul").addClass("merahkuning");
        $(".sub1").addClass("kuninghitam");
    });
    </script>
    <style type="text/css">
    .merahkuning {
        color: red;
        font-weight: bold;
        padding: 3px;
    }

    .kuninghitam {
        color: yellow;
        background-color: black;
        padding: 10px;
    }
    </style>
</head>