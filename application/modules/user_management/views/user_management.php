<div class="col-md-12 ml-container-bottom">
    <div class="col-md-2 ml-list-controls">
        
        <form id="userManagementTableFilter" method='POST'>
            <div class="form-group">
                <label>FILTER TABLE</label>
            </div>
<!--
            <div class="form-group">
                <label>Leader's Last Name</label>
                <input  type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Leader's First Name</label>
                <input  type="text" class="form-control">
            </div>-->
            <div class="form-group">
                <label>User Type</label>
                <select name="condition[account_type_ID]" class="form-control">
                    <option value="">All</option>
                    <option value="3">Registration Committee</option>
                    <option value="4">Audit Committee</option>
                    <option value="8">Hotel Accommodation</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class='btn btn-primary'>
                    Filter Table
                </button>
            </div>
        </form>
    </div>
    <div class="col-md-10 ml-list">
        <table id="userManagementTable" class="table table-hover">
            <thead>
                <tr>    
                    <th width="20px">
                        <!--<input type="checkbox">-->
                    </th>
                    <th>Full Name</th>
                    <th class="center-align">Local Chapter</th>
                    <th class="center-align">Status</th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
        </table>
    </div>
</div>
<div id="userManagementInformation" class="modal fade ml-modal" tabindex="-1" role="dialog" aria-labelledby="Information">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Complete Information</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6" style="text-align:center">
                        <a  payment_mode="1" class="userManagementConfirmPayment btn btn-success"> <i class="fa fa-bank" aria-hidden="true"></i> Confirm Bank Payment</a>
                        <a  payment_mode="2" class="userManagementConfirmPayment btn btn-primary"> <i class="fa fa-money" aria-hidden="true"></i> Confirm Cash Payment </a>
                        <h5><p id="userManagementPaymentMode">Paid though bank</p></h5>
                        <h3><p id="userManagementName" >John Doe</p></h3>
                        <h4><p id="userManagementLocalChapter" >USC</p></h4>
                        <h5><p id="userManagementRegion">Region X</p></h5>
                    </div>
                    <div class="col-md-6">
                        <img id="userManagementConfirmationImage" src="<?=asset_url()?>img/receipt.jpg" width="100%" alt="No scanned copy of deposit slip uploaded.">
                    </div>
                    </div>
                        <form id="userManagementAccountDetail" method="POST">
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <div class="form-inline">
                                            <input name="updated_data[first_name]" class="form-control reg-input-inline" type="text" placeholder="First Name">
                                            <input name="updated_data[last_name]" class="form-control reg-input-inline" type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Position</label>
                                        <select name="updated_data[local_chapter_position_ID]" class="form-control localChapterPosition" id="select">
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Contact Number</label>
                                        <input name="updated_data[contact_number]" class="form-control" type="text" placeholder="Cell No. or Tel. No.">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Complete Address</label>
                                        <input name="updated_data[complete_address]" type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email Address</label>
                                        <input name="updated_data[email_address]" type="text" class="form-control" placeholder="name@email.com">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">T-shirt Size</label>
                                        <select name="updated_data[tshirt_size]" class="form-control" id="select">
                                            <option value="XXS">XXS (25"x17")</option>
                                            <option value="XS">XS (26"x18")</option>
                                            <option value="S">S (27"x19")</option>
                                            <option value="M">M (28"x20")</option>
                                            <option value="L">L (29"x21")</option>
                                            <option value="XL">XL (30"x22")</option>
                                            <option value="2XL">2XL(31"x23")</option>
                                            <option value="3XL">3XL (32"x24")</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <img id="userManagementIdentificationImage"  src="<?=asset_url()?>img/identification_card.png" width="100%">
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Local Chapter (School/University)</label>
                                        <input name="local_chapter_updated_data[description]" type="text" class="form-control" placeholder="School/University" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Local Chapter Address</label>
                                        <input name="local_chapter_updated_data[address]" type="text" class="form-control" placeholder="Address" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Region</label>
                                        <select name="local_chapter_updated_data[region]" class="form-control" disabled>
                                            <option>NCR</option>
                                            <option>Region 1 & CAR</option>
                                            <option>Region 2</option>
                                            <option>Region 3</option>
                                            <option>Region 4</option>
                                            <option>Region 5</option>
                                            <option>Region 6</option>
                                            <option>Region 7</option>
                                            <option>Region 8</option>
                                            <option>Region 9</option>
                                            <option>Region 10 & CARAGA</option>
                                            <option>Region 11</option>
                                            <option>Region 12 & SOCCSKSARGEN</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group nonAcademicEvent">
                                        <label>Events Participating In (Limit of 2 Academic, 2 Non-Academic Events)</label>
                                        <label class="control-label">Non-Academic Events</label>
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group academicEvent">
                                        <label>&nbsp;</label><br>
                                        <label class="control-label">Academic Events</label>
                                        
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="prototype" style="display:none">
    <table>
        <tr class="userManagementRow">
            <td>
                <!--<input type="checkbox">-->
            </td>
            <td class="userManagementFullName">Mark Otto</td>
            <td class="userManagementLocalChapter center-align">USC</td>
            <td class="center-align">
                <span class="label label-success" style="display:none">Paid</span>
                <span class="label label-warning" style="display:none">Pending</span>
                <span class="label label-danger" style="display:none">Unpaid</span>
            </td>
        </tr>
    </table>
    <div class="eventItem checkbox reg-checkbox">
        <label>
            <input type="checkbox" class="checkbox"> <span class="eventDescription">Cup 1 - Basic Accounting</span>
        </label>
    </div>
</div>