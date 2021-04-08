<?php 
class M_Transaksi extends CI_Model {
    function data_transaksi() { 
        $query = $this->db->query("select * from transaksi"); 
        return $query;
    }

    function simpan(){
    	$data = array('id_pembayaran' => $this->input->post('id_pembayaran'),
    		     'id_petugas'=> ($this->input->post('id_petugas')),
                 'nisn'=> ($this->input->post('nisn')),
                 'tgl_bayar'=>($this->input->post('tgl_bayar')),
                 'bulan_bayar'=>($this->input->post('bulan_bayar')),
                 'tahun_bayar'=>($this->input->post('tahun_bayar')),
                 'id_spp'=>($this->input->post('id_spp')),
    		     'jumlah_bayar' => $this->input->post('jumlah_bayar'));
    	$insert = $this->db->insert('transaksi',$data);
    }
}            