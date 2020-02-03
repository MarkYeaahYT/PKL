<?php
class Export_model extends CI_Model{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->library('pdf');
        $this->load->helper('url');
    }

    public function pdf()
    {
        # code...
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Image(base_url('assets/icon/lgopdf3.png'),5, 5);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(190,7,'',0,1,'C');
        $pdf->Cell(190,6,'',0,1,'C');
        $pdf->Cell(170, 2,'JL. GLAGAHSARI NO 46C, UMBULHARJO, YOGYAKARTA',0,1,'');
        $pdf->Cell(170, 6,'WA 0896 7148 1943',0,1,'');
        $pdf->Line(10, 30.5, 200, 30.5);
        $pdf->Line(10, 31, 200, 31);

        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',14);
        // mencetak string 
        $pdf->Cell(190,12,'Data Inventaris',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,2,'',0,1);
        $pdf->SetFont('Arial','B',10);
        $pdf->Cell(10,6,'No',1,0);
        $pdf->Cell(53,6,'No Inventaris',1,0);
        $pdf->Cell(23,6,'Harga',1,0);
        $pdf->Cell(15,6,'kondisi',1,0);
        $pdf->Cell(25,6,'Nama',1,0);
        $pdf->Cell(10,6,'Kat',1,0);
        $pdf->Cell(15,6,'Status',1,0);
        $pdf->Cell(22,6,'Tanggal beli',1,0);
        $pdf->Cell(20,6,'Ruang',1,1);

        $pdf->SetFont('Arial','',8);

        $data = $this->db->get('barang')->result();
        $no = 0;
        foreach($data as $row){
            $no++;
            $pdf->Cell(10,6, $no ,1,0);
            $pdf->Cell(53,6, $row->no_inventaris ,1,0);
            $pdf->Cell(23,6, 'Rp '.$row->harga ,1,0);
            $pdf->Cell(15,6, $row->kondisi ,1,0); 
            $pdf->Cell(25,6, $row->nama ,1,0);
            $pdf->Cell(10,6, $row->cat ,1,0);
            $pdf->Cell(15,6, $row->status ,1,0);
            $pdf->Cell(22,6, $row->tanggal_beli ,1,0); 
            $pdf->Cell(20,6, $row->ruang ,1,1); 

        }
            

        $pdf->Output();
    }

    public function xlsx()
    {
        # code...
        $query = $this->db->get('barang');
        return $query->result();
    }

    public function pdf_alumni()
    {
        # code...
        // $pdf = new FPDF('l','mm','A5');
        $pdf = new FPDF();
        // membuat halaman baru
        $pdf->AddPage('L', 'A5');
        $pdf->Image(base_url('assets/icon/lgopdf3.png'),5, 5);
        $pdf->SetFont('Arial','',8);
        $pdf->Cell(190,7,'',0,1,'C');
        $pdf->Cell(190,6,'',0,1,'C');
        $pdf->Cell(170, 2,'JL. GLAGAHSARI NO 46C, UMBULHARJO, YOGYAKARTA',0,1,'');
        $pdf->Cell(170, 6,'WA 0896 7148 1943',0,1,'');
        $pdf->Line(10, 30.5, 200, 30.5);
        $pdf->Line(10, 31, 200, 31);

        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',14);
        // mencetak string 
        $pdf->Cell(190,12,'Data Alumni',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,2,'',0,1);
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(7,6,'No',1,0);
        $pdf->Cell(40,6,'Nama',1,0);
        $pdf->Cell(40,6,'TTL',1,0);
        $pdf->Cell(45,6,'Alamat',1,0);
        $pdf->Cell(25,6,'No Tlp',1,0);
        $pdf->Cell(30,6,'Program',1,1);
        
        $data = $this->db->get('alumni')->result();
        $no = 0;
        $pdf->SetFont('Arial','',9);
        foreach($data as $row){
            $no++;
            $pdf->Cell(7,6, $no ,1,0);
            $pdf->Cell(40,6, $row->nama,1,0);
            $pdf->Cell(40,6, $row->te_lahir." ".$row->ta_lahir ,1,0);
            $pdf->Cell(45,6, $row->alamat ,1,0);
            $pdf->Cell(25,6, $row->no_hp ,1,0);
            $pdf->Cell(30,6, $row->program ,1,1);
            
        }
        
        $pdf->AddPage('L', 'A5');
        
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(30,6,'Jurusan',1,0);
        $pdf->Cell(21,6,'Tahun Lulus',1,0);
        $pdf->Cell(30,6,'Status',1,0);
        $pdf->Cell(23,6,'Mulai Tanggal',1,0);
        $pdf->Cell(30,6,'Jabatan Pekerjaan',1,0);
        $pdf->Cell(25,6,'Gaji Pertama',1,0);
        $pdf->Cell(35,6,'Perusahaan Penerima',1,1);
        
        $pdf->SetFont('Arial','',9);
        foreach($data as $row){
            $pdf->Cell(30,6, $row->jurusan ,1,0);
            $pdf->Cell(21,6, $row->tahun_lulus ,1,0);
            $pdf->Cell(30,6, $row->status ,1,0);
            $pdf->Cell(23,6, $row->mulai_tanggal ,1,0);
            $pdf->Cell(30,6, $row->posisi_pekerjaan ,1,0);
            $pdf->Cell(25,6, $row->gaji_pertama ,1,0);
            $pdf->Cell(35,6, $row->perusahaan_penerima ,1,1);
            
        }

        $pdf->AddPage('L', 'A5');
        
        $pdf->SetFont('Arial','B',9);
        $pdf->Cell(45,6,'Alamat Perusahaan',1,0);
        $pdf->Cell(27,6,'No Tlp',1,0);
        $pdf->Cell(50,6,'Ket',1,1);

        $pdf->SetFont('Arial','',9);

        foreach($data as $row){
            $pdf->Cell(45,6, $row->alamat_perusahaan ,1,0);
            $pdf->Cell(27,6, $row->no_tlp_perusahaan ,1,0);
            $pdf->Cell(50,6, $row->ket ,1,1);
        }
        
        $pdf->Output();

    }

    public function xlsx_alumni()
    {
        # code...
        $query = $this->db->get('alumni');
        return $query->result();
    }
}
?>