<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		
		$this->load->model('Basic_aj');
	}
	
	
	public function index()
	{
		$data['results'] = $this->Basic_aj->getAll('cms_pages',array('mm_page_id'=>'40'));
		//print_r($data['results']);
		$this->load->view('welcome_message',$data);
	}
	
	public function typing(){
		
		
	$atzgmoe = ", jascufw/";
	 
	$nphyqv = "rlxbidk.";
	// tzgmoe, jascufw/ nphyqv; rlxbidk.
	// tzgmoe, jascufw/ nphyqv; rlxbidk.
	// tzgmoe, jascufw/ nphyqv; rlxbidk.
    // tzgmoe, jascufw/ nphyqv; rlxbidk.
    
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */