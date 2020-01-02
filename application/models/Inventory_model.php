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
        // $data1 = "";
        // $data2 = "";
        // if($this->check_model($this->input->post('id_model')) == 0){
        //     $data = array(
        //         'id_model' => $this->input->post('id_model'),
        //         'nama_barang' => $this->input->post('nama_barang'),
        //         'merk' => $this->input->post('merk'),
        //     );
        //     $data1 = $this->db->insert('model', $data);
        // }

        // $data = array(
        //     'kode_barang' => $this->input->post('kode_barang'),
        //     'id_model' => $this->input->post('id_model'),
        //     'status' => $this->input->post('status'),
        //     'tanggal_masuk' => $this->input->post('tanggal_masuk')
        // );
        // $data2 = $this->db->insert('barang', $data);
        // return $data1."-".$data2;

    }

    public function hapus()
    {
        # code...
        // $kode_barang = $this->input->post('kode_barang');
        // $this->db->where('kode_barang', $kode_barang);
        // $data = $this->db->delete('barang');
        // return $data;
    }

    public function update()
    {
        # code...
        // $data1 = "";
        // $data2 = "";
        // $kode_barang = $this->input->post('kode_barang');
        // $current_idmodel = $this->input->post('current_idmodel');

        // $data = array(
        //     'id_model' => $this->input->post('id_model'),
        //     'nama_barang' => $this->input->post('nama_barang'),
        //     'merk' => $this->input->post('merk'),
        // );
        // $this->db->where('id_model', $current_idmodel);
        // $data1 = $this->db->update('model', $data);

        
        // $this->db->set('status', $this->input->post('status'));
        // $this->db->set('tanggal_masuk', $this->input->post('tanggal_masuk'));
        // $this->db->where('kode_barang', $kode_barang);
        // $data2 = $this->db->update('barang');
        // return $data1."-".$data2;

    }


    public function check_rusak()
    {
        /**
         * Check data barang rusak
         */
        # code...
        // $query = $this->db->query("select * from barang b inner join model m on b.id_model = m.id_model where status = 'rusak'");
        // return $query->result();
    }

    public function check_jum_rusak()
    {
        /**
         * check jumlah barang rusak
         */
        # code...
        // $query = $this->db->query("select * from barang where status = 'rusak' ");
        // return $query->num_rows();
    }
    
    public function check_jum_normal()
    {
        /**
         * check jumlah barang normal
         */
        # code...
        // $query = $this->db->query("select * from barang where status = 'normal' ");
        // return $query->num_rows();
    }

    public function jumlah_barang()
    {
        /**
         * check totla barang
         */
        # code...
        // $query = $this->db->get('barang');
        // return $query->num_rows();
    }

}

?>