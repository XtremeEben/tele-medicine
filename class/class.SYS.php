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
	public function isLoggedIn()
	{
		return ((isset($_SESSION['logged_in'])) && ($_SESSION['logged_in'] == true)) ? true : false;
	}
	public function logout()
	{
		session_unset();
		return session_destroy();
	}
	public function addDoctor($fname, $lname, $gender, $email, $phone, $specialty, $dob, $password)
	{
		$insertData = [
			'fname' => $fname,
			'lname' => $lname,
			'gender' => $gender,
			'specialty_id' => $specialty,
			'contact' => $phone,
			'email' => $email,
			'dob' => $dob,
			'password' => $password
		];
		if ($this->db->insert('md_doctor', $insertData)) {
			return true;
		} else {
			return false;
		}
	}
	public function insert($table, $data = [])
	{
		if ($this->db->insert($table, $data)) {
			return $this->getLastInsertID();
		} else {
			return $this->db->getLastError();
		}
	}
	public function getLastInsertID()
	{
		return $this->db->getLastInsertID();
	}
	public function addSpecialty($name)
	{
		$insertData = ['specialty' => $name];
		if ($this->db->insert('md_specialty', $insertData)) {
			return true;
		} else {
			return false;
		}
	}
	public function isAdmin()
	{
//	    return ($_SESSION['user']['login_type']);
		return ($_SESSION['user']['login_type'] == '1') ? true : false;
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
	public function addpatient($fname, $lname, $gender, $email, $phone, $dob, $em_contact, $password, $address)
	{
		$insertData = [
			'fname' => $fname,
			'lname' => $lname,
			'gender' => $gender,
			'em_contact' => $em_contact,
			'contact' => $phone,
			'email' => $email,
			'dob' => $dob,
			'address' => $address,
			'password' => $password
		];
		if ($this->db->insert('md_doctor', $insertData)) {
			return true;
		} else {
			return false;
		}
	}
	public function getCurrentUser()
	{
		if (isset($_SESSION['user'])){
            $user = $_SESSION['user'];
            // print_r($user);
            if ($this->isAdmin()) {
                // print_r("I am admin");
                $this->db->where('email', $user['email']);
                return $this->db->getOne('md_doctor');
            } else {
                // print_r("I am patient");
                $this->db->where('email', $user['email']);
                return $this->db->getOne('md_patient');
            }
        } else {
		    return "Error: You're not logged in";
        }
	}
	public function getUser($id)
	{
			$this->db->where('doc_id', $id);
			return $this->db->getOne('md_doctor');
		
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
	    $cu = $this->getCurrentUser()['doc_id'];
	    $sql = "update md_doctor set status = 'Offline' where now() - last_seen > 320";
	    print_r($this->db->rawQuery($sql));

	    $stmt = "update md_doctor set status = 'Online' where doc_id = $cu";
	    return $this->db->rawQuery($stmt);

	}
	public function setOfflineUsers()
	{
		$date = date('Y-m-d h:i:s', time());

	}
}
	