
<?php header("Content-type: application/vnd-ms-excel"); ?>
<?php header("Content-Disposition: attachment; filename=data.xls"); ?>

<table border="1">
    <tr>
        <th>No</th>
        <th>No Inventaris</th>
        <th>Harga</th>
        <th>Kondisi</th>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Status</th>
        <th>Tanggal beli</th>
        <th>Ruang</th>
    </tr>

    <?php $no = 0; ?>
    <?php foreach($data as $row): ?>
    <?php $no++; ?>
    <tr>
        <td> <?php echo  $no; ?> </td>
        <td> <?php echo  $row->no_inventaris; ?> </td>
        <td> <?php echo  $row->harga; ?> </td>
        <td> <?php echo  $row->kondisi; ?> </td>
        <td> <?php echo  $row->nama; ?> </td>
        <td> <?php echo  $row->cat; ?> </td>
        <td> <?php echo  $row->status; ?> </td>
        <td> <?php echo  $row->tanggal_beli; ?> </td>
        <td> <?php echo  $row->ruang; ?> </td>
    </tr>
    <?php endforeach; ?>
</table>