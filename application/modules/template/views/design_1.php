<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ANC Registration</title>
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="<?=base_url()?>assets/css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid full-height">
        <div class="row full-height">
            <div class="col-md-4 full-height reg-con-1">
                <img src="<?=base_url('assets/img/NF Logo.png')?>" id="reg-logo-1">
                <img src="<?=base_url('assets/img/text-logo.png')?>" id="reg-logo-2">

                <img src="<?=base_url('assets/img/Siklab.png')?>" id="reg-logo-3">

                <p class="footer-text">
                    <a href="https://twitter.com/nfjpiaofficial" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i> @nfjpiaofficial
                    </a>
                    <span class="separator">|</span>
                    <a href="https://www.facebook.com/nfjpia" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i> /nfjpia
                    </a>
                    <span class="separator">|</span>
                    <a href="https://www.instagram.com/nfjpiaofficial" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i> @nfjpiaofficial
                    </a>
                    <br>
                    <span class="copyright">Copyright © 2015, All rights reserved. | Powered by IITS</span>
                </p>

            </div>
            <div class="col-md-8 full-height reg-con-2">
                <div id="reg-option" class="full-height">
                    <button type="button" name="op-reg" class="btn btn-success btn-lg">Registration</button>
                    <h3>OR</h3>
                    <br>
                    <button type="button" name="op-con" class="btn btn-warning btn-lg">Confirm Payment</button>
                </div>
                <div id="reg-module" class="col-md-8 full-height hide-module">
                    <h3 class="reg-h-1 bold-1">Registration</h3>
                    <p class="reg-p-1">Welcome to registration for Annual National Convention. Please take a moment to complete all of the information below as carefully and completely as possible.</p>
                    <br>
                    <div class="reg-form reg-form-1">
                        <h4 class="bold-1">Group Leader Information</h4>
                        <hr>
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <div class="form-inline">
                                <input class="form-control reg-input-inline" type="text" placeholder="First Name">
                                <input class="form-control reg-input-inline" type="text" placeholder="Last Name">
                            </div>
                        </div>
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
                        <div class="form-group">
                            <label class="control-label">Contact Number</label>
                            <input class="form-control" type="text" placeholder="Cell No. or Tel. No.">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Complete Address</label>
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email Address</label>
                            <input type="text" class="form-control" placeholder="name@email.com">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Valid ID</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Upload a scanned copy of valid ID.</p>
                        </div>
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

                        <br>
                        <div class="form-group">
                            <a class="btn btn-success reg-btn-right reg-btn-next">Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                        </div>
                    </div>

                    <div class="reg-form reg-form-2 hide-module">
                        <h4 class="bold-1">Local Chapter Information</h4>
                        <hr>
                        <div class="form-group">
                            <label class="control-label">Local Chapter (School/University)</label>
                            <input type="text" class="form-control" placeholder="School/University">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Local Chapter Address</label>
                            <input type="text" class="form-control" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Region</label>
                            <select class="form-control" id="select">
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

                        <br>
                        <div class="form-group">
                            <a class="btn btn-default reg-btn-left reg-btn-prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Previous Step</a>
                            <a class="btn btn-success reg-btn-right reg-btn-next">Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                        </div>
                    </div>

                    <div class="reg-form reg-form-3 hide-module">
                        <h4 class="bold-1">Choose an event to participate</h4>
                        <hr>
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
                        <div class="form-group">
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

                        <br>
                        <div class="form-group">
                            <a class="btn btn-default reg-btn-left reg-btn-prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Previous Step</a>
                            <a class="btn btn-success reg-btn-right reg-btn-next">Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                        </div>
                    </div>

                    <div class="reg-form reg-form-4 hide-module">
                        <h4 class="bold-1">Group Members</h4>
                        <hr>
                        <div class="table-responsive">
                            <table class="table table-striped reg-table-member">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Position</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Mark</td>
                                        <td>Otto</td>
                                        <td>Local Chapter Adviser</td>
                                        <td><a class="btn btn-info btn-xs">edit</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Jacob</td>
                                        <td>Thornton</td>
                                        <td>Local Chapter Faculty</td>
                                        <td><a class="btn btn-info btn-xs">edit</a></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Larry</td>
                                        <td>Bird</td>
                                        <td>Local Chapter Representative</td>
                                        <td><a class="btn btn-info btn-xs">edit</a></td>
                                    </tr>
                                    <tr>
                                        <th colspan="5" style="text-align:center">No members added yet</th>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <a id="reg-add-member" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Group Member</a>
                        </div>
                        <div class="reg-form-member btn-form-con hide-module">
                            <form>
                                <div class="form-group">
                                    <label class="control-label">Name</label>
                                    <div class="form-inline">
                                        <input class="form-control reg-input-inline" type="text" placeholder="First Name">
                                        <input class="form-control reg-input-inline" type="text" placeholder="Last Name">
                                    </div>
                                </div>
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
                                <div class="form-group">
                                    <label class="control-label">Contact Number</label>
                                    <input class="form-control" type="text" placeholder="Cell No. or Tel. No.">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Complete Address</label>
                                    <input type="text" class="form-control" placeholder="Address">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Email Address</label>
                                    <input type="text" class="form-control" placeholder="name@email.com">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Valid ID</label>
                                    <input type="file" id="exampleInputFile">
                                    <p class="help-block">Upload a scanned copy of valid ID.</p>
                                </div>
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
                                <div class="form-group">
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
                            </form>
                            <br>
                            <div class="form-group">
                                <a class="btn btn-success btn-form-save">Save</a>
                                <a class="btn btn-warning btn-form-cancel">Cancel</a>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <a class="btn btn-default reg-btn-left reg-btn-prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Previous Step</a>
                            <a class="btn btn-success reg-btn-right reg-btn-next">Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>
                        </div>
                    </div>

                    <div class="reg-form reg-form-5 hide-module">
                        <h4 class="bold-1">Event Links</h4>
                        <hr>
                        <div class="form-group">
                            <label>Event 1</label>
                            <a href="https://www.google.com.ph" target="_blank"> event 1 link</a>
                            <br>
                        </div>
                        <div class="form-group">
                            <label>Event 2</label>
                            <a href="https://www.google.com.ph" target="_blank"> event 2 link</a>
                            <br>
                        </div>
                        <div class="form-group">
                            <label>Event 3</label>
                            <a href="https://www.google.com.ph" target="_blank"> event 3 link</a>
                            <br>
                        </div>
                        <div class="form-group">
                            <label>Event 4</label>
                            <a href="https://www.google.com.ph" target="_blank"> event 4 link</a>
                            <br>
                        </div>
                        <br>

                        <h4 class="bold-1">Registration Fee</h4>
                        <hr>
                        <div class="table-responsive">
                            <table class="reg-display-table">
                                <tr>
                                    <td width="85%">Registration Fee for JPIANS</td>
                                    <td>₱ 5,600.00</td>
                                </tr>
                                <tr>
                                    <td>Registration Fee for Non-JPIANS (LC Advisers, Faculty)</td>
                                    <td>₱ 5,700.00</td>
                                </tr>
                            </table>
                        </div>
                        <br>

                        <h4 class="bold-1">Bank Details</h4>
                        <hr>
                        <div class="table-responsive">
                            <table class="reg-display-table">
                                <tr>
                                    <td width="65%">BDO Savings</td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>Account Number:</td>
                                    <td><b>010 260 007 285</b></td>
                                </tr>
                                <tr>
                                    <td>Account Name:</td>
                                    <td><b>NFJPIA INC.</b></td>
                                </tr>
                            </table>
                        </div>
                        <br>
                        <p>* <i>Send and upload a copy of your deposit slips with your Registration No. at <b>Payment Confirmation</b> in home page.</i></p>
                        <br>

                        <h4 class="bold-1">Agreements</h4>
                        <hr>
                        <div class="form-group">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> I have reviewed my entries and agree to pay the billed amount at the specified bank account before April 27, 2016 to confirm our group’s participation.
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> I acknowledge that until our registration is confirmed, our accommodation and kits are not guaranteed.
                                </label>
                            </div>
                        </div>

                        <br>
                        <div class="form-group">
                            <a class="btn btn-default reg-btn-left reg-btn-prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Previous Step</a>
                            <button type="submit" class="btn btn-success reg-btn-right reg-btn-submit">Submit</button>
                        </div>
                    </div>

                </div>
                <div id="con-module" class="col-md-8 full-height hide-module">
                    <h3 class="reg-h-1 bold-1">Payment Confirmation</h3>
                    <p class="reg-p-1">Verifying your registration for Annual National Convention. Please take a moment to complete all of the information below as carefully and completely as possible.</p>
                    <br>
                    <div class="reg-form reg-form-1">
                        <div class="form-group">
                            <label class="control-label">Registration Number</label>
                            <input class="form-control" type="text" placeholder="XXXXXX">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Valid ID</label>
                            <input type="file" id="exampleInputFile">
                            <p class="help-block">Upload a scanned copy of your deposit slips.</p>
                        </div>

                        <br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success reg-btn-right reg-btn-submit">Submit</button>
                        </div>
                    </div>
                </div>
                <div id="success-module" class="fulll-height hide-module">
                    <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                    <br>
                    <h3><b>Successfully Done!</b></h3>
                    <h4>Get the latest updates! Follow us on our social networking sites!</h4>

                    <a href="https://twitter.com/nfjpiaofficial" target="_blank">
                        <i class="fa fa-twitter" aria-hidden="true"></i> @nfjpiaofficial
                    </a>
                    <a href="https://www.facebook.com/nfjpia" target="_blank">
                        <i class="fa fa-facebook" aria-hidden="true"></i> /nfjpia
                    </a>
                    <a href="https://www.instagram.com/nfjpiaofficial" target="_blank">
                        <i class="fa fa-instagram" aria-hidden="true"></i> @nfjpiaofficial
                    </a>

                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="<?=base_url()?>assets/js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=base_url()?>assets/js/custom.js"></script>

</body>

</html>
