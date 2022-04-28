<h1>Master Customer</h1>

<a href="index.php?page=form_tambah_customer" class="btn btn-primary">Tambah Customer</a>

<table class="size-col-3 table_bordered">
    <tr>
        <th width="5%">NO</th>
        <th width="25%">Kode Customer</th>
        <th width="55%">Nama Customer</th>
        <th width="15%">Kota</th>
        <th>Action</th>
    </tr>

    <?php
        include "actions/read.php";
        $no = 0;
        foreach ($data as $value) {
            $no++;
    ?>
        <tr>
            <td><?= $no?></td>
            <td><?= $value['kdCustomer']?></td>
            <td><?= $value['nmCustomer']?></td>
            <td><?= $value['kota']?></td>
            <td>
                <a href="index.php?page=form_ubah_customer&kd_customer=<?= $value['kdCustomer']?>" class="btn btn-warning" >Edit</a> <br>
                <a href="pages/master_customer/actions/hapus.php?kd_customer=<?= $value['kdCustomer']?>" class="btn btn-danger" onclick="return confirm('Apakah anda ingin menghapus data ini?')">Delete</a>
            </td>
        </tr> 
    <?php
        }
    ?>

</table>