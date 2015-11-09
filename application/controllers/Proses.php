<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

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
	public function index()
	{
		$vars['body'] = 'landing';
		$this->load->view('base', $vars);
		//$this->load->view('index');
	}

	public function form($type = NULL) {

		if (isset($type)) {
			$vars['type'] = $type;
			$vars['body'] = 'form';
			$this->load->view('base', $vars);
		} else {
			redirect('proses');
		}
	}

	public function submit($type = NULL)
	{
		if(isset($type)) {
			$this->mfeedback->insert_feedback($type);
		}

		redirect('proses');
	}
}
