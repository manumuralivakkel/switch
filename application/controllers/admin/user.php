<?php 

class User extends Admin_Controller {

		
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		 $this->loginflag =FALSE;
		 $this->table			     = 	"cms_user_master";
	     $this->primaryKey			 = 	"mm_user_id";
	     $this->table_fields	  	 =   array('');
	     $this->logindata=array();
	     $this->load->model('Basic_aj');
	}
	
	
	public function index()
	{
		$this->load->view('admin/index');
	}
	
	
	
	public function login()
	{
		
       
		$username=$this->input->post('mm_user_name');
		$password=$this->Basic_aj->hash($this->input->post('mm_user_password'));
		$result=$this->Basic_aj->login('cms_user_master',array('mm_user_name'=>$username),array('mm_user_password'=>$password));
        
        //$data=$this->input->post();
       // print_r($result);
        
		foreach ($result as $val){
			$this->logindata = array(
        		'fname' => $val->first_name,
        		'lname' => $val->last_name,
        		'username' => $val->mm_user_name,
        		'email' => $val->mm_user_email,
        		'user_id' => $val->mm_user_id,
        		'loggedin' => TRUE,
					);
		}
		
		
      // print_r($data);
      
         if ($this->logindata <> ""){
			
         	$this->loginflag=TRUE;
		}
        $this->session->set_userdata($this->logindata); 
        
        
        
      
        $dashboard = 'admin/page/add';
        $this->Basic_aj->loggedin() == FALSE || redirect($dashboard);
        /* 
     
      
        
       $this->form_validation->set_rules('trim|required|valid_email|xss_clean');
        
        
        if ($this->form_validation->run() == TRUE) {
        	 
        	if ($this->loginflag == TRUE) {
        		redirect($dashboard);
        	}
        	else {
        		$this->session->set_flashdata('message', 'That email/password combination does not exist');
        		redirect('admin/page/add');
        		
        	}
        } */
        
       
        $this->load->view('admin/index', $this->data);
        
	}
	
	
	
	public function logout ()
	{
		$this->Basic_aj->logout();
		redirect('admin/user/login');
	}
	
	
	
	
	

	
	
}