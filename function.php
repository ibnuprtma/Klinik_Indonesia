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

        $nm_pas = $dataP["nama"];
        $almt_pas = $dataP["alamat"];
        $jkel_pas = $dataP["rJK"];
        $darah_pas = $dataP["rGD"];
        $lhr_pas = $dataP["Tanggal-Lahir"];

        $query = "INSERT INTO PASIEN 
                    VALUES
                ('','$nm_pas','$almt_pas','$jkel_pas',' $darah_pas',' $lhr_pas','')";

        $result;
        return mysqli_affected_rows($conn);
    }


?>