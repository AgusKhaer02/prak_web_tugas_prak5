<h1>Tambah Penjualan</h1>

<form action="pages/penjualan/actions/tambah.php" method="post">

<?php
    include "actions.php";
    $data = querySelect("noFaktur", "penjualan", "ORDER BY noFaktur DESC LIMIT 1");
    
    $latestNoFaktur = "P-".substr(str_repeat(0, 3).(substr($data[0]['noFaktur'], -3) + 1), -3);
    
?>
    <table>
        <input type="text" name="no_faktur" value="<?= $latestNoFaktur?>" hidden>
        <tr>
            <td>Tanggal Faktur</td>
            <td>:</td>
            <td><input type="date" name="tgl_faktur"></td>
        </tr>
        <tr>
            <td>Customer</td>
            <td>:</td>
            <td>
                <select name="kd_customer">
                    <?php
                        $listCustomer = querySelect("kdCustomer, nmCustomer", "customer", "ORDER BY kdCustomer ASC");
                        foreach ($listCustomer as $value) {
                    ?>
                    <option value="<?= $value['kdCustomer']?>"><?= $value['kdCustomer'].' = '.$value['nmCustomer']?></option>
                    <?php
                        }
                    ?>
                </select>
            </td>
        </tr>

        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>