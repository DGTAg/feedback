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
<<<<<<< HEAD
		//$this->load->library('session');
		if(isset($type)) {
			if($type=="peepoo")
				$id = 1;
			else if ($type=="smartq")
				$id=2;
			else if ($type=="codify")
				$id=3;
			else if ($type=="askgov")
				$id=4;
			else if ($type=="moja")
				$id=5;

			$res = $this->mfeedback->insert_feedback($id);

			
		}

		//echo $type . $id;
		
		if ($res) {

			$this->session->set_flashdata('submited', 'Your respons has been added...');
			redirect('proses/form/' . $type);
		}
		else{
			echo "Your respons failed to save...";
		}

		


=======
		if(isset($type)) {
			$this->mfeedback->insert_feedback($type);
		}

		redirect('proses');
>>>>>>> 1d23411c4c1e3a07ae57bff65d0b8fd8de173318
	}
}
