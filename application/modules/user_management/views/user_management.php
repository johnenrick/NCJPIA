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
                    <option value="2">Vice President of Finance</option>
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
        <button id="userManagementAddUser" class="btn btn-success pull-right"> + Add User</button>
        <table id="userManagementTable" class="table table-hover">
            <thead>
                <tr>    
                    <th width="20px">
                        <!--<input type="checkbox">-->
                    </th>
                    <th>Full Name</th>
                    <th class="center-align">User Type</th>
                    <th class="center-align" style="display:none">Amount Accumulated</th>
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
                <h4 class="modal-title">User Information</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    
                    <div class="col-md-12">
                        <form id="userManagementAccountDetail" method="POST">
                            <input input_name="status" value="1" type="hidden">
                            <input input_name="ID" name="ID" value="0" type="hidden">
                            <div class="formMessage alert-danger"></div>
                            <br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Username</label>
                                        <input  input_name="username" class="form-control localChapterPosition" type="text" placeholder="Username">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input input_name="password" class="form-control" type="password" placeholder="Password">
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="display:none">
                                <div class="col-md-6">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Retype Password</label>
                                        <input input_name="retype_password" class="form-control" type="text" placeholder="Cell No. or Tel. No.">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="control-label">Name</label>
                                        <div class="form-inline">
                                            <input input_name="first_name" class="form-control reg-input-inline" type="text" placeholder="First Name">
                                            <input input_name="last_name" class="form-control reg-input-inline" type="text" placeholder="Last Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Position</label>
                                        <select input_name="account_type_ID" class="form-control" id="select">
                                            <option value="2">Vice President of Finance</option>
                                            <option value="3">Registration Committee</option>
                                            <option value="4">Audit Committee</option>
                                            <option value="8">Hotel Accommodation</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Contact Number</label>
                                        <input input_name="contact_number" class="form-control" type="text" placeholder="Cell No. or Tel. No.">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Complete Address</label>
                                        <input input_name="complete_address" type="text" class="form-control" placeholder="Address">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Email Address</label>
                                        <input input_name="email_address" type="text" class="form-control" placeholder="name@email.com">
                                    </div>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                <div class="modal-footer">
                    <button action_id="1" type="button" class="userManagementButton btn btn-default" data-dismiss="modal">Close</button>
                    <button action_id="2" type="button" class="userManagementButton btn btn-primary">Save changes</button>
                    <button action_id="3" type="button" class="userManagementButton btn btn-primary">Create User</button>
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
            <td class="userManagementFullName"></td>
            <td class="userManagementUserType center-align"></td>
            <td class="userManagementAmountAccumulated" style="text-align: right; display:none">0.00</td>
        </tr>
    </table>
    <div class="eventItem checkbox reg-checkbox">
        <label>
            <input type="checkbox" class="checkbox"> <span class="eventDescription">Cup 1 - Basic Accounting</span>
        </label>
    </div>
</div>