<?php
include "header.php";
include "sidebar.php";
?>
<!-- Main content -->
<main class="main">

    <!-- Breadcrumb -->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item active">Users</li>
    </ol>

    <div class="container-fluid">
        <div class="animated fadeIn">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <i class="fa fa-align-justify"></i> Users Management
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-sm">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"
                                for="firstname">
                                    Firstname
                                </label>
                                <div class="col-md-9">
                                    <input type="text" id="firstname"
                                    name="firstname" class="form-control"
                                    placeholder="Firstname">
                                </div><!-- /.col-md-9 -->
                            </div><!-- /.form-group -->
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"
                                for="lastname">
                                    Lastname
                                </label>
                                <div class="col-md-9">
                                    <input type="text" id="lastname"
                                    name="lastname" class="form-control"
                                    placeholder="Lastname">
                                </div><!-- /.col-md-9 -->
                            </div><!-- /.form-group -->
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"
                                for="email">
                                    Email
                                </label>
                                <div class="col-md-9">
                                    <input type="email" name="email" id="email"
                                    class="form-control"
                                    placeholder="mail@domain.com">
                                </div>
                            </div><!-- /.form-group -->
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"
                                for="password">
                                    Password
                                </label>
                                <div class="col-md-9">
                                    <input type="password" id="password"
                                    name="password" class="form-control"
                                    placeholder="Password">
                                </div><!-- /.col-md-9 -->
                            </div><!-- /.form-group -->
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"
                                for="cfpassword">
                                    Confirm Password
                                </label>
                                <div class="col-md-9">
                                    <input type="password" id="cfpassword"
                                    name="cfpassword" class="form-control"
                                    placeholder="Confirm Password">
                                </div><!-- /.col-md-9 -->
                            </div><!-- /.form-group -->
                            <div class="form-group row">
                                <label class="col-md-3 form-control-label"
                                for="role">
                                    Role
                                </label>
                                <div class="col-md-9">
                                    <select class="form-control" name="role">
                                        <option value="">-- Select option --</option>
                                        <option value="1">Admin</option>
                                        <option value="2">User</option>
                                    </select>
                                </div>
                            </div><!-- /.form-group -->
                            <div class="form-group row">
                                <div class="col-md-3">
                                    <input type="submit"
                                    class="btn btn-primary"
                                    value="Save">
                                </div><!-- /.col-md-9 -->
                            </div><!-- /.form-group -->
                        </div><!-- /.card-body -->
                    </div><!-- /.card -->
                </div><!--/.col-lg-12-->
            </div><!--/.row-->
        </div><!--/.animated fadeIn-->
    </div><!-- /.conainer-fluid -->
</main>

<?php
include "footer.php";
?>
