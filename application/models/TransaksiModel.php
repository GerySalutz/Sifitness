<?php
defined('BASEPATH') or exit('No direct script access allowed');
class TransaksiModel extends CI_Model
{
    function save($data)
    {
        $this->db->insert('transaksi', $data);
    }

    public function getTransaksi()
    {
        return $this->db->get('transaksi');
    }

    function delete($id_transaksi)
    {
        $this->db->where('id_transaksi', $id_transaksi);
        $this->db->delete('transaksi');
    }
}
