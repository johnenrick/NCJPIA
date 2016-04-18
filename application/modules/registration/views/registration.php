<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ANC Registration</title>
    <link href="<?=asset_url()?>css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>css/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href="<?=asset_url()?>css/style.css" type="text/css" rel="stylesheet">
</head>

<body>
    <div class="container-fluid full-height">
        <div class="row full-height">
            <div class="col-md-4 full-height reg-con-1">
                <img src="<?=asset_url('img/NF Logo.png')?>" id="reg-logo-1">
                <img src="<?=asset_url('img/text-logo.png')?>" id="reg-logo-2">

                <img src="<?=asset_url('img/Siklab.png')?>" id="reg-logo-3">

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
                    <h2 class="reg-h-1 bold-1">Welcome to NFJPIA Annual National Convention</h2>
                    <br>
                    <h3>Step 1</h3>
                    <h4>Register and fill out pertinent information.</h4>
                    <button type="button" name="op-reg" class="btn btn-success btn-lg">Register</button>
                    <br>
                    <br>
                    <br>
                    <h3>Step 2</h3>
                    <h4>Confirm your payment and get your confirmation number.</h4>
                    <button type="button" name="op-con" class="btn btn-warning btn-lg">Confirm Payment</button>
                </div>
                <div id="reg-module" class="col-md-8 full-height hide-module">
                    <form id="registrationFormFull">
                    <h3 class="reg-h-1 bold-1">Registration</h3>
                    <p class="reg-p-1">Welcome to registration for Annual National Convention. Please take a moment to complete all of the information below as carefully and completely as possible.</p>
                    <br>
                    <div class="reg-form reg-form-1" id="reg-form-1-id">
                        <h4 class="bold-1">Group Leader Information</h4>
                        <hr>
                        <div class="form-group">
                            <label class="control-label">Name</label>
                            <div class="form-inline">
                                <input name="group_member_list[0][first_name]" class="form-control reg-input-inline" type="text" placeholder="First Name" required>
                                <input name="group_member_list[0][last_name]" class="form-control reg-input-inline" type="text" placeholder="Last Name" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Position</label>
                            <select name="group_member_list[0][local_chapter_position_ID]" class="form-control localChapterPosition" required>
                                <option selected disabled>None</option>
                                <option>Local Chapter Adviser</option>
                                <option>Local Chapter Faculty (Dean, Chairman, etc.)</option>
                                <option>Local Chapter Officer (President, Vice President, etc.)</option>
                                <option>Local Chapter Representative</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Contact Number</label>
                            <input name="group_member_list[0][contact_number]" class="form-control" type="number" placeholder="Cell No. or Tel. No." required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Complete Address</label>
                            <input name="group_member_list[0][complete_address]" type="text" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Email Address</label>
                            <input name="group_member_list[0][email_address]" type="email" class="form-control" placeholder="name@email.com" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Valid ID</label>
                            <input name="images[]" type="file" required>
                            <p class="help-block">Upload a scanned copy of valid ID.</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label">T-shirt Size</label>
                            <select name="group_member_list[0][tshirt_size]" class="form-control" required>
                                <option selected disabled>None</option>
                                <option value="XS">XS</option>
                                <option value="S" >S</option>
                                <option value="M" >M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="XXL">XXL</option>
                            </select>
                        </div>

                        <br>
                        <div class="form-group">
                            <!--<a class="btn btn-success reg-btn-right reg-btn-next">Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>-->
                            <button type="submit" id="button-step1" class="btn btn-success reg-btn-right reg-btn-next" disabled>Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
                        </div>
                    </div>

                    <div class="reg-form reg-form-2 hide-module" id="reg-form-2-id">
                        <h4 class="bold-1">Local Chapter Information</h4>
                        <hr>
                        <div class="form-group">
                            <label class="control-label">Local Chapter (School/University)</label>
                            <input name="local_chapter_description" type="text" class="form-control" placeholder="School/University" required>
                            <input name="local_chapter_chapter_type" type="hidden" class="form-control" >
                        </div>
                        <div class="form-group">
                            <label class="control-label">Local Chapter Address</label>
                            <input name="local_chapter_address" type="text" class="form-control" placeholder="Address" required>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Region</label>
                            <select name="local_chapter_region"  class="form-control" id="select2" required>
                                <option selected disabled>None</option>
                                <option>Region 1 & CAR</option>
                                <option>Region 4</option>
                                <option>Region 10 & CARAGA</option>
                                <option>Region 12 & SOCCSKSARGEN</option>

                            </select>
                        </div>

                        <br>
                        <div class="form-group">
                            <a class="btn btn-default reg-btn-left reg-btn-prev"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span> Previous Step</a>
                            <!--<a class="btn btn-success reg-btn-right reg-btn-next">Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></a>-->
                            <button type="submit" id="button-step2" class="btn btn-success reg-btn-right reg-btn-next" disabled>Next Step <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span></button>
                        </div>
                    </div>

                    <div class="reg-form reg-form-3 hide-module">
                        <h4 class="bold-1">Choose an event to participate</h4>
                        <hr>
                        <div  class="form-group nonAcademicEvent control-checkbox">
                            <label>Events Participating In (Limit of 2 Academic, 2 Non-Academic Events)</label>
                            <label class="control-label">Non-Academic Events</label>
                        </div>
                        <div  class="form-group academicEvent control-checkbox">
                            <label class="control-label">Academic Events</label>
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
                            <table id="groupMemberTable" class="table table-striped reg-table-member">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Position</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody >
                                    <tr
                                        class="groupMember"
                                        contact_number=""
                                        complete_address=""
                                        email_address=""
                                        tshirt_size=""
                                        member_type=""
                                        local_chapter_ID=""
                                        local_chapter_position_ID=""
                                        event_participation=""
                                        academic_event_participation=""
                                        non_academic_event_participation=""
                                        >
                                        <th scope="row">1</th>
                                        <td class="groupMemberFirstName">Mark</td>
                                        <td class="groupMemberLastName">Otto</td>
                                        <td class="groupMemberLocalChapterPositionDescription" local_chapter_group_position="">Local Chapter Adviser</td>
                                        <td>
                                            <a class="btn btn-info btn-xs">edit</a>
                                        </td>
                                    </tr>
                                    <tr
                                        class="groupMember"
                                        contact_number=""
                                        complete_address=""
                                        email_address=""
                                        tshirt_size=""
                                        member_type=""
                                        local_chapter_ID=""
                                        local_chapter_position_ID=""
                                        event_participation=""
                                        academic_event_participation=""
                                        non_academic_event_participation=""
                                        >
                                        <th scope="row">1</th>
                                        <td class="groupMemberFirstName">Mark</td>
                                        <td class="groupMemberLastName">Otto</td>
                                        <td class="groupMemberLocalChapterPositionDescription" local_chapter_position_ID="">Local Chapter Adviser</td>
                                        <td>
                                            <a class="btn btn-info btn-xs">edit</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                            <a id="reg-add-member" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add Group Member</a>
                        </div>
                        <div class="reg-form-member btn-form-con hide-module" id="reg-form-member-id">
                            <div class="form-group">
                                <label class="control-label">Name</label>
                                <div class="form-inline">
                                    <input class="form-control reg-input-inline" type="text" placeholder="First Name" required>
                                    <input class="form-control reg-input-inline" type="text" placeholder="Last Name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Position</label>
                                <select class="form-control" id="select" required>
                                    <option selected disabled>None</option>
                                    <option>Local Chapter Adviser</option>
                                    <option>Local Chapter Faculty (Dean, Chairman, etc.)</option>
                                    <option>Local Chapter Officer (President, Vice President, etc.)</option>
                                    <option>Local Chapter Representative</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Contact Number</label>
                                <input class="form-control" type="number" placeholder="Cell No. or Tel. No." required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Complete Address</label>
                                <input type="text" class="form-control" placeholder="Address" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Email Address</label>
                                <input type="email" class="form-control" placeholder="name@email.com" required>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Valid ID</label>
                                <input type="file" id="exampleInputFile" required>
                                <p class="help-block">Upload a scanned copy of valid ID.</p>
                            </div>
                            <div class="form-group">
                                <label class="control-label">T-shirt Size</label>
                                <select class="form-control" id="select" required>
                                    <option selected disabled>None</option>
                                    <option>XS</option>
                                    <option>S</option>
                                    <option>M</option>
                                    <option>L</option>
                                    <option>XL</option>
                                    <option>XXL</option>
                                </select>
                            </div>
                            <div class="form-group nonAcademicEvent control-checkbox">
                                <label>Events Participating In (Limit of 2 Academic, 2 Non-Academic Events)</label>
                                <label class="control-label">Non-Academic Events</label>
                            </div>
                            <div class="form-group academicEvent control-checkbox">
                                <label class="control-label">Academic Events</label>

                            </div>
                            <br>
                            <div class="form-group">
                                <!--<a class="btn btn-success btn-form-save">Save</a>
                                <a class="btn btn-warning btn-form-cancel">Cancel</a>-->
                                <button id="button-add-group-member" type="submit" class="btn btn-success btn-form-save" disabled>Save</button>
                                <button id="button-cancel-group-member" type="submit" class="btn btn-warning btn-form-cancel">Cancel</button>
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
                    </form>
                </div>
                <div id="con-module" class="col-md-8 full-height hide-module">
                    <h3 class="reg-h-1 bold-1">Payment Confirmation</h3>
                    <p class="reg-p-1">Verifying your registration for Annual National Convention. Please take a moment to complete all of the information below as carefully and completely as possible.</p>

                    <form method="POST">
                        <div class="alert alert-danger formMessage" style="display:none">

                        </div>
                        <div class="reg-form reg-form-1">
                            <div class="form-group">
                                <label class="control-label">Registration Number</label>
                                <input name="registration_number" class="form-control" type="number" placeholder="XXXXXX">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Scanned Deposit Slip</label>
                                <input id="depositSlipFile" name="images[]" type="file">
                                <p class="help-block">Upload a scanned copy of your deposit slips.</p>
                            </div>
                            <br>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success reg-btn-right reg-btn-submit">Submit</button>
                            </div>
                        </div>
                    </form>
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
    <div class="prototype" style="display:none">
        <div class="eventItem checkbox reg-checkbox">
            <label>
                <input type="checkbox" class="checkbox"> <span class="eventDescription">Cup 1 - Basic Accounting</span>
            </label>
        </div>
        <table>
            <tr
                class="groupMember"
                contact_number=""
                complete_address=""
                email_address=""
                tshirt_size=""
                member_type=""
                local_chapter_ID=""
                local_chapter_position_ID=""
                event_participation=""
                academic_event_participation=""
                non_academic_event_participation=""
                >
                <th scope="row">1</th>
                <td class="groupMemberFirstName">Mark</td>
                <td class="groupMemberLastName">Otto</td>
                <td class="groupMemberLocalChapterPositionDescription" local_chapter_group_position="">Local Chapter Adviser</td>
                <td>
                    <a class="btn btn-info btn-xs">edit</a>
                </td>
            </tr>

            <tr class="noGroupMember">
                <td colspan="5" style="text-align:center; font-weight: bold">No members added yet</td>
            </tr>
        </table>
    </div>
    <script type="text/javascript" src="<?=asset_url()?>js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="<?=asset_url()?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=asset_url()?>js/custom.js"></script>
    <script type="text/javascript" src="<?=asset_url()?>js/jquery.form.min.js"></script>
    <script type="text/javascript" src="<?=asset_url()?>js/validator.js"></script>

</body>

</html>
