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
                        <a class="active"><i class="fa fa-users" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a><i class="fa fa-user-plus" aria-hidden="true"></i></a>
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
                                <input class="form-control input-sm ml-search" type="text" placeholder="Search...">
                            </div>
                            <div class="col-md-7 col-xs-2">
                                <a id="logout">
                                    <i class="fa fa-sign-out" aria-hidden="true"></i>
                                </a>
                                <span class="ml-profile-separator">|</span>
                                <span class="ml-profile-name">Admin</span>
                                <img data-name="Admin" class="ml-profile-initial" width="35" />
                            </div>
                        </div>
                        <div class="col-md-12 ml-container-bottom">
                            <div class="col-md-2 ml-list-controls">
                                <ul class="list-group">
                                    <li class="list-group-item">
                                        <span class="badge">14</span> Registered
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge">2</span> Paid
                                    </li>
                                    <li class="list-group-item">
                                        <span class="badge">1</span> Pending
                                    </li>
                                </ul>
                                <hr>
                                <div class="form-group">
                                    <label>Group by</label>
                                    <select class="form-control">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-10 ml-list">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th width="20px">
                                                <input type="checkbox">
                                            </th>
                                            <th width="20px"></th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th class="center-align">Local Chapter</th>
                                            <th class="center-align">Date Registered</th>
                                            <th class="center-align">Registration No.</th>
                                            <th class="center-align">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <th> <img data-name="Mark" class="ml-name-initial" /> </th>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td class="center-align">USC</td>
                                            <td class="center-align">4/3/2016</td>
                                            <td class="center-align">1030123</td>
                                            <td class="center-align">
                                                <span class="label label-success">Success</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <th> <img data-name="Jacob" class="ml-name-initial" /> </th>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td class="center-align">CDU</td>
                                            <td class="center-align">4/15/2016</td>
                                            <td class="center-align">54126</td>
                                            <td class="center-align">
                                                <span class="label label-warning">Warning</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <th> <img data-name="Larry" class="ml-name-initial" /> </th>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td class="center-align">UC</td>
                                            <td class="center-align">4/27/2016</td>
                                            <td class="center-align">125538</td>
                                            <td class="center-align">
                                                <span class="label label-danger">Danger</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="checkbox">
                                            </td>
                                            <th> <img data-name="John" class="ml-name-initial" /> </th>
                                            <td>John</td>
                                            <td>Doe</td>
                                            <td class="center-align">CTU</td>
                                            <td class="center-align">5/1/2016</td>
                                            <td class="center-align">31235</td>
                                            <td class="center-align">
                                                <span class="label label-info">Info</span>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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
</body>

</html>
