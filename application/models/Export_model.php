<?php
class Export_model extends CI_Model{

    public function __construct()
    {
        # code...
        parent::__construct();
        $this->load->library('pdf');
    }

    public function pdf()
    {
        # code...
        $pdf = new FPDF('l','mm','A5');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(190,7,'Data Inventaris',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(190,7,'Alfabank',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
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
            $pdf->Cell(22,6, $row->tanggal_beli ,1,); 
            $pdf->Cell(20,6, $row->ruang ,1,1); 

        }
            

        $pdf->Output();
    }

    public function xlsx()
    {
        # code...
    }
}
?>