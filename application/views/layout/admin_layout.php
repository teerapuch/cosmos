<?php echo doctype('html5'); ?>
<html>
    <head>
        <?php
        $meta = array(
            array('name' => 'Content-type', 'content' => 'text/html; charset=utf-8', 'type' => 'equiv'),
            array('name' => 'viewport', 'content' => "width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"),
            array('name' => 'description', 'content' => 'Cosmos Admin')
        );
        echo meta($meta);
        ?>
        <title>Cosmos Admin</title>
        <?php echo css('../node_modules/font-awesome/css/font-awesome.min.css'); ?>
        <?php echo css('../node_modules/simple-line-icons/css/simple-line-icons.css'); ?>

        <!-- Main styles for this application -->
        <?php echo css('style.css'); ?>
        <?php
        if (isset($css)) {
            foreach ($css as $key => $value) {
                echo link_tag(
                    array(
                        'href' => base_url($value),
                        'rel' => 'stylesheet',
                        'type'  => 'text/css')
                );
            }
        }
        ?>
    </head>
    <body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
        <header class="app-header navbar">
            <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">☰</button>

            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <?php
                            $avatar = array(
                                'src' => image_url('avatars/6.jpg'),
                                'class' => 'img-avatar',
                                'alt' => 'avatar',
                                'title' => 'avatar'
                            );
                            echo img($avatar);
                        ?>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i class="fa fa-user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-lock"></i> Logout</a>
                    </div>
                </li>
            </ul>
        </header>

        <div class="app-body">
            <div class="sidebar">
                <nav class="sidebar-nav">
                    <ul class="nav">
                        <li class="nav-item">
                            <?php
                                echo anchor('dashboard','<i class="icon-speedometer"></i> Dashboard <span class="badge badge-primary">NEW</span>');
                            ?>
                        </li>
                        <li class="nav-item">
                            <?php
                                echo anchor('user','<i class="fa fa-users"></i> User');
                            ?>
                        </li>
                    </ul>
                </nav>
                <button class="sidebar-minimizer brand-minimizer" type="button"></button>
            </div>

            <!-- Main content -->
            <main class="main">

                <div class="container-fluid">
                    <div class="animated fadeIn">
                        <?php
                            if(isset($content)) {
                                echo $content;
                            }
                        ?>
                    </div>
                </div>
                <!-- /.conainer-fluid -->
            </main>

        </div>
        <!-- Bootstrap and necessary plugins -->
        <?php echo js('../node_modules/jquery/dist/jquery.min.js'); ?>
        <?php echo js('../node_modules/popper.js/dist/umd/popper.min.js'); ?>
        <?php echo js('../node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>

        <?php echo js('app.js'); ?>
        <?php echo js('admin/layout/layout.js'); ?>
        <?php
        if (isset($js)) {
            foreach ($js as $key => $value) {
                echo '<script src='.base_url($value).' ></script>';
            }
        }
        ?>
    </body>
</html>
