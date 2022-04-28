<?php

    include "../../../actions.php";

    if (isset($_POST)) {
        $data = [
            "noFaktur" => $_POST['no_faktur'],
            "tglFaktur" => $_POST['tgl_faktur'],
            "kdCustomer" => $_POST['kd_customer'],
        ];
        $result = queryInsert("penjualan", $data);
        if ($result) {
            echo "
            <script>
                alert('Data telah berhasil ditambahkan!');
                window.location.href = '../../../index.php?page=penjualan';
            </script>
        ";
        } else {
            echo "
            <script>
                alert('Data tidak berhasil ditambahkan, silahkan coba lagi!');
                window.location.href = '../../../index.php?page=form_tambah_penjualan';
            </script>
        ";
        }
    }
    
?>