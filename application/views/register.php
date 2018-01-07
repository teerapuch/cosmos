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
        <title>Cosmos Admin Register Page</title>
        <?php echo css('../node_modules/font-awesome/css/font-awesome.min.css'); ?>
        <?php echo css('../node_modules/simple-line-icons/css/simple-line-icons.css'); ?>

        <!-- Main styles for this application -->
        <?php echo css('style.css'); ?>
    </head>
    <body class="app flex-row align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card mx-4">
                        <div class="card-body p-4">
                            <h1>Register</h1>
                            <p class="text-muted">Create your account</p>

                            <div class="input-group mb-3">
                                <span class="input-group-addon">@</span>
                                <input type="text" class="form-control" placeholder="Email">
                            </div>

                            <div class="input-group mb-3">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="Password">
                            </div>

                            <div class="input-group mb-4">
                                <span class="input-group-addon"><i class="icon-lock"></i>
                                </span>
                                <input type="password" class="form-control" placeholder="Repeat password">
                            </div>

                            <button type="button" class="btn btn-block btn-success">Create Account</button>
                        </div>
                        <div class="card-footer p-4">
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-block btn-facebook" type="button">
                                        <span>facebook</span>
                                    </button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-block btn-twitter" type="button">
                                        <span>twitter</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap and necessary plugins -->
        <?php echo js('../node_modules/jquery/dist/jquery.min.js'); ?>
        <?php echo js('../node_modules/popper.js/dist/umd/popper.min.js'); ?>
        <?php echo js('../node_modules/bootstrap/dist/js/bootstrap.min.js'); ?>
    </body>
</html>
