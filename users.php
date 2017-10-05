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
                                        <th>Username</th>
                                        <th>Registered</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Vishnu Serghei</td>
                                        <td>2012/01/01</td>
                                        <td>Member</td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td>-</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Zbyněk Phoibos</td>
                                        <td>2012/02/01</td>
                                        <td>Staff</td>
                                        <td>
                                            <span class="badge badge-danger">Banned</span>
                                        </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Einar Randall</td>
                                        <td>2012/02/01</td>
                                        <td>Admin</td>
                                        <td>
                                            <span class="badge badge-secondary">Inactive</span>
                                        </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Félix Troels</td>
                                        <td>2012/03/01</td>
                                        <td>Member</td>
                                        <td>
                                            <span class="badge badge-warning">Pending</span>
                                        </td>
                                        <td> - </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Aulus Agmundr</td>
                                        <td>2012/01/21</td>
                                        <td>Staff</td>
                                        <td>
                                            <span class="badge badge-success">Active</span>
                                        </td>
                                        <td> - </td>
                                    </tr>
                                </tbody>
                            </table>
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
