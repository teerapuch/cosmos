<!DOCTYPE html>
<html lang="en">
<?php
include 'config.php';
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="COSMOS is a PHP Admin Package that include User management, Media manager, and more">
    <meta name="author" content="Teerapuch Kassakul">
    <meta name="keyword" content="Bootstrap,Admin,Template,PHP, jQuery,CSS,HTML,Dashboard">
    <link rel="shortcut icon" href="assets/img/favicona.png">
    <title>COSMOS is a PHP Admin Package</title>

    <!-- Icons -->
    <link href="<?php echo $base_url; ?>/assets/node_modules/simple-line-icons/css/simple-line-icons.css"
    rel="stylesheet">

    <!-- Main styles for this application -->
    <link href="<?php echo $base_url; ?>/assets/css/style.css" rel="stylesheet">
</head>
<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
    <header class="app-header navbar">
        <button class="navbar-toggler mobile-sidebar-toggler d-lg-none mr-auto" type="button">☰</button>
        <a class="navbar-brand" href="#"></a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button">☰</button>

        <ul class="nav navbar-nav d-md-down-none">
            <li class="nav-item px-3">
                PHP Administrator Package
            </li>
        </ul>
        <ul class="nav navbar-nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <img src="assets/img/avatars/6.jpg" class="img-avatar" alt="admin@getcosmos.com">
                    <span class="d-md-down-none">admin</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Settings</strong>
                    </div>
                    <a class="dropdown-item" href="#"><i class="icon-picture"></i> Avatar</a>
                    <a class="dropdown-item" href="#"><i class="icon-user"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="icon-power"></i> Logout</a>
                </div>
            </li>
        </ul>
    </header>
