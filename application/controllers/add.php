<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class add extends CI_Controller {
	function __construct()
	{
		parent::__construct();

		$this->load->helper('url');
		$this->load->library('tank_auth');
	}
	public function watek()
	{
		$username=$this->input->post('username');
		$time=$this->input->post('time');
		$name=$this->input->post('name');
		$important=$this->input->post('important');
		$this->load->model('upload_Model');
		$this->upload_Model->watek($username,$time,$name,$important);
	}
	public function post()
	{
		$username=$this->input->post('username');
		$time=$this->input->post('time');
		$name=$this->input->post('name');
		$watkiid=$this->input->post('watkiid');
		$this->load->model('upload_Model');
		$this->upload_Model->post($username,$time,$name,$watkiid);
	}
	public function wpis()
	{
		$username=$this->input->post('username');
		$time=$this->input->post('time');
		$name=$this->input->post('name');
		$important=$this->input->post('important');
		$this->load->model('upload_Model');
		$this->upload_Model->watek($username,$time,$name,$important);
	}
}