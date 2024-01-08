<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class fachri_ctrl_Dashboard extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->helper(array('url', 'form'));
    }

	public function index()
	{
        $data['Vpages'] = '';
		$this->load->view('fachri_template/fachri_vw_header');
		$this->load->view('fachri_template/fachri_vw_sidebar');
		$this->load->view('fachri_vw_menu_hitung', $data);
		$this->load->view('fachri_template/fachri_vw_footer');
	}

	function fachri_perkalian()
    {
        $this->form_validation->set_rules('v1','Data Panjang','trim|required|integer');
        $this->form_validation->set_rules('v2','Data Lebar','trim|required|integer');
        $this->form_validation->set_rules('v3','Data Tinggi','trim|required|integer');

        if ($this->form_validation->run() == true) {

            $data['v1'] = (int)$this->input->post('v1');
            $data['v2'] = (int)$this->input->post('v2');
            $data['v3'] = (int)$this->input->post('v3');
            $data['hasil'] = $data['v1'] * $data['v2'] * $data['v3'];
            
            $this->load->view('fachri_template/fachri_vw_header');
		    $this->load->view('fachri_template/fachri_vw_sidebar');
            $this->load->view('fachri_vw_perkalian', $data);
	    	$this->load->view('fachri_template/fachri_vw_footer');
        }
        else{

            $data['v1'] = "Masukan Panjang";
            $data['v2'] = "Masukan Lebar";
            $data['v3'] = "Masukan Tinggi";
            $data['hasil'] = '0';
			$this->load->view('fachri_template/fachri_vw_header');
		    $this->load->view('fachri_template/fachri_vw_sidebar');
            $this->load->view('fachri_vw_perkalian', $data);
	    	$this->load->view('fachri_template/fachri_vw_footer');

        }
    }

	function fachri_pembagian()
    {
        $this->form_validation->set_rules('v1','Data Panjang','trim|required|integer');
        $this->form_validation->set_rules('v2','Data Lebar','trim|required');
        $this->form_validation->set_rules('v3','Data Tinggi','trim|required');

        if ($this->form_validation->run() == true) {

            $data['v1'] = (int)$this->input->post('v1');
            $data['v2'] = (int)$this->input->post('v2');
            $data['v3'] = (int)$this->input->post('v3');
            $data['hasil'] = $data['v1'] / $data['v2'] / $data['v3'];
			$this->load->view('fachri_template/fachri_vw_header');
		    $this->load->view('fachri_template/fachri_vw_sidebar');
            $this->load->view('fachri_vw_pembagian', $data);
	    	$this->load->view('fachri_template/fachri_vw_footer');
        }
        else{

            $data['v1'] = "Masukan Panjang";
            $data['v2'] = "Masukan Lebar";
            $data['v3'] = "Masukan Tinggi";
            $data['hasil'] = '0';
			$this->load->view('fachri_template/fachri_vw_header');
		    $this->load->view('fachri_template/fachri_vw_sidebar');
            $this->load->view('fachri_vw_pembagian', $data);
	    	$this->load->view('fachri_template/fachri_vw_footer');

        }
    }

    function fachri_ujian()
    {
        $this->load->view('fachri_template/fachri_vw_header');
        $this->load->view('fachri_template/fachri_vw_sidebar');
        $this->load->view('fachri_vw_ujian');
        $this->load->view('fachri_template/fachri_vw_footer');
    }

}