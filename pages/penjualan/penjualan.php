<h1>Penjualan</h1>

<a href="index.php?page=form_tambah_penjualan" class="btn btn-primary">Tambah Data Penjualan</a>

<table class="size-col-3 table_bordered">
    <tr>
        <th width="5%">NO</th>
        <th width="25%">No Faktur</th>
        <th width="55%">Tanggal Faktur</th>
        <th width="15%">Kode Customer</th>
        <th>Action</th>
    </tr>

    <?php
        include "actions/read.php";
        $no = 0;
        foreach ($data as $value) {
            $no++; ?>
    <tr>
        <td><?= $no?></td>
        <td><?= $value['noFaktur']?></td>
        <td><?= $value['tglFaktur']?></td>
        <td><?= $value['kdCustomer']?></td>
        <td>
            <a href="index.php?page=form_ubah_penjualan&no_faktur=<?= $value['noFaktur']?>" class="btn btn-warning">Edit</a> <br>
            <a href="pages/penjualan/actions/hapus.php?no_faktur=<?= $value['noFaktur']?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?')">Delete</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>