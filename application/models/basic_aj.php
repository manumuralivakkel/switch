<?php

//Written by: Manu Murali
//Date:30-4-2015
class Basic_aj extends CI_Model {
	
	
	
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	
	
	
	//-------------------****************************CRUD SECTION START***********************************************************-----------------------------------
	
	
	//-------------------Insert values into Database-------------
	
	function insert($table=NULL,$values=NULL,$where=NULL,$orderby=NULL) {
		
		
		$this->db->insert($table, $values);
		
		return  $this->db->insert_id();
	}
	
	
	//-------------------insertion end-------------
	
	
	
	
	//-------------------update values in Database-------------
	
	
	function update($table=NULL,$where=NULL,$values=NULL,$orderby=NULL) {
		
		
		
		$this->db->update($table, $values);
		
		return $this->db->affected_rows();
	}
	
	
	//-------------------update end-------------
	
	
	
	
	
	//-------------------delete values from Database-------------
	
	function delete($table=NULL,$where=NULL,$orderby=NULL) {
		
		$this->db->where($where);
		
		$query = $this->db->delete($table);
		//$this->db->delete($tables);
	}
	
	
	//-------------------delete end--------------------------------
	
	
	
		
	
	
	
	
	//-------------------Get all values from Database-------------
	
	
	
	
	function getAll($table=NULL,$where=NULL,$orderby=NULL) {
	
		if($orderby!='')
			$this->db->order_by($orderby);
	
		if($where!='')
			$this->db->where($where);
	
		$query = $this->db->get($table);
	
		return $query->result();
	}
	
	//-----------------------return 2D array------------------------
	
	
	
	//-------------------Get Row from Database----------------------
	
	function getRow($table=NULL,$where=NULL,$orderby=NULL) {
	
		if($orderby!='')
			$this->db->order_by($orderby);
		
		if($where!='')
			$this->db->where($where);
		
		$query = $this->db->get($table);
		
		return $query->result();
	
	}
	
	
	//-----------------------return 1D array------------------------
	

	
	
	//-------------------Get purticular column from Database-------------
	
	function getColumn($table=NULL,$column=NULL,$where=NULL,$orderby=NULL) {
	
		if($orderby!='')
			
			$this->db->order_by($orderby);
		
		$this->db->select($column);
		
		$this->db->where($where);
		
		$query=$this->db->get($table);
		
		//$query=$this->db->query('SELECT '.$column.' FROM '.$table.' WHERE '.$where);
		
		return $query->result();
	}
	
	//-------------------return 2d array-------------
	
	
	
	
	//-------------------Get purticular field from Database-------------
	
	function getField($table=NULL,$column=NULL,$where=NULL,$orderby=NULL) {
	
		
		if($orderby!='')
				
			$this->db->order_by($orderby);
		
		$this->db->select($column);
		
		$this->db->where($where);
		
		$query=$this->db->get($table);
		
		//$query=$this->db->query('SELECT '.$column.' FROM '.$table.' WHERE '.$where);
		
		return $query->result();
	
	}
	
	//-------------------return array with values-------------
	
	
	
	
	//-------------------Get Distinct column  from Database-------------
	
	function getDistinct($table=NULL,$column=NULL,$where=NULL,$orderby=NULL) {
	
	
		$this->db->distinct();
		
		if($column!='')
		
			$this->db->select($column);
		
		$query=$this->db->get($table);
		
		//$query=$this->db->query('SELECT DISTINCT '.$column.' FROM '.$table);
		
		return $query->result();
		
	}
	
	//-------------------return array with values-------------
	
	
	
		
	
	
	//-------------------Get search result from table-------------
	
	function getSearch($table=NULL,$feilds=NULL,$string=NULL,$orderby=NULL) {
	
		
		//print_r($feilds);
		
		$key=1;
		foreach($feilds as $values)
		{
			
			
			
			//echo $values;
			if ($key==1){
				
				$this->db->like($values, $string);}
				
			if ($key<>1){
				
				$this->db->or_like($values, $string);}
				
				$key=$key+1;
				
		}
		
		$query=$this->db->get($table);
		
		//$this->db->like('title', 'match');
		
		//$this->db->or_like('body', $match);
		
		//$query=$this->db->query("SELECT * FROM ".$table." WHERE ".$column." LIKE '%".$string."%'");
		
		return $query->result();
		
		
	}
	
	
	// Fetch data according to per_page limit.
	 function getLimit($table,$limit, $id) {
		
		$this->db->limit($limit);
		$this->db->where('id', $id);
		$query = $this->db->get("contact_info");
		if ($query->num_rows() > 0) {
			foreach ($query->result() as $row) {
				$data[] = $row;
			}
			 
			return $data;
		}
		return false;
	}
	
	
	//-------------------****************************CRUD SECTION END************************************************************-----------------------------------
	
	
	
	
	

	//-------------------****************************LOGIN SECTION START***********************************************************-----------------------------------
	
	 function login($table=NULL,$username=NULL,$password=NULL)
	{
	
	
		$this->db->where($username);
		$this->db->where($password);
		$user = $this->db->get($table);
	if ($user <>"")
		return $user->result();
	else 
		return FALSE;
		//return $user;
		/* $user = $this->get_by(array(
		 'email' => $this->input->post('email'),
		 'password' => $this->hash($this->input->post('password')),
		), TRUE);
	
		foreach ($user as $val){
		$data['name'] = $val->name;
		$data['email'] = $val->email;
		$data['user_id'] = $val->id;
		$data['loggedin'] = TRUE;
		}*/
		/* if (count($user)) {
		 // Log in user
		 $data = array(
		 'name' => $user->name,
		 'email' => $user->email,
		 'user_id' => $user->id,
		 'loggedin' => TRUE,
		 ); */
		//print_r($data);
		//$this->session->set_userdata($data);
		//return TRUE;
	
	
		// If we get to here then login did not succeed
		//return FALSE;
	}
	
	
	
	
	 function logout()
	{
		$this->session->sess_destroy();
	}
	
	 function loggedin()
	{
		return (bool) $this->session->userdata('loggedin');
	}
	
	
	 function hash($string)
	{
		return hash('sha512', $string . config_item('encryption_key'));
	}
	
	
	
	
	//-------------------****************************************************LOGIN SECTION END*****************************************--------------------------------
	
	
	
	
	
	
	//-------------------****************************CART SECTION START******************************************************-------------------------------------------
	
	//-------------------****************************CART SECTION END*********************************************************-------------------------------------------
	
	
	
	
	
	
	
}