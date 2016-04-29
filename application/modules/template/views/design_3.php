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

                                <div class="panel panel-success ml-qsno">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Now Serving</h3>
                                    </div>
                                    <div class="panel-body">
                                        <h2 style="margin: 0;">3</h2>
                                        <br>
                                        <a href="#" class="btn btn-primary">Next</a></div>
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
                                        <tr data-toggle="modal" data-target=".ml-modal">
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
                                        <tr data-toggle="modal" data-target=".ml-modal">
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
                                        <tr data-toggle="modal" data-target=".ml-modal">
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
                                        <tr data-toggle="modal" data-target=".ml-modal">
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
        <div class="modal fade ml-modal" tabindex="-1" role="dialog" aria-labelledby="Information">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Complete Information</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6" style="text-align:center">
                                <a class="btn btn-success">Confirm Payment</a>
                                <br>
                                <br>
                                <p>John Doe</p>
                                <p>USC</p>
                                <p>Region X</p>
                            </div>
                            <div class="col-md-6">
                                <img src="<?=asset_url()?>img/receipt.jpg" height="250" alt="No scanned copy of deposit slip uploaded.">
                            </div>
                            <!--
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <div class="form-inline">
                                        <input class="form-control reg-input-inline" type="text" placeholder="First Name">
                                        <input class="form-control reg-input-inline" type="text" placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Position</label>
                                    <select class="form-control" id="select">
                                        <option selected disabled>None</option>
                                        <option>Local Chapter Adviser</option>
                                        <option>Local Chapter Faculty (Dean, Chairman)</option>
                                        <option>Local Chapter Officer (President, Vice President)</option>
                                        <option>Local Chapter Representative</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Contact Number</label>
                                    <input class="form-control" type="text" placeholder="Cell No. or Tel. No.">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Complete Address</label>
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Email Address</label>
                                    <input type="text" class="form-control" placeholder="name@email.com">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">T-shirt Size</label>
                                    <select class="form-control" id="select">
                                        <option selected disabled>None</option>
                                        <option>XS</option>
                                        <option>S</option>
                                        <option>M</option>
                                        <option>L</option>
                                        <option>XL</option>
                                        <option>XXL</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <img src="<?=asset_url()?>img/identification_card.png" height="250">
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Local Chapter (School/University)</label>
                                    <input type="text" class="form-control" placeholder="School/University" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Local Chapter Address</label>
                                    <input type="text" class="form-control" placeholder="Address" disabled>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="control-label">Region</label>
                                    <select class="form-control" id="select" disabled>
                                        <option selected disabled>None</option>
                                        <option>Region 1</option>
                                        <option>Region 2</option>
                                        <option>Region 3</option>
                                        <option>Region 4-A</option>
                                        <option>Region 4-B</option>
                                        <option>Region 5</option>
                                        <option>Region 6</option>
                                        <option>Region 7</option>
                                        <option>Region 8</option>
                                        <option>Region 9</option>
                                        <option>Region 10</option>
                                        <option>Region 11</option>
                                        <option>Region 12</option>
                                        <option>NCR</option>
                                        <option>CAR</option>
                                        <option>ARMM</option>
                                        <option>NIR</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Events Participating In (Limit of 2 Academic, 2 Non-Academic Events)</label>
                                    <label class="control-label">Non-Academic Events</label>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> Battle of the Bands
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> Debate
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> Siniratura
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> That's My Bae
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> REO Showoff
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> JPIAN Idol
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> Kalokalike
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> CineJPIA
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <label class="control-label">Academic Events</label>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> Cup 1 - Basic Accounting
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> Cup 2 - Financial Accounting and Reporting
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> Cup 3 - Advanced Financial Accounting and Reporting
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> Cup 4 - Management Accounting and Control
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> Cup 5 - Auditing
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> Cup 6 - Regulatory Framework for Business Transactions
                                        </label>
                                    </div>
                                    <div class="checkbox reg-checkbox">
                                        <label>
                                            <input type="checkbox"> Cup 7 - Taxation Case Study
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
-->
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>

            <script type="text/javascript" src="<?=asset_url()?>/js/jquery-1.12.0.min.js"></script>
            <script type="text/javascript" src="<?=asset_url()?>/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="<?=asset_url()?>/js/custom.js"></script>
            <script type="text/javascript" src="<?=asset_url()?>/js/initial.min.js"></script>
</body>

</html>
