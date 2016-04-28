<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_account_attendance
 *
 * @author johnenrick
 */
class M_account_attendance extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "account_attendance";
    }
    public function createAccountAttendance($accountID, $terminalAccountID){
        $newData = array(
            "account_ID" => $accountID,
            "terminal_account_ID" => $terminalAccountID,
            "datetime" => time()
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveAccountAttendance($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
            
        );
        $selectedColumn = array(
            "account_attendance.*"
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updateAccountAttendance($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteAccountAttendance($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}
