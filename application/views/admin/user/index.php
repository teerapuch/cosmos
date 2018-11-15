<h1>User Index</h1>
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <i class="fa fa-align-justify"></i> User Data
            </div>
            <div class="card-body">
                <table class="table table-bordered table-striped table-sm datatable">
                    <thead>
                        <tr>
                            <th></th>
                            <th>Avatar</th>
                            <th>Email</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Status</th>
                            <th>Level</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        if(isset($user)) {
                            foreach ($user as $key => $u) {
                            ?>
                            <tr>
                                <td><?php echo $i; ?></td>
                                <td><?php echo $u->avatar; ?></td>
                                <td><?php echo $u->email; ?></td>
                                <td><?php echo $u->firstname; ?></td>
                                <td><?php echo $u->lastname; ?></td>
                                <td>
                                    <?php
                                    if($u->status == 1) {
                                        echo '<span class="badge badge-success">Open</span>';
                                    } else {
                                        echo '<span class="badge badge-warning">Close</span>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    if($u->level == 1) {
                                        echo '<span class="badge badge-primary">Admin</span>';
                                    } else {
                                        echo '<span class="badge badge-success">User</span>';
                                    }
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        $edit_bt = array(
                                            'class' => 'btn btn-outline-primary btn-sm'
                                        );
                                        echo anchor('user/form/'.$u->id,'Edit',$edit_bt);
                                        $delete_bt = array(
                                            'class' => 'btn btn-outline-danger btn-sm'
                                        );
                                        echo anchor('user/delete/'.$u->id,'Delete',$delete_bt);
                                    ?>
                                </td>
                            </tr>
                            <?php
                            $i++;
                            }
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!--/.col-->
</div>
