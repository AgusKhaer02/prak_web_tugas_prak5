<?php

    include "../../../actions.php";

    if (isset($_GET)) {
        $kdCustomer = $_GET['kd_customer'];

        $result = queryDelete("customer", "WHERE kdCustomer='$kdCustomer'");

        if ($result) {
            echo "
            <script>
                alert('Data telah berhasil dihapuskan!');
                window.location.href = '../../../index.php?page=master_customer';
            </script>
        ";
        } else {
            echo "
            <script>
                alert('Data tidak berhasil dihapuskan, silahkan coba lagi!');
                window.location.href = '../../../index.php?page=form_tambah_customer';
            </script>
        ";
        }
    }

?>