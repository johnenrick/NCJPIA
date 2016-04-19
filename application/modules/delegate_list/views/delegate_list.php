<div class="col-md-12 ml-container-bottom">
    <div class="col-md-2 ml-list-controls">
        <ul class="list-group">
            <li class="list-group-item">
                <span class="badge" id="delegateListRegistered">0</span> Registered
            </li>
            <li class="list-group-item">
                <span class="badge" id="delegateListPaid">0</span> Paid
            </li>
            <li class="list-group-item">
                <span class="badge" id="delegateListPending">0</span> Pending
            </li>
        </ul>
        <hr>
        <form id="delegateListTableFilter" method='POST'>
            <input name="condition[account_type_ID]" value="9" type="hidden">
            <div class="form-group">
                <label>FILTER TABLE</label>
            </div>
            <div class="form-group">
                <label>Local Chapter</label>
                <select name="condition[local_chapter__ID]" class="form-control">
                    <option value="">All</option>
                </select>
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
                <label>Registration Number</label>
                <input name="condition[local_chapter_group__ID]" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Payment Status</label>
                <select name="payment_status" class="form-control">
                    <option>Unpaid</option>
                    <option>Pending</option>
                    <option>Paid</option>
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
        <table id="delegateListTable" class="table table-hover">
            <thead>
                <tr>
                    <th width="20px">
                        <input type="checkbox">
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
<div class="prototype" style="display:none">
    <table>
        <tr class="delegateListRow">
            <td>
                <input type="checkbox">
            </td>
            <td class="delegateListFullName">Mark Otto</td>
            <td class="delegateListLocalChapter center-align">USC</td>
            <td class="center-align">
                <span class="label label-success" style="display:none">Paid</span>
                <span class="label label-warning" style="display:none">Pending</span>
                <span class="label label-danger" style="display:none">Unpaid</span>
            </td>
        </tr>
    </table>
</div>