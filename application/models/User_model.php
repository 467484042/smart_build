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


	public function searchUserByEmail2($email){
		$sql = "SELECT * FROM teacher_infs WHERE email =?";
		$query=$this->db->query($sql,$email);
		return $query->result();
	}

	public function exist2($email){
		if(sizeof($this->searchUserByEmail2($email))>0){
			return true;
		}else{
			return false;
		}
	}

	public function checkValid2($email,$UPW){
		if($this->exist2($email)){
			if($this->verifyPW2($email,$UPW)==0){
				return true;
			}
		}
		return false;
	}

	public function verifyPW2($email,$pw){
		$sql = "SELECT password FROM teacher_infs WHERE email =?";
		$query=$this->db->query($sql,$email);
		$qrresult=$query->result();
		$spw=$qrresult[0]->password;
		return strcmp($spw,$pw);
	}

	public function verifyPW($email,$pw){
		$sql = "SELECT password FROM student_infs WHERE email =?";
		$query=$this->db->query($sql,$email);
		$qrresult=$query->result();
		$spw=$qrresult[0]->password;
		return strcmp($spw,$pw);
	}

	public function encodePw(){
		$this->load->library('encrypt');
		$sql = "SELECT password FROM student_infs";
		$query=$this->db->query($sql);
		$qrresult=$query->result();
		for($i=0;$i<sizeof($qrresult);$i++){
			$spw=$qrresult[$i]->password;
			$encodedpw=$this->encrypt->encode($spw);
			$this->db->set('password', $encodedpw);
			$this->db->where('studentid', $qrresult[$i]->studentid);
			$this->db->update('student_infs');
		}
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


	public function fetchQuestions($week){
		$sql = "SELECT * FROM question_poll WHERE week =?";
		$query=$this->db->query($sql,$week);
		return $query->result();
	}


	public function fetchUserAns($sid,$week){

		$this->db->from('quiz_attemp');
		$this->db->where('studentid', $sid);
		$this->db->where('week', $week);
		$query=$this->db->get();
		return $query->result();
	}
	public function getQuizAttempNumber($ccode,$week){

		$this->db->from('quiz_attemp');
		$this->db->where('courseid', $ccode);
		$this->db->where('week', $week);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function getQuizGrade($ccode,$week,$sid){

		$this->db->from('quiz_attemp');
		$this->db->where('courseid', $ccode);
		$this->db->where('studentid ', $sid);
		$this->db->where('week', $week);
		$query=$this->db->get();
		return $query->result();
	}

	public function getAvgGrade($ccode,$week){
		$this->db->select_avg('grade');
		$query=$this->db->get('quiz_attemp');
		return $query->result();

	}

	public function getDiscussionQuestion($ccode){

		$this->db->from('discussion_questions');
		$this->db->where('ccode', $ccode);
		$query=$this->db->get();
		return $query->result();
	}

	public function getComments($discussionID){
		$this->db->from('have');
		$this->db->where('question_id', $discussionID);
		$query=$this->db->get();
		return $query->result();
	}

	public function getCommentContent($comments){
		$this->db->from('comments');
		$this->db->where_in('comment_id', $comments);
		$query=$this->db->get();
		return $query->result();
	}

	public function insertDiscussionQuestion($content){
		$this->db->insert('discussion_questions', $content);
	}

	public function insertcomment($content){
		$this->db->insert('comments', $content);
		$insert_id = $this->db->insert_id();
		return $insert_id;
	}

	public function insertHave($content){
		$this->db->insert('have', $content);
	}


	public function totoalDiscussionQuestion($ccode){

		$this->db->from('discussion_questions');
		$this->db->where('ccode', $ccode);
		$query=$this->db->get();
		return $query->num_rows();
	}

	public function readAll($ccode,$email){
		$this->db->from('discussion_questions');
		$this->db->where('ccode', $ccode);
		$query=$this->db->get();
		$rows=$query->num_rows();
		$this->db->set('viewedMsg', $rows);
		$this->db->where('email', $email);
		$this->db->update('student_infs');

	}

	public function existUser($content){
		$this->db->from('quiz_attemp');
		$this->db->where('studentid', $content["studentid"]);
		$this->db->where('week', $content["week"]);
		$query=$this->db->get();
		return $query->num_rows();
	}


	public function insertQuizResult($content){
		$this->db->where('studentid', $content["studentid"]);
		$this->db->delete('quiz_attemp');
		$this->db->insert('quiz_attemp', $content);
//		if($this->existUser($content)>0){
//
//			$this->db->where('studentid',  $content["studentid"]);
//			$this->db->set('q1', $content["q1"]);
//			$this->db->set('q2', $content["q2"]);
//			$this->db->set('q3', $content["q3"]);
//			$this->db->set('grade', $content["grade"]);
//			$this->db->update('quiz_attemp', $content);
//		}else{
//			$this->db->insert('quiz_attemp', $content);
//		}


	}







}
