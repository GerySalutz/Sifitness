<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{
    public function index()
    {
        $data['title'] = 'Transaksi';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data['paket'] = $this->TransaksiModel->getTransaksi()->result_array();


        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('templates/topbar', $data);
        $this->load->view('transaksi/daftar_transaksi', $data);
        $this->load->view('templates/footer');
    }


    public function bayar()
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
            $this->load->view('transaksi/transaksi', $data1);
            $this->load->view('templates/footer');
        } else {
            echo "Data Was Not Found";
        }
    }

    public function selesai()
    {
        $email = $this->session->userdata('email');

        $config['upload_path']          = './assets/img/bukti_tf/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['file_name']            = 'bukti_tf';

        $this->load->library('upload', $config);

        $this->upload->do_upload('image');
        $image = $this->upload->data();
        $bukti_tf = $image['file_name'];

        $date = new DateTime();
        $tanggal = $date->format('Y-m-d H:i:s');

        $data = [
            'id_paket' => $this->input->post('id_paket', true),
            'email' => $email,
            'nama_paket' => $this->input->post('nama_paket', true),
            'tanggal' => $tanggal,
            'bukti_tf' => $bukti_tf,
        ];

        $this->TransaksiModel->save($data);
        redirect('user/mypackage');
    }

    function delete()
    {
        $id_transaksi = $this->uri->segment(3);
        $this->TransaksiModel->delete($id_transaksi);
        redirect('transaksi');
    }
}
