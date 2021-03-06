<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="shortcut icon" sizes="76x76" href="image/favicon-96x96.png">
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Indie+Flower&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=East+Sea+Dokdo&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <title>Selamat Ulang Tahun</title>
    <style>
        .content {
          width: 100%;
        }
        .hero img.profil {
          width: 200px;
          height: 200px;
          margin-top: 25px;
          box-shadow: 1px 27px 15px -20px rgba(0,0,0,75);
          border: 7px solid white;
        }
        .anggur {
          display: flex;
          justify-content: center;
        }
        .hero {
            width: 100%;
            height: 500px;       
            background-color: tomato;
            background-size: cover;
            text-align: center;
        }
        }
        #puisi {
            color: chartreuse;
        }
        /*  data*/
        .container.data {
          border: 1px solid white;
          box-shadow: -10px -10px 10px rgba(0,0,0,75),0px 4px 10px rgba(0,0,0,75);
        }
        .hbd {
          border: 1px solid white;
          box-shadow: -10px -10px 10px rgba(0,0,0,75), 0px 4px 10px rgba(0,0,0,75);
          text-align: justify;
        }
        /* image */
        .foto {
          margin: 2px auto;
          display: flex;
          justify-content: center;
        }
        #foto-2 {
          margin: 2px auto;
          box-shadow: -10px -10px 10px rgba(0,0,0,75), 0px 4px 10px rgba(0,0,0,75);
        }
        .puisi {
          box-shadow: -10px -10px 10px rgba(0,0,0,75), 0px 4px 10px rgba(0,0,0,75);
          padding: 5px;
          box-sizing: border-box;
        }
        .card-footer {
          font-family: 'East Sea Dokdo', cursive;
          font-size: 20px;
          text-align: center;
        }
        .ajeng {
          font-family: 'Indie Flower', cursive;
          font-weight: bold;
          font-size: 30px
        }
        .mt-2.ajeng{
          display: flex;
          justify-content: center;
        }
        .umur {
          font-family: 'Indie Flower', cursive;
          color: white;
          font-size: 27px;
        }
        .row-video {
          display: flex;
          justify-content: center;
        }
        #video-hbd {
          height: 500px;
        }
        .card.foto {
          width: 12rem;
        }
        @media (max-width: 600px) {
          #video-hbd { 
            height: 250px;
          }
          .card.foto {
            width: 70px;
            border: 1px solid red;
          }
        }
        @media (max-width: 900px) {
          #video-hbd { 
            height: 250px;
            }
        }
    </style>
  </head>
  <body>
      <div class="container-fluid">
        <div class="hero">
          <img src="image/profil.jpg" alt="ajeng" class="profil">
          <p class="mt-2 ajeng">
            <i class="fas fa-star fa-1x" style="color: blanchedalmond;"></i>
            Ajeng Puspita
            <i class="fas fa-star fa-1x" style="color: blanchedalmond;"></i>
            <?php
                //tanggal lahir
                $birthDt = new DateTime('1999-12-31');
                //tanggal hari ini
                $today = new DateTime('today');
                //tahun
                $y = $today->diff($birthDt)->y;
                //bulan
                $m = $today->diff($birthDt)->m;
                //hari
                $d = $today->diff($birthDt)->d;
            ?>
            <p class="umur">
                <?php
                echo $y . " tahun " . $m . " bulan " . $d . " hari";
                ?>
            </p>
          </p>
        </div>
        <div class="content">
          <div class="anggur">
            <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fas fa-images fa-2x" style="color: darkmagenta;"></i></a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fas fa-female fa-2x" style="color: crimson;"></i></a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">
                  <!-- <img src="pesan.png" alt="" style="width: 50px;margin-left: -10px;"> -->
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-envelope-fill text-success" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                  </svg>
                </a>
              </li>
              <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-puisi-tab" data-toggle="pill" href="#pills-puisi" role="tab" aria-controls="pills-puisi" aria-selected="false"><i class="fas fa-book-open fa-2x" id="puisi"></i></a>
              </li>
            </ul>
          </div>
          <br><br>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
              <!-- <br><br> -->
              <div class="foto">
                <div class="row" id="foto-2">
                  <div class="col-4-md col-4-sm col-4-lg">
                    <div class="card foto">
                      <img src="image/image-1.jpg" class="card-img-top" alt="...">
                      <div class="card-body text-justify">
                        <p class="card-text">
                         
                        </p>    
                      </div>
                    </div>
                  </div>
                  <div class="col-4-md col-4-sm col-4-lg">
                    <div class="card foto">
                      <img src="image/image-2.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">
                        </p>    
                      </div>
                    </div>
                  </div>
                  <div class="col-4-md col-4-sm col-4-lg">
                    <div class="card foto">
                      <img src="image/image-3.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">
                        </p>    
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
              <div class="container data mt-2">
                <div class="row">
                  <table>
                    <tr>
                      <td><div class="col-2-md font-weight-bold">Nama</div></td>
                      <td><div class="col-2-md"> :</div></td>
                      <td><div class="col-2-md">Ajeng Puspita</div></td>
                    </tr>
                    <tr>
                      <td><div class="col-2-md font-weight-bold">Tempat, tanggal lahir</div></td>
                      <td><div class="col-2-md"> :</div></td>
                      <td><div class="col-2-md">Jakarta, 31 Desember 1999</div></td>
                    </tr>
                    <tr>
                      <td><div class="col-2-md font-weight-bold">Status</div></td>
                      <td><div class="col-2-md"> :</div></td>
                      <td><div class="col-2-md">Belum Menikah</div></td>
                    </tr>
                    <tr>
                      <td><div class="col-2-md font-weight-bold">Alamat</div></td>
                      <td><div class="col-2-md">:</div></td>
                      <td><div class="col-2-md">Jalan Tipar Cakung Kamp. Rengas <br>Jakarta utara</div></td>
                    </tr>
                    <tr>
                      <td><div class="col-2-md font-weight-bold">Hobby</div></td>
                      <td><div class="col-2-md"> :</div></td>
                      <td><div class="col-2-md">Makan, Nonton Tv, Rebahan</div></td>
                    </tr>
                  </table>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <!-- <br><br> -->
              <div class="hbd">
                <div class="row mt-2">
                  <div class="col-md-3">
                    <img src="image/hbd.jpg" alt="hbd_ajeng" class="img-thumbnail mt-2">
                  </div>
                  <div class="col-md-7">
                      <p>Selamat ulang tahun untuk Ajeng. 
                        Biarpun orang lain tahu kalau ini hari di mana bertambahnya usiamu,
                        namun bagiku kamu masih tetap perempuan yang cantik saat pertama kali aku melihatmu,
                        cantikmu tidak memudar, senyum manismu tidak luntur. Happy birthday Ajeng yang cantik.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-puisi" role="tabpanel" aria-labelledby="pills-puisi-tab">
              <!-- <br><br> -->
              <div class="puisi">
                <p class="puisi-text  text-justify">
                  Selamat Ulang Tahun Cinta
                  Aku tau hari ini begitu berharga..
                  Aku tau hari ini juga begitu sempurna.
                  Engkau kini semakin dewasa..
                  <br>
                  Selamat ulang tahun cinta..
                  Jika kebersamaan ini begitu berharga..
                  Kan ku beri semuanya dalam sebentuk kasih..
                  <br>
                  Yang tak mampu tertembus oleh apapun..
                  Dimana dan bagaimanapun ..
                  Cinta ini kan ku biarkan masih..
                  Utuh dan tak akan pernah berkurang sedikitpin... <br>
                  Semoga kedewasaan selalu menjadi sahabatmu..
                  Kesehatan menjadi tempat teduhmu..
                  Dan Rasa sayangku untuk kenyamananmu..
                </p>
              </div>  
            </div>
          </div>
          <br><br><br><br>
          <div class="row-video">          
            <div class="col-md-4 video-black">
              <div class="card mb-1" >
                <video controls id="video-hbd"> 
                  <source src="image/video.mp4" class="card-video-top" type="video/mp4">
                </video>
                <div class="card-body">
                  <h5 class="card-title">Selamat Ulang Tahun</h5>
                  <p class="card-text"></p>
                  <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-muted mt-5">
          <a href="https://lutfialbatawi.github.io/my-portfolio" class="text-decoration-none">Copy right @ L</a>
        </div>
      </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>