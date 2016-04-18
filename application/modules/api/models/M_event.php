<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_event
 *
 * @author johnenrick
 */
class M_event extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "event";
    }
    public function createEvent($firstParameter){
        $newData = array(
            "first_parameter" => $firstParameter
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveEvent($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
            
        );
        $selectedColumn = array(
            "event.*"
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updateEvent($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteEvent($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}
