<?php
class Admin_Controller extends MY_Controller
{

	function __construct ()
	{
		
		
		parent::__construct();
		$this->data['meta_title'] = 'CMS';
		$this->load->model('Basic_aj');
		
		
		//file uploading start
		
		
		//file uploading end
		
		
		
		// Login check start
		$exception_uris = array(
			'admin/user/login', 
			'admin/user/logout'
		);
		if (in_array(uri_string(), $exception_uris) == FALSE) {
			if ($this->Basic_aj->loggedin() == FALSE) {
				redirect('admin/user/login');
			}
		}
	
		// Login check end
		
		
		
		
		
	}
	
	
}