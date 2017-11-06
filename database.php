<?php
include "header.php";
include "sidebar.php";
?>
<!-- Main content -->
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Database</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">

            <h1>Hello Database</h1>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Database Management
                        </div>
                        <div class="card-body">
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">
                                    Database
                                </label>
                                <div class="col-md-9">
                                    <input type="text" id="database" name="text-input" class="form-control" placeholder="Database name">
                                </div><!-- /.col-md-9 -->
                            </div><!-- /.form-group -->
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">
                                    Username
                                </label>
                                <div class="col-md-9">
                                    <input type="text" id="username" name="username" class="form-control" placeholder="Username">
                                </div><!-- /.col-md-9 -->
                            </div><!-- /.form-group -->
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label" for="text-input">
                                    Password
                                </label>
                                <div class="col-md-9">
                                    <input type="password" id="password" name="password" class="form-control" placeholder="Password">
                                </div><!-- /.col-md-9 -->
                            </div><!-- /.form-group -->
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!--/.col-lg-12-->
            </div><!--/.row-->

        </div><!-- /.animated fadeIn -->
    </div><!-- /.conainer-fluid -->

</main>

<?php
include "footer.php";
echo js("form.js");
?>
