<?php
class cBuyers extends CI_Controller
{
    public function index(){
        $this->load->view("buy/vAddNewBuyer");
    }

    //function to load views
    public function showAdd() {
        $this->load->view("buy/vAddNewBuyer");
    }

    public function showSearch() {
        $this->load->view("buy/vBuyerSearch");
    }

    //search by all
    public function search() {
        $name = $this->input->post("name");
        $tp = $this->input->post("tp");
        $addr = $this->input->post("addr");

        $this->load->model("mBuyers");
        $result = $this->mBuyers->search($name, $tp, $addr);

        $data["buyers"] = array();
        
        foreach ($result->result_array() as $row)
            array_push($data["buyers"], $row);

        $this->load->view("buy/vShowBuyers", $data);
    }

    public function add() {
        $name = $this->input->post("name");
        $tp = $this->input->post("tp");
        $addr = $this->input->post("addr");

        //validating
        if(strlen($name) == 0) {
            echo "<script>alert('Name cannot be empty');</script>";
            $this->load->view("buy/vAddNewBuyer");
            return;
        }
        if(strlen($tp) == 0) {
            echo "<script>alert('Telephone number cannot be empty');</script>";
            $this->load->view("buy/vAddNewBuyer");
            return;
        }
        if(strlen($addr) == 0) {
            echo "<script>alert('Address cannot be empty');</script>";
            $this->load->view("buy/vAddNewBuyer");
            return;
        }


        $this->load->model("mBuyers");
        $this->mBuyers->add($name, $tp, $addr);

        $this->load->view("buy/vAddNewBuyer");
    }


    public function del() {
        $id = $this->input->post("id");
        
        $this->load->model("mBuyers");
        $this->mBuyers->del($id);

        $this->load->view("buy/vBuyerSearch");
    }

    public function showModify() {
        $id = $this->input->post("id");
        $name = $this->input->post("name");
        $tp = $this->input->post("tp");
        $addr = $this->input->post("addr");

        $data["buyer"] = array();
        $row = array("id"=>$id, "name"=>$name, "tp"=>$tp, "addr"=>$addr);
        array_push($data["buyer"], $row);

        //load the modify view with this data
        $this->load->view("buy/vModifyBuyer", $data);
    }

    public function modify() {
        $id = $this->input->post("id");
        $newName = $this->input->post("name");
        $newTP = $this->input->post("tp");
        $newAddr = $this->input->post("addr");
        
        //now call the model functions to update values
        $this->load->model("mBuyers");
        $this->mBuyers->modify($id, $newName, $newTP, $newAddr);

        //after updating show search buyers window again
        $this->load->view("buy/vBuyerSearch");
    }
}

?>