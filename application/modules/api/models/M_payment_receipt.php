<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_payment_receipt
 *
 * @author johnenrick
 */
class M_payment_receipt extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "payment_receipt";
    }
    public function createPaymentReceipt($registrationNumber, $fileUploadedID){
        $newData = array(
            "registration_number" => $registrationNumber,
            "file_uploaded_ID" => $fileUploadedID
        );
        return $this->createTableEntry($newData);
    }
    public function retrievePaymentReceipt($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
        );
        $selectedColumn = array(
            "payment_receipt.*"
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updatePaymentReceipt($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deletePaymentReceipt($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}
