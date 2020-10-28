<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
        $this->load->model('user_model');
        $email = $this->input->post('email');
		$psw = $this->input->post('psw');
		$remember = $this->input->post('remember');
        if($email!=null){
			if($this->user_model->exist($email)){
                if($this->user_model->checkValid($email,$psw)){
                    
                    if($remember == "on"){
						setcookie('email',$email,time()+3600);
						setcookie('psw',$psw,time()+3600);
						setcookie('remember',$remember,time()+3600);
					}else{
						setcookie('email',$email,time()-3600);
						setcookie('psw',$psw,time()-3600);
						setcookie('remember',$remember,time()-3600);
                    }
                    
                    $this->sessionSetting($email);
                    echo $_SESSION["email"];
					$this->user_model->addVisitTime($_SESSION["id"]);
					$this->load->view('Student-Dashboard');
                }
                
            }
        }else{
            $this->load->view('login2');
        }

        
        
    }
    public function sessionSetting($email){
		if(!$this->session->userdata('logged_in')){
			$this->session->set_userdata('logged_in', 1);
			$this->session->set_userdata('email',$email);
			
			$res=$this->user_model->getStudentINFS($email);
			
			$ID=$res[0]->studentid;
			$password=$res[0]->password;
			$studentname=$res[0]->studentname;
//			$viewedMsg=$res[0]->viewedMsg;
			$enrollment=$this->user_model->getEnrollmentINFS($ID);
			$grade=$enrollment[0]->grade;
            $this->session->set_userdata('studentname',$studentname);
			$this->session->set_userdata('id',$ID);
			$this->session->set_userdata('password',$password);
			$this->session->set_userdata('grade',$grade);
//			$this->session->set_userdata('vmsg',$viewedMsg);
			
		}
	}

}
