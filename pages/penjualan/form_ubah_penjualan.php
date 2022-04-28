
<?php
    if (!isset($_GET['no_faktur'])) {
        echo "
        <script>
            alert('No faktur tidak ada, silahkan coba lagi!');
            window.location.href = '../../../index.php?page=master_faktur';
        </script>";
    }

    include "actions.php";
    $noFaktur = $_GET['no_faktur'];
    $data = querySelect("*","penjualan","WHERE noFaktur = '$noFaktur'");
?>

<h1>Ubah Penjualan</h1>

<form action="pages/penjualan/actions/ubah.php" method="post">
    <table>
        <input type="text" name="no_faktur" value="<?= $noFaktur?>" hidden>
        <tr>
            <td>Tanggal Faktur</td>
            <td>:</td>
            <td><input type="date" name="tgl_faktur" value="<?= $data[0]['tglFaktur']?>"></td>
        </tr>
        <tr>
            <td>Kode Customer</td>
            <td>:</td>
            <td>
                <select name="kd_customer">
                    <?php
                        $listCustomer = querySelect("kdCustomer, nmCustomer", "customer", "ORDER BY kdCustomer ASC");
                        foreach ($listCustomer as $value) {
                    ?>
                    
                    <option value="<?= $value['kdCustomer']?>"   <?= ($data[0]['kdCustomer'] === $value['kdCustomer']) ? 'selected' : ''?>><?= $value['kdCustomer'].' = '.$value['nmCustomer']?></option>

                    
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
