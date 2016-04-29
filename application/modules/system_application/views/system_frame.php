<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ANC Master List</title>
    <link href="<?=asset_url()?>/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>/css/style.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>/css/simple-sidebar.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid full-height">
        <div id="wrapper" class="full-height">

            <!-- Sidebar -->
            <div id="sidebar-wrapper">
                <ul class="sidebar-nav">
                    <li class="sidebar-brand">
                        <a>
                            <img src="<?=asset_url('img/NF Logo.png')?>" width="40">
                        </a>
                    </li>
                    <li>
                        <a class="moduleNavigation active" module_id="1" module_name="delegate_list" module_link="delegate_list" ><i class="fa fa-users" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a class="moduleNavigation" module_id="2" module_name="user_management" module_link="user_management" ><i class="fa fa-user-plus" aria-hidden="true"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /#sidebar-wrapper -->

            <!-- Page Content -->
            <div id="page-content-wrapper" class="full-height">
                <div class="container-fluid full-height">
                    <div class="row full-height">
                        <div class="col-md-12 ml-container-top">
                            <div class="col-md-2 col-xs-2">
                                <a id="menu-toggle">
                                    <i class="fa fa-bars" aria-hidden="true"></i>
                                </a>
                            </div>
                            <div class="col-md-3 col-xs-8">
                                <input id="systemNameSearch" class="form-control input-sm ml-search" type="text" placeholder="Search...">
                            </div>
                            <div class="col-md-7 col-xs-2">
                                <a id="logout" href="#">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                </a>
                                <span class="ml-profile-separator">|</span>
                                <span class="ml-profile-name">Admin</span>
                                <img data-name="Admin" class="ml-profile-initial" width="35" />
                            </div>
                        </div>
                        <div   id="moduleContainer" class="full-height">
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->

        </div>
        <!-- /#wrapper -->

        <script type="text/javascript" src="<?=asset_url()?>/js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>/js/custom.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>/js/initial.min.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>/js/jquery.form.min.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>/js/scrollTo.js"></script>
</body>

</html>
