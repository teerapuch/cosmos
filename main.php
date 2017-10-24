<?php
include "header.php";
include "sidebar.php";
?>
<!-- Main content -->
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <h1>Hello COSMOS</h1>
            <div class="row">
                <div class="col-sm-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            Welcome
                        </div>
                        <div class="card-body">
                            Welcome to the Cosmos version 0.1 this is a PHP Admin Package to start project web application ready for Connect Database And Management User and create page for your infomation and management all media in site yesss... and you can send to all user with messages management.
                        </div>
                    </div>
                </div><!-- /.card -->
            </div> <!-- /.row -->
            <?php
            $msc = microtime(true);
            $data = $database->select('user_tbl', '*');
            $msc = number_format(microtime(true)-$msc,5);
            var_dump($data);
            echo 'Time to query '.$msc . ' seconds';
            ?>
        </div>
    </div><!-- /.animated fadeIn -->
    <!-- /.conainer-fluid -->
</main>

<?php
include "footer.php";
?>
