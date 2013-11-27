<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class campaign extends CI_Controller {
	//private $school_name;
      private $leader_id;
	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('campaigns_model');
	}

	public function index()
	{
	    $data['leadersengineering'] = $this->campaigns_model->get_leadersperschool("School Of Engineering");
	    $data['leaderseducation'] = $this->campaigns_model->get_leadersperschool("School Of Education");
	    $data['leaderslaw'] = $this->campaigns_model->get_leadersperschool("School Of Law");
	    $data['leadershospitality'] = $this->campaigns_model->get_leadersperschool("School Of Hospitality");
	    $data['leadersexecutive'] = $this->campaigns_model->get_leadersperschool("Executive");
	    

     	$this->load->view('header.php' ,$data);
		$this->load->view('campaign.php' ,$data);
	}

	public function voteforme($leader_id)
	{
		$data['leader'] = $this->campaigns_model->get_leader("$leader_id");
	    $data['lcampaign'] = $this->campaigns_model->get_lcampaign("$leader_id");
	    $this->load->view('header.php' ,$data);
		$this->load->view('voteforme.php' ,$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */