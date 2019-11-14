<?php
class cAuth extends CI_Controller{
	public function index(){
		$this->load->view("usr/adminpage");
	}
	
	public function signupform(){
		$this->load->view("usr/signup");
	}

	public function login() {
		$this->load->view("usr/login");
	}

	public function add(){
		$this->load->view('add');
	}

	public function adminlog(){
		$data['users'] = $this->Vege_m->getdata();
		$this->load->view('vege/adminpage', $data);
	}

	public function submit(){
		$result = $this->Vege_m->submit();
		redirect(base_url('index.php/Vege/adminlog'));
	}

	public function delete($username){
		$result = $this->Vege_m->delete($username);
		redirect(base_url('index.php/Vege/adminlog'));
	}


	public function register(){
		$firstname = $this->input->post('fname');
		$lastname = $this->input->post('lname');
		$username = $this->input->post('user');
		$password = $this->input->post('pass');

		$this->load->model("mAuth");
		//check if this username already exists
		if($this->mAuth->exists($username)) {
			echo "<script>alert('Username already exists');</script>";
			$this->load->view("usr/signup");
			return;
		}
		
		//data validating
		if($firstname == "" || $lastname == "" || $username == "" || $password == "") { //invalid
			echo "<script>alert('Invalid data');</script>";
			$this->load->view("usr/signup");
			return;
		}

		//now everything is done. Now register the user
		$this->mAuth->register($firstname, $lastname, $username, $password);

		//now registered. load the login page
		$this->load->view("usr/login");
	}

	public function verify(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');


		$this->load->model('mAuth');
		if($this->mAuth->validate($username, $password)) //right
			$this->load->view("vLoggedHome");
		else {
			echo "<script>alert('Wrong username or password');</script>";
			$this->load->view("usr/login");
			return;
		}
	}
}	