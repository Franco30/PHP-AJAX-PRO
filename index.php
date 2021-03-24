<!DOCTYPE html>
<html lang="en">

<head>
    <title>PHP AJAX PRO</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" type="text/css" id="theme" href="css/theme-brown.css" />
    <link rel="stylesheet" type="text/css" href="assets/sweetalert2.min.css" />

</head>

<body>
    <!-- START PAGE CONTAINER -->
    <div class="page-container page-navigation-top">
        <div class="page-content">
            <!-- START X-NAVIGATION VERTICAL -->
            <ul class="x-navigation x-navigation-horizontal">
                <li class="xn-logo">
                    <a href="index">JF-PHP</a>
                    <a href="#" class="x-navigation-control"></a>
                </li>
            </ul>
            <!-- END X-NAVIGATION VERTICAL -->

            <!-- START BREADCRUMB -->
            <ul class="breadcrumb">
                <li><a href="index">PHP AJAX PRO</a></li>
                <li class="active">CRUD-AJAX</li>
            </ul>
            <!-- END BREADCRUMB -->

            <!-- PAGE CONTENT WRAPPER -->
            <div class="page-content-wrap">

                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title"><strong>USERS</strong></h3>
                                <div class="btn-group pull-right">
                                    <div class="pull-left">
                                        <button id="btn_delete" name="btn_delete" class="btn btn-danger">Delete</button>
                                        <button class="btn btn-primary" data-toggle="modal" data-target="#adduser">Add User</button>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="userTable">
                                    <h4 class="text-center text-primary">Loading...</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- PAGE CONTENT WRAPPER -->
        </div>
    </div>

    <?php require 'modals/adduser.php'?>
    <?php require 'modals/edituser.php' ?>

    <script type="text/javascript" src="js/plugins/jquery/jquery.min.js"></script>

    <!-- scripts for AJAX CRUD-->
    <script type="text/javascript" src="functions/cruduser.js"></script>

    <script type="text/javascript" src="js/plugins/jquery/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/plugins/bootstrap/bootstrap.min.js"></script>
    <script type='text/javascript' src='js/plugins/icheck/icheck.min.js'></script>
    <script type="text/javascript" src="js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
    <script type="text/javascript" src="js/plugins/datatables/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="assets/sweetalert2.min.js"></script>
    <script type="text/javascript" src="js/plugins.js"></script>
    <script type="text/javascript" src="js/actions.js"></script>
</body>

</html>
