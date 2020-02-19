<?php 
class Anggaran_model extends CI_Model{
    
    public function auth()
    {
        # code...
        $user = trim($this->input->post('username', true));
        $pass = trim($this->input->post('password', true));

        $this->db->select('role');
        $this->db->select('username');
        $this->db->where('username', $user);
        $this->db->where('password', md5($pass));

        $query = $this->db->get('user_anggaran');
        return $query->result();
    }

    public function save_dana()
    {
        /**
         * if thereis update 
         * else insert
         */
        # code...
        $datenow = $this->input->post('datenow');
        $atm = $this->input->post('atm');
        $this->db->where('date', $datenow);
        $query = $this->db->get('anggaran');
        if($query->num_rows() > 0){
            $this->db->where('date', $datenow);
            $this->db->set('atm', $atm);
            $query = $this->db->update('anggaran');
            return $query;
        }else{
            $this->db->set('atm', $atm);
            $this->db->set('date', $datenow);
            $query = $this->db->insert('anggaran');
            return $query;
        }

    }

    public function show_dana()
    {
        # code...
        $datenow = $this->input->post('datenow');
        $day_before = date('y-m-d', strtotime($datenow.'-1 day'));

        $this->db->where('date', $datenow);
        $now = $this->db->get('anggaran');
        $resn = $now->result();

        $this->db->where('date', $day_before);
        $before = $this->db->get('anggaran');
        $resb = $before->result();

        $result = null;

        if($now->num_rows() < 1 && $before->num_rows() < 1){
            $result = array(
                'atm' => "0",
                'kas_tangan' => "0"
            );
        }else if($now->num_rows() > 0 && $before->num_rows() < 1){
            $result = array(
                'atm' => $resn[0]->atm,
                'kas_tangan' => "0"
            );
        }else if($now->num_rows() < 1 && $before->num_rows() > 0){
            $result = array(
                'atm' => "0",
                'kas_tangan' => $resb[0]->sisa
            );
        }else{
            $result = array(
                'atm' => $resn[0]->atm,
                'kas_tangan' => $resb[0]->sisa
            );

        }

        return $result;
    }

    public function save_item()
    {
        # code...
        $datenow = $this->input->post('datenow');
        $item = $this->input->post('item');
        $metode = $this->input->post('metode');
        $harga = $this->input->post('harga');

        $action = $this->input->post('action');
        $id_update = $this->input->post('id_update');

        $this->db->where('date', $datenow);
        $query = $this->db->get('anggaran');
        $rows = $query->num_rows();
        $res = $query->result();
        if($rows > 0){
            if($action == "update"){
                $this->db->set('item', $item);
                $this->db->set('metode', $metode);
                $this->db->set('harga', $harga);
                $this->db->where('id', $id_update);
                $query = $this->db->update('anggaran_data');
                return $query;

            }else if($action == "save"){
                $id = $res[0]->id;
                $this->db->set('aid', $id);
                $this->db->set('item', $item);
                $this->db->set('metode', $metode);
                $this->db->set('harga', $harga);
                $query = $this->db->insert('anggaran_data');
                return $query;

            }
        }
    }

    public function show_item()
    {
        # code...
        $datenow = $this->input->post('datenow');

        $this->db->where('date', $datenow);
        $query = $this->db->get('anggaran');
        $rows = $query->num_rows();
        if($rows > 0){
            $res = $query->result();
            $aid = $res[0]->id;
            $this->db->where('aid', $aid);
            $query = $this->db->get('anggaran_data');
            if($query->num_rows() > 0){
                return $query->result();
            }else{
                $data = array(
                    "0" => array(
                        "aid" => "",
                        "harga" => "0",
                        "id" => "",
                        "item" => "",
                        "metode" => "",
                        "status" => null
                    )
                );
                return $data;
            }
        }else{
            $data = array(
                "0" => array(
                    "aid" => "",
                    "harga" => "0",
                    "id" => "",
                    "item" => "",
                    "metode" => "",
                    "status" => null
                )
            );
            return $data;
        }
    }

    public function save_sisa()
    {
        /**
         * I'm forget
         * I add save pengeluaran / total harga item
         */
        # code...
        $sisa = $this->input->post('sisa');
        $pengeluaran = $this->input->post('pengeluaran');
        $datenow = $this->input->post('datenow');

        $this->db->where('date', $datenow);
        $query = $this->db->get('anggaran');
        if($query->num_rows() > 0){
            $this->db->where('date', $datenow);
            $this->db->set('sisa', $sisa);
            $this->db->set('pengeluaran', $pengeluaran);
            $query = $this->db->update('anggaran');
            return $query;
        }else{
            $data = array(
                'message' => 'rows empty'
            );
            return $data;
        }
    }

    public function set_status()
    {
        # code...
        $id = $this->input->post("id");
        $status = $this->input->post("status");

        if($status == 1){
            $this->db->where('id', $id);
            $this->db->set("status", "Accept");
            $query = $this->db->update("anggaran_data");
            return $query;
        }else if($status == 0){
            $this->db->where('id', $id);
            $this->db->set("status", "Reject");
            $query = $this->db->update("anggaran_data");
            return $query;
        }else{
            $data = array(
                "message" => "failed"
            );
            return $data;
        }
        
    }

    public function show_data()
    {
        # code...
        $query = $this->db->get('anggaran');
        return $query->result();
    }

    public function filter_data()
    {
        # code...
        $from = $this->input->post("from");
        $to = $this->input->post("to");

        $this->db->where("date BETWEEN $from AND $to");
        $query = $this->db->get("anggaran");
        return $query->result();
    }
}
?>