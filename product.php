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

  <title>สินค้า | We-Cosmetic</title>

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
      $productList = product_list(); 
    ?>
  </div>

  <!-- header section -->
  <section class="header-section">
    <div class="row justify-content-center">
      <div class="container position-relative">
        <div class="text-box shadow">
          <h1>สินค้า</h1>
          <h4>PRODUCT</h4>
        </div>
      </div>
      <img src="images/header2.jpg" alt="store" class="img-fluid w-100" />
    </div>
  </section>
  <!-- end header section -->

  <section class="product_section layout_padding2">
    <div class="container">
      <div class="row">
      <?php foreach ($productList as $productDetail) : ?>
        <div class="col-lg-3 col-md-6 mb-3">
          <!-- <a href="product-detail?id=<?php echo $productDetail->id; ?>"> -->
          <a href="products/<?php echo $productDetail->id; ?>/<?php echo $productDetail->url_name; ?>">
            <div class="card-product">
              <div class="square">
                <img src="img/product/cover/<?php echo $productDetail->id; ?>/<?php echo $productDetail->img_cover; ?>" alt="<?php echo $productDetail->product_name; ?>" class="img-fluid" />
                <div class="overlay">
                  <div class="text h5">รายละเอียด</div>
                </div>
              </div>
              <div class="content">
                <h4><?php echo $productDetail->product_name; ?></h4>
                <p><?php echo $productDetail->short_desc; ?></p>
                <h6><?php echo $productDetail->product_type; ?></h6>
                <h6 class="color-gold font-weight-bold"><?php echo number_format($productDetail->price); ?> บาท</h6>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach ?>
      </div>

      <?php 
        $total = product_count();

        $pagination = pagination( $total->counter, 8);
      ?>  
      <div class="row layout_padding2-top">
        <nav class="mx-auto">
          <ul class="pagination">
          <?php if ( $pagination['total'] > 0 ) : ?>
              <?php if ( $pagination['prev'] ) : ?>
                <li class="page-item">
                  <a class="page-link" href="product?page=<?php echo $pagination['prev']; ?>">
                    <i class="fas fa-chevron-left"></i>
                  </a>
                </li>
              <?php endif; ?>
              <?php for ( $i = 1; $i <= $pagination['total']; $i++ ) : ?>
                <?php 
                  $page1 = $pagination['page'] - 2;
                  $page2 = $pagination['page'] + 2;

                  if ( ( $i == 1 ) or ( $i == $pagination['total'] ) or ( $i >= $page1 and $i <= $page2 ) ) :
                ?>
                    <li class="page-item <?php echo ($i == $pagination['page']) ? 'active' : ''; ?>">
                      <a class="page-link" href="product?page=<?php echo $i; ?>" >
                        <?php echo $i; ?>
                      </a>
                    </li>
                <?php elseif ( ( ( $i > 1 ) and ( $i == ( $page1 - 1 ) ) ) or ( ( $i < $pagination['total'] ) and ( $i == ( $page2 + 1 ) ) ) ) : ?>
                    <li class="page-item">
                      <a href="#" class="page-link">
                        ...
                      </a>
                    </li>
                <?php endif ?>
              <?php endfor ?>
              <?php if ( $pagination['total'] != $pagination['page'] ) : ?>
                <li class="page-item">
                  <a class="page-link" href="products?page=<?php echo $pagination['next']; ?>">
                    <i class="fas fa-chevron-right"></i>
                  </a>
                </li>
              <?php endif ?>
          <?php endif ?>
          </ul>
        </nav>
      </div>
    </div>
  </section>


  <?php include 'footer.php' ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js"></script>

</body>

</html>