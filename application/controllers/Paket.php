<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }

    public function index()
    {
        $data['title'] = 'Paket';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['paket'] = $this->PaketModel->getPaket()->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('paket/index', $data);
        $this->load->view('templates/footer');
    }

    function get_edit()
    {
        $data['title'] = 'Paket';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $id_paket = $this->uri->segment(3);
        $result = $this->PaketModel->get_product_id($id_paket);

        if ($result->num_rows() > 0) {
            $i = $result->row_array();
            $data1 = array('id_paket' => $i['id_paket'], 'nama_paket' => $i['nama_paket'], 'harga_paket' => $i['harga_paket'], 'benefit' => $i['benefit']);
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('paket/ubah_paket', $data1);
            $this->load->view('templates/footer');
        } else {
            echo "Data Was Not Found";
        }
    }

    function update()
    {
        $id_paket = $this->input->post('id_paket');
        $nama_paket = $this->input->post('nama_paket');
        $harga_paket = $this->input->post('harga_paket');
        $benefit = $this->input->post('benefit');
        $this->PaketModel->update($id_paket, $nama_paket, $harga_paket, $benefit);
        redirect('paket');
    }

    function delete()
    {
        $id_paket = $this->uri->segment(3);
        $this->PaketModel->delete($id_paket);
        redirect('paket');
    }

    function add_new()
    {
        $data['title'] = 'Paket';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('paket/add_paket', $data);
            $this->load->view('templates/footer');
    }

    function save()
    {
        $nama_paket = $this->input->post('nama_paket');
        $harga_paket = $this->input->post('harga_paket');
        $benefit = $this->input->post('benefit');
        $this->PaketModel->save($nama_paket, $harga_paket, $benefit);
        redirect('paket');
    }


    public function pembayaran()
    {
        $data['title'] = 'Paket';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['paket'] = $this->PaketModel->getPaket()->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('paket/pembayaran', $data);
        $this->load->view('templates/footer');
    }

}
