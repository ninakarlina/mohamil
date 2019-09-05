<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>MH | Monitoring Kehamilan</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <script type="text/javascript" src="<?=base_url()?>assets/ckeditor/ckeditor.js"></script>
 <!-- Bootstrap 3.3.2 -->
    <link href="<?php echo base_url(); ?>assetss/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- FontAwesome 4.3.0 -->
    <link href="<?php echo base_url(); ?>assetss/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />  
    <link href="<?php echo base_url(); ?>assetss/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
	<!-- DATA TABLES
    <link href="assetss/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    Datepicker -->
    <link href="<?php echo base_url(); ?>assetss/plugins/datepicker/datepicker.min.css" rel="stylesheet" type="text/css" />
    <!-- Chosen Select -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assetss/plugins/chosen/css/chosen.min.css" />
    <!-- Morris charts -->
    <link href="<?php echo base_url(); ?>assetss/plugins/morris/morris.css" rel="stylesheet" type="text/css" />
	<!-- Theme style -->
    <link href="<?php echo base_url(); ?>assetss/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
    <link href="<?php echo base_url(); ?>assetss/css/skins/skin-blue.min.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="<?php echo base_url(); ?>assetss/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assetss/css/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assetss/datatables/buttons-1.5.6/css/buttons.dataTables.min.css">
    <script src="<?php echo base_url(); ?>assetss/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?php echo base_url(); ?>assetss/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assetss/js/adminlte.js" type="text/javascript"></script>    
    <!-- Fungsi untuk membatasi karakter yang diinputkan -->
    <script language="javascript">
      function getkey(e)
      {
        if (window.event)
          return window.event.keyCode;
        else if (e)
          return e.which;
        else
          return null;
      }

      function goodchars(e, goods, field)
      {
        var key, keychar;
        key = getkey(e);
        if (key == null) return true;
       
        keychar = String.fromCharCode(key);
        keychar = keychar.toLowerCase();
        goods = goods.toLowerCase();
       
        // check goodkeys
        if (goods.indexOf(keychar) != -1)
            return true;
        // control keys
        if ( key==null || key==0 || key==8 || key==9 || key==27 )
          return true;
          
        if (key == 13) {
          var i;
          for (i = 0; i < field.form.elements.length; i++)
            if (field == field.form.elements[i])
              break;
          i = (i + 1) % field.form.elements.length;
          field.form.elements[i].focus();
          return false;
        };
        // else return false
        return false;
      }
    </script>

 </head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>M</b>H</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Mo</b>Hamil</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a> 
      
    </nav>
  </header>

  <!-- Left side column. contains the sidebar -->
  
   <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/dist/img/user2-128x128.jpg" class="img-circle" alt="User Image">
        </div>
          <div class="pull-left info">
            <p>Admin</p>
           
          </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
       
      </form>
      <!-- /.search form --> 
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
       
        <li>
          <a href="<?php echo site_url('C_User');?>">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
         
        </li>
       
        <li>
          <a href="<?php echo site_url('C_detil_bidann');?> ">
            <i class="fa fa-user"></i> <span>Bidan</span>
          </a>
        </li>
        <li>
          <a href="<?php echo site_url('C_detil_ibu');?> ">
            <i class="fa fa-user"></i> <span>Ibu</span>
          </a>
         
        </li>
         <li>
          <a href="<?php echo site_url('C_Tema');?> ">
            <i class="fa fa-edit"></i> <span>Tema Artikel</span>
          </a>
        </li>
         <li>
          <a href="<?php echo site_url('C_Tema/list_artikel');?> ">
            <i class="fa fa-edit"></i> <span>Artikel</span>
          </a>
        </li>
         <li>
          <a href="<?php echo site_url('C_Login/logout');?> ">
            <i class="fa fa-sign-out"></i> <span>Logout</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->

  </aside>


</section> 

