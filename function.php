<?php 

    $conn = mysqli_connect("localhost","root","","klnik_indonesia");

    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($dataP){
        global $conn;

                
        date_default_timezone_set('Asia/Jakarta');
        $date = date('d/m/Y', time());
        $digits = 3;

        $kd_pas = rand(pow(10, $digits-1), pow(10, $digits)-1);
        $nm_pas = $dataP["nama"];
        $almt_pas = $dataP["alamat"];
        $jkel_pas = $dataP["rJK"];
        $darah_pas = $dataP["rGD"];
        $lhr_pas = $dataP["Tanggal-Lahir"];
        $tgl_daftar = $date;

        $query = "INSERT INTO PASIEN 
                    VALUES
                (
                '$kd_pas',
                '$nm_pas',
                '$almt_pas',
                '$jkel_pas',
                '$darah_pas',
                '$lhr_pas',
                '$tgl_daftar'
                )";

        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }


?>