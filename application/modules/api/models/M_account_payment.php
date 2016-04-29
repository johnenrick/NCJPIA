<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_account_payment
 *
 * @author johnenrick
 */
class M_account_payment extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "account_payment";
    }
    public function createAccountPayment($assessmentItemID, $accountID, $amount, $paymentMode, $receiverAccountID, $description){
        $newData = array(
            "assessment_item_ID" => $assessmentItemID,
            "account_ID" => $accountID,
            "amount" => $amount,
            "payment_mode" => $paymentMode,
            "receiver_account_ID" => $receiverAccountID,
            "description" => $description
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveAccountPayment($retrieveType = false, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = NULL) {
        $joinedTable = array(
            
        );
        $selectedColumn = array(
            "account_payment.*"
        );
        
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable);
    }
    public function updateAccountPayment($ID = NULL, $condition = array(), $newData = array()) {
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteAccountPayment($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}
