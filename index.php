<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PT. Ungukom</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    

    <table width="100%" height="100%">
        <tr>
            <td id="title" colspan="2"><h1 >PT. <span id="prefix_logo">Ungu</span>kom</h1></td>
        </tr>
        <tr>
            <td width="20%" id="side_nav">
                <span class="label_sidenav">Main Menu</span>
                <ul>
                    <?php
                        $page = "";
                        if (isset($_GET['page'])) {
                            $page=$_GET['page'];
                        }
                    ?>
                    <li class="<?= ($page === "master_customer") ? "active" : ""?>"><a href="index.php?page=master_customer">Master Customer</a></li>
                    <li class="<?= ($page === "master_barang") ? "active" : ""?>"><a href="index.php?page=master_barang">Master Barang</a></li>
                    <li class="<?= ($page === "penjualan") ? "active" : ""?>"><a href="index.php?page=penjualan">Penjualan</a></li>
                    <li class="<?= ($page === "transaksi") ? "active" : ""?>"><a href="index.php?page=transaksi" >Transaksi<a></li>
                </ul>
            </td>
            <td>
                <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];

                        switch ($page) {
                            case 'master_customer':
                            include "pages/master_customer/master_customer.php";
                            break;
                                case 'form_ubah_customer':
                                include "pages/master_customer/form_ubah_customer.php";
                                break;
    
                                case 'form_tambah_customer':
                                include "pages/master_customer/form_tambah_customer.php";
                                break;
                            case 'master_barang':
                            include "pages/master_barang/master_barang.php";
                            break;
                                case 'form_ubah_barang':
                                include "pages/master_barang/form_ubah_barang.php";
                                break;

                                case 'form_tambah_barang':
                                include "pages/master_barang/form_tambah_barang.php";
                                break;
                            case 'penjualan':
                            include "pages/penjualan/penjualan.php";
                            break;
                                case 'form_ubah_penjualan':
                                include "pages/penjualan/form_ubah_penjualan.php";
                                break;

                                case 'form_tambah_penjualan':
                                include "pages/penjualan/form_tambah_penjualan.php";
                                break;
                            case 'transaksi':
                            include "pages/transaksi/transaksi.php";
                            break;
                                case 'form_ubah_transaksi':
                                include "pages/transaksi/form_ubah_transaksi.php";
                                break;

                                case 'form_tambah_transaksi':
                                include "pages/transaksi/form_tambah_transaksi.php";
                                break;

                            default:
                                include "pages/404_error.php";
                                break;
                        }
                    }else {
                        include "pages/welcome/welcome.php";
                    }
                ?>

            </td>
            <td></td>
        </tr>
    </table>

    
</body>
</html>