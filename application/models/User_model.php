<?php
class User_model extends CI_Model {

	public function searchUserByEmail($email){
		$sql = "SELECT * FROM student_infs WHERE email =?";
		$query=$this->db->query($sql,$email);
		return $query->result();
    }
    

    public function exist($email){
		if(sizeof($this->searchUserByEmail($email))>0){
			return true;
		}else{
			return false;
		}
    }

    public function checkValid($email,$UPW){
		if($this->exist($email)){
			if($this->verifyPW($email,$UPW)==0){
				return true;
			}
		}
		return false;
	}
    
    public function verifyPW($email,$pw){
		$sql = "SELECT password FROM student_infs WHERE email =?";
		$query=$this->db->query($sql,$email);
		$qrresult=$query->result();
		$spw=$qrresult[0]->password;
		return strcmp($spw,$pw);
	}


    public function getStudentINFS($email){
		$sql = "SELECT * FROM student_infs WHERE email =?";
		$query=$this->db->query($sql,$email);
		return $query->result();
	}

	public function getEnrollmentINFS($id){
		$sql = "SELECT * FROM enrollment WHERE studentid =?";
		$query=$this->db->query($sql,$id);
		return $query->result();
	}
	public function getVisitTime($studentid){
		$sql = "SELECT * FROM enrollment WHERE studentid =?";
		$query=$this->db->query($sql,$studentid);
		$vt=$query->result()[0]->visittime;
		return $vt;
	}

    public function addVisitTime($studentid){
		$sql = "SELECT * FROM enrollment WHERE studentid =?";
		$query=$this->db->query($sql,$studentid);
		$vt=$query->result()[0]->visittime;
		$vt=$vt+1;
		$this->db->set('visittime', $vt, FALSE);
		$this->db->where('studentid', $studentid);
		$this->db->update('enrollment');
        // $query=$this->db->query($sql,$vt,$studentid);
	}


	public function averageGrade($ccode){
		$query=$this->db->get('enrollment');
		$rowNumber=$query->num_rows();

		$this->db->select_sum('grade');
		$this->db->where('courseid', $ccode);
		$query=$this->db->get('enrollment');
		$totalGrade=$query->result()[0]->grade;
        return $totalGrade/$rowNumber;
	}

    
}