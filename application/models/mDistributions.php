<?php

class mDistributions extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    public function add($buyerID, $vegID, $quantity, $deployDate) {
        $data = array("vegID"=>$vegID, "buyerID"=>$buyerID, "Quantity"=>$quantity, "deployDate"=>$deployDate);

        $this->db->set($data);
        $this->db->insert("orders");
    }

    public function search($buyerID, $vegID, $from, $to) {
        $this->db->select("vegID, buyerID, Quantity, deployDate");
        $this->db->from("orders");
        $this->db->where("vegID", $vegID);
        $this->db->where("buyerID", $buyerID);
        $this->db->where("deployDate >=", $from);
        $this->db->where("deployDate <=", $to);

        return $this->db->get();
    }

    public function searchByDate($buyerID, $vegID, $date) {
        $this->db->select("vegID, buyerID, Quantity, deployDate");
        $this->db->from("orders");
        $this->db->where("vegID", $vegID);
        $this->db->where("buyerID", $buyerID);
        $this->db->where("deployDate", $date);

        return $this->db->get();
    }
}


?>