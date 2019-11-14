<?php

class mBuyers extends CI_Model
{
    public function __construct() {
        $this->load->database();
    }

    public function getAll() {
        $this->db->select("ID, Name, TP, Address");
        return $this->db->get("buyer");
    }

    public function getName($id) {
        $this->db->select("Name");
        $this->db->from("buyer");
        $this->db->where("ID", $id);

        return $this->db->get()->result_array()[0]["Name"];
    }

    //function to search by everything
    public function search($name, $tp, $addr) {
        $this->db->select("ID, Name, TP, Address");
        $this->db->from("buyer");
        $this->db->like("Name", $name);
        $this->db->like("TP", $tp);
        $this->db->like("Address", $addr);

        return $this->db->get();
    }

    public function add($name, $tp, $addr) {
        $data = array("Name" => $name, "TP" => $tp, "Address" => $addr);

        $this->db->set($data);
        $this->db->insert("buyer");
    }

    public function del($id) {
        $this->db->where("ID", $id);
        $this->db->delete("buyer");
    }

    public function modify($id, $newName, $newTP, $newAddr) {
        $newData = array("Name"=>$newName, "TP"=>$newTP, "Address"=>$newAddr);
        $this->db->where("ID", $id);
        $this->db->update("buyer", $newData);
    }
}

?>