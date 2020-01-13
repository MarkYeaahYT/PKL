<?php 
class Inventory_model extends CI_Model{

    public function __construct()
    {
        # code...
        $this->load->database();
    }

    public function show()
    {
        # code...
        $query = $this->db->get("barang");
        return $query->result();
    }

    public function tambah()
    {
        # code...
        $data = array(
            'no_inventaris' => $this->input->post('no_inventaris'),
            'harga' => $this->input->post('harga'),
            'kondisi' => $this->input->post('kondisi'),
            'nama' => $this->input->post('nama'),
            'cat' => $this->input->post('cat'),
            'status' => $this->input->post('status'),
            'tanggal_beli' => $this->input->post('tanggal_beli'),
            'ruang' => $this->input->post('ruang')
        );
        $data1 = $this->db->insert('barang', $data);
        return $data1;

    }

    public function hapus()
    {
        # code...
        $kode_barang = $this->input->post('kode_barang');
        $this->db->where('kode_barang', $kode_barang);
        $data = $this->db->delete('barang');
        return $data;
    }

    public function update()
    {
        # code...
        $kode_barang = $this->input->post('kode_barang');
        $this->db->set('no_inventaris', $this->input->post('no_inventaris'));
        $this->db->set('harga', $this->input->post('harga'));
        $this->db->set('kondisi', $this->input->post('kondisi'));
        $this->db->set('nama', $this->input->post('nama'));
        $this->db->set('cat', $this->input->post('cat'));
        $this->db->set('status', $this->input->post('status'));
        $this->db->set('tanggal_beli', $this->input->post('tanggal_beli'));
        $this->db->set('ruang', $this->input->post('ruang'));
        $this->db->where('kode_barang', $kode_barang);
        $data = $this->db->update('barang');
        return $data;


    }


    public function check_rusak()
    {
        /**
         * Check data barang rusak
         */
        $this->db->where('status', 'Rusak');
        $query = $this->db->get('barang');
        return $query->result();
    }

    public function check_jum_rusak()
    {
        /**
         * check jumlah barang rusak
         */
        # code...
        $query = $this->db->query("select * from barang where status = 'rusak' ");
        return $query->num_rows();
    }
    
    public function check_jum_normal()
    {
        /**
         * check jumlah barang normal
         */
        # code...
        $query = $this->db->query("select * from barang where status <> 'Rusak' ");
        return $query->num_rows();
    }

    public function jumlah_barang()
    {
        /**
         * check totla barang
         */
        # code...
        $query = $this->db->get('barang');
        return $query->num_rows();
    }

    public function incrementNO()
    {
        /**
         * checking last number then increment by js
         */
        $data = $this->db->query('select * from barang order by kode_barang desc limit 1');
        return $data->result();
    }

}

?>