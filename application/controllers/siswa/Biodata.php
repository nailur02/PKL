<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Biodata extends CI_Controller
{
    function __construct()
    {
        parent::__construct();        
        $this->load->library('form_validation');
        $this->load->library('m_db');
        if(akses()!="siswa")
        {
			redirect(base_url().'logout');
		}
		$this->load->model('siswa_model','mod_siswa');
    }
    
    function index()
    {
    	$userid=user_info('user_id');
        $meta['judul']="Biodata Siswa";
        $this->load->view('tema/header',$meta);
        $d['data']=$this->m_db->get_data('siswa',array('user_id'=>$userid));
        $this->load->view(akses().'/biodata/biodataview',$d);
        $this->load->view('tema/footer');
    }
    
}
