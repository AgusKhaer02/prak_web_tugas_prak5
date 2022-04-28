
<?php
    if (!isset($_GET['kd_customer'])) {
        echo "
        <script>
            alert('Kode Customer tidak ada, silahkan coba lagi!');
            window.location.href = '../../../index.php?page=master_customer';
        </script>";
    }

    include "actions.php";
    $kdCustomer = $_GET['kd_customer'];
    $data = querySelect("*","customer","WHERE kdCustomer = '$kdCustomer'");
?>

<h1>Ubah Customer</h1>

<form action="pages/master_customer/actions/ubah.php" method="post">
    <table>
        <input type="text" name="kd_customer" value="<?= $kdCustomer?>" hidden>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><input type="text" name="nm_customer" value="<?= $data[0]['nmCustomer']?>"></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type="text" name="kota" value="<?= $data[0]['kota']?>"></td>
        </tr>

        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>
