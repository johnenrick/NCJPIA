<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_account_event_participation
 *
 * @author johnenrick
 */
class M_account_event_participation extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "account_event_participation";
    }
    public function createAccountEventParticipation($accountID, $eventID){
        $newData = array(
            "account_ID" => $accountID,
            "event_ID" => $eventID
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveAccountEventParticipation($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
            
        );
        $selectedColumn = array(
            "account_event_participation.*"
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updateAccountEventParticipation($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteAccountEventParticipation($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}
