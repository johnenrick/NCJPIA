<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_local_chapter_group
 *
 * @author johnenrick
 */
class M_local_chapter_group extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "local_chapter_group";
    }
    public function createLocalChapterGroup($leaderAccountID, $localChapterID){
        $newData = array(
            "leader_account_ID" => $leaderAccountID,
            "local_chapter_ID" => $localChapterID,
            "registration_datetime" => time()
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveLocalChapterGroup($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
            
        );
        $selectedColumn = array(
            "local_chapter_group.*"
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updateLocalChapterGroup($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteLocalChapterGroup($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}
