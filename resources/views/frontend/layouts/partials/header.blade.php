<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Furnixar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css" />
    <!-- header css -->
    <link rel="stylesheet" href="{{ asset('assets/css/frontend.css/header.css')}}" />
    <!-- footer css -->
    <link rel="stylesheet" href="{{ asset('assets/css/frontend.css/footer.css')}}" />
    <!-- home page css -->
    <link rel="stylesheet" href="{{ asset('assets/css/frontend.css/home.css')}}" />

</head>

<body>

    <header id="site-header">

        <!-- TOP BAR -->
        <div id="header-top">
            <div class="top-inner">

                <!-- LEFT: info links -->
                <nav class="top-left">
                    <a href="#"><i class="bi bi-shop"></i> FRANCHISEE</a>
                    <a href="#"><i class="bi bi-telephone"></i> 18002093242</a>
                    <a href="#"><i class="bi bi-headset"></i> SUPPORT</a>
                    <a href="#"><i class="bi bi-truck"></i> TRACK YOUR ORDER</a>
                </nav>

                <!-- CENTER: logo -->
                <a class="top-center-logo" href="#">
                    <div class="logo-oval">
                        <img src="{{ asset('assets/imglogo/furnixar_logo.png') }}" alt="Furnixar Logo">
                    </div>
                </a>

                <!-- RIGHT: action buttons -->
                <div class="top-right">
                    <a href="#" class="top-action-btn locate">
                        <i class="bi bi-geo-alt-fill"></i>
                        <span>Locate Us</span>
                    </a>
                    <a href="#" class="top-action-btn wishlist">
                        <i class="bi bi-heart-fill"></i>
                        <span>Wishlist</span>
                        <span class="btn-badge red">3</span>
                    </a>
                    <a href="#" class="top-action-btn cart">
                        <i class="bi bi-cart-fill"></i>
                        <span>Cart</span>
                        <span class="btn-badge">2</span>
                    </a>
                </div>

            </div>
        </div>

        <!-- ══════════════════════════════
       BOTTOM NAV BAR
  ══════════════════════════════ -->
        <div id="header-bottom">
            <div class="bottom-inner">

                <!-- Hamburger (mobile only) -->
                <button class="hamburger-btn" id="hamburgerBtn" aria-label="Toggle menu">
                    <i class="bi bi-list"></i>
                </button>

                <!-- Search -->
                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search furniture…" />
                </div>

                <!-- Category nav -->
                <div class="cat-nav-wrapper">
                    <nav class="cat-nav" id="catNav">

                        <div class="nav-item" id="livingNavItem">
                            <a href="#">Living</a>
                            <div class="mega-menu" id="livingMega">
                                <div class="mega-menu-inner">
                                    <div class="mega-col">
                                        <div class="mega-col-title">Sofas</div>
                                        <ul>
                                            <li><a href="#">Fabric Sofa</a></li>
                                            <li><a href="#">Wooden Sofas</a></li>
                                            <li><a href="#">Leatherette Sofas</a></li>
                                            <li><a href="#">Leather Sofas</a></li>
                                            <li><a href="#">Sofa Beds</a></li>
                                            <li><a href="#">Sofa Sets</a></li>
                                            <li><a href="#">Corner Sofas</a></li>
                                            <li><a href="#">L Shaped Sofa</a></li>
                                            <li><a href="#">Single Seater Sofas</a></li>
                                            <li><a href="#">Two Seater Sofas</a></li>
                                            <li><a href="#">Three Seater Sofas</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Recliners</div>
                                        <ul>
                                            <li><a href="#">Fabric Recliners</a></li>
                                            <li><a href="#">Leatherette Recliners</a></li>
                                            <li><a href="#">Leather Recliners</a></li>
                                            <li><a href="#">Single Seater</a></li>
                                            <li><a href="#">Two Seater</a></li>
                                            <li><a href="#">Three Seater</a></li>
                                            <li><a href="#">Recliner Sets</a></li>
                                            <li><a href="#">Home Theatre</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Seatings</div>
                                        <ul>
                                            <li><a href="#">Lounge Chairs</a></li>
                                            <li><a href="#">Rocking Chairs</a></li>
                                            <li><a href="#">Accent Chairs</a></li>
                                            <li><a href="#">Ottomans &amp; Poufs</a></li>
                                            <li><a href="#">Patio Chairs &amp; Set</a></li>
                                            <li><a href="#">Balcony Chairs &amp; Set</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Living Room Tables</div>
                                        <ul>
                                            <li><a href="#">Wooden Center Tables</a></li>
                                            <li><a href="#">Glass Center Tables</a></li>
                                            <li><a href="#">Marble Center Tables</a></li>
                                            <li><a href="#">Side &amp; End Tables</a></li>
                                            <li><a href="#">Console Tables</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Entertainment</div>
                                        <ul>
                                            <li><a href="#">TV Stand</a></li>
                                            <li><a href="#">Wall Unit</a></li>
                                            <li><a href="#">Wooden Shoe Racks</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Decor</div>
                                        <ul>
                                            <li><a href="#">Wall Paintings</a></li>
                                            <li><a href="#">Clocks</a></li>
                                            <li><a href="#">Buddha Idols</a></li>
                                            <li><a href="#">Showpieces</a></li>
                                            <li><a href="#">Flower Vases</a></li>
                                            <li><a href="#">Plants &amp; Planters</a></li>
                                            <li><a href="#">Carpets</a></li>
                                            <li><a href="#">Curtains</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="nav-item" id="bedroomNavItem">
                            <a href="#">Bedroom</a>
                            <div class="mega-menu" id="bedroomMega">
                                <div class="mega-menu-inner">
                                    <div class="mega-col">
                                        <div class="mega-col-title">Beds</div>
                                        <ul>
                                            <li><a href="#">Queen Bed Without Storage</a></li>
                                            <li><a href="#">King Bed Without Storage</a></li>
                                            <li><a href="#">Queen Bed With Storage</a></li>
                                            <li><a href="#">King Bed With Storage</a></li>
                                            <li><a href="#">Bedroom Sets</a></li>
                                            <li><a href="#">Bunk Bed</a></li>
                                            <li><a href="#">Kids Bed</a></li>
                                            <li><a href="#">Single Bed</a></li>
                                            <li><a href="#">Wooden Bed</a></li>
                                            <li><a href="#">Folding Beds</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Wardrobes</div>
                                        <ul>
                                            <li><a href="#">Two Door Wardrobes</a></li>
                                            <li><a href="#">Three Door Wardrobes</a></li>
                                            <li><a href="#">Four Door Wardrobes</a></li>
                                            <li><a href="#">Five Door Wardrobes</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Tables</div>
                                        <ul>
                                            <li><a href="#">Dressing Tables</a></li>
                                            <li><a href="#">Side Tables</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Decor</div>
                                        <ul>
                                            <li><a href="#">Bedsheets</a></li>
                                            <li><a href="#">Carpets</a></li>
                                            <li><a href="#">Bath Mats</a></li>
                                            <li><a href="#">Ottomans</a></li>
                                            <li><a href="#">Table Lamps</a></li>
                                            <li><a href="#">Wall Paintings</a></li>
                                            <li><a href="#">Flower Vases</a></li>
                                            <li><a href="#">Curtains</a></li>
                                            <li><a href="#">Cushion Covers</a></li>
                                            <li><a href="#">Clocks</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="nav-item" id="mattressNavItem">
                            <a href="#">Mattresses</a>
                            <div class="mega-menu" id="mattressMega">
                                <div class="mega-menu-inner">
                                    <div class="mega-col">
                                        <div class="mega-col-title">Single Mattresses</div>
                                        <ul>
                                            <li><a href="#">Single Mattresses</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Queen Size</div>
                                        <ul>
                                            <li><a href="#">Queen Size Mattresses</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">King Size</div>
                                        <ul>
                                            <li><a href="#">King Size Mattresses</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Pillows</div>
                                        <ul>
                                            <li><a href="#">Pillows</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="nav-item" id="diningNavItem">
                            <a href="#">Dining</a>
                            <div class="mega-menu" id="diningMega">
                                <div class="mega-menu-inner">
                                    <div class="mega-col">
                                        <div class="mega-col-title">Dining Sets</div>
                                        <ul>
                                            <li><a href="#">4 Seater Dining Sets</a></li>
                                            <li><a href="#">6 Seater Dining Sets</a></li>
                                            <li><a href="#">8 Seater Dining Sets</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Tables &amp; Chairs</div>
                                        <ul>
                                            <li><a href="#">Tables</a></li>
                                            <li><a href="#">Chairs</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Bar Furniture</div>
                                        <ul>
                                            <li><a href="#">Bar Stools &amp; Chairs</a></li>
                                            <li><a href="#">Bar Cabinets</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Crockery Units</div>
                                        <ul>
                                            <li><a href="#">Side Board</a></li>
                                            <li><a href="#">Crockery Unit</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Decor</div>
                                        <ul>
                                            <li><a href="#">Table Mats</a></li>
                                            <li><a href="#">Carpets</a></li>
                                            <li><a href="#">Wall Paintings</a></li>
                                            <li><a href="#">Flower Vases</a></li>
                                            <li><a href="#">Curtains</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="nav-item" id="studyNavItem">
                            <a href="#">Study&amp;Office</a>
                            <div class="mega-menu" id="studyMega">
                                <div class="mega-menu-inner">
                                    <div class="mega-col">
                                        <div class="mega-col-title">Tables</div>
                                        <ul>
                                            <li><a href="#">Study Tables</a></li>
                                            <li><a href="#">Computer Tables</a></li>
                                            <li><a href="#">Boss Table</a></li>
                                            <li><a href="#">Conference Tables</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Chairs</div>
                                        <ul>
                                            <li><a href="#">Office Chairs</a></li>
                                            <li><a href="#">Computer Chairs</a></li>
                                            <li><a href="#">Visitor Chairs</a></li>
                                            <li><a href="#">Study Chairs</a></li>
                                            <li><a href="#">Gaming Chairs</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Book Shelves</div>
                                        <ul>
                                            <li><a href="#">Engineered Wood</a></li>
                                            <li><a href="#">Solid Wood</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Decor</div>
                                        <ul>
                                            <li><a href="#">Magazine Holders</a></li>
                                            <li><a href="#">Side Tables</a></li>
                                            <li><a href="#">Table Lamps</a></li>
                                            <li><a href="#">Flower Vases</a></li>
                                            <li><a href="#">Clocks</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="nav-item" id="outdoorNavItem">
                            <a href="#">Outdoors</a>
                            <div class="mega-menu" id="outdoorMega">
                                <div class="mega-menu-inner">
                                    <div class="mega-col">
                                        <div class="mega-col-title">Outdoor Furniture</div>
                                        <ul>
                                            <li><a href="#">Outdoor Set</a></li>
                                            <li><a href="#">Outdoor Chairs</a></li>
                                            <li><a href="#">Patio Set</a></li>
                                            <li><a href="#">Swings</a></li>
                                            <li><a href="#">Outdoor Tables</a></li>
                                            <li><a href="#">Balcony Furniture</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Decor</div>
                                        <ul>
                                            <li><a href="#">Garden Figurines</a></li>
                                            <li><a href="#">Fountains</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Bar Furniture</div>
                                        <ul>
                                            <li><a href="#">Bar Stools &amp; Chairs</a></li>
                                            <li><a href="#">Bar Cabinets</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="nav-item"><a href="#">Decor</a></div>

                        <div class="nav-item" id="furnishNavItem">
                            <a href="#">Furnishings</a>
                            <div class="mega-menu" id="furnishMega">
                                <div class="mega-menu-inner">
                                    <div class="mega-col">
                                        <div class="mega-col-title">Bed Linen</div>
                                        <ul>
                                            <li><a href="#">Pillows</a></li>
                                            <li><a href="#">Bed In A Bag</a></li>
                                            <li><a href="#">Mattress Protectors</a></li>
                                            <li><a href="#">Comforter</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Flooring</div>
                                        <ul>
                                            <li><a href="#">Door Mats</a></li>
                                            <li><a href="#">Carpets</a></li>
                                        </ul>
                                    </div>
                                    <div class="mega-col">
                                        <div class="mega-col-title">Table &amp; Bath Linen</div>
                                        <ul>
                                            <li><a href="#">Table Mats</a></li>
                                            <li><a href="#">Bath Mats</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="nav-item"><a href="#">New Arrivals</a></div>
                        <div class="nav-item"><a href="#">Offer</a></div>

                    </nav>
                </div>

            </div>
        </div>

    </header>

    <!-- ══════════════════════════════════════
     MOBILE DRAWER
══════════════════════════════════════ -->
    <div class="mobile-drawer" id="mobileDrawer">
        <div class="drawer-overlay" id="drawerOverlay"></div>
        <div class="drawer-panel">

            <div class="drawer-head">
                <a class="drawer-logo-wrap" href="#">
                    <div class="logo-oval">
                        <img src="{{ asset('assets/imglogo/furnixar_logo.png') }}" alt="Furnixar Logo">
                    </div>
                </a>
                <button class="drawer-close" id="drawerClose"><i class="bi bi-x-lg"></i></button>
            </div>

            <nav class="drawer-nav">

                <div class="drawer-nav-item" id="drawerLiving">
                    <div class="drawer-nav-link" onclick="toggleDrawerItem('drawerLiving')">
                        <span>Living</span><i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="drawer-sub">
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Sofas</div>
                            <ul>
                                <li><a href="#">Fabric Sofa</a></li>
                                <li><a href="#">Wooden Sofas</a></li>
                                <li><a href="#">Leatherette Sofas</a></li>
                                <li><a href="#">Leather Sofas</a></li>
                                <li><a href="#">Sofa Beds</a></li>
                                <li><a href="#">Sofa Sets</a></li>
                                <li><a href="#">Corner Sofas</a></li>
                                <li><a href="#">L Shaped Sofa</a></li>
                            </ul>
                        </div>
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Recliners</div>
                            <ul>
                                <li><a href="#">Fabric Recliners</a></li>
                                <li><a href="#">Leatherette Recliners</a></li>
                                <li><a href="#">Leather Recliners</a></li>
                                <li><a href="#">Recliner Sets</a></li>
                                <li><a href="#">Home Theatre Recliners</a></li>
                            </ul>
                        </div>
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Seatings</div>
                            <ul>
                                <li><a href="#">Lounge Chairs</a></li>
                                <li><a href="#">Rocking Chairs</a></li>
                                <li><a href="#">Accent Chairs</a></li>
                                <li><a href="#">Ottomans &amp; Poufs</a></li>
                            </ul>
                        </div>
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Living Room Tables</div>
                            <ul>
                                <li><a href="#">Wooden Center Tables</a></li>
                                <li><a href="#">Glass Center Tables</a></li>
                                <li><a href="#">Side &amp; End Tables</a></li>
                                <li><a href="#">Console Tables</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="drawer-nav-item" id="drawerBedroom">
                    <div class="drawer-nav-link" onclick="toggleDrawerItem('drawerBedroom')">
                        <span>Bedroom</span><i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="drawer-sub">
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Beds</div>
                            <ul>
                                <li><a href="#">Queen Bed Without Storage</a></li>
                                <li><a href="#">King Bed Without Storage</a></li>
                                <li><a href="#">Queen Bed With Storage</a></li>
                                <li><a href="#">King Bed With Storage</a></li>
                                <li><a href="#">Bedroom Sets</a></li>
                                <li><a href="#">Bunk Bed</a></li>
                                <li><a href="#">Single Bed</a></li>
                            </ul>
                        </div>
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Wardrobes</div>
                            <ul>
                                <li><a href="#">Two Door Wardrobes</a></li>
                                <li><a href="#">Three Door Wardrobes</a></li>
                                <li><a href="#">Four Door Wardrobes</a></li>
                            </ul>
                        </div>
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Tables</div>
                            <ul>
                                <li><a href="#">Dressing Tables</a></li>
                                <li><a href="#">Side Tables</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="drawer-nav-item" id="drawerMattress">
                    <div class="drawer-nav-link" onclick="toggleDrawerItem('drawerMattress')">
                        <span>Mattresses</span><i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="drawer-sub">
                        <div class="drawer-sub-group">
                            <ul>
                                <li><a href="#">Single Mattresses</a></li>
                                <li><a href="#">Queen Size Mattresses</a></li>
                                <li><a href="#">King Size Mattresses</a></li>
                                <li><a href="#">Pillows</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="drawer-nav-item" id="drawerDining">
                    <div class="drawer-nav-link" onclick="toggleDrawerItem('drawerDining')">
                        <span>Dining</span><i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="drawer-sub">
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Dining Sets</div>
                            <ul>
                                <li><a href="#">4 Seater Dining Sets</a></li>
                                <li><a href="#">6 Seater Dining Sets</a></li>
                                <li><a href="#">8 Seater Dining Sets</a></li>
                            </ul>
                        </div>
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Bar Furniture</div>
                            <ul>
                                <li><a href="#">Bar Stools &amp; Chairs</a></li>
                                <li><a href="#">Bar Cabinets</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="drawer-nav-item" id="drawerStudy">
                    <div class="drawer-nav-link" onclick="toggleDrawerItem('drawerStudy')">
                        <span>Study &amp; Office</span><i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="drawer-sub">
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Tables</div>
                            <ul>
                                <li><a href="#">Study Tables</a></li>
                                <li><a href="#">Computer Tables</a></li>
                                <li><a href="#">Conference Tables</a></li>
                            </ul>
                        </div>
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Chairs</div>
                            <ul>
                                <li><a href="#">Office Chairs</a></li>
                                <li><a href="#">Study Chairs</a></li>
                                <li><a href="#">Gaming Chairs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="drawer-nav-item" id="drawerOutdoor">
                    <div class="drawer-nav-link" onclick="toggleDrawerItem('drawerOutdoor')">
                        <span>Outdoors</span><i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="drawer-sub">
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Outdoor Furniture</div>
                            <ul>
                                <li><a href="#">Outdoor Set</a></li>
                                <li><a href="#">Outdoor Chairs</a></li>
                                <li><a href="#">Patio Set</a></li>
                                <li><a href="#">Swings</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="drawer-nav-item">
                    <a class="drawer-nav-link" href="#" style="text-decoration:none;">Decor</a>
                </div>

                <div class="drawer-nav-item" id="drawerFurnish">
                    <div class="drawer-nav-link" onclick="toggleDrawerItem('drawerFurnish')">
                        <span>Furnishings</span><i class="bi bi-chevron-down"></i>
                    </div>
                    <div class="drawer-sub">
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Bed Linen</div>
                            <ul>
                                <li><a href="#">Pillows</a></li>
                                <li><a href="#">Comforter</a></li>
                                <li><a href="#">Mattress Protectors</a></li>
                            </ul>
                        </div>
                        <div class="drawer-sub-group">
                            <div class="drawer-sub-group-title">Flooring</div>
                            <ul>
                                <li><a href="#">Door Mats</a></li>
                                <li><a href="#">Carpets</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="drawer-nav-item">
                    <a class="drawer-nav-link" href="#" style="text-decoration:none;">New Arrivals</a>
                </div>
                <div class="drawer-nav-item">
                    <a class="drawer-nav-link" href="#" style="text-decoration:none;">Offer</a>
                </div>

            </nav>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.bundle.min.js"></script>
    <script>
        /* ── Scroll-hide top bar ── */
        const headerTop = document.getElementById('header-top');
        const siteHeader = document.getElementById('site-header');

        function updateHeader() {
            const scrollY = window.pageYOffset || document.documentElement.scrollTop;
            if (scrollY > 10) {
                headerTop.classList.add('hidden');
                document.body.style.paddingTop = siteHeader.offsetHeight + 'px';
            } else {
                headerTop.classList.remove('hidden');
                document.body.style.paddingTop = '112px';
            }
        }
        window.addEventListener('scroll', updateHeader, { passive: true });

        /* ── Desktop mega menu positioning ── */
        const megaIds = [
            'livingNavItem', 'bedroomNavItem', 'mattressNavItem',
            'diningNavItem', 'studyNavItem', 'outdoorNavItem', 'furnishNavItem'
        ];

        function positionMegas() {
            const h = siteHeader.offsetHeight;
            megaIds.forEach(id => {
                const item = document.getElementById(id);
                if (item) {
                    const menu = item.querySelector('.mega-menu');
                    if (menu) menu.style.top = h + 'px';
                }
            });
        }
        megaIds.forEach(id => {
            const item = document.getElementById(id);
            if (item) item.addEventListener('mouseenter', positionMegas);
        });
        window.addEventListener('resize', positionMegas);
        positionMegas();

        /* ── Mobile drawer ── */
        const hamburgerBtn = document.getElementById('hamburgerBtn');
        const mobileDrawer = document.getElementById('mobileDrawer');
        const drawerClose = document.getElementById('drawerClose');
        const drawerOverlay = document.getElementById('drawerOverlay');

        function openDrawer() { mobileDrawer.classList.add('open'); document.body.style.overflow = 'hidden'; }
        function closeDrawer() { mobileDrawer.classList.remove('open'); document.body.style.overflow = ''; }

        hamburgerBtn.addEventListener('click', openDrawer);
        drawerClose.addEventListener('click', closeDrawer);
        drawerOverlay.addEventListener('click', closeDrawer);

        /* ── Drawer accordion ── */
        function toggleDrawerItem(id) {
            document.getElementById(id).classList.toggle('open');
        }
    </script>

</body>

</html>