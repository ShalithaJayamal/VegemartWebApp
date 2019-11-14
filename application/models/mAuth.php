<?php
class mAuth extends CI_Model{
	public function __construct() {
		$this->load->database();
	}

	public function register($fName, $lName, $uName, $pwd){
		$data = array("firstname"=>$fName, "lastname"=>$lName, "username"=>$uName, "password"=>md5($pwd));

        $this->db->set($data);
        $this->db->insert("user_reg");
	}

	public function exists($uName) {
		$this->db->select("username");
        $this->db->from("user_reg");
        $this->db->where("username", $uName);

		$result =  $this->db->get();
		if($result->num_rows() > 0) //exists
			return true;
		else
			return false;
	}

	public function getdata(){
		$query = $this->db->get('user_reg');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function delete($username){
		$this->db->where('username', $username);
		$this->db->delete('user_reg');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function submit() {
		$field = array(
			'firstname'=>$this->input->post('firstname'),
			'lastname'=>$this->input->post('lastname'),
			'username'=>$this->input->post('username'),
			'password'=>md5($this->input->post('password'))
			);
			$this->db->insert('user_reg', $field);
			if($this->db->affected_rows() > 0){
				return true;
			}else{
				return false;
			}
	}

	public function validate($username, $password) {
		$this->db->select("username, password");
		$this->db->from("user_reg");
		$this->db->where('username', $username);

		$query = $this->db->get();
		if(count($query->result_array()) > 0 && $query->result_array[0]["password"] == md5($password))
			return true;
		else
			return false;
	}
}
