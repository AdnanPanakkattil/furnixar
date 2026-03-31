@extends('frontend.layouts.FrontendLayout')

@section('content')

    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img src="{{ asset('assets/carousel/carousel1.jpg') }}" alt="Slide 1">
                <div class="carousel-caption">
                    <span class="slide-tag">Furnishing Dreams</span>
                    <h2>Transform Your Space with Timeless Elegance.</h2>
                    <p>Furniture for the Modern Home.</p>
                    <a href="#" class="btn-carousel">Discover Set Sofa</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/carousel/carousel2.jpg') }}" alt="Slide 2">
                <div class="carousel-caption">
                    <span class="slide-tag">Crafted With Care</span>
                    <h2>Bringing Comfort to Every Corner.</h2>
                    <p>Designed for Living, Built to Last.</p>
                    <a href="#" class="btn-carousel">Explore Collection</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="{{ asset('assets/carousel/carousel3.jpg') }}" alt="Slide 3">
                <div class="carousel-caption">
                    <span class="slide-tag">Premium Quality</span>
                    <h2>Luxury Living Made Accessible.</h2>
                    <p>Find Your Perfect Piece Today.</p>
                    <a href="#" class="btn-carousel">Shop Now</a>
                </div>
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>

    <!-- prodect catogery section start  -->
    <section class="categories-section">
        <div class="container">

            <!-- Heading -->
            <h2 class="section-title text-center">Popular Categories</h2>

            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-xl-6 g-4 justify-content-center">

                <!-- 1. Recliner -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/Categories1.jfif') }}" alt="Recliner" loading="lazy" />
                        </div>
                        <span class="cat-label">Recliner</span>
                    </a>
                </div>

                <!-- 2. Sofa -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/categories2.jpg') }}" alt="Sofa" loading="lazy" />
                        </div>
                        <span class="cat-label">Sofa</span>
                    </a>
                </div>

                <!-- 3. Dining Set -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/categories3.jpg') }}" alt="Dining Set" loading="lazy" />
                        </div>
                        <span class="cat-label">Dining Set</span>
                    </a>
                </div>

                <!-- 4. Beds -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/categories4.webp') }}" alt="Beds" loading="lazy" />
                        </div>
                        <span class="cat-label">Beds</span>
                    </a>
                </div>

                <!-- 5. Study Tables -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/categories5.webp') }}" alt="Study Tables"
                                loading="lazy" />
                        </div>
                        <span class="cat-label">Study Tables</span>
                    </a>
                </div>

                <!-- 6. Mattress -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/categories6.webp') }}" alt="Mattress" loading="lazy" />
                        </div>
                        <span class="cat-label">Mattress</span>
                    </a>
                </div>

                <!-- 7. Decor -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/categories7.webp') }}" alt="Decor" loading="lazy" />
                        </div>
                        <span class="cat-label">Decor</span>
                    </a>
                </div>

                <!-- 8. Wardrobes -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/categories8.jpg') }}" alt="Wardrobes" loading="lazy" />
                        </div>
                        <span class="cat-label">Wardrobes</span>
                    </a>
                </div>

                <!-- 9. Chairs -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/categories9.webp') }}" alt="Chairs" loading="lazy" />
                        </div>
                        <span class="cat-label">Chairs</span>
                    </a>
                </div>

                <!-- 10. Outdoor -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/categories10.webp') }}" alt="Outdoor" loading="lazy" />
                        </div>
                        <span class="cat-label">Outdoor</span>
                    </a>
                </div>

                <!-- 11. Dressing Table -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/categories11.avif') }}" alt="Dressing Table"
                                loading="lazy" />
                        </div>
                        <span class="cat-label">Dressing Table</span>
                    </a>
                </div>

                <!-- 12. Coffee Tables -->
                <div class="col d-flex justify-content-center">
                    <a href="#" class="cat-col cat-col-wrapper">
                        <div class="cat-circle">
                            <img src="{{ asset('assets/categories/categories12.webp') }}" alt="Coffee Tables"
                                loading="lazy" />
                        </div>
                        <span class="cat-label">Coffee Tables</span>
                    </a>
                </div>

            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    <!-- prodect catogery section end -->



    <section class="py-4 px-3 px-md-4 px-lg-5">
        <div class="container-xl">

            <h2 class="section-title">Featured offers</h2>

            <div class="offers-grid">

                <!-- ═══ LEFT: Large tall card ═══ -->
                <div class="offers-left">
                    <a href="#" class="offer-card">
                        <img src="https://images.unsplash.com/photo-1600585152220-90363fe7e115?w=900&q=80"
                            alt="Bathroom – luxury bathtub" />
                        <div class="overlay"></div>
                        <div class="card-content">
                            <span class="offer-badge">Bathroom</span>
                            <h2>Where<br>Quality<br>Meets Style,<br>Furniture<br>That Lasts</h2>
                            <p style="margin-top:0.55rem;">Bring Comfort Home!</p>
                        </div>
                    </a>
                </div>

                <!-- ═══ RIGHT ═══ -->
                <div class="offers-right">

                    <!-- Top row: two equal cards -->
                    <div class="right-top-row">

                        <!-- Chair & Sofas -->
                        <a href="#" class="offer-card">
                            <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=700&q=80"
                                alt="Chair and Sofas" />
                            <div class="overlay"></div>
                            <div class="card-content">
                                <span class="offer-badge">Chair &amp; Sofas</span>
                                <h2>Bring Comfort<br>Home</h2>
                                <p>Discover Unique Finds!</p>
                            </div>
                        </a>

                        <!-- Accessories (dark bg) -->
                        <a href="#" class="offer-card dark" style="background:#0e0e0e;">
                            <img src="https://images.unsplash.com/photo-1616486338812-3dadae4b4ace?w=700&q=80"
                                alt="Accessories" style="opacity:0.72;" />
                            <div class="overlay"></div>
                            <div class="card-content">
                                <span class="offer-badge">Accessories</span>
                                <h2>Details are<br>important</h2>
                                <p>Shop now!</p>
                            </div>
                        </a>

                    </div>
                    <!-- /right-top-row -->

                    <!-- Bottom row: wide sale card -->
                    <div class="right-bottom-row">
                        <a href="#" class="offer-card sale">
                            <img src="https://images.unsplash.com/photo-1567538096621-38d2284b23ff?w=1200&q=80"
                                alt="Chair sale" />
                            <div class="overlay"></div>
                            <div class="card-content">
                                <span class="offer-badge badge-sale">Sale</span>
                                <h2>−25% for all chairs!</h2>
                                <p>Don't miss the deal!</p>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- /offers-right -->

            </div>
            <!-- /offers-grid -->

        </div>
    </section>

    <section class="latest-products">
        <div class="container-xl">

            <h2 class="sec-title">Latest Products</h2>

            <div class="row g-3 mb-5">

                <div class="col-6 col-md-4 col-lg">
                    <div class="product-card h-100">
                        <span class="discount-badge">-22%</span>
                        <button class="wishlist-btn"><i class="bi bi-heart"></i></button>
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=400&q=80"
                                alt="Occasional Chair" />
                            <!-- Hover action icons -->
                            <div class="action-icons">
                                <a href="#" class="action-btn" title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="#" class="action-btn" title="Quick View"><i class="bi bi-search"></i></a>
                                <a href="#" class="action-btn" title="Compare"><i class="bi bi-bar-chart-line"></i></a>
                                <a href="#" class="action-btn" title="Add to Cart"><i class="bi bi-bag"></i></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <p class="product-brand">IdealInstitute</p>
                            <p class="product-name">Avyanna Occasional Chair</p>
                            <p class="product-price">
                                <span class="price-sale">$202.00</span>
                                <span class="price-original">$258.00</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <div class="product-card h-100">
                        <span class="discount-badge">-22%</span>
                        <button class="wishlist-btn"><i class="bi bi-heart"></i></button>
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=400&q=80"
                                alt="Occasional Chair" />
                            <!-- Hover action icons -->
                            <div class="action-icons">
                                <a href="#" class="action-btn" title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="#" class="action-btn" title="Quick View"><i class="bi bi-search"></i></a>
                                <a href="#" class="action-btn" title="Compare"><i class="bi bi-bar-chart-line"></i></a>
                                <a href="#" class="action-btn" title="Add to Cart"><i class="bi bi-bag"></i></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <p class="product-brand">IdealInstitute</p>
                            <p class="product-name">Avyanna Occasional Chair</p>
                            <p class="product-price">
                                <span class="price-sale">$202.00</span>
                                <span class="price-original">$258.00</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <div class="product-card h-100">
                        <span class="discount-badge">-22%</span>
                        <button class="wishlist-btn"><i class="bi bi-heart"></i></button>
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=400&q=80"
                                alt="Occasional Chair" />
                            <!-- Hover action icons -->
                            <div class="action-icons">
                                <a href="#" class="action-btn" title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="#" class="action-btn" title="Quick View"><i class="bi bi-search"></i></a>
                                <a href="#" class="action-btn" title="Compare"><i class="bi bi-bar-chart-line"></i></a>
                                <a href="#" class="action-btn" title="Add to Cart"><i class="bi bi-bag"></i></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <p class="product-brand">IdealInstitute</p>
                            <p class="product-name">Avyanna Occasional Chair</p>
                            <p class="product-price">
                                <span class="price-sale">$202.00</span>
                                <span class="price-original">$258.00</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <div class="product-card h-100">
                        <span class="discount-badge">-22%</span>
                        <button class="wishlist-btn"><i class="bi bi-heart"></i></button>
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=400&q=80"
                                alt="Occasional Chair" />
                            <!-- Hover action icons -->
                            <div class="action-icons">
                                <a href="#" class="action-btn" title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="#" class="action-btn" title="Quick View"><i class="bi bi-search"></i></a>
                                <a href="#" class="action-btn" title="Compare"><i class="bi bi-bar-chart-line"></i></a>
                                <a href="#" class="action-btn" title="Add to Cart"><i class="bi bi-bag"></i></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <p class="product-brand">IdealInstitute</p>
                            <p class="product-name">Avyanna Occasional Chair</p>
                            <p class="product-price">
                                <span class="price-sale">$202.00</span>
                                <span class="price-original">$258.00</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <div class="product-card h-100">
                        <span class="discount-badge">-22%</span>
                        <button class="wishlist-btn"><i class="bi bi-heart"></i></button>
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=400&q=80"
                                alt="Occasional Chair" />
                            <!-- Hover action icons -->
                            <div class="action-icons">
                                <a href="#" class="action-btn" title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="#" class="action-btn" title="Quick View"><i class="bi bi-search"></i></a>
                                <a href="#" class="action-btn" title="Compare"><i class="bi bi-bar-chart-line"></i></a>
                                <a href="#" class="action-btn" title="Add to Cart"><i class="bi bi-bag"></i></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <p class="product-brand">IdealInstitute</p>
                            <p class="product-name">Avyanna Occasional Chair</p>
                            <p class="product-price">
                                <span class="price-sale">$202.00</span>
                                <span class="price-original">$258.00</span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg">
                    <div class="product-card h-100">
                        <span class="discount-badge">-22%</span>
                        <button class="wishlist-btn"><i class="bi bi-heart"></i></button>
                        <div class="product-img-wrap">
                            <img src="https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=400&q=80"
                                alt="Occasional Chair" />
                            <!-- Hover action icons -->
                            <div class="action-icons">
                                <a href="#" class="action-btn" title="Wishlist"><i class="bi bi-heart"></i></a>
                                <a href="#" class="action-btn" title="Quick View"><i class="bi bi-search"></i></a>
                                <a href="#" class="action-btn" title="Compare"><i class="bi bi-bar-chart-line"></i></a>
                                <a href="#" class="action-btn" title="Add to Cart"><i class="bi bi-bag"></i></a>
                            </div>
                        </div>
                        <div class="product-info">
                            <p class="product-brand">IdealInstitute</p>
                            <p class="product-name">Avyanna Occasional Chair</p>
                            <p class="product-price">
                                <span class="price-sale">$202.00</span>
                                <span class="price-original">$258.00</span>
                            </p>
                        </div>
                    </div>
                </div>

                

            </div>
            <!-- /row -->

            <!-- Show All button -->
            <div class="text-center mt-2">
                <a href="#" class="show-all-btn">Show All Latest Products</a>
            </div>

        </div>
    </section>


{{-- ══════════════════════════════════════════
     SERVICE BANNER — paste just after the award section
══════════════════════════════════════════ --}}
<section class="service-banner">
    <div class="container-xl">

        <div class="service-item">
            <div class="service-icon-box">
                <i class="bi bi-truck"></i>
            </div>
            <span class="service-label">Free Shipping</span>
        </div>

        <div class="service-divider"></div>

        <div class="service-item">
            <div class="service-icon-box">
                <i class="bi bi-tools"></i>
            </div>
            <span class="service-label">Free Installation</span>
        </div>

        <div class="service-divider"></div>

        <div class="service-item">
            <div class="service-icon-box">
                <i class="bi bi-shield-check"></i>
            </div>
            <span class="service-label">Assured Warranty</span>
        </div>

    </div>
</section>


{{-- ══════════════════════════════════════════
     NEW ARRIVALS — Horizontally Scrollable
══════════════════════════════════════════ --}}
<section class="new-arrivals">
    <div class="container-xl">

        <div class="arrivals-header">
            <div>
                <h2 class="arrivals-title">New Arrivals</h2>
                <p class="arrivals-subtitle">Explore Our New Collections</p>
            </div>
            <a href="#" class="explore-btn">Explore Collection <i class="bi bi-chevron-right"></i></a>
        </div>

        <div class="arrivals-scroll-wrapper">
            <button class="scroll-nav prev-btn" id="arrivalsPrev" aria-label="Previous">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="scroll-nav next-btn" id="arrivalsNext" aria-label="Next">
                <i class="bi bi-chevron-right"></i>
            </button>

            <div class="arrivals-track" id="arrivalsTrack">

                {{-- Card 1 --}}
                <a href="#" class="arrival-card">
                    <div class="arrival-img-wrap">
                        <button class="arrival-wish"><i class="bi bi-heart"></i></button>
                        <img src="{{ asset('assets/arrivals/arrival1.webp') }}"
                             onerror="this.src='https://images.unsplash.com/photo-1631679706909-1844bbd07221?w=500&q=80'"
                             alt="Dynamo Shoe Rack" loading="lazy" />
                    </div>
                    <div class="arrival-info">
                        <p class="arrival-name">Dynamo Shoe Rack - IV</p>
                        <p class="arrival-price">MRP ₹ 7,690</p>
                    </div>
                </a>

                {{-- Card 2 --}}
                <a href="#" class="arrival-card">
                    <div class="arrival-img-wrap">
                        <button class="arrival-wish"><i class="bi bi-heart"></i></button>
                        <img src="{{ asset('assets/arrivals/arrival2.webp') }}"
                             onerror="this.src='https://images.unsplash.com/photo-1617098474202-0d0d7c3d43f6?w=500&q=80'"
                             alt="Pansy Dining Table Set" loading="lazy" />
                    </div>
                    <div class="arrival-info">
                        <p class="arrival-name">Pansy 4 Seater Dining Table Set</p>
                        <p class="arrival-price">MRP ₹ 18,650</p>
                    </div>
                </a>

                {{-- Card 3 --}}
                <a href="#" class="arrival-card">
                    <div class="arrival-img-wrap">
                        <button class="arrival-wish"><i class="bi bi-heart"></i></button>
                        <img src="{{ asset('assets/arrivals/arrival3.webp') }}"
                             onerror="this.src='https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=500&q=80'"
                             alt="Grandeur Recliner Sofa" loading="lazy" />
                    </div>
                    <div class="arrival-info">
                        <p class="arrival-name">Grandeur Power Recliner Sofa Set - Genuine...</p>
                        <p class="arrival-price">MRP ₹ 2,32,000</p>
                    </div>
                </a>

                {{-- Card 4 --}}
                <a href="#" class="arrival-card">
                    <div class="arrival-img-wrap">
                        <button class="arrival-wish"><i class="bi bi-heart"></i></button>
                        <img src="{{ asset('assets/arrivals/arrival4.webp') }}"
                             onerror="this.src='https://images.unsplash.com/photo-1600585154340-be6161a56a0c?w=500&q=80'"
                             alt="Brilliant 4 Door Wardrobe" loading="lazy" />
                    </div>
                    <div class="arrival-info">
                        <p class="arrival-name">Brilliant 4 Door Wardrobe</p>
                        <p class="arrival-price">MRP ₹ 1,74,000</p>
                    </div>
                </a>

                {{-- Card 5 --}}
                <a href="#" class="arrival-card">
                    <div class="arrival-img-wrap">
                        <button class="arrival-wish"><i class="bi bi-heart"></i></button>
                        <img src="{{ asset('assets/arrivals/arrival5.webp') }}"
                             onerror="this.src='https://images.unsplash.com/photo-1567538096630-e0c55bd6374c?w=500&q=80'"
                             alt="Oslo Lounge Chair" loading="lazy" />
                    </div>
                    <div class="arrival-info">
                        <p class="arrival-name">Oslo Lounge Chair - Premium Fabric</p>
                        <p class="arrival-price">MRP ₹ 24,500</p>
                    </div>
                </a>

                {{-- Card 6 --}}
                <a href="#" class="arrival-card">
                    <div class="arrival-img-wrap">
                        <button class="arrival-wish"><i class="bi bi-heart"></i></button>
                        <img src="{{ asset('assets/arrivals/arrival6.webp') }}"
                             onerror="this.src='https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?w=500&q=80'"
                             alt="Bella 3 Seater Sofa" loading="lazy" />
                    </div>
                    <div class="arrival-info">
                        <p class="arrival-name">Bella 3 Seater Velvet Sofa</p>
                        <p class="arrival-price">MRP ₹ 38,990</p>
                    </div>
                </a>

            </div>{{-- /arrivals-track --}}
        </div>{{-- /arrivals-scroll-wrapper --}}

    </div>
</section>


{{-- ══════════════════════════════════════════
     CUSTOMER WORDS — Testimonial Slider
══════════════════════════════════════════ --}}
<section class="customer-words">
    <div class="container-xl">

        <div class="cw-heading">
            <h2>Customer Words</h2>
            <p>Happy Testimonials From Our Satisfied Customers</p>
        </div>

        <div class="cw-scroll-wrapper">
            <button class="cw-nav prev" id="cwPrev" aria-label="Previous">
                <i class="bi bi-chevron-left"></i>
            </button>
            <button class="cw-nav next" id="cwNext" aria-label="Next">
                <i class="bi bi-chevron-right"></i>
            </button>

            <div class="cw-track" id="cwTrack">

                {{-- Testimonial 1 — video style --}}
                <div class="cw-card">
                    <div class="cw-play-overlay">
                        <img class="cw-card-img"
                             src="{{ asset('assets/testimonials/review1.webp') }}"
                             onerror="this.src='https://images.unsplash.com/photo-1584184924103-e310d9dc82fc?w=500&q=80'"
                             alt="Keerthi" loading="lazy" />
                        <div class="cw-play-btn"><i class="bi bi-play-fill"></i></div>
                    </div>
                    <div class="cw-card-body">
                        <div class="cw-review-wrap">
                            <p class="cw-review-text">It was an amazing experience while purchasing furniture for my home at DAMRO. The person who attended me was Shadab Khan, he was awesome and provided genuine advice.</p>
                        </div>
                        <div class="cw-stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="cw-reviewer-name">Keerthi</p>
                        <p class="cw-reviewer-location">Bangalore, J.P.Nagar</p>
                    </div>
                </div>

                {{-- Testimonial 2 --}}
                <div class="cw-card">
                    <img class="cw-card-img"
                         src="{{ asset('assets/testimonials/review2.webp') }}"
                         onerror="this.src='https://images.unsplash.com/photo-1598928506311-c55ded91a20c?w=500&q=80'"
                         alt="Aditya" loading="lazy" />
                    <div class="cw-card-body">
                        <div class="cw-review-wrap">
                            <p class="cw-review-text">Amazing experience. Furniture was top notch and the staff at their showroom were friendly and polite in showing us around. Highly recommended!</p>
                        </div>
                        <div class="cw-stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="cw-reviewer-name">Aditya</p>
                        <p class="cw-reviewer-location">Anna Nagar</p>
                    </div>
                </div>

                {{-- Testimonial 3 --}}
                <div class="cw-card">
                    <img class="cw-card-img"
                         src="{{ asset('assets/testimonials/review3.webp') }}"
                         onerror="this.src='https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=500&q=80'"
                         alt="Harikrishna" loading="lazy" />
                    <div class="cw-card-body">
                        <div class="cw-review-wrap">
                            <p class="cw-review-text">Premium quality sofas and furniture available at Damro. The store is around 3 floors and quite huge with good parking space. Wide range of selection available.</p>
                        </div>
                        <div class="cw-stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-half"></i>
                        </div>
                        <p class="cw-reviewer-name">Harikrishna</p>
                        <p class="cw-reviewer-location">Kalamassery, Kerala</p>
                    </div>
                </div>

                {{-- Testimonial 4 --}}
                <div class="cw-card">
                    <img class="cw-card-img"
                         src="{{ asset('assets/testimonials/review4.webp') }}"
                         onerror="this.src='https://images.unsplash.com/photo-1631679706909-1844bbd07221?w=500&q=80'"
                         alt="Waquar Sadri" loading="lazy" />
                    <div class="cw-card-body">
                        <div class="cw-review-wrap">
                            <p class="cw-review-text">It was an amazing experience while purchasing furniture for my home at DAMRO. The person who attended me was Shadab Khan, he was awesome and provided genuine advice.</p>
                        </div>
                        <div class="cw-stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="cw-reviewer-name">Waquar Sadri</p>
                        <p class="cw-reviewer-location">Lucknow, Uttar Pradesh</p>
                    </div>
                </div>

                {{-- Testimonial 5 --}}
                <div class="cw-card">
                    <img class="cw-card-img"
                         src="{{ asset('assets/testimonials/review5.webp') }}"
                         onerror="this.src='https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?w=500&q=80'"
                         alt="Priya Menon" loading="lazy" />
                    <div class="cw-card-body">
                        <div class="cw-review-wrap">
                            <p class="cw-review-text">Excellent furniture quality and very prompt delivery service. The team was professional and assembled everything perfectly. Will definitely order again!</p>
                        </div>
                        <div class="cw-stars">
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="cw-reviewer-name">Priya Menon</p>
                        <p class="cw-reviewer-location">Kochi, Kerala</p>
                    </div>
                </div>

            </div>{{-- /cw-track --}}
        </div>{{-- /cw-scroll-wrapper --}}

    </div>
</section>


{{-- ══════════════════════════════════════════
     JAVASCRIPT — Arrow scroll for both sliders
     (Add this at the bottom of the blade file, before @endsection)
══════════════════════════════════════════ --}}
<script>
(function () {
    function initScrollNav(trackId, prevId, nextId) {
        const track = document.getElementById(trackId);
        const prev  = document.getElementById(prevId);
        const next  = document.getElementById(nextId);
        if (!track || !prev || !next) return;

        const scrollAmount = () => track.clientWidth * 0.75;

        prev.addEventListener('click', () =>
            track.scrollBy({ left: -scrollAmount(), behavior: 'smooth' })
        );
        next.addEventListener('click', () =>
            track.scrollBy({ left:  scrollAmount(), behavior: 'smooth' })
        );

        // Hide/show arrows based on scroll position
        const update = () => {
            prev.style.opacity = track.scrollLeft <= 10 ? '0.35' : '1';
            next.style.opacity = track.scrollLeft + track.clientWidth >= track.scrollWidth - 10 ? '0.35' : '1';
        };
        track.addEventListener('scroll', update, { passive: true });
        update();
    }

    initScrollNav('arrivalsTrack', 'arrivalsPrev', 'arrivalsNext');
    initScrollNav('cwTrack',       'cwPrev',       'cwNext');
})();
</script>


@endsection