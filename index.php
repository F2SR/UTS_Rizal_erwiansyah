<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS || RIZAL</title>
    <style>
   
    @import url('https://fonts.googleapis.com/css?family=Open+Sans');

    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    font-family: 'Open Sans', sans-serif;
    }

    body{
    background-size: cover;
    width: 100%;
    height: 100vh;
    font-size: 16px;
    }

    .wrapper{
    width: 100%;
    padding: 10px;
    }

    .container{
    max-width: 500px;
    height: auto;
    margin: 0px auto;
    background: #dedede;
    padding: 20px 40px 30px;
    border-bottom-left-radius: 5px;
    border-bottom-right-radius: 5px;
    }

    .title{
    color: #5f6c7d;
    font-size: 2em;
    text-align: center;
    text-transform: uppercase;
    font-weight: 900;
    margin-bottom: 20px;
    }

    .input-form{
    margin-bottom: 20px;
    }

    .input-form .label{
        display: block;
        font-size: 1em;
        color: #212121;
        text-transform: capitalize;
        margin-bottom: 8px;
    }

    .input-form .items{
    margin-bottom: 20px;
    }

    .section-1 .items .input,
    .section-2 .items .input,
    .section-3 .items .input,
    .section-4 .items .input,
    .section-5 .items .input{
        background: transparent;
        border: 2px solid #BDBDBD;
        width: 100%;
        padding: 10px;
        font-size: 1em;
        color: #212121;
        border-radius: 3px;
    }

    .input-form .section-3{
    display: flex;
    justify-content: space-between;
    }

    .input-form .section-3 .items{
    width: 48%;
    }

    .btn{
        background: #5f6c7d;
        color: #fff;
        margin-left: 77px;
        padding: 10px 0;
        width:100px;
        text-align: center;
        text-transform: uppercase;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        letter-spacing: 2px;
    }

    .cvc{
    display: flex;
    justify-content: space-between;
    position: relative;
    transition: all 0.3s ease;
    }

    .cvc .tooltip{
    color: #d4d4d4;
    border: 2px solid #d4d4d4;
    border-radius: 50%;
    width: 25px;
    height: 25px;
    text-align:center;
    cursor: pointer;
    }

    .cvc .cvc-img{
    position: absolute;
    top: -300%;
    right: 0;
    background: #5f6c7d;
    padding: 12px;
    border-radius: 5px;
    display: none;
    }

    .cvc .cvc-img img{
    width: 100px;
    height: auto;
    display: block;
    }

    .cvc:hover .cvc-img{
    display: block;
    }

    @media screen and (max-width: 460px){
    .input-form .section-3{
        flex-direction: column;
    }
    .input-form .section-3 .items{
        width: 100%;
    }
    .input-form .items{
        margin-bottom: 10px;
    }

    .input-form{
        margin-bottom: 15px;
    }
    .title{
        font-size: 1.5em;
        margin-bottom: 15px;
    }
    }
    </style>
</head>
<body>
    <div>
    <div class="wrapper">
        <div class="container">
            <div class="title">NUSANTARA COMPUTER CENTER</div>
            
           <form action="<?php ($_SERVER["PHP_SELF"]);?>" method="post">
           <div class="input-form">
            <div class="section-1">
                <div class="items">
                <label class="label">Nama</label>
                <input type="text" class="input" name="nama" placeholder="Muhamad Rizal Erwiansyah">
                </div>
            </div>
            <div class="section-2">
                <div class="items">
                <label class="label">Kode Pendaftaran</label>
                    <select name="kode_pend" class="input">
                        <option value="">Pilih Disini</option>
                        <option value="VBSK00108">VBSK00108</option>
                        <option value="DPSJ00210">DPSJ00210</option>
                        <option value="LXSM10105">LXSM10105</option>
                    </select>
                </div>
            </div>
            <div class="section-3">
                <div class="items">
                <label class="label">Kelas</label>
                <select name="kelas" class="input">
                    <option value="">Pilih Kelas</option>
                    <option value="Regular">Regular</option>
                    <option value="Private">Private</option>
                </select>
                </div>
                <div class="items">
                <div class="cvc">
                    <label class="label">Jumlah Pertemuan</label>
                    <div class="tooltip">?
                    <div class="cvc-img"></div>
                    </div>
                </div>
                <input type="number" class="input" name="jmlh_pertemuan">
                </div>
            </div>
            <div class="section-4">
                <div class="items">
                <label class="label">Jumlah Peserta</label>
                <input type="number" class="input" name="jmlh_peserta">
                </div>
            </div>
            <div class="section-5">
                <div class="items">
                <label class="label">Hasil Test Awal</label>
                    <select name="hasil_test" class="input">
                        <option value="">Pilih Disini</option>
                        <option value="Grade A">Grade A</option>
                        <option value="Grade B">Grade B</option>
                        <option value="Grade C">Grade C</option>
                    </select>
                </div>
            </div>
            </div>

            
                <input type="submit" class="btn" value="Proses"></input>
                <button class="btn"><a href="index.php" style="color: white;">Ulang</a></button>
           

           </form>

          
        </div>
        </div>
        <br>
        <br>
        <?php
        error_reporting(0);
                if($_SERVER["REQUEST_METHOD"] == "POST")
                {
                    $nama = $_POST["nama"];
                    $kode_pend = $_POST["kode_pend"];
                    $kelas = $_POST["kelas"];
                    $jmlh_pertemuan = $_POST["jmlh_pertemuan"];
                    $jmlh_peserta = $_POST["jmlh_peserta"];
                    $hasil_test = $_POST["hasil_test"];
                    $biaya_sub="";
                    $biaya_kursus = "";
                    $jenis_kursus = "";
                    $hari = "";
                    $no_urut = substr($kode_pend, 4, 3);
                    $lama_pertemuan = substr($kode_pend, 7, 2);
                    $biaya_tambahan = "";

                  

                   if($kode_pend == "VBSK00108")
                   {
                       $biaya_kursus = 750000;
                       $jenis_kursus = "Pemrograman";
                   }elseif($kode_pend == "DPSJ00210")
                   {
                       $biaya_kursus = 650000;
                       $jenis_kursus = "Pemrograman";
                   }elseif($kode_pend == "LXSM10105"){
                       $biaya_kursus = 800000;
                       $jenis_kursus = "Sistem Operasi";
                   }
                   if($hasil_test == "Grade A")
                   {
                     $biaya_sub = (5/100)* $biaya_tambahan;

                   }else if($hasil_test == "Grade B")
                   {
                    $biaya_sub = (2/100)* $biaya_tambahan;
                   }else{
                     $biaya_sub = 0;
                   }

                   if(substr($kode_pend, 3, 1) == "K")
                   {
                       $hari = "Kamis";
                   }elseif(substr($kode_pend, 3, 1) == "J")
                   {
                       $hari = "Jumat";
                   }elseif(substr($kode_pend, 3, 1) == "M")
                   {
                       $hari = "Minggu";
                   }
                   
                   if($kelas == "Private")
                   {
                    if($jmlh_peserta > 5)
                    {
                     $biaya_tambahan = $jmlh_peserta * 75000;
                    }elseif($jmlh_peserta < 5)
                    {
                        $biaya_tambahan = $jmlh_peserta * 200000;
                    }
                   }elseif($kelas == "Regular")
                   {
                       if($jmlh_peserta < 10)
                       {
                           $biaya_tambahan = $jmlh_peserta * 50000;
                       }
                   }

                   $total = $biaya_kursus + $biaya_tambahan + $biaya_sub;

                
                  echo "<div style='width:80%;'>
                  <div style='width:100%; text-align:center;'>
                  <label ><b>NUSANTARA COMPUTER CENTER</b></label></br>
                  <label >Kode Pendaftaran : '$kode_pend'</label>
                  </div>
                  <br>
                  <table style='width:40%;float: left;'>
                      <tr>
                          <td>Nama</td>
                          <td>:</td>
                          <td>'$nama'</td>
                      </tr>
                      <tr>
                          <td>Kelas </td>
                          <td>:</td>
                          <td>'$kelas'</td>
                      </tr>
                      <tr>
                          <td>hasil Tes Awal </td>
                          <td>:</td>
                          <td>'$hasil_test'</td>
                      </tr>
                      <tr>
                          <td>Jumlah peserta</td>
                          <td>:</td>
                          <td>'$jmlh_peserta' Orang</td>
                      </tr>  
                      <tr>
                          <td>Biaya Kursus</td>
                          <td>:</td>
                          <td>'$biaya_kursus'</td>
                      </tr> 
                      <tr>
                          <td>Biaya Subsidi </td>
                          <td>:</td>
                          <td>'$biaya_sub'</td>
                      </tr>
                  </table>
                  <table style='width:40%;'>
                      <tr>
                          <td>Jenis Khursus </td>
                          <td>:</td>
                          <td>'$jenis_kursus'</td>
                      </tr>
                      <tr>
                          <td>No. Urut </td>
                          <td>:</td>
                          <td>'$no_urut'</td>
                      </tr>
                      <tr>
                          <td>Hari </td>
                          <td>:</td>
                          <td>'$hari'</td>
                      </tr>
                      <tr>
                          <td>Jumlah pertemuan </td>
                          <td>:</td>
                          <td>'$jmlh_pertemuan' Kali</td>
                      </tr>  
                      <tr>
                          <td>Biaya Tambahan </td>
                          <td>:</td>
                          <td>'$biaya_tambahan'</td>
                      </tr> 
                      <tr>
                          <td>Biaya Yang Dibayar </td>
                          <td>:</td>
                          <td>'$total'</td>
                      </tr>
                  </table>
             </div>";
                   
                }
           ?>
            <br><br>
    </div>
</body>
</html>