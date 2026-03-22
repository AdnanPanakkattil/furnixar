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
    <!-- carousel section end  -->

    <!-- categories section start  -->
    <section class="category-section">
        <div class="container">
            <h2 class="mb-4">Shop by top categories</h2>

            <div class="category-wrapper">
                <!-- Left Button -->
                <button class="scroll-btn scroll-left" onclick="scrollCategory(-200)">
                    &#10094;
                </button>

                <!-- Scroll Area -->
                <div class="category-scroll" id="categoryScroll">

                    <div class="category-item">
                        <img src="{{ asset('assets/categories/cat-wardrobe.png') }}">
                        <p>Wardrobes</p>
                    </div>

                    <div class="category-item">
                        <img src="{{ asset('assets/categories/cat-chair.png') }}">
                        <p>Chairs</p>
                    </div>

                    <div class="category-item">
                        <img src="{{ asset('assets/categories/cat-desk.png') }}">
                        <p>Desks</p>
                    </div>

                    <div class="category-item">
                        <img src="{{ asset('assets/categories/cat-sofa.png') }}">
                        <p>Sofa</p>
                    </div>

                    <div class="category-item">
                        <img src="{{ asset('assets/categories/cat-table.png') }}">
                        <p>Tables</p>
                    </div>

                    <div class="category-item">
                        <img src="{{ asset('assets/categories/cat-lighting.png') }}">
                        <p>Lighting</p>
                    </div>

                    <div class="category-item">
                        <img src="{{ asset('assets/categories/cat-cabinet.png') }}">
                        <p>Cabinets</p>
                    </div>

                    <div class="category-item">
                        <img src="{{ asset('assets/categories/cat-office.png') }}">
                        <p>Office</p>
                    </div>

                    <div class="category-item">
                        <img src="{{ asset('assets/categories/cat-accessories.png') }}">
                        <p>Accessories</p>
                    </div>

                </div>

                <!-- Right Button -->
                <button class="scroll-btn scroll-right" onclick="scrollCategory(200)">
                    &#10095;
                </button>
            </div>
        </div>
    </section>
    <!-- categories section end -->

    <!-- Featured offers section start -->

    <!-- Featured offers section end -->

    <!-- Latest products section start -->
    <div class="container-fluid px-0" style="max-width: 1320px; margin: 0 auto;">

        <!-- Section Header -->
        <div class="section-header">
            <h2 class="section-title">Latest products</h2>
            <div class="nav-btns">
                <button class="nav-btn" aria-label="Previous">
                    <svg viewBox="0 0 24 24">
                        <polyline points="15 18 9 12 15 6" />
                    </svg>
                </button>
                <button class="nav-btn" aria-label="Next">
                    <svg viewBox="0 0 24 24">
                        <polyline points="9 18 15 12 9 6" />
                    </svg>
                </button>
            </div>
        </div>

        <!-- Product Grid -->
        <div class="products-scroll">

            <!-- Card 1: Throw Pillow -->
            <div class="col-item">
                <div class="product-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1588099768523-f4e6a5679d88?w=400&q=80"
                            alt="Bess Decorative Throw Pillow" />
                        <button class="btn-wishlist" aria-label="Add to wishlist">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                            </svg>
                        </button>
                        <div class="card-actions">
                            <button class="action-btn" aria-label="Quick view">
                                <svg viewBox="0 0 24 24">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                </svg>
                            </button>
                            <button class="action-btn" aria-label="Add to cart">
                                <svg viewBox="0 0 24 24">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                    <path d="M16 10a4 4 0 0 1-8 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="product-brand">SlumberCraft</p>
                        <h3 class="product-name">Bess Decorative Throw Pillow</h3>
                        <div class="price-wrap">
                            <span class="price-normal">$9.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 2: Occasional Chair -->
            <div class="col-item">
                <div class="product-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1598300042247-d088f8ab3a91?w=400&q=80"
                            alt="Avyanna Occasional Chair" />
                        <button class="btn-wishlist" aria-label="Add to wishlist">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                            </svg>
                        </button>
                        <span class="badge-discount">-22%</span>
                        <div class="card-actions">
                            <button class="action-btn" aria-label="Quick view">
                                <svg viewBox="0 0 24 24">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                </svg>
                            </button>
                            <button class="action-btn" aria-label="Add to cart">
                                <svg viewBox="0 0 24 24">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                    <path d="M16 10a4 4 0 0 1-8 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="product-brand">IdealInstitute</p>
                        <h3 class="product-name">Avyanna Occasional Chair</h3>
                        <div class="price-wrap">
                            <span class="price-current">$202.00</span>
                            <span class="price-original">$258.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 3: Leather Sofa -->
            <div class="col-item">
                <div class="product-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=400&q=80"
                            alt="Leather and Fabric Sofas" />
                        <button class="btn-wishlist" aria-label="Add to wishlist">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                            </svg>
                        </button>
                        <span class="badge-discount">-34%</span>
                        <div class="card-actions">
                            <button class="action-btn" aria-label="Quick view">
                                <svg viewBox="0 0 24 24">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                </svg>
                            </button>
                            <button class="action-btn" aria-label="Add to cart">
                                <svg viewBox="0 0 24 24">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                    <path d="M16 10a4 4 0 0 1-8 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="product-brand">FeastFocal</p>
                        <h3 class="product-name">Leather and Fabric Sofas</h3>
                        <div class="price-wrap">
                            <span class="price-current">$639.00</span>
                            <span class="price-original">$963.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 4: 3-Seater Sofa -->
            <div class="col-item">
                <div class="product-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1493663284031-b7e3aefcae8e?w=400&q=80"
                            alt="Valdez 3 Seater Sofa" />
                        <button class="btn-wishlist" aria-label="Add to wishlist">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                            </svg>
                        </button>
                        <span class="badge-discount">-24%</span>
                        <div class="card-actions">
                            <button class="action-btn" aria-label="Quick view">
                                <svg viewBox="0 0 24 24">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                </svg>
                            </button>
                            <button class="action-btn" aria-label="Add to cart">
                                <svg viewBox="0 0 24 24">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                    <path d="M16 10a4 4 0 0 1-8 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="product-brand">CornDell</p>
                        <h3 class="product-name">Valdez 3 Seater Sofa</h3>
                        <div class="price-wrap">
                            <span class="price-current">$599.00</span>
                            <span class="price-original">$786.00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Card 5: Table Lamp -->
            <div class="col-item">
                <div class="product-card">
                    <div class="card-img-wrap">
                        <img src="https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=400&q=80"
                            alt="Arlomore Table Lamp" />
                        <button class="btn-wishlist" aria-label="Add to wishlist">
                            <svg viewBox="0 0 24 24">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z" />
                            </svg>
                        </button>
                        <div class="card-actions">
                            <button class="action-btn" aria-label="Quick view">
                                <svg viewBox="0 0 24 24">
                                    <circle cx="11" cy="11" r="8" />
                                    <line x1="21" y1="21" x2="16.65" y2="16.65" />
                                </svg>
                            </button>
                            <button class="action-btn" aria-label="Add to cart">
                                <svg viewBox="0 0 24 24">
                                    <path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z" />
                                    <line x1="3" y1="6" x2="21" y2="6" />
                                    <path d="M16 10a4 4 0 0 1-8 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="product-brand">BroyHill</p>
                        <h3 class="product-name">Arlomore Table Lamp</h3>
                        <div class="price-wrap">
                            <span class="price-normal">$39.00</span>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- /products-scroll -->

    </div>
    <!-- Latest products section end -->

    <script>
        function scrollCategory(value) {
            document.getElementById('categoryScroll').scrollBy({
                left: value,
                behavior: 'smooth'
            });
        }
        // Wishlist toggle
        document.querySelectorAll('.btn-wishlist').forEach(btn => {
            btn.addEventListener('click', () => {
                btn.classList.toggle('active');
            });
        });

        // Nav buttons (carousel logic example)
        const scroll = document.querySelector('.products-scroll');
        document.querySelector('.nav-btn[aria-label="Previous"]').addEventListener('click', () => {
            scroll.scrollBy({ left: -250, behavior: 'smooth' });
        });
        document.querySelector('.nav-btn[aria-label="Next"]').addEventListener('click', () => {
            scroll.scrollBy({ left: 250, behavior: 'smooth' });
        });
    </script>
@endsection