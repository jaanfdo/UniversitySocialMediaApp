<?php

$server = "localhost";
$username = "root";
$password = "1234";
$database = "finalyearproject";

mysql_connect($server, $username, $password) or die("<h1>Connection Mysql Error : </h1>" . mysql_error());
mysql_select_db($database) or die("<h1>Database Error : </h1>" . mysql_error());

@$Action = $_GET['Action'];

switch ($Action) {
    case "viewNews":
        $query = mysql_query("SELECT * FROM news") or die(mysql_error());
        $data_array = array();
        while ($data = mysql_fetch_assoc($query)) {
            $data_array[] = $data;
        }
        echo json_encode($data_array);

        break;
    case "viewSchedule":
        $query = mysql_query("SELECT * FROM schedule") or die(mysql_error());
        $data_array = array();
        while ($data = mysql_fetch_assoc($query)) {
            $data_array[] = $data;
        }
        echo json_encode($data_array);

        break;

    case "viewEvents":
        $query = mysql_query("SELECT * FROM event") or die(mysql_error());
        $data_array = array();
        while ($data = mysql_fetch_assoc($query)) {
            $data_array[] = $data;
        }
        echo json_encode($data_array);

        break;
    
    case "viewAppointment":
        $query = mysql_query("SELECT * FROM appointment") or die(mysql_error());
        $data_array = array();
        while ($data = mysql_fetch_assoc($query)) {
            $data_array[] = $data;
        }
        echo json_encode($data_array);

        break;
        
    case "get_id":
        @$id = $_GET['id'];

        $query_tampil_biodata = mysql_query("SELECT * FROM tabel_biodata WHERE id='$id'") or die(mysql_error());
        $data_array = array();
        $data_array = mysql_fetch_assoc($query_tampil_biodata);
        echo "[" . json_encode($data_array) . "]";
        break;
    case "insert":
        @$nama = $_GET['nama'];
        @$alamat = $_GET['alamat'];
        $query_insert_data = mysql_query("INSERT INTO tabel_biodata (nama, alamat) VALUES('$nama', '$alamat')");
        if ($query_insert_data) {
            echo "Data Berhasil Disimpan";
        } else {
            echo "Error Inser Biodata " . mysql_error();
        }

        break;
    case "get_id":
        @$id = $_GET['id'];

        $query_tampil_biodata = mysql_query("SELECT * FROM tabel_biodata WHERE id='$id'") or die(mysql_error());
        $data_array = array();
        $data_array = mysql_fetch_assoc($query_tampil_biodata);
        echo "[" . json_encode($data_array) . "]";
        break;

    case "update":
        @$nama = $_GET['nama'];
        @$alamat = $_GET['alamat'];
        @$id = $_GET['id'];
        $query_update_biodata = mysql_query("UPDATE tabel_biodata SET nama='$nama', alamat='$alamat' WHERE id='$id'");
        if ($query_update_biodata) {
            echo "Update Data Berhasil";
        } else {
            echo mysql_error();
        }
        break;
    case "delete":
        @$id = $_GET['id'];
        $query_delete_biodata = mysql_query("DELETE FROM tabel_biodata WHERE id='$id'");
        if ($query_delete_biodata) {
            echo "Delete Data Berhasil";
        } else {
            echo mysql_error();
        }

        break;

    default:
        break;
}
?>