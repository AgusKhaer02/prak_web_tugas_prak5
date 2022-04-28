<?php
    include "../../../actions.php";

    if (isset($_POST)) {
        $kdCustomer = $_POST['kd_customer'];
        $nmCustomer = $_POST['nm_customer'];
        $kota = $_POST['kota'];
        $data = [
            "nmCustomer" => $nmCustomer,
            "kota" => $kota,
        ];
        $result = queryUpdate("customer", $data, "WHERE kdCustomer = '$kdCustomer'");
        if ($result) {
            echo "
            <script>
                alert('Data telah berhasil diubah!');
                window.location.href = '../../../index.php?page=master_customer';
            </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data tidak berhasil diubah, silahkan coba lagi!');
                    window.location.href = '../../../index.php?page=form_tambah_customer';
                </script>
            
            ";
        }
    }


?>