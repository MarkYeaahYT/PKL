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
        $pdf->SetFont('Arial','B',5);
        $pdf->Cell(7,6,'No',1,0);
        $pdf->Cell(20,6,'Nama',1,0);
        $pdf->Cell(23,6,'TTL',1,0);
        $pdf->Cell(15,6,'Alamat',1,0);
        $pdf->Cell(25,6,'No Tlp',1,0);
        $pdf->Cell(20,6,'Program',1,0);
        $pdf->Cell(15,6,'Jurusan',1,0);
        $pdf->Cell(22,6,'Tahun Lulus',1,0);
        $pdf->Cell(22,6,'Status',1,0);
        $pdf->Cell(22,6,'Mulai Tanggal',1,0);
        $pdf->Cell(22,6,'jabatan Pekerjaan',1,0);
        $pdf->Cell(20,6,'Ket',1,1);

        $pdf->SetFont('Arial','',8);

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