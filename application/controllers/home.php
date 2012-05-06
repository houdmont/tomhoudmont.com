<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


	public function __construct() {
		parent::__construct();

		$this->data = array();
		$this->data['header'] = array();
		$this->data['header']['title'] = 'Home page';
		$this->data['content'] = $this->load->view('homepage_view', '', true);


		if(ENVIRONMENT === 'production') {
			$this->output->cache(5);
		}
		if(ENVIRONMENT === 'development') {
			//$this->output->enable_profiler(TRUE);
		}
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/home
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

	public function index() {
		
		$this->twitter->set_api('search');
		$this->twitter->set_setting('q', 'from:houdmont');

		$this->data['twitter'] = $this->twitter->search();

		$this->load->view('templates/layout', $this->data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */