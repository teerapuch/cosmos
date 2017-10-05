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
