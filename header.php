    <?php  $current = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>
    <!-- header section strats -->
    <header class="header_section">
        <nav class="navbar navbar-expand-lg custom_nav-container pt-3">
            <a class="navbar-brand" href="index">
                <img src="images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="bg-cream w-100 text-center mx-auto py-1">
                <div class="collapse navbar-collapse d-md-inline-block"
                    id="navbarSupportedContent">
                    <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav  ">
                            <li class="nav-item <?php echo($current == 'index') ? 'active' : '' ?>">
                                <a class="nav-link" href="index">หน้าแรก</a>
                            </li>
                            <li class="nav-item <?php echo($current == 'product' OR $current == 'product-detail') ? 'active' : '' ?>">
                                <a class="nav-link" href="product">
                                    สินค้า
                                </a>
                            </li>
                            <li class="nav-item <?php echo($current == 'aboutus') ? 'active' : '' ?>">
                                <a class="nav-link" href="aboutus">
                                    เกี่ยวกับเรา
                                </a>
                            </li>
                            <li class="nav-item <?php echo($current == 'contactus') ? 'active' : '' ?>">
                                <a class="nav-link" href="contactus">ติดต่อเรา</a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </nav>
    </header>
    <!-- end header section -->