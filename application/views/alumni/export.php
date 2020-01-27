
<?php header("Content-type: application/vnd-ms-excel"); ?>
<?php header("Content-Disposition: attachment; filename=data.xls"); ?>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>TTL</th>
        <th>Alamat</th>
        <th>No Tlp</th>
        <th>Program</th>
        <th>Jurusan</th>
        <th>Tahun Lulus</th>
        <th>Status</th>
        <th>Mulai Pekerjaan</th>
        <th>Jabatan Pekerjaan</th>
        <th>Gaji Pertama</th>
        <th>Perusahaan Penerima</th>
        <th>Alamat Perusahaan</th>
        <th>No Tlp</th>
        <th>Keterangan</th>
    </tr>

    <?php $no = 0; ?>
    <?php foreach($data as $row): ?>
    <?php $no++; ?>
    <tr>
        <td> <?php echo  $no; ?> </td>
        <td> <?php echo  $row->nama; ?> </td>
        <td> <?php echo  $row->te_lahir." ".$row->ta_lahir; ?> </td>
        <td> <?php echo  $row->alamat; ?> </td>
        <td> <?php echo  $row->no_hp; ?> </td>
        <td> <?php echo  $row->program; ?> </td>
        <td> <?php echo  $row->jurusan; ?> </td>
        <td> <?php echo  $row->tahun_lulus; ?> </td>
        <td> <?php echo  $row->status; ?> </td>
        <td> <?php echo  $row->mulai_tanggal; ?> </td>
        <td> <?php echo  $row->posisi_pekerjaan; ?> </td>
        <td> <?php echo  $row->gaji_pertama; ?> </td>
        <td> <?php echo  $row->perusahaan_penerima; ?> </td>
        <td> <?php echo  $row->alamat_perusahaan; ?> </td>
        <td> <?php echo  $row->no_tlp_perusahaan; ?> </td>
        <td> <?php echo  $row->ket; ?> </td>
    </tr>
    <?php endforeach; ?>
</table>