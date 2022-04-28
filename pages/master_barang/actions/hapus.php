<?php

    include "../../../actions.php";

    if (isset($_GET)) {
        $kdBarang = $_GET['kd_barang'];

        $result = queryDelete("barang", "WHERE kdBarang='$kdBarang'");
        if ($result) {
            echo "
            <script>
                alert('Data telah berhasil dihapuskan!');
                window.location.href = '../../../index.php?page=master_barang';
            </script>
        ";
        } else {
            echo "
            <script>
                alert('Data tidak berhasil dihapuskan, silahkan coba lagi!');
                window.location.href = '../../../index.php?page=master_barang';
            </script>
        ";
        }
    }

?>