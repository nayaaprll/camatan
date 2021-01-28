<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Model_surat_masuk extends CI_Model
{
    private $_table = "surat_masuk";

    public $id_surat;
    public $nomor_surat;
    public $asal_surat;
    public $tanggal_surat;
    public $perihal_surat;
    public $tanggal_terima;

    public function rules()
    {
        return [
            ['field' => 'nomor_surat',
            'label' => 'nomor_surat',
            'rules' => 'required'],

            ['field' => 'asal_surat',
            'label' => 'asal_surat',
            'rules' => 'required'],
            
            ['field' => 'tanggal_surat',
            'label' => 'tanggal_surat',
            'rules' => 'required'],

            ['field' => 'perihal_surat',
            'label' => 'perihal_surat',
            'rules' => 'required'],

             ['field' => 'tanggal_terima',
            'label' => 'tanggal_terima',
            'rules' => 'required'],

            
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_surat" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_surat ='';
        $this->nomor_surat = $post["nomor_surat"];
        $this->asal_surat = $post["asal_surat"];
        $this->tanggal_surat = $post["tanggal_surat"];
        $this->perihal_surat = $post["perihal_surat"];
        $this->tanggal_terima = $post["tanggal_terima"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_surat = $post["id"];
        $this->nomor_surat = $post["nomor_surat"];
        $this->asal_surat = $post["asal_surat"];
        $this->tanggal_surat = $post["tanggal_surat"];
        $this->perihal_surat = $post["perihal_surat"];
        $this->tanggal_terima = $post["tanggal_terima"];
        $this->db->update($this->_table, $this, array('id_surat' => $post["id"]));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_surat" => $id));
    }

   
 }
