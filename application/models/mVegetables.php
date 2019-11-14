<?php

class mVegetables extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function getAll() {
        $this->db->select("ID, Name, PriceBuy, PriceSell");
        return $this->db->get("vegetable");
    }

    public function getName($id) {
        $this->db->select("Name");
        $this->db->from("vegetable");
        $this->db->where("ID", $id);

        return $this->db->get()->result_array()[0]["Name"];
    }

    public function getBuyingPrice($id) {
        $this->db->select("PriceBuy");
        $this->db->from("vegetable");
        $this->db->where("ID", $id);

        return $this->db->get()->result_array()[0]["PriceBuy"];
    }
    public function getSellingPrice($id) {
        $this->db->select("PriceSell");
        $this->db->from("vegetable");
        $this->db->where("ID", $id);

        return $this->db->get()->result_array()[0]["PriceSell"];
    }
    
    //function to search and get details only by id
    public function idSearch($id) {
        $this->db->select("ID, Name, PriceBuy, PriceSell");
        $this->db->from("vegetable");
        $this->db->where("ID", $id);

        return $this->db->get();
    }


    //one function to search them all
    public function search($name, $maxBuy, $minBuy, $maxSell, $minSell) {
        if($minBuy == "")
            $minBuy = 0;
        if($maxBuy == 0)
            $maxBuy = 9999999999999;
        if($minSell == "")
            $minSell = 0;
        if($maxSell == "")
            $maxSell = 9999999999999;

        $this->db->select("ID, Name, PriceBuy, PriceSell");
        $this->db->from("vegetable");
        $this->db->like("Name", $name);
        $this->db->where("PriceBuy <=", $maxBuy);
        $this->db->where("PriceBuy >=", $minBuy);
        $this->db->where("PriceSell <=", $maxSell);
        $this->db->where("PriceSell >=", $minSell);
        
        return $this->db->get();
    }

    public function add($name, $buyPrice, $sellPrice)
    {
        $data = array("Name" => $name, "PriceBuy" => $buyPrice, "PriceSell" => $sellPrice);

        $this->db->set($data);
        $this->db->insert("vegetable");
    }

    public function del($id) {
        
        $this->db->where("ID", $id);
        $this->db->delete("vegetable");
    }

    public function modify($id, $newName, $newPriceBuy, $newPriceSell) {

        $newData = array("Name" => $newName, "PriceBuy" => $newPriceBuy, "PriceSell" => $newPriceSell);
        $this->db->where("ID", $id);
        $this->db->update("vegetable", $newData);
    }
}

?>