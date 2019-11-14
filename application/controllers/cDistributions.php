<?php
class cDistributions extends CI_Controller {
    public function index() {
        $this->load->view("dist/vAddNewDistribution");
    }

    //functions to load views
    public function showAdd() {
        //load buyers and vegetables data first and load the view with that data
        $this->load->model("mVegetables");
        $this->load->model("mBuyers");

        //loading buyer data
        $result = $this->mBuyers->getAll();
        $data["buyers"] = array();
        foreach($result->result_array() as $row) {
            array_push($data["buyers"], $row);
        }

        //loading vegetable data
        $result = $this->mVegetables->getAll();
        $data["vegs"] = array();
        foreach($result->result_array() as $row) {
            array_push($data["vegs"], $row);
        }


        //loading the view with data
        $this->load->view("dist/vAddNewDistribution", $data);
    }

    public function showSearch() {
        //load vegetables and buyers details and load the view with that data
        $this->load->model("mVegetables");
        $this->load->model("mBuyers");

        //loading buyer data
        $result = $this->mBuyers->getAll();
        $data["buyers"] = array();
        foreach($result->result_array() as $row) {
            array_push($data["buyers"], $row);
        }

        //loading vegetable data
        $result = $this->mVegetables->getAll();
        $data["vegs"] = array();
        foreach($result->result_array() as $row) {
            array_push($data["vegs"], $row);
        }

        //loading the view with data
        $this->load->view("dist/vDistributionSearch", $data);
    }

    //function for all search
    public function search() {
        $buyerID = $this->input->post("buyerID");
        $vegID = $this->input->post("vegID");
        $from = $this->input->post("from");
        $to = $this->input->post("to");

        $this->load->model("mDistributions");

        ////////////////////////////////////////////////////////////////
        $this->load->model("mBuyers");
        $buyer = $this->mBuyers->getName($buyerID);

        $this->load->model("mVegetables");
        $vegetable = $this->mVegetables->getName($vegID);

        $data["buyer"] = $buyer;
        $data["vegetable"] = $vegetable;
        ///////////////////////////////////////////////////////////////////


        $result = $this->mDistributions->search($buyerID, $vegID, $from, $to);

        
        $data["distributions"] = array();
        
        foreach ($result->result_array() as $row) {

            $quantity = $row["Quantity"]; 
            $deployDate = $row["deployDate"]; 
            $charge = $this->mVegetables->getSellingPrice($vegID)*$quantity;
            $profit = ($this->mVegetables->getSellingPrice($vegID) - $this->mVegetables->getBuyingPrice($vegID))*$quantity;

            array_push($data["distributions"], array("quantity"=>$quantity, "deployDate"=>$deployDate, "charge"=>$charge, "profit"=>$profit));
        }
        

        $this->load->view("dist/vShowDistributions", $data);
    }

    public function add() {
        $buyerID = $this->input->post("buyerID");
        $vegID = $this->input->post("vegID");
        $quantity = $this->input->post("quantity");
        $deployDate = $this->input->post("date");

        $this->load->model("mDistributions");
        $this->mDistributions->add($buyerID, $vegID, $quantity, $deployDate);
        
        $this->load->view("dist/vAddNewDistribution");
    }
   
    public function del() {
        $name = $this->input->post("name");

        $this->load->model("mVegetables");
        $this->mVegetables->del($name);

        $this->load->view("veg/vDeleteVegetable");
    }

    public function modify() {
        $name = $this->input->post("name");
        $newBuyPrice = $this->input->post("newBuy");
        $newSellPrice = $this->input->post("newSell");

        $this->load->model("mVegetables");
        $this->mVegetables->modify($name, $newBuyPrice, $newSellPrice);

        $this->load->view("veg/vModifyVegetable");
    }
}
?>