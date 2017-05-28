<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Administrator Site</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap/css/bootstrap.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/AdminLTE.min.css'); ?>"/>
        <link rel="stylesheet" href="<?php echo base_url('assets/css/skins/_all-skins.min.css'); ?>"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-red layout-top-nav">
        <div class="wrapper">

            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="<?php echo base_url(); ?>" class="navbar-brand"><b>Admin</b>Site</a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-th"></i> One</a></li>
                                <li><a href="#"><i class="fa fa-arrow-up"></i> Two</a></li>
                                <li><a href="#"><i class="fa fa-table"></i> Three</a></li>
                                <!--
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        Dropdown <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Action</a></li>
                                    </ul>
                                </li>
                                -->
                            </ul>
                        </div>
                        <div class="navbar-custom-menu">
                            <ul class="nav navbar-nav">
                                <li class="dropdown user user-menu">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="<?php echo base_url('assets/img/user2-160x160.jpg'); ?>" class="user-image" alt="User Image">
                                        <span class="hidden-xs">Sugeng Hariadi</span>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="user-header">
                                            <img src="<?php echo base_url('assets/img/user2-160x160.jpg'); ?>" class="img-circle" alt="User Image">
                                            <p>
                                                Sugeng Hariadi - Web Developer
                                                <small>Member since Nov. 2014</small>
                                            </p>
                                        </li>
                                        <li class="user-footer">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-default btn-flat"><i class="fa fa-user"></i> Profile</a>
                                            </div>
                                            <div class="pull-right">
                                                <a href="#" class="btn btn-danger btn-flat"><i class="fa fa-sign-out"></i> Sign out</a>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div class="content-wrapper">
                <div class="container">
                    <section class="content-header">
                        <h1><?php echo $TITLE_PAGE; ?></h1>
                        <!--
                        <ol class="breadcrumb">
                            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                            <li><a href="#">Layout</a></li>
                            <li class="active">Top Navigation</li>
                        </ol>
                        -->
                    </section>
                    <section class="content"><?php (isset($THEMES_CONTENT) && !empty($THEMES_CONTENT)) ? $this->load->view($THEMES_CONTENT) : ''; ?></section>
                </div>
            </div>
            <footer class="main-footer">
                <div class="container">
                    <div class="pull-right hidden-xs">
                        <b>Version</b> 2.3.8
                    </div>
                    <strong>
                        Copyright &copy; 2014-2016 
                        <a href="http://sigitt.com">Sigit</a>.
                    </strong> 
                    All rights reserved.
                </div>
            </footer>
        </div>
        <script type="text/javascript" src="<?php echo base_url('assets/bower_components/jQuery/jquery-2.2.3.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bower_components/bootstrap/js/bootstrap.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bower_components/slimScroll/jquery.slimscroll.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bower_components/fastclick/fastclick.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/bower_components/bootbox/bootbox.min.js'); ?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/app.min.js'); ?>"></script>
        <?php (isset($THEMES_FOOTER) && !empty($THEMES_FOOTER)) ? $this->load->view($THEMES_FOOTER) : ''; ?>
    </body>
</html>
