<h1>Transaksi</h1>

<a href="index.php?page=form_tambah_transaksi" class="btn btn-primary">Tambah Data Transaksi</a>
<table class="size-col-3 table_bordered">
    <tr>
        <th width="5%">NO</th>
        <th width="25%">No Faktur</th>
        <th width="25%">Nama Customer</th>
        <th width="55%">Kode Barang</th>
        <th width="55%">Nama Barang</th>
        <th width="15%">Jumlah</th>
    </tr>
    <?php
        include "actions/read.php";
        $no = 0;
        foreach ($dataJoin as $value) {
            $no++; ?>
    <tr>
        <td><?= $no?></td>
        <td><?= $value['noFaktur']?></td>
        <td><?= $value['nmCustomer']?></td>
        <td><?= $value['kdBarang']?></td>
        <td><?= $value['nmBarang']?></td>
        <td><?= $value['jumlah']?></td>
    </tr>
    <?php
        }
    ?>
</table>