<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of m_account
 *
 * @author johnenrick
 */
class M_account extends API_Model{
    public function __construct() {
        parent::__construct();
        $this->TABLE = "account";
    }
    public function createAccount($username, $password, $accountTypeID, $status = 2){
        $newData = array(
            "username" => $username,
            "password" => sha1($password),
            "account_type_ID" => $accountTypeID,
            "status" => $status
        );
        return $this->createTableEntry($newData);
    }
    public function retrieveAccount($retrieveType = 0, $limit = NULL, $offset = 0, $sort = array(), $ID = NULL, $condition = array(), $having = array()) {
        $joinedTable = array(
            "account_information" => "account_information.account_ID=account.ID",
            "account_payment AS registration_fee" => "registration_fee.account_ID=account.ID AND registration_fee.assessment_item_ID=1",
            "account_local_chapter_group" => "account_local_chapter_group.account_ID=account_information.account_ID",
            "file_uploaded AS account_identification_file_uploaded" => "account_identification_file_uploaded.ID = account_information.identification_file_uploaded_ID",
            "local_chapter_group" => "local_chapter_group.ID=account_local_chapter_group.local_chapter_group_ID",
            "local_chapter" => "local_chapter.ID=local_chapter_group.local_chapter_ID",
            "payment_receipt" => "payment_receipt.registration_number = local_chapter_group.ID",
            "file_uploaded AS payment_receipt_file_uploaded" => "payment_receipt_file_uploaded.ID=payment_receipt.file_uploaded_ID",
            "account_type" => "account_type.ID=account.account_type_ID",
            "account_attendance" => "account_attendance.account_ID=account.ID",
            "account_payment AS penalty_fee" => "penalty_fee.account_ID=account.ID AND penalty_fee.assessment_item_ID=2",
            "local_chapter_position" => "local_chapter_position.ID=account_information.local_chapter_position_ID",
            "account_payment AS registration_discount" => "registration_discount.account_ID=account.ID AND registration_discount.assessment_item_ID=3",
            "account_event_participation" => "account_event_participation.account_ID=account.ID"
        );
        $selectedColumn = array(
            "account.username, account.account_type_ID, account.status",
            "account_information.*",
            "SUM(registration_fee.amount) AS registration_fee_total_amount, registration_fee.payment_mode AS registration_fee_payment_mode",
            "local_chapter.*, local_chapter.description AS local_chapter_description",
            "local_chapter_group.ID AS local_chapter_group_ID",
            "payment_receipt_file_uploaded.name AS payment_receipt_file_uploaded_name, payment_receipt_file_uploaded.type AS payment_receipt_file_uploaded_type",
            "account_identification_file_uploaded.name AS account_identification_file_uploaded_name, account_identification_file_uploaded.type AS account_identification_file_uploaded_type",
            "account_type.description AS account_type_description",
            "account_attendance.ID AS account_attendance_ID",
            "(penalty_fee.amount) AS penalty_fee_total_amount, penalty_fee.description AS penalty_fee_description",
            "local_chapter_position.description AS local_chapter_position_description",
            "registration_discount.amount AS registration_discount_amount, (registration_discount.amount) AS registration_discount_total_amount, registration_discount.description AS registration_discount_description"
   
        );
        return $this->retrieveTableEntry($retrieveType, $limit, $offset, $sort, $ID, $condition, $selectedColumn, $joinedTable, $having);
    }
    public function updateAccount($ID = NULL, $condition = array(), $newData = array()) {
        if(isset($newData["password"])){
            $newData["password"] = sha1($newData["password"]);
        }
        return $this->updateTableEntry($ID, $condition, $newData);
    }
    public function deleteAccount($ID = NULL, $condition = array()){
        return $this->deleteTableEntry($ID, $condition);
    }
}