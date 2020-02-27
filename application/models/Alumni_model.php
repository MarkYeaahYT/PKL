<?php
class Alumni_model extends CI_Model{

    public function __construct()
    {
        # code...
        parent::__construct();
    }

    public function data_xhr()
    {
        # code...
        $query = $this->db->get('alumni');
        return $query->result();
    }

    public function add()
    {
        # code...
        /**
         * Get Data post to vatible
         */
        $nama = $this->input->post('nama');
        $te_l = $this->input->post('te_l');
        $ta_l = $this->input->post('ta_l');
        $alamat = $this->input->post('alamat');
        $no_hp = $this->input->post('no_hp');
        $program = $this->input->post('program');
        $tahun_lulus = $this->input->post('tahun_lulus');
        $status = $this->input->post('status');
        $tanggal_mulai = $this->input->post('tanggal_mulai');
        $posisi_pekerjan = $this->input->post('posisi_pekerjan');
        $gaji = $this->input->post('gaji');
        $perusahaan_penerima = $this->input->post('perusahaan_penerima');
        $alamat_perusahaan = $this->input->post('alamat_perusahaan');
        $no_tlp_pershn = $this->input->post('no_tlp_perushn');
        $ket = $this->input->post('ket');

        $program = explode(">", $program);

        /**
         * END Get Data post to vatible
         */

        $this->db->set('nama', $nama);
        $this->db->set('te_lahir', $te_l);
        $this->db->set('ta_lahir', $ta_l);
        $this->db->set('alamat', $alamat);
        $this->db->set('no_hp', $no_hp);
        $this->db->set('program', trim($program[0]));
        $this->db->set('jurusan', trim($program[1]));
        $this->db->set('tahun_lulus', $tahun_lulus);
        $this->db->set('status', $status);
        $this->db->set('mulai_tanggal', $tanggal_mulai);
        $this->db->set('posisi_pekerjaan', $posisi_pekerjan);
        $this->db->set('gaji_pertama', $gaji);
        $this->db->set('perusahaan_penerima', $perusahaan_penerima);
        $this->db->set('alamat_perusahaan', $alamat_perusahaan);
        $this->db->set('no_tlp_perusahaan', $no_tlp_pershn);
        $this->db->set('ket', $ket);
        $query = $this->db->insert('alumni');
        return $query;
    }

    public function del()
    {
        # code...
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $query = $this->db->delete('alumni');
        return $query;
    }

    public function edit()
    {
        # code...
        /**
         * Get Data post to vatible
         */
        $id = $this->input->post('id_edit');
        $nama_edit = $this->input->post('nama_edit');
        $te_l_edit = $this->input->post('te_l_edit');
        $ta_l_edit = $this->input->post('ta_l_edit');
        $alamat_edit = $this->input->post('alamat_edit');
        $program_edit = $this->input->post('program_edit');
        $status_edit = $this->input->post('status_edit');
        $tahun_lulus_edit = $this->input->post('tahun_lulus_edit');
        $tanggal_mulai_edit = $this->input->post('tanggal_mulai_edit');
        $posisi_pekerjan_edit = $this->input->post('posisi_pekerjan_edit');
        $perusahaan_penerima_edit = $this->input->post('perusahaan_penerima_edit');
        $alamat_perusahaan_edit = $this->input->post('alamat_perusahaan_edit');
        $no_hp_edit = $this->input->post('no_hp_edit');
        $no_tlp_per = $this->input->post('no_tlp_perusahaan_edit');
        $gaji_edit = $this->input->post('gaji_edit');
        $ket_edit = $this->input->post('ket_edit');

        $program = explode(">", $program_edit);

        /**
         * END Get Data post to vatible
         */
        $this->db->set('nama', $nama_edit);
        $this->db->set('te_lahir', $te_l_edit);
        $this->db->set('ta_lahir', $ta_l_edit);
        $this->db->set('alamat', $alamat_edit);
        $this->db->set('program', trim($program[0]));
        $this->db->set('jurusan', trim($program[1]));
        $this->db->set('tahun_lulus', $tahun_lulus_edit);
        $this->db->set('status', $status_edit);
        $this->db->set('mulai_tanggal', $tanggal_mulai_edit);
        $this->db->set('posisi_pekerjaan', $posisi_pekerjan_edit);
        $this->db->set('perusahaan_penerima', $perusahaan_penerima_edit);
        $this->db->set('alamat_perusahaan', $alamat_perusahaan_edit);
        $this->db->set('no_hp', $no_hp_edit);
        $this->db->set('ket', $ket_edit);
        $this->db->set('gaji_pertama', $gaji_edit);
        $this->db->set('no_tlp_perusahaan', $no_tlp_per);
        $this->db->where('id', $id);
        $query = $this->db->update('alumni');
        return $query;
    }

    public function j_siswa()
    {
        # code...
        $query = $this->db->get('alumni');
        return $query->num_rows();
    }

    /**
     * Seriously a have make little bit
     * mistake ;) why in bellow not use paramater
     * it's so redudanci
     */

    public function j_sbekerja()
    {
        # code...
        $status = "Sudah Bekerja";
        $this->db->where('status', $status);
        $query = $this->db->get('alumni');
        return $query->num_rows();
    }
    
    public function j_bbekerja()
    {
        # code...
        $status = "Sudah Bekerja";
        // $status = "Mencari Pekerjaan";
        // $this->db->where('status', $status);
        $this->db->where_not_in('status', $status);
        $query = $this->db->get('alumni');
        return $query->num_rows();
    }
    
    public function j_thn()
    {
        # code...
        $program = "1 Tahun";
        $this->db->where('program', $program);
        $query = $this->db->get('alumni');
        return $query->num_rows();
    }
    
    public function j_bln()
    {
        # code...
        $program = "Profesi 6 Bulan";
        $this->db->where('program', $program);
        $query = $this->db->get('alumni');
        return $query->num_rows();
    }
    
    public function j_itf()
    {
        # code...
        $program = "Intensif";
        $this->db->where('program', $program);
        $query = $this->db->get('alumni');
        return $query->num_rows();
    }

    public function filter($status = "", $program = "")
    {
        # code...
        // $this->db->where('status');
        $res;
        if($status == "Mencari Pekerjaan"){
            $this->db->where('status', $status);
            $this->db->or_where('status', "?");
            $res = $this->db->get('alumni')->result();

        }else if($status != ""){
            $this->db->where('status', $status);
            $res = $this->db->get('alumni')->result();
        }

        if($program != ""){
            $this->db->where('program', $program);
            $res = $this->db->get('alumni')->result();
        }
        return $res;
    }
}

?>