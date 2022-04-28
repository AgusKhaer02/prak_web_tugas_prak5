<?php
    include "actions.php";

    $join = [
        [
            "LEFT JOIN","penjualan","transaksi.noFaktur = penjualan.noFaktur"
        ],
        [
            "LEFT JOIN","customer","penjualan.kdCustomer = customer.kdCustomer"
        ],
        [
            "LEFT JOIN","barang","transaksi.kdBarang = barang.kdBarang"
        ],
    ];
    $dataJoin = querySelectJoin("transaksi.noFaktur, customer.nmCustomer, transaksi.kdBarang, barang.nmBarang, transaksi.jumlah", "transaksi",$join);

?>