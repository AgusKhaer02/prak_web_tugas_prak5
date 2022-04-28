<?php

    include "../../../actions.php";

    if (isset($_GET)) {
        $noFaktur = $_GET['no_faktur'];

        $result = queryDelete("penjualan", "WHERE noFaktur='$noFaktur'");
        if ($result) {
            echo "
            <script>
                alert('Data telah berhasil dihapuskan!');
                window.location.href = '../../../index.php?page=penjualan';
            </script>
        ";
        } else {
            echo "
            <script>
                alert('Data tidak berhasil dihapuskan, silahkan coba lagi!');
                window.location.href = '../../../index.php?page=penjualan';
            </script>
        ";
        }
    }

?>