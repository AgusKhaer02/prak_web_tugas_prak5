<?php
    include "../../../actions.php";

    if (isset($_POST)) {
        $noFaktur = $_POST['no_faktur'];
        $tglFaktur = $_POST['tgl_faktur'];
        $kdCustomer = $_POST['kd_customer'];
        $data = [
            "tglFaktur" => $tglFaktur,
            "kdCustomer" => $kdCustomer,
        ];
        $result = queryUpdate("penjualan", $data, "WHERE noFaktur = '$noFaktur'");
        if ($result) {
            echo "
            <script>
                alert('Data telah berhasil diubah!');
                window.location.href = '../../../index.php?page=penjualan';
            </script>
            ";
        }else{
            echo "
                <script>
                    alert('Data tidak berhasil diubah, silahkan coba lagi!');
                    window.location.href = '../../../index.php?page=form_ubah_penjualan?no_faktur=".$noFaktur."';
                </script>
            
            ";
        }
    }


?>