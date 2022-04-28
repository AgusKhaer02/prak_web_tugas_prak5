<?php

    include "../../../actions.php";

    if (isset($_POST)) {
        $data = [
            "noFaktur" => $_POST['no_faktur'],
            "kdBarang" => $_POST['kd_barang'],
            "jumlah" => $_POST['jumlah'],
        ];
        $result = queryInsert("transaksi", $data);
        if ($result) {
            echo "
            <script>
                alert('Data telah berhasil ditambahkan!');
                window.location.href = '../../../index.php?page=transaksi';
            </script>
        ";
        } else {
            echo "
            <script>
                alert('Data tidak berhasil ditambahkan, silahkan coba lagi!');
                window.location.href = '../../../index.php?page=form_tambah_transaksi';
            </script>
        ";
        }
    }
    
?>