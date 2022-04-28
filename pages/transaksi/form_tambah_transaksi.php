<h1>Tambah Penjualan</h1>

<form action="pages/transaksi/actions/tambah.php" method="post">

<?php
    include "actions.php";
    
    $join = [
        [
            "RIGHT JOIN","penjualan","transaksi.noFaktur = penjualan.noFaktur"
        ],
        [
            "INNER JOIN","customer","penjualan.kdCustomer = customer.kdCustomer"
        ],
    ];
    $dataJoin = querySelectJoin("penjualan.noFaktur, customer.nmCustomer", "transaksi",$join);

    $dataBarang = querySelect("kdBarang,nmBarang", "barang", "ORDER BY kdBarang DESC");
    
?>
    <table>
        <input type="text" name="no_faktur" value="<?= $latestNoFaktur?>" hidden>
        <tr>
            <td>No Faktur</td>
            <td>:</td>
            <td>
                <select name="no_faktur">
                    <?php
                    
                        foreach ($dataJoin as $value) {
                    ?>
                    <option value="<?= $value['noFaktur']?>"><?= $value['noFaktur'].' = '.$value['nmCustomer']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Barang</td>
            <td>:</td>
            <td>
                <select name="kd_barang">
                    <?php
                    
                        foreach ($dataBarang as $value) {
                    ?>
                    <option value="<?= $value['kdBarang']?>"><?= $value['kdBarang'].' = '.$value['nmBarang']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Jumlah</td>
            <td>:</td>
            <td><input type="number" name="jumlah"></td>
        </tr>

        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>