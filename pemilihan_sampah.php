<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
    /* Tambahkan gaya khusus di sini */
    .carousel-img {
      height: 300px; /* Sesuaikan tinggi carousel */
    }

    .item{
      width: 30%; /* Mengisi lebar penuh dari container (box) */
      height: auto;
    }

    .box{
      display: flex;
    text-align: center;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 150px;
    overflow: hidden;
    padding-top:35px
  
    }

  </style>

<link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
  integrity="sha512-5IlaZC7QYn7NcI5k6Z8NQg/z70q0o8aa2I2ooWOlfLZ4tERj0g5lPZ1BDaMtC2DyKG5DZ50gCPSKEBHfD1S3eg=="
  crossorigin="anonymous"
  referrerpolicy="no-referrer"
/>


    
  </head>
  <body class="bg-success-subtle">


    <div class="container-fluid "  >
      <div class="row">
        <div class="col-md-12">
          <?php  include_once 'template/header.php'; ?>
        </div>
      </div>
      
      

      <div class="row">
        <div class="col-md-12">
        <div id="carouselExample" class="carousel slide">

<div class="carousel-inner">

  <div class="carousel-item active">
    <img src="img/1.png" class="d-block w-100 carousel-img" >
  </div>
  <div class="carousel-item active">
    <img src="img/3.png" class="d-block w-100 carousel-img" >
  </div>

  <div class="carousel-item">
    <img src="img/2.png" class="d-block w-100 carousel-img" >
  </div>
</div>

<button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Previous</span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
  <span class="carousel-control-next-icon" aria-hidden="true"></span>
  <span class="visually-hidden">Next</span>
</button>
</div>
        </div>
      </div>  


      <div class="container">
        <div class="row mt-4">
          <div class="col-md-12">

            <h5>Kategori dan Jenis Sampah</h5>
            <p>Sebelum dapat memahami cara mengelola sampah dengan tepat dan bertanggung jawab. hal penting yang perlu diketahui
              adalah perbedaan dan karakteristik dari setiap jenis sampah yang ada. Tidak hanya terdiri dari sampah organik dan anorganik, 
              sampah juga dapat dibedakan berdasarkan kategori tertentu. Berikut adalah jenis-jenis sampah berdasarkan sifat, sumber, dan waktunya.
              Pemanfaatan sampah dilakukan untuk mencegahnya berakhir sia-sia tidak terkelola. Pengelolaan sampah bertanggung jawab juga
              berperan mengurangi potensinya mencemari lingkungan.
            </p>

          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-12">

            <h5>Pemilihan Sampah</h5>
            <p>Berikut adalah jenis sampah yang dapat kami daur ulang</p>


          </div>
        </div>

        <div class="row mt-4">
          <div class="col-md-12">
            

            <div class="card float-start box" style="width: 15rem;">
              <img class="card-img-top item"  src="img/botol.JPG" alt="Card image cap">
              <h5 class="card-title ">Botol</h5>
            <div class="card-body">
            <!-- <h5 class="card-title">Botol</h5> -->
          </div>
        </div>

        <div class="card float-end box" style="width: 15rem;">
          <img class="card-img-top item"  src="img/botol-plastik.JPG" alt="Card image cap">
          <h5 class="card-title">Botol Kaca</h5>
        <div class="card-body">
        <!-- <h5 class="card-title">Botol Kaca</h5> -->
      </div>
    </div>



          </div>

          <div class="col-md-12 d-flex justify-content-center">
            


          <div class="card box" style="width: 15rem;">
              <img class="card-img-top item"  src="img/plastik.JPG" alt="Card image cap">
              <h5 class="card-title">Plastik</h5>
            <div class="card-body">
            <!-- <h5 class="card-title">Plastik</h5> -->
          </div>
        </div>







          </div>

          <div class="col-md-12">
           


            <div class="card float-start box" style="width: 15rem;">
              <img class="card-img-top item"  src="img/hp.JPG" alt="Card image cap">
              <h5 class="card-title">Elektronik</h5>
            <div class="card-body">
            <!-- <h5 class="card-title">Elektronik</h5> -->
          </div>
        </div>

        <div class="card float-end box" style="width: 15rem;">
          <img class="card-img-top item"  src="img/roket.JPG" alt="Card image cap">
          <h5 class="card-title">Besi & Aluminium</h5>
        <div class="card-body">
        <!-- <h5 class="card-title">Besi & Aluminium</h5> -->
      </div>
    </div>






          </div>
        </div>


        

      </div>



      <div class="row mt-5">
        <div class="col-md-12">
          <?php  include_once 'template/footer.php'; ?>
        </div>
      </div>


    </div>



    










    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>