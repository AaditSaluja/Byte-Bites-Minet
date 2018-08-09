<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pages extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper(['html', 'menu', 'component', 'date', 'form', 'g_recaptcha', 'asset']);
		$this->load->library("session");
	}
	public function view(...$page)
	{
		$page = implode($page, '/');
		$page = ((empty($page))?("home"):($page));
		if (!file_exists(APPPATH . "views/pages/{$page}.php"))
		{
			show_404();
		}
		else
		{
			$ini_file = APPPATH . "views/pages/{$page}.ini";
			if (file_exists($ini_file))
			{
				$data = parse_ini_file($ini_file);
			}
			$data['title'] = ((!isset($data['title']))?(ucfirst($page)):($data['title'])) . " | HireX";
			$data['theme'] = (!isset($data['theme']))?("default"):($data['theme']);

			$data['page'] = $page;
			$data['page_css'] = preg_replace('[\/]', '-', $page);
			$data['special_css'] = "";
			$data['csrf'] = ['name'=>$this->security->get_csrf_token_name(), 'hash'=>$this->security->get_csrf_hash()];

			$this -> load -> view("html/header", $data);
			if (file_exists(APPPATH . "views/themes/{$data['theme']}/header.php"))
			{
				$this -> load -> view("themes/{$data['theme']}/header", $data);				
			}
			$this -> load -> view("html/main_open");
			$this -> load -> view("pages/{$page}", $data);
			$this -> load -> view("html/main_close");
			$this -> load -> view("themes/{$data['theme']}/footer", $data);				
			$this -> load -> view("html/footer", $data);
		}
	}
	public function signup()
	{
			$this->load->helper(['email', 'form', 'string', 'url']);
			$this->load->library(['form_validation', 'session']);
			$this->response = [];
			$this->form_validation->set_rules([
				[
				"field" => "name",
				"label" => "name",
				"rules" => [
					"reduce_multiple_spaces",
					"required",
					"min_length[3]",
					"max_length[10]",
				],
			],
			]);
			$this->response["form_valid"] = $this->form_validation->run();
			if ($this->response["form_valid"] == FALSE)
			{ 
				$this->view("signup");
			}else{
				redirect("/login");
				$data_user = array(
					"name"=> $this->input->post("name"),
					"username"=> $this->input->post("username"),
					"password"=> $this->input->post("password"),
					"email"=> $this->input->post("email"),
					"mobile"=> $this->input->post("mobile")
				);
				print_r($data_user);
	}
	}
	public function login(){
		$this->load->helper(['email', 'form', 'string', 'url']);
		$this->load->library(['form_validation', 'session']);
		$this->response = [];
			$this->form_validation->set_rules([
				[
				"field" => "username",
				"label" => "name",
				"rules" => [
					"reduce_multiple_spaces",
					"required",
					"min_length[3]",
					"max_length[10]",
				],
			],
			]);
			$this->response["form_valid"] = $this->form_validation->run();
			if ($this->response["form_valid"] == FALSE)
			{ 
				// $this->view("login");
			}else{
				$this->session->set_userdata("loggedin", TRUE);
		        redirect("homel");
	}
	}
	public function logout(){
		$this->load->helper(['email', 'form', 'string', 'url']);
		$this->load->library("session");
		$this->session->set_userdata("loggedin", FALSE);
		redirect("/home");
	}
}