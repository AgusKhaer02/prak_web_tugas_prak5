<?php
    include "../../../actions.php";

    if (isset($_POST)) {
        $kdBarang = $_POST['kd_barang'];
        $nmBarang = $_POST['nm_barang'];
        $stok = $_POST['stok'];
        $data = [
            "nmBarang" => $nmBarang,
            "stok" => $stok,
        ];
        $result = queryUpdate("barang", $data, "WHERE kdBarang = '$kdBarang'");
        if ($result) {
            echo "
            <script>
                alert('Data telah berhasil diubah!');
                window.location.href = '../../../index.php?page=master_barang';
            </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data tidak berhasil diubah, silahkan coba lagi!');
                    window.location.href = '../../../index.php?page=form_ubah_barang';
                </script>
            
            ";
        }
    }


?>