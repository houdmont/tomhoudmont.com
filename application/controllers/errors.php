<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->data = array();
		$this->data['header'] = array();
		$this->data['header']['title'] = 'Error 404';
		$this->data['content'] = $this->load->view('errors/error_404', '', true);


		if(ENVIRONMENT === 'production') {
			$this->output->cache(5);
		}
	}

	public function error_404() {
		$this->load->view('templates/layout', $this->data);
	}
}

/* End of file Errors.php */
/* Location: ./application/controllers/welcome.php */