<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords"
    content="เซรั่มกระชับรูขุมขน, เซรั่มณัชชา, เซรั่มลดฝ้ากระ, รีวิวเซรั่มหน้าใส, ครีมรักษาฝ้า, วิธีรักษาฝ้า, เซรั่มQ, เซรั่มโซยอง, ครีมบำรุงกลางคืน, เซรั่มที่ดีที่สุด" />
  <meta name="description"
    content="we-cosmetic จำหน่ายสกินแคร์ คุณภาพดี ราคาถูก ให้คำปรึกษาฟรี มีผลิตภัณฑ์ให้เลือกมากมาย เช่น เซรั่มโซยอง เซรั่มณัชชา ครีมรักษาฝ้า" />
  <meta name="author" content="We Cosmetic" />
  <meta name="type" content="Skin Care" />
  <link rel="icon" type="image/png" href="images/logo.png" />
  <link rel="icon" type="image/png" href="images/logo.png" />

  <title>หน้าแรก | We-Cosmetic</title>

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />

  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

  <!-- Fontawesome -->
  <link href="fonts/fontawesome/css/all.min.css" rel="stylesheet" />

</head>

<body class="overflow-x">
  <div class="hero_area">
    <?php 
        include 'header.php';
        include 'config/init.php';
        $bannerList = banner_list();
        $bestSellerProduct = best_index();
    ?>
    <!-- slider section -->
    <section class="">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators mb-md-auto mb-0">
        <?php 
          $i = 0;
          foreach ($bannerList as $bannerDetail) :
        ?>
          <?php if ($i == 0) : ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" class="active"></li>
          <?php else : ?>
            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
          <?php endif ?>
        <?php 
          $i++;
          endforeach 
        ?>
        </ol>
        <div class="carousel-inner">
        <?php 
          $i = 0;
          foreach ($bannerList as $bannerDetail) :
        ?>
          <?php if ($i == 0) : ?>
              <div class="carousel-item active">
                <img src="img/banner/<?php echo $bannerDetail->id; ?>/<?php echo $bannerDetail->img_cover; ?>" class="d-block w-100" alt="<?php echo $bannerDetail->banner_name; ?>">
              </div>
          <?php else : ?>
              <div class="carousel-item">
                <img src="img/banner/<?php echo $bannerDetail->id; ?>/<?php echo $bannerDetail->img_cover; ?>" class="d-block w-100" alt="<?php echo $bannerDetail->banner_name; ?>">
              </div>
          <?php endif ?>
        <?php 
          $i++;
          endforeach 
        ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </section>
    <!-- end slider section -->
  </div>
  <!-- end hero area -->

  <!-- best seller section -->

  <section class="bestseller_section layout_padding2">
    <div class="container">
      <div class="header">
        <h1>สินค้าขายดี</h1>
        <h4>BEST SELLER</h4>
      </div>
      <div class="row">
      <?php foreach ($bestSellerProduct as $bestSeller) : ?>
        <div class="col-lg-4 col-md-6 mb-3">
          <!-- <a href="product-detail?id=<?php echo $bestSeller->id; ?>"> -->
          <a href="products/<?php echo $bestSeller->id; ?>/<?php echo $bestSeller->url_name; ?>">
            <div class="card-product">
              <div class="square">
                <img src="img/product/cover/<?php echo $bestSeller->id; ?>/<?php echo $bestSeller->img_cover; ?>" alt="<?php echo $bestSeller->product_name; ?>" class="img-fluid" />
                <div class="overlay">
                  <div class="text h5">รายละเอียด</div>
                </div>
              </div>
              <div class="content">
                <h3><?php echo $bestSeller->product_name; ?></h3>
                <p><?php echo $bestSeller->short_desc; ?></p>
                <h6><?php echo $bestSeller->product_type; ?></h6>
                <h6 class="color-gold font-weight-bold"><?php echo number_format($bestSeller->price); ?> บาท</h6>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach ?>
      </div>
    </div>
  </section>

  <!-- end best seller section -->

  <!-- store section -->

  <section class="bg-cream w-100">
    <div class="row">
      <div class="col-md-6 my-auto color-gold px-md-5 px-2 layout_padding2">
        <div class="row justify-content-center">
          <div class="col-lg-10 col-sm-12 col-10">
            <h2 class="font-weight-bold">Store :</h2>
            <h5>- Beauty Today สาขา เมืองทอง1</h5>
            <h5>- Beauty Today สาขา เมืองทอง2</h5>
            <h5>- Beauty Today สาขา ปลวกแดง</h5>
            <h5>- Beauty Today สาขา สะพานสี่</h5>
            <h5>- Beauty Today สาขา เครือสหพัฒน์</h5>
            <a href="contactus" class="btn btn-gold rounded-0 h3 my-3">
              <h4 class="mb-0">Contact Us</h4>
            </a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <img src="images/store.jpg" alt="store" class="img-fluid w-100 height-fit-sm" />
      </div>
    </div>
  </section>

  <!-- end store section -->


  <!-- best seller section -->

  <section class="bestseller_section layout_padding2">
    <div class="container">
      <div class="header">
        <h1>ผลิตภัณฑ์</h1>
        <h4>PRODUCT</h4>
      </div>
      <div class="row">
        <div class="col-md-4 mb-3">
          <img src="images/soda.png" alt="logo" class="img-fluid w-100 shadow" />
        </div>
        <div class="col-md-4 mb-3">
          <img src="images/soyong.png" alt="logo" class="img-fluid w-100 shadow" />
        </div>
        <div class="col-md-4 mb-3">
          <img src="images/swan.png" alt="logo" class="img-fluid w-100 shadow" />
        </div>
      </div>
    </div>
  </section>

  <!-- end best seller section -->


  <?php include 'footer.php' ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>