
<?php
    if (!isset($_GET['kd_barang'])) {
        echo "
        <script>
            alert('Kode Barang tidak ada, silahkan coba lagi!');
            window.location.href = '../../../index.php?page=master_barang';
        </script>";
    }

    include "actions.php";
    $kdBarang = $_GET['kd_barang'];
    $data = querySelect("*","barang","WHERE kdBarang = '$kdBarang'");
?>

<h1>Ubah Barang</h1>

<form action="pages/master_barang/actions/ubah.php" method="post">
    <table>
        <input type="text" name="kd_barang" value="<?= $data[0]['kdBarang']?>" hidden>
        <tr>
            <td>Nama Barang</td>
            <td>:</td>
            <td><input type="text" name="nm_barang" value="<?= $data[0]['nmBarang']?>"></td>
        </tr>
        <tr>
            <td>Stok</td>
            <td>:</td>
            <td><input type="text" name="stok" value="<?= $data[0]['stok']?>"></td>
        </tr>

        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>
