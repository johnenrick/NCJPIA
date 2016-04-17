<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_account_local_chapter_group
 *
 * @author johnenrick
 */
class M_account_local_chapter_group extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "account_local_chapter_group";
    }
    public function createAccountLocalChapterGroup($accountID, $localChapterGroupID, $memberType){
        $newData = array(
            "account_ID" => $accountID,
            "local_chapter_group_ID" => $localChapterGroupID,
            "member_type" => $memberType
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveAccountLocalChapterGroup($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
            
        );
        $selectedColumn = array(
            "account_local_chapter_group.*"
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updateAccountLocalChapterGroup($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteAccountLocalChapterGroup($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}
