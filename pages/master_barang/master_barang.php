
<h1>Master Barang</h1>

<a href="index.php?page=form_tambah_barang" class="btn btn-primary">Tambah Barang</a>

<table class="size-col-3 table_bordered">

    <thead>
        <tr>
            <th width="5%">NO</th>
            <th width="25%">Kode Barang</th>
            <th width="55%">Nama Barang</th>
            <th width="15%">Stock</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>

        <?php
            include "actions/read.php";
            $no = 0;
            foreach ($data as $value):
                $no++;
        ?>
        <tr>
            <td><?= $no?></td>
            <td><?= $value['kdBarang']?></td>
            <td><?= $value['nmBarang']?></td>
            <td><?= $value['stok']?></td>
            <td>
                <a href="index.php?page=form_ubah_barang&kd_barang=<?= $value['kdBarang']?>" class="btn btn-warning">Ubah</a>
                <a href="pages/master_barang/actions/hapus.php?kd_barang=<?= $value['kdBarang']?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php
            endforeach;
        ?>
    </tbody>

</table>