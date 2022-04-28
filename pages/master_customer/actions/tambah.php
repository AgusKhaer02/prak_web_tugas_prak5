<?php

    include "../../../actions.php";

    if (isset($_POST)) {
        $data = [
            "kdCustomer" => $_POST['kd_customer'],
            "nmCustomer" => $_POST['nm_customer'],
            "kota" => $_POST['kota'],
        ];
        $result = queryInsert("customer", $data);
        if ($result) {
            echo "
            <script>
                alert('Data telah berhasil ditambahkan!');
                window.location.href = '../../../index.php?page=master_customer';
            </script>
        ";
        } else {
            echo "
            <script>
                alert('Data tidak berhasil ditambahkan, silahkan coba lagi!');
                window.location.href = '../../../index.php?page=form_tambah_customer';
            </script>
        ";
        }
    }
    
?>