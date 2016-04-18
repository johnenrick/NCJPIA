<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_local_chapter_position
 *
 * @author johnenrick
 */
class M_local_chapter_position extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "local_chapter_position";
    }
    public function createLocalChapterPosition($firstParameter){
        $newData = array(
            "first_parameter" => $firstParameter
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveLocalChapterPosition($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
            
        );
        $selectedColumn = array(
            "local_chapter_position.*"
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updateLocalChapterPosition($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteLocalChapterPosition($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}
