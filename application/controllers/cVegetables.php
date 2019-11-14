<?php
class cVegetables extends CI_Controller {
    public function index() {
        $this->load->view("veg/vVegetableSearch");
    }

    //functions to load views
    public function showAdd() {
        $this->load->view("veg/vAddNewVegetable");
    }

    public function showSearch() {
        $this->load->view("veg/vVegetableSearch");
    }

    //function for all search
    public function search() {
        $name = $this->input->post("name");
        $maxBuy = $this->input->post("maxBuy");
        $minBuy = $this->input->post("minBuy");
        $maxSell = $this->input->post("maxSell");
        $minSell = $this->input->post("minSell");

        $this->load->model("mVegetables");

        $result = $this->mVegetables->search($name, $maxBuy, $minBuy, $maxSell, $minSell);

        $data["vegs"] = array();

        foreach ($result->result_array() as $row) {
            $row["Profit"] = $row["PriceSell"] - $row["PriceBuy"];
            $profitElement = array("Profit" => floatval($row["PriceSell"]) - floatval($row["PriceBuy"]));
            $row += $profitElement;
            array_push($data["vegs"], $row);
        }

        $this->load->view("veg/vShowVegetables", $data);
    }

    public function add() {
        $name = $this->input->post("name");
        $buyPrice = $this->input->post("buyPrice");
        $sellPrice = $this->input->post("sellPrice");

        //validating
        if(strlen($name) == 0) {
            echo "<script>alert('Vegetable name cannot be empty');</script>";
            $this->load->view("veg/vAddNewVegetable");
            return;
        }
        if(strlen($buyPrice) == 0) {
            echo "<script>alert('Invalid buying price');</script>";
            $this->load->view("veg/vAddNewVegetable");
            return;
        }
        if(strlen($sellPrice) == 0) {
            echo "<script>alert('Invalid selling price');</script>";
            $this->load->view("veg/vAddNewVegetable");
            return;
        }
        
        try {
            if((double)$buyPrice < 0)
                throw new Exception("Buying price cannot be smaller than 0");
            if((double)$sellPrice < 0)
                throw new Exception("Selling price cannot be smaller than 0");
        } catch (Exception $ex) {
            die($ex->getMessage());
        }
            

        $this->load->model("mVegetables");
        $this->mVegetables->add($name, $buyPrice, $sellPrice);

        $this->load->view("veg/vAddNewVegetable");
    }
   
    public function del() {

        $id = $this->input->post("id");
        
        $this->load->model("mVegetables");
        $this->mVegetables->del($id);

        $this->load->view("veg/vVegetableSearch");
    }

    public function showModify(){
        //get all and pass that data into modify vegetable view
        $id = $this->input->post("id");
        $name = $this->input->post("name");
        $priceBuy = $this->input->post("priceBuy");
        $priceSell = $this->input->post("priceSell");

        $data["vegs"] = array();
        $row = array("id"=>$id, "name"=>$name, "priceBuy"=>$priceBuy, "priceSell"=>$priceSell);
        array_push($data["vegs"], $row);

        //load the modify view with that data
        $this->load->view("veg/vModifyVegetable", $data);
    }

    public function modify() {
        $id = $this->input->post("id");
        $newName = $this->input->post("name");
        $newPriceBuy = $this->input->post("priceBuy");
        $newPriceSell = $this->input->post("priceSell");
        
        //now call model function to update these new values
        $this->load->model("mVegetables");
        $this->mVegetables->modify($id, $newName, $newPriceBuy, $newPriceSell);

        //after updating show search window again
        $this->load->view("veg/vVegetableSearch");
    }
}
?>