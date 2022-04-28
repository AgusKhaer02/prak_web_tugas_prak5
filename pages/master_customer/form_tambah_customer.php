<h1>Master Customer</h1>

<form action="pages/master_customer/actions/tambah.php" method="post">

<?php
    include "actions.php";
    $data = querySelect("kdCustomer", "customer", "ORDER BY kdCustomer DESC LIMIT 1");
    $latestKdCustomer = "C-".substr($data[0]['kdCustomer'], -3) + 1;
    
?>
    <table>
        <input type="text" name="kd_customer" value="<?= $latestKdCustomer?>" hidden>
        <tr>
            <td>Nama Customer</td>
            <td>:</td>
            <td><input type="text" name="nm_customer"></td>
        </tr>
        <tr>
            <td>Kota</td>
            <td>:</td>
            <td><input type="text" name="kota"></td>
        </tr>

        <tr>
            <td><button type="submit">Submit</button></td>
        </tr>
    </table>
</form>