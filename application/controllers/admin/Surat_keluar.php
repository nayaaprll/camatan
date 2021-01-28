<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Surat_keluar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("model_surat_keluar");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["surat_keluar"] = $this->model_surat_keluar->getAll();
        $this->load->view("admin/surat_keluar/list", $data);
    }

    public function add()
    {
        $surat_keluar = $this->model_surat_keluar;
        $validation = $this->form_validation;
        $validation->set_rules($surat_keluar->rules());

        if ($validation->run()) {
            $surat_keluar->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/surat_keluar/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/surat_keluar');
       
        $surat_keluar = $this->model_surat_keluar;
        $validation = $this->form_validation;
        $validation->set_rules($surat_keluar->rules());

        if ($validation->run()) {
            $surat_keluar->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["surat_keluar"] = $surat_keluar->getById($id);
        if (!$data["surat_keluar"]) show_404();
        
        $this->load->view("admin/surat_keluar/edit_form", $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->model_surat_keluar->delete($id)) {
            redirect(site_url('admin/Surat_keluar'));
        }
    }
}