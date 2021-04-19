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

  <title>ติดต่อเรา | We-Cosmetic</title>

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
      $contactList = contact_list();
    ?>
  </div>

  <!-- header section -->
  <section class="header-section">
    <div class="row justify-content-center">
      <div class="container position-relative">
        <div class="text-box shadow">
          <h1>ติดต่อเรา</h1>
          <h4>CONTACT US</h4>
        </div>
      </div>
      <img src="images/header2.jpg" alt="store" class="img-fluid w-100" />
    </div>
  </section>
  <!-- end header section -->


  <!-- about section -->
  <section class="about-section layout_padding2">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mb-3">
          <div class="sub-header">
            <h3 class="mb-0">ส่งข้อความถึงเรา</h3>
          </div>
          <div class="card p-3 shadow border">
            <form>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" id="fullname" placeholder="ชื่อ - นามสกุล">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" id="phone" placeholder="เบอร์โทรศัพท์">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" id="lineID" placeholder="ไลน์ไอดี">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" id="subject" placeholder="เรื่องที่ติดต่อ">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" rows="5" id="message" placeholder="รายละเอียด"></textarea>
                  </div>
                </div>
              </div>

              <button type="submit" class="btn btn-gold">ส่งข้อความ</button>
            </form>
          </div>
        </div>
        <div class="col-lg-6 mb-3 position-relative">
          <div class="p-md-3 color-gold">
            <div class="card shadow p-2 px-3 border-0 mb-3">
              <h5 class="color-gold">Beauty Today สาขา เมืองทอง1</h5>
              <h6>โทร : <a href="tel:<?php echo $contactList[0]->phone_1; ?>"><?php echo $contactList[0]->phone_1; ?></a></h6>
            </div>
            <div class="card shadow p-2 px-3 border-0 mb-3">
              <h5 class="color-gold">Beauty Today สาขา เมืองทอง2</h5>
              <h6>โทร : <a href="tel:<?php echo $contactList[0]->phone_2; ?>"><?php echo $contactList[0]->phone_2; ?></a></h6>
            </div>
            <div class="card shadow p-2 px-3 border-0 mb-3">
              <h5 class="color-gold">Beauty Today สาขา ปลวกแดง</h5>
              <h6>โทร : <a href="tel:<?php echo $contactList[0]->phone_3; ?>"><?php echo $contactList[0]->phone_3; ?>​</a></h6>
            </div>
            <div class="card shadow p-2 px-3 border-0 mb-3">
              <h5 class="color-gold">Beauty Today สาขา สะพานสี่</h5>
              <h6>โทร : <a href="tel:<?php echo $contactList[0]->phone_4; ?>"><?php echo $contactList[0]->phone_4; ?></a></h6>
            </div>
            <div class="card shadow p-2 px-3 border-0 mb-3">
              <h5 class="color-gold">Beauty Today สาขา เครือสหพัฒน์</h5>
              <h6>โทร : <a href="tel:<?php echo $contactList[0]->phone_5; ?>"><?php echo $contactList[0]->phone_5; ?></a></h6>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12 layout_padding2-top">
          <nav class="mb-2">
            <div class="nav nav-tabs map" id="nav-tab" role="tablist">
              <a class="nav-item nav-link active" data-toggle="tab" href="#muangthong" aria-selected="true">สาขา
                เมืองทอง1</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#muangthong2" aria-selected="true">สาขา
                เมืองทอง2</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#pruakdang" aria-selected="false">สาขา ปลวกแดง</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#sapansie" aria-selected="false">สาขา สะพานสี่</a>
              <a class="nav-item nav-link" data-toggle="tab" href="#kruesahapat" aria-selected="false">สาขา
                เครือสหพัฒน์</a>
            </div>
          </nav>
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="muangthong">
              <iframe class="rounded shadow iframe-responsive"
                src="<?php echo $contactList[0]->google_map_1; ?>"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="tab-pane fade" id="muangthong2">
              <iframe class="rounded shadow iframe-responsive"
                src="<?php echo $contactList[0]->google_map_2; ?>"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> </div>

            <div class="tab-pane fade" id="pruakdang">
              <iframe
                src="<?php echo $contactList[0]->google_map_3; ?>"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            <div class="tab-pane fade" id="sapansie"><iframe class="rounded shadow iframe-responsive"
                src="<?php echo $contactList[0]->google_map_4; ?>"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
            <div class="tab-pane fade" id="kruesahapat">
              <iframe class="rounded shadow iframe-responsive"
                src="<?php echo $contactList[0]->google_map_5; ?>"
                width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end about section -->



  <?php include 'footer.php' ?>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script type="text/javascript" src="js/custom.js"></script><script type="text/javascript">
    function sendEmail() {
        var data = {
            name: $("#fullname").val(),
            lineId: $("#lineID").val(),
            phone: $("#phone").val(),
            subject: $("#subject").val(),
            message: $("#message").val()
        };
        $.ajax({
            type: "POST",
            url: "mail.php",
            data: data,
            success: function(result){
                // $('.success').fadeIn(1000);
                alert('ส่งข้อความเรียบร้อย');
                $('#contact-form')[0].reset();
            }
        });
    }
  </script>

</body>

</html>