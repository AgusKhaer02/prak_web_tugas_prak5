<?php

    include "../../../actions.php";

    if (isset($_POST)) {
        $data = [
            "kdBarang" => $_POST['kd_barang'],
            "nmBarang" => $_POST['nm_barang'],
            "stok" => $_POST['stok'],
        ];
        $result = queryInsert("barang", $data);
        if ($result) {
            echo "
            <script>
                alert('Data telah berhasil ditambahkan!');
                window.location.href = '../../../index.php?page=master_barang';
            </script>
        ";
        } else {
            echo "
            <script>
                alert('Data tidak berhasil ditambahkan, silahkan coba lagi!');
                window.location.href = '../../../index.php?page=form_tambah_barang';
            </script>
        ";
        }
    }
    
?>