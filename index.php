<?php 

require 'function.php';


if(isset($_POST["submit"])){
    if(tambah($_POST) > 0){

        echo "<script>
    
        swal(
                'Good job!',
                'You clicked the button!',
                'success'
        );
            
       </script>";

    }else{
        echo "
        <script>
            swal({
                type: 'error',
                title: 'Oops...',
                text: 'Something went wrong!',
                footer: '<a href>Why do I have this issue?</a>'
            });
        </script>";
    }

}


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="/Js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="/Js/sweetalert2.min.css">

    <title>Klinik Indonesia</title>
  </head>
  <body>

   <nav class="icon">
    <a href="index.php"><img src="icon/icon.svg" alt=""></a>
   </nav>

   <div class="container text-center py-5 ">
       <div class="row">
           <div class="col-sm">
                <div class="gambar ml-auto mr-auto"></div>
           </div>
           <div class="col-sm mt-5">
                <h1 class="mt-2">PENDAFTARAN</h1>
                <br>
                <P>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                when an unknown printer took a galley of type and scrambled it to make a type specimen book.</P><br><br>
                <center>
                    <a href="#btnpas">
                        <button type="button" class="btn btn-success btn-dfr" data-toggle="modal" data-target=".ModalPasien">PASIEN</button>
                    </a>

                    <div class="modal fade ModalPasien" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content mdlcont pt-4">
                                    <H1>PASIEN</H1>
                                    <form action="" class="px-5 py-5 text-left" method="post">

                                        <div class="form-group">
                                            <label for="Nm_lngkp" class="ml-1">Nama Lengkap</label>
                                            <input type="text" class="form-control" name ="nama" id="Nm_lngkp" placeholder="Masukan Nama lengkap..">
                                        </div>

                                        <div class="form-group">
                                            <label for="Alamat" class="ml-1">Alamat</label>
                                            <input type="text" class="form-control" id="Alamat" name="alamat" placeholder="Masukan alamat">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="" class="ml-1">Jenis Kelamin</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rJK" id="lk" value="Laki-Laki">
                                                <label class="form-check-label" for="lk">Laki-Laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rJK" id="prmpan" value="Perempuan">
                                                <label class="form-check-label" for="prmpan">Perempuan</label>
                                            </div>
                                        </div>
                                            
                                        <div class="form-group">
                                            <label for="" class="ml-1">Golongan Darah</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rGD" id="A" value="A">
                                                <label class="form-check-label" for="A">A</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rGD" id="B" value="B">
                                                <label class="form-check-label" for="B">B</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rGD" id="O" value="O">
                                                <label class="form-check-label" for="O">O</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rGD" id="AB" value="AB">
                                                <label class="form-check-label" for="AB">AB</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-date-input" class="ml-1">Tanggal Lahir</label>
                                            <input class="form-control" name="Tanggal-Lahir" type="date" value="2011-08-19" id="example-date-input">
                                        </div>

                                        <br><br>

                                        <center>
                                        
                                          
                                                <button type="submit" class="btn btn-success btn-dfr">Kembali</button>
                                            
                                            
                                       
                                                <button type="submit" class="btn btn-success btn-dfr" name="submit">Selesai</button>
                                        

                                        </center>
                                        
                                    </form>
                                </div>
                            </div>
                    </div>

                    <a href="#btndok">
                        <button type="button" class="btn btn-success btn-dfr" data-toggle="modal" data-target=".ModalDok">DOKTER</button>
                    </a>

                    <div class="modal fade ModalDok" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content mdlcont pt-4">
                                    <H1>DOKTER</H1>
                                    <form action="" class="px-5 py-5 text-left" method ="post">

                                        <div class="form-group">
                                            <label for="Nm_lngkp" class="ml-1">Nama Lengkap</label>
                                            <input type="text" class="form-control" id="Nm_lngkp" name ="nama" placeholder="Masukan Nama lengkap..">
                                        </div>

                                        <div class="form-group">
                                            <label for="Alamat" class="ml-1">Alamat</label>
                                            <input type="text" class="form-control" id="Alamat" name="alamat" placeholder="Masukan alamat">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="" class="ml-1">Jenis Kelamin</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rJK" id="lk" value="Laki-Laki">
                                                <label class="form-check-label" for="lk">Laki-Laki</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rJK" id="prmpan" value="Perempuan">
                                                <label class="form-check-label" for="prmpan">Perempuan</label>
                                            </div>
                                        </div>
                                            

                                         <div class="form-group">
                                            <label for="Spesialis" class="ml-1">Spesialis</label>
                                            <input type="text" class="form-control" name="spesialis" id="Spesialis" placeholder="Masukan Spesialis">
                                        </div>

                                        <div class="form-group">
                                            <label for="" class="ml-1">Golongan Darah</label><br>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rGD" id="A" value="A">
                                                <label class="form-check-label" for="A">A</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rGD" id="B" value="B">
                                                <label class="form-check-label" for="B">B</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rGD" id="O" value="O">
                                                <label class="form-check-label" for="O">O</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="rGD" id="AB" value="AB">
                                                <label class="form-check-label" for="AB">AB</label>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label for="example-date-input" class="ml-1">Tanggal Lahir</label>
                                            <input class="form-control" type="date" name="Tanggal-Lahir" value="2011-08-19" id="example-date-input">
                                        </div>

                                        <br><br>

                                        <center>
                                        
                                          
                                                <button type="submit" class="btn btn-success btn-dfr">Kembali</button>
                                          
                                            
                                            
                                                <button type="submit" class="btn btn-success btn-dfr" name ="submit"> Selesai</button>
                                           

                                        </center>
                                        
                                    </form>
                                </div>
                            </div>
                    </div>

                </center>
           </div>
       </div>
   </div>
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
