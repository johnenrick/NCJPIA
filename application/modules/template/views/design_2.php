<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ANC Login</title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid full-height">
        <div class="row full-height" id="portal-con">
            <div class="modal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-5 portal-con-left">
                                    <img src="<?=base_url('assets/img/NF Logo.png')?>" height="70">
                                    <img src="<?=base_url('assets/img/Siklab.png')?>" height="70">
                                    <br>
                                    <br>
                                    <div class="form-group">
                                        <input class="form-control input-sm" type="text" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control input-sm" type="text" placeholder="Password">
                                    </div>
                                    <div class="form-group">
                                        <a class="btn btn-success btn-right">Log in</a>
                                    </div>
                                </div>
                                <div class="col-md-7 portal-con-right">
                                    <img src="<?=base_url()?>assets/img/anc-event.jpg" height="250">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=base_url()?>assets/js/custom.js"></script>

</body>

</html>
