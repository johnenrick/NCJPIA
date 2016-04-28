<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ANC Login</title>
    <link href="<?=asset_url()?>css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>css/style.css" type="text/css" rel="stylesheet">
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
                                    <form id="loginForm" method="POST">
                                        
                                        <img src="<?=asset_url('img/NF Logo.png')?>" height="70">
                                        <img src="<?=asset_url('img/Siklab.png')?>" height="70">
                                        <br>
                                        <br>
                                        <div class="alert alert-danger formMessage" style="display:none">
                                        </div>
                                        <div class="form-group">
                                            <input name="username" class="form-control input-sm" type="text" placeholder="Username" required>
                                        </div>
                                        <div class="form-group">
                                            <input name="password" class="form-control input-sm" type="password" placeholder="Password" required>
                                        </div>
                                        <div class="form-group">
                                            <button class="submitButton btn btn-success btn-right">Log in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="col-md-7 portal-con-right">
                                    <img src="<?=asset_url()?>img/anc-event.jpg" height="250">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="<?=asset_url()?>js/jquery-1.12.0.min.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>js/bootstrap.min.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>js/custom.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>js/custom.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>js/validator.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>js/jquery.form.min.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>js/initial.min.js"></script>
        <script type="text/javascript" src="<?=asset_url()?>js/scrollTo.js"></script>
</body>

</html>
