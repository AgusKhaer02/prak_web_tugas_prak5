<?php
    include "connection.php";

    // SELECT
    function querySelect($certainColumns, String $table, String $extra = ""){
        global $conn;

        $column = null;
        if (is_array($certainColumns)) {
            $column = implode(",",array_keys($certainColumns));
        }else{
            $column = $certainColumns;
        }

        $result = mysqli_query($conn, "SELECT $column FROM $table $extra") or die(mysqli_error($conn));
        $rows = [];
        while ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    // SELECT
    function querySelectJoin($certainColumns, String $table,Array $join, String $extra = ""){
        global $conn;

        $column = null;
        if (is_array($certainColumns)) {
            $column = implode(",",array_keys($certainColumns));
        }else{
            $column = $certainColumns;
        }
        
        // RULES
        // querySelectJoin(1,2,3)
        // 1. INNER JOIN / OUTTER JOIN / LEFT JOIN / RIGHT JOIN
        // 2. <joined table> eq. Customer
        // 3. <reference key> eq. Penjualan.kdCustomer = Customer.kdCustomer
        $queryJoins = "";
        foreach ($join as $row) {
            $queryJoins .= $row[0]." ".$row[1]." ON ".$row[2]." ";
        }

        $result = mysqli_query($conn, "SELECT $column FROM $table $queryJoins $extra") or die(mysqli_error($conn));
        $rows = [];
        while ($row = mysqli_fetch_array($result)) {
            $rows[] = $row;
        }

        return $rows;
    }

    // INSERT
    function queryInsert(String $table, Array $data){
        global $conn;

        $columns = implode(",",array_keys($data));

        $values = "";
        foreach(array_values($data) as $value){
            
            $values .= "'$value',";
        }
        $values2 = substr($values, 0, -1);
        $result = mysqli_query($conn, "INSERT INTO $table ($columns) VALUES($values2)") or die(mysqli_error($conn));

        return $result;
    }

    // DELETE
    function queryDelete(String $table, String $where){
        global $conn;

        $result = mysqli_query($conn, "DELETE FROM $table $where") or die(mysqli_error($conn));
        
        return $result;
    }

    // UPDATE
    function queryUpdate(String $table, Array $data, String $where){
        global $conn;

        $colnvalue = "";
        foreach($data as $value => $row){
            
            $colnvalue .= "$value = '$row',";
        }
        // hapus , pada akhir character
        $colnvalue2 = substr($colnvalue, 0, -1);
        $result = mysqli_query($conn, "UPDATE $table SET $colnvalue2 $where") or die(mysqli_error($conn));
        
        return $result;
    }
?>