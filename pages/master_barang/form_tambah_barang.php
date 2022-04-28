<h1>Master Barang</h1>

<form action="pages/master_barang/actions/tambah.php" method="post">

<?php
    include "actions.php";
    $data = querySelect("kdBarang", "barang", "ORDER BY kdBarang DESC LIMIT 1");
    $latestKdBarang = "B-".substr($data[0]['kdBarang'], -3) + 1;
    
?>
    <table>
        <input type="text" name="kd_barang" value="<?= $latestKdBarang?>" hidden>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nm_barang"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><input type="text" name="stok"></td>
        </tr>

        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>