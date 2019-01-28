<?php


	require "class.db.php";
	// session_destroy();
	class Sys
	{
    private $db;
    private $database_type = 'mysql';
    private $database_host = 'localhost';
    private $database_username = 'root';
    private $database_password = '';
    private $database_name = 'medical';
		private $conn_status = null;
		public $sys_date;


    function __construct()
    {
			$this->db = new PDODb($this->database_type, $this->database_host, $this->database_username, $this->database_password, $this->database_name);
	    $this->conn_status = ($this->db) ? true : false;
			$this->is_conn();
			$this->sys_date = date('Y-m-d h:i:s', time());
    }
		
		public function is_conn()
    {
	    if ($this->conn_status == false) {
		    return false;
	    } else {
				return true;
	    }
			
    }
		
		public function canLogin($username, $password)
		{
			$this->db->where('email', $username);
			$this->db->where('password', $password);
			$user = $this->db->getOne('md_login');
				$canLogin = ($user) ? true : false;
				if ($canLogin == true) {
					$_SESSION['logged_in'] = true;
					$_SESSION['user'] = $user;
				}
				return $canLogin;
				
		}
		public function isLoggedIn() {
			return ((isset($_SESSION['logged_in']))&&($_SESSION['logged_in']==true))? true: false;
		}
		public function logout() {
			session_unset();
    	return session_destroy();
		}
		public function addDoctor ($fname, $lname, $gender, $email, $phone, $specialty, $dob, $password) {
			$insertData = [
				'fname' => $fname,
				'lname' => $lname,
				'gender' => $gender,
				'specialty_id' => $specialty,
				'contact' => $phone,
				'email'=> $email,
				'dob'=> $dob,
				'password'=>$password
			];
			if($this->db->insert('md_doctor', $insertData)) {
				return true;
			} else {
				return false;
			}
		}
		public function getLastInsertID()
		{
			return $this->db->getLastInsertID();
		}
		public function addSpecialty($name)
		{
			$insertData = ['specialty' => $name];
			if($this->db->insert('md_specialty', $insertData)) {
				return true;
			} else {
				return false;
			}
		}
		public function isAdmin()
		{
			return ($_SESSION['user']['login_type']=='1')? true:false;
		}
		public function getSpecialty()
		{
			return $this->db->get('md_specialty');
		}
		public function getOneSpec($specialty)
		{
			$this->db->where('sp_id');
			return $this->db->getOne('md_specialty');
		}
		public function addpatient  ($fname, $lname, $gender, $email, $phone, $dob,$em_contact,$password,$address) {
			$insertData = [
				'fname' => $fname,
				'lname' => $lname,
				'gender' => $gender,
				'em_contact' => $em_contact,
				'contact' => $phone,
				'email'=> $email,
				'dob'=> $dob,
				'address'=>$address,
				'password'=>$password
			];
			if($this->db->insert('md_doctor', $insertData)) {
				return true;
			} else {
				return false;
			}
		}
		public function getCurrentUser()
		{
			$user = $_SESSION['user'];
			print_r($user);
			if($this->isAdmin()) {
				print_r("I am admin");
				$this->db->where('email', $user['email']);
				return $this->db->getOne('md_doctor');
			} else {
				print_r("I am patient");
				$this->db->where('email', $user['email']);
				return $this->db->getOne('md_patient');
			}
		}
		public function unsetAllSession()
		{
			// $_SESSION['logged_in'] = false;	
			// $_SESSION['user'] = null;
			// $_SESSION['admin'] = false;
			// $_SESSION['patient'] = false;
			return $_SESSION;
		}
		public function getAllDocs()
		{
			return $this->db->get('md_doctor');
		}
		public function getRaw($sql, $params = null)
		{
			return $this->db->rawQuery($sql, $params);
		}
		public function update($table, $params)
		{
			return $this->db->update($table, $params);
		}
		public function getLastError()
		{
			return $this->db->getLastError();
		}
		public function lastQuery()
		{
			return $this->db->getLastQuery();
		}
		public function updateOnlineuser()
		{
			$data = ['last_seen' => $this->sys_date, 'status' => '1'];
			$this->db->where('email', $_SESSION['user']['email']);
			$this->db->update('md_doctor', $data);

			$res = [];
			$docs = $this->getAllDocs();
			foreach ($docs as $value) {
				if(strtotime($this->sys_date) + strtotime($value['last_seen']) < 120){
					echo "I'm online";
					// return strtotime(-($this->sys_date)) - strtotime($value['last_seen']);
						$docStatus = array('status' => 'Online');
						$this->db->where("doc_id", $value['doc_id']);
						$res[$value['doc_id']] = $this->db->update('md_doctor', $docStatus); 
					}
					// if((strtotime($this->sys_date) - strtotime($value['last_seen']) >= 21) && (strtotime($app->sys_date) - strtotime($value['last_seen']) <= 60)){
						// 	$docStatus = array('doc_id' => $value['doc_id'], 'status' => '2');
						// 	return $this->db->update('md_doctor', $docStatus);
						// }
						else {
							echo "I'm offline";
							$docStatus = array('status' => 'Offline');
							$this->db->where("doc_id", $value['doc_id']);
							$res [$value['doc_id']] = $this->db->update('md_doctor', $docStatus);
						}
						// return $docStatus;exit;
		}
		return $this->db->withTotalCount()->getParams();
		}
		public function setOfflineUsers()
		{
			$date = date('Y-m-d h:i:s', time());

		}
	}
	