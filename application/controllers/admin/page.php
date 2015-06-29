<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Page extends Admin_Controller {

	
	
	public function __construct()
	{
		parent::__construct();
		// Your own constructor code
		 $this->table			     = 	"cms_pages";
	     $this->primaryKey			 = 	"mm_page_id";
	     $this->table_fields	  	 =   array('mm_page_text','mm_page_text_arabic','mm_page_title','mm_page_title_arabic','mm_page_content','mm_page_content_arabic','mm_page_title_arabic','mm_page_url','image','map','mm_page_status');
	     $this->load->model('Basic_aj');
	     $this->load->library('upload');
	}
	
	
	public function index()
	{
		$this->load->view('admin/index');
	}
	
	
		
	
	public function edit()
	{
		
		$this->load->view('admin/header');
		$this->load->view('admin/index');
		$this->load->view('admin/footer');
		if ($mm_page_id <>"")
		{
			//$this->input->post(NULL,TRUE);
		
			foreach ($this->table_fields as $values){
				$data[$values]=$this->input->post($values);
			}
				
			//print_r($data);
			$this->Basic_aj->update($this->table,array($this->primaryKey=>'6'),$data);}
	}
	
	
	
	public function add()
	{
	
		
		// editor portion start
		
		$path = '/cms/assets/js/ckfinder';
		$width = '500px';
		$this->editor($path, $width);
		
		// editor portion end
		
		
		
		
		//$this->form_validation->set_rules('mm_page_text', 'Menu Title', 'required');
		
			if ($this->input->post('submit') <> ""){
		
		foreach ($this->table_fields as $value){
			$data[$value]=$this->input->post($value);
		}
		
			
		$insert_id=$this->Basic_aj->insert($this->table,$data);
		
		// Alternately you can set preferences by calling the initialize function. Useful if you auto-load the class:
		//$this->upload->initialize($config);
		
		$config['upload_path'] = './assets/uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '1000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		$this->upload->initialize($config);
		$this->load->library('upload', $config);
		
		if ( ! $this->upload->do_upload())
		{
			$this->error = array('error' => $this->upload->display_errors());
		
			$this->load->view('admin/pages_add', $this->error);
		}
		else
		{
			$upload_data = array('upload_data' => $this->upload->data());
		
			$this->Basic_aj->update("cms_pages",array('image'=>$upload_data['file_name']));
		}
		
		//redirect('admin/page/display');
			}
		$this->load->view('admin/pages_add');
		
		
		
    }
	
	
	public function display()
	{
			
		$count = $this->db->count_all_results('cms_pages');
		
		// Set up pagination
		$perpage = 4;
		if ($count > $perpage) {
			$this->load->library('pagination');
			$config['base_url'] = base_url()."admin/page/display/";
			$config['total_rows'] = $count;
			$config['per_page'] = $perpage;
			$config['uri_segment'] = 4;
			$this->pagination->initialize($config);
			$this->data['pagination'] = $this->pagination->create_links();
			$offset = $this->uri->segment(4);
		}
		else {
			$this->data['pagination'] = '';
			$offset = 0;
		}
		
		
		// Fetch articles
		
		$this->db->limit($perpage, $offset);
		$this->data['articles'] = $this->Basic_aj->getAll("cms_pages");
		$this->load->view('admin/pages_list',$this->data);
		
	}
	
	function editor($path,$width) {
		//Loading Library For Ckeditor
		$this->load->library('ckeditor');
		$this->load->library('ckFinder');
		//configure base path of ckeditor folder
		$this->ckeditor->basePath = base_url().'/assets/js/ckeditor/';
		$this->ckeditor-> config['toolbar'] = 'Full';
		$this->ckeditor->config['language'] = 'en';
		$this->ckeditor-> config['width'] = $width;
		//configure ckfinder with ckeditor config
		$this->ckfinder->SetupCKEditor($this->ckeditor,$path);
	}
	
	
	
	
}