<?php
defined('BASEPATH') or exit('No direct script access allowed');
class PaketModel extends CI_Model
{

    public function getPaket()
    {
        return $this->db->get('paket');
    }
    public function paketWhere($where)
    {
        return $this->db->get_where('paket', $where);
    }
    public function simpanPaket($data = null)
    {
        $this->db->insert('paket', $data);
    }
    public function updatePaket($data = null, $where = null)
    {
        $this->db->update('paket', $data, $where);
    }
    public function hapusPaket($where = null)
    {
        $this->db->delete('paket', $where);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('paket');
        return $this->db->get()->row($field);
    }

    function get_product_id($id_paket)
    {
        $query = $this->db->get_where('paket', array('id_paket' => $id_paket));
        return $query;
    }

    function update($id_paket, $nama_paket, $harga_paket, $benefit)
    {
        $data1 = array('nama_paket' => $nama_paket, 'harga_paket' => $harga_paket, 'benefit' => $benefit);
        $this->db->where('id_paket', $id_paket);
        $this->db->update('paket', $data1);
    }

    function delete($id_paket)
    {
        $this->db->where('id_paket', $id_paket);
        $this->db->delete('paket');
    }

    function save($nama_paket, $harga_paket, $benefit)
    {
        $data = array(
            'nama_paket' => $nama_paket,
            'harga_paket' => $harga_paket,
            'benefit' => $benefit
        );
        $this->db->insert('paket', $data);
    }

    function new($nama_paket, $harga_paket, $benefit)
    {
        $data1 = array('nama_paket' => $nama_paket, 'harga_paket' => $harga_paket, 'benefit' => $benefit);
        $this->db->update('paket', $data1);
    }

    public function getMyPackage($where)
    {
        return $this->db->get_where('transaksi', $where);
    }
}
