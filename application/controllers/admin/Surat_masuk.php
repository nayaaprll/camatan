<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_masuk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Model_surat_masuk");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["surat_masuk"] = $this->Model_surat_masuk->getAll();
        $this->load->view("admin/surat_masuk/list", $data);
    }

    public function add()
    {
        $surat_masuk = $this->Model_surat_masuk;
        $validation = $this->form_validation;
        $validation->set_rules($surat_masuk->rules());

        if ($validation->run()) {
            $surat_masuk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/surat_masuk/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/surat_masuk');
       
        $surat_masuk = $this->Model_surat_masuk;
        $validation = $this->form_validation;
        $validation->set_rules($surat_masuk->rules());

        if ($validation->run()) {
            $surat_masuk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["surat_masuk"] = $surat_masuk->getById($id);
        if (!$data["surat_masuk"]) show_404();
        
        $this->load->view("admin/surat_masuk/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->Model_surat_masuk->delete($id)) {
            redirect(site_url('admin/Surat_masuk'));
        }
    }
}