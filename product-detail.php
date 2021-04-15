<?php 
	include 'config/init.php';
	$productDetail = product_detail($_GET['id']);
	$productImgList  = product_img_list($_GET['id']);
	$productReviewList  = product_review_list($_GET['id']);
  $productRelated = product_related($_GET['id']);
?>
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
    content="<?php echo $productDetail->key_word; ?>" />
  <meta name="description"
    content="we-cosmetic จำหน่ายสกินแคร์ คุณภาพดี ราคาถูก ให้คำปรึกษาฟรี มีผลิตภัณฑ์ให้เลือกมากมาย เช่น เซรั่มโซยอง เซรั่มณัชชา ครีมรักษาฝ้า" />
  <meta name="author" content="We Cosmetic" />
  <meta name="type" content="Skin Care" />
  <link rel="icon" type="image/png" href="images/logo.png" />
  <link rel="icon" type="image/png" href="images/logo.png" />

	<base href="https://we-cosmetic.com/products">

  <title><?php echo $productDetail->product_name; ?> | We-Cosmetic</title>

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

  <!-- responsive style -->
  <link href="css/imageviewer.css" rel="stylesheet" />
</head>

<body class="overflow-x">
  <div class="hero_area">
    <?php include 'header.php' ?>
  </div>

  <!-- header section -->
  <section class="header-section">
    <div class="row justify-content-center">
      <div class="container position-relative">
        <div class="text-box shadow">
          <h1>รายละเอียดสินค้า</h1>
          <h4><?php echo $productDetail->product_name; ?></h4>
        </div>
      </div>
      <img src="images/header2.jpg" alt="store" class="img-fluid w-100" />
    </div>
  </section>
  <!-- end header section -->


  <!-- product-detail section -->
  <section class="product-detail-section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-lg-3 mb-md-5">
          <div id="product-viewer--main" class="product-viewer shadow">
            <table class="table table-borderless">
              <tbody>
                <tr>
                  <td>
                    <div class="thumbnail-gallery">
                      <div class="thumbnail-container">
                        <img src="img/product/cover/<?php echo $productDetail->id; ?>/<?php echo $productDetail->img_cover; ?>" alt="<?php echo $productDetail->product_name; ?>" class="img-fluid" />
                      </div>
                    <?php foreach ($productImgList as $productImgDetail) : ?>
                      <div class="thumbnail-container">
                        <img src="img/product/<?php echo $productImgDetail->product_id; ?>/<?php echo $productImgDetail->img_name; ?>" alt="<?php echo $productDetail->product_name; ?>" class="img-fluid" />
                      </div>
                    <?php endforeach ?>
                    </div>
                  </td>
                  <td>
                    <div class="product-img-container py-2">
                      <img name="product-img">
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>

          <div id="paginator--main" class="paginator">
            <button class="button" name="left-button" disabled>
              <i class="fas fa-angle-left"></i>
            </button>
            <div class="badge"></div>
            <button class="button" name="right-button">
              <i class="fas fa-angle-right"></i>
            </button>
          </div>
        </div>
        <div class="col-lg-6 mb-3">
          <div class="product-detail">
            <h4 class="color-gold"><?php echo $productDetail->product_name; ?></h4>
            <h5><?php echo $productDetail->product_type; ?></h5>
              <?php echo $productDetail->description; ?>
            <div class="btn-group border d-flex">
              <button type="button" class="btn btn-light disabled">
                <h5 class="mb-0 text-dark">ราคา <span class="text-danger"><?php echo number_format($productDetail->price); ?></span> บาท</h5>
              </button>
              <button type="button" onclick="window.open('https://lin.ee/t7ZOBek')" class="btn btn-gold"><i
                  class="fas fa-shopping-basket"></i> :
                สั่งซื้อสินค้า</button>
            </div>
          </div>
        </div>
        
        <?php if(!empty($productReviewList)): ?>
        <div class="col-12 mt-md-5 mt-3">
          <div class="sub-header">
            <h4 class="mb-0">รัวิวจากลูกค้า</h4>
          </div>
          <div class="owl-carousel">
          <?php foreach ($productReviewList as $reviewDetail) : ?>
            <div class="item">
              <div class="square">
                <img src="img/review/<?php echo $reviewDetail->product_id; ?>/<?php echo $reviewDetail->img_name; ?>" alt="<?php echo $productDetail->product_name; ?>" class="img-thumbnail" />
              </div>
            </div>
          <?php endforeach ?>
          </div>
        </div>
        <?php endif ?>
        
      </div>
    </div>
  </section>
  <!-- end product-detail section -->


  <!-- related section -->
  <section class="related-section layout_padding2-bottom layout_padding2-top">
    <div class="container">
      <div class="sub-header">
        <h4 class="mb-0">สินค้าอื่นๆ</h4>
      </div>
      <div class="row">
      <?php foreach ($productRelated as $relatedDetail) : ?>
        <div class="col-lg-3 col-md-6 mb-3">
          <!-- <a href="product-detail?id=<?php echo $relatedDetail->id; ?>"> -->
          <a href="products/<?php echo $relatedDetail->id; ?>/<?php echo $relatedDetail->url_name; ?>">
            <div class="card-product">
              <div class="square">
                <img src="img/product/cover/<?php echo $relatedDetail->id; ?>/<?php echo $relatedDetail->img_cover; ?>" alt="<?php echo $relatedDetail->product_name; ?>" class="img-fluid" />
                <div class="overlay">
                  <div class="text h5">รายละเอียด</div>
                </div>
              </div>
              <div class="content">
                <h4><?php echo $relatedDetail->product_name; ?></h4>
                <p><?php echo $relatedDetail->short_desc; ?></p>
                <h6><?php echo $relatedDetail->product_type; ?></h6>
                <h6 class="color-gold font-weight-bold"><?php echo number_format($relatedDetail->price); ?> บาท</h6>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach ?>
      </div>
    </div>
  </section>
  <!-- end related section -->

  <?php include 'footer.php' ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js"></script>
  <script type="text/javascript" src="js/imageviewerscript.js"></script>
</body>

</html>