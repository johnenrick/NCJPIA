<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_account_queue
 *
 * @author johnenrick
 */
class M_account_queue extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "account_queue";
    }
    public function createAccountQueue($registrationNumber){
        $newData = array(
            "registration_number" => $registrationNumber,
            "status" => 1,
            "datetime" => time()
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveAccountQueue($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
            "local_chapter_group" => "local_chapter_group.ID=account_queue.registration_number",
            "local_chapter" => "local_chapter_group.local_chapter_ID=local_chapter.ID"
        );
        $selectedColumn = array(
            "account_queue.*",
            "local_chapter.description AS local_chapter_description"
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updateAccountQueue($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteAccountQueue($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}
