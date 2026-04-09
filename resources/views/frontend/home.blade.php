@extends('frontend.layouts.FrontendLayout')

@section('content')

<!-- ═══════════════════════════════════════════════
             SECTION 1 — HERO CAROUSEL
        ════════════════════════════════════════════════ -->
<div id="mainCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="0" class="active" aria-current="true"
            aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#mainCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
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
    <button class="carousel-control-prev" type="button" data-bs-target="#mainCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#mainCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- / SECTION 1 -->



<!-- SECTION 2 — SHOP BY CATEGORY -->

<div class="section-wrapper">
    <h2 class="section-title">Shop by top categories</h2>
    <div class="categories-row">
        <a href="#" class="cat-item">
            <div class="cat-img-wrap"><img src="{{ asset('assets/categories/cat-sofa.png') }}" alt="Sofas"></div>
            <span class="cat-label">Sofas</span>
        </a>
        <a href="#" class="cat-item">
            <div class="cat-img-wrap"><img src="{{ asset('assets/categories/cat-wardrobe.png') }}" alt="Wardrobes">
            </div>
            <span class="cat-label">Wardrobes</span>
        </a>
        <a href="#" class="cat-item">
            <div class="cat-img-wrap"><img src="{{ asset('assets/categories/cat-chair.png') }}" alt="Chairs"></div>
            <span class="cat-label">Chairs</span>
        </a>
        <a href="#" class="cat-item">
            <div class="cat-img-wrap"><img src="{{ asset('assets/categories/cat-desk.png') }}" alt="Desks"></div>
            <span class="cat-label">Desks</span>
        </a>
        <a href="#" class="cat-item">
            <div class="cat-img-wrap"><img src="{{ asset('assets/categories/cat-table.png') }}" alt="Tables"></div>
            <span class="cat-label">Tables</span>
        </a>
        <a href="#" class="cat-item">
            <div class="cat-img-wrap"><img src="{{ asset('assets/categories/cat-lighting.png') }}" alt="Lighting"></div>
            <span class="cat-label">Lighting</span>
        </a>
        <a href="#" class="cat-item">
            <div class="cat-img-wrap"><img src="{{ asset('assets/categories/cat-cabinet.png') }}" alt="Cabinets"></div>
            <span class="cat-label">Cabinets</span>
        </a>
        <a href="#" class="cat-item">
            <div class="cat-img-wrap"><img src="{{ asset('assets/categories/cat-office.png') }}" alt="Office"></div>
            <span class="cat-label">Office</span>
        </a>
        <a href="#" class="cat-item">
            <div class="cat-img-wrap"><img src="{{ asset('assets/categories/cat-wardrobe.png') }}" alt="Accessories">
            </div>
            <span class="cat-label">Accessories</span>
        </a>
    </div>
</div>
<!-- / SECTION 2 -->


<!-- ═══════════════════════════════════════════════
             SECTION 4 — LATEST PRODUCTS
        ════════════════════════════════════════════════ -->
<section class="products-section">
    <div class="products-list">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title mb-0">Latest products</h2>
            <div class="d-flex gap-2">
                <button class="nav-btn" id="latestPrev" aria-label="Previous"><i
                        class="bi bi-chevron-left"></i></button>
                <button class="nav-btn" id="latestNext" aria-label="Next"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
        <div class="scroll-track" id="latestTrack">

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=400&q=80"
                        alt="Arlomore Table Lamp">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                </div>
                <div class="card-body">
                    <p class="card-brand">BroyHill</p>
                    <p class="card-name">Arlomore Table Lamp</p>
                    <div class="price-row">
                        <span class="price-current">$39.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=400&q=80"
                        alt="Calligaris Lazy Armchair">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                </div>
                <div class="card-body">
                    <p class="card-brand">ApparelArk</p>
                    <p class="card-name">Calligaris Lazy Armchair</p>
                    <div class="price-row">
                        <span class="price-current">$147.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=400&q=80"
                        alt="Luxe Chair White">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-18%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">PlushLounge</p>
                    <p class="card-name">Luxe Chair White</p>
                    <div class="price-row">
                        <span class="price-current price-sale">$150.00</span>
                        <span class="price-original">$182.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?w=400&q=80"
                        alt="Natural Linen Pillow">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                </div>
                <div class="card-body">
                    <p class="card-brand">PlushLounge</p>
                    <p class="card-name">Natural Linen Pillow</p>
                    <div class="price-row">
                        <span class="price-current">$5.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1518455027359-f3f8164ba6bd?w=400&q=80"
                        alt="Mobica Arc Floor Lamp">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-12%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">IdeaInst</p>
                    <p class="card-name">Mobica Arc Floor Lamp</p>
                    <div class="price-row">
                        <span class="price-current price-sale">$83.00</span>
                        <span class="price-original">$94.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1567538096621-38d2284b23ff?w=400&q=80"
                        alt="Velvet Accent Chair">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                </div>
                <div class="card-body">
                    <p class="card-brand">NestCo</p>
                    <p class="card-name">Velvet Accent Chair</p>
                    <div class="price-row">
                        <span class="price-current">$219.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=400&q=80"
                        alt="Modern Sofa Set">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-22%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">HomeVibe</p>
                    <p class="card-name">Modern Sofa Set</p>
                    <div class="price-row">
                        <span class="price-current price-sale">$389.00</span>
                        <span class="price-original">$499.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1524484485831-a92ffc0de03f?w=400&q=80"
                        alt="Pendant Ceiling Light">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                </div>
                <div class="card-body">
                    <p class="card-brand">LumiCo</p>
                    <p class="card-name">Pendant Ceiling Light</p>
                    <div class="price-row">
                        <span class="price-current">$64.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- / SECTION 4 -->


<!-- ═══════════════════════════════════════════════
             SECTION 6 — LATEST OFFERS
             All cards have original price + sale price + % badge
        ════════════════════════════════════════════════ -->
<section class="products-section">
    <div class="products-list">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title mb-0">Latest offers</h2>
            <div class="d-flex gap-2">
                <button class="nav-btn" id="offersPrev" aria-label="Previous"><i
                        class="bi bi-chevron-left"></i></button>
                <button class="nav-btn" id="offersNext" aria-label="Next"><i class="bi bi-chevron-right"></i></button>
            </div>
        </div>
        <div class="scroll-track" id="offersTrack">

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=400&q=80"
                        alt="Arlomore Table Lamp">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-20%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">BroyHill</p>
                    <p class="card-name">Arlomore Table Lamp</p>
                    <div class="price-row">
                        <span class="price-current price-sale">$39.00</span>
                        <span class="price-original">$48.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=400&q=80"
                        alt="Calligaris Lazy Armchair">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-15%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">ApparelArk</p>
                    <p class="card-name">Calligaris Lazy Armchair</p>
                    <div class="price-row">
                        <span class="price-current price-sale">$147.00</span>
                        <span class="price-original">$172.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=400&q=80"
                        alt="Luxe Chair White">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-18%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">PlushLounge</p>
                    <p class="card-name">Luxe Chair White</p>
                    <div class="price-row">
                        <span class="price-current price-sale">$150.00</span>
                        <span class="price-original">$182.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?w=400&q=80"
                        alt="Natural Linen Pillow">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-30%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">PlushLounge</p>
                    <p class="card-name">Natural Linen Pillow</p>
                    <div class="price-row">
                        <span class="price-current price-sale">$5.00</span>
                        <span class="price-original">$7.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1518455027359-f3f8164ba6bd?w=400&q=80"
                        alt="Mobica Arc Floor Lamp">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-12%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">IdeaInst</p>
                    <p class="card-name">Mobica Arc Floor Lamp</p>
                    <div class="price-row">
                        <span class="price-current price-sale">$83.00</span>
                        <span class="price-original">$94.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1567538096621-38d2284b23ff?w=400&q=80"
                        alt="Velvet Accent Chair">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-25%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">NestCo</p>
                    <p class="card-name">Velvet Accent Chair</p>
                    <div class="price-row">
                        <span class="price-current price-sale">$219.00</span>
                        <span class="price-original">$292.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=400&q=80"
                        alt="Nordic Coffee Table">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-35%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">WoodWorks</p>
                    <p class="card-name">Nordic Coffee Table</p>
                    <div class="price-row">
                        <span class="price-current price-sale">$129.00</span>
                        <span class="price-original">$199.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1524484485831-a92ffc0de03f?w=400&q=80"
                        alt="Rattan Pendant Lamp">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-40%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">LumiCo</p>
                    <p class="card-name">Rattan Pendant Lamp</p>
                    <div class="price-row">
                        <span class="price-current price-sale">$54.00</span>
                        <span class="price-original">$90.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- / SECTION 6 -->


<!-- ═══════════════════════════════════════════════
             SECTION 8 — ABOUT / STUDIO HERO
        ════════════════════════════════════════════════ -->
<section class="studio-hero">
    <div class="studio-copy">
        <p class="studio-eyebrow"><span></span>furnixar Studio</p>
        <h1 class="studio-headline">
            Specializes in artisanal,<br>
            handcrafted furniture, blending
            <em>traditional</em> woodworking techniques!
        </h1>
        <p class="studio-body">
            With contemporary design to create timeless pieces that add warmth
            and character to any space.
        </p>
        <a href="#about" class="studio-cta">
            About CozyCorner
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"
                    stroke-linejoin="round" />
            </svg>
        </a>
    </div>
    <div class="studio-media">
        <img src="{{ asset('assets/homeimages/default-banner-10.jpg') }}" alt="Studio furniture">
    </div>
</section>
<!-- / SECTION 8 -->


<section class="tcs-section" aria-label="Customer testimonials">
    <div class="tcs-inner">
        <div class="tcs-header">
            <span class="tcs-eyebrow">What Our Customers Say</span>
            <h2 class="tcs-heading">Loved by Thousands of Happy Homes</h2>
        </div>
        <div class="tcs-container">
            <button class="tcs-btn tcs-btn--prev" id="tcsPrev" aria-label="Previous testimonial">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="15 18 9 12 15 6" />
                </svg>
            </button>
            <div class="tcs-slider" id="tcsSlider" role="region" aria-live="polite">

                <div class="tcs-slide is-active" data-idx="0">
                    <div class="tcs-stars" aria-label="5 out of 5 stars">
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                    </div>
                    <p class="tcs-quote">I recently made my first purchase from CozyCorner, and I must say, the
                        experience exceeded all my expectations!</p>
                    <p class="tcs-author">Daryll Monovic</p>
                </div>

                <div class="tcs-slide" data-idx="1">
                    <div class="tcs-stars" aria-label="5 out of 5 stars">
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                    </div>
                    <p class="tcs-quote">CozyCorner's furniture transformed my living space into a cozy retreat. Stylish
                        designs that truly exceeded my expectations.</p>
                    <p class="tcs-author">Jessica Adams</p>
                </div>

                <div class="tcs-slide" data-idx="2">
                    <div class="tcs-stars" aria-label="5 out of 5 stars">
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                    </div>
                    <p class="tcs-quote">CozyCorner transformed my space with their exquisite furniture collection.
                        Highly recommend to everyone!</p>
                    <p class="tcs-author">Samantha Green</p>
                </div>

                <div class="tcs-slide" data-idx="3">
                    <div class="tcs-stars" aria-label="4.5 out of 5 stars">
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-full" fill="#00c55a" />
                        </svg>
                        <svg class="tcs-star">
                            <use href="#star-half" />
                        </svg>
                    </div>
                    <p class="tcs-quote">Their pieces are not only stylish but also durable, making my home feel
                        welcoming and cozy.</p>
                    <p class="tcs-author">Emily Johnson</p>
                </div>

            </div>
            <div class="tcs-dots" role="tablist" aria-label="Testimonial navigation">
                <button class="tcs-dot is-active" data-dot="0" aria-label="Slide 1" role="tab"></button>
                <button class="tcs-dot" data-dot="1" aria-label="Slide 2" role="tab"></button>
                <button class="tcs-dot" data-dot="2" aria-label="Slide 3" role="tab"></button>
                <button class="tcs-dot" data-dot="3" aria-label="Slide 4" role="tab"></button>
            </div>
            <button class="tcs-btn tcs-btn--next" id="tcsNext" aria-label="Next testimonial">
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                    stroke-linejoin="round">
                    <polyline points="9 18 15 12 9 6" />
                </svg>
            </button>
        </div>
    </div>
</section>
<!-- / SECTION 7 -->




<!-- ═══════════════════════════════════════════════
             SECTION 9 — FEATURES / WHY CHOOSE US
        ════════════════════════════════════════════════ -->
<section class="features-section">
    <div class="features-grid">
        <div class="feature-item">
            <div class="feature-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M14.5 2.5l-1 1L5 12l-2 5 5-2 8.5-8.5 1-1-3-3z" />
                    <path d="M12.5 4.5l3 3" />
                </svg>
            </div>
            <span class="feature-badge">Craftsmanship Guaranteed</span>
            <p class="feature-desc">Every piece is meticulously handcrafted by skilled artisans.</p>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M12 2C8 2 5 5 5 9c0 2.5 1.5 4.5 3 6l4 5 4-5c1.5-1.5 3-3.5 3-6 0-4-3-7-7-7z" />
                    <path d="M9 8c0 0 1 3 3 3s3-3 3-3" />
                </svg>
            </div>
            <span class="feature-badge">Sustainability at Heart</span>
            <p class="feature-desc">We prioritize eco-friendly materials and practices in our creations.</p>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M12 21C12 21 4 13.5 4 8.5a4.5 4.5 0 0 1 8-2.8A4.5 4.5 0 0 1 20 8.5C20 13.5 12 21 12 21z" />
                    <path d="M12 12 V8 M10 10 h4" />
                </svg>
            </div>
            <span class="feature-badge">Customize for a Personal Touch</span>
            <p class="feature-desc">Tailor your furniture to fit your space and style perfectly.</p>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg viewBox="0 0 24 24">
                    <path d="M3 14h18v3a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-3z" />
                    <path d="M5 14V9a2 2 0 0 1 2-2h10a2 2 0 0 1 2 2v5" />
                    <path d="M1 17h2M21 17h2" />
                </svg>
            </div>
            <span class="feature-badge">Durability and Quality Focus</span>
            <p class="feature-desc">Built to last, using only the highest quality materials.</p>
        </div>
        <div class="feature-item">
            <div class="feature-icon">
                <svg viewBox="0 0 24 24">
                    <rect x="3" y="3" width="18" height="18" rx="3" />
                    <path d="M12 8v4M12 16h.01" />
                </svg>
            </div>
            <span class="feature-badge">24/7 Customer Support</span>
            <p class="feature-desc">Dedicated support to ensure a seamless shopping experience.</p>
        </div>
    </div>
</section>
<!-- / SECTION 9 -->


<!-- ═══════════════════════════════════════════════
             PAGE SCRIPTS
        ════════════════════════════════════════════════ -->
<script>
    /* ── Wishlist toggle ── */
    document.querySelectorAll('.wish-btn').forEach(btn => {
        btn.addEventListener('click', e => {
            e.stopPropagation();
            btn.classList.toggle('active');
            const icon = btn.querySelector('i');
            icon.classList.toggle('bi-heart');
            icon.classList.toggle('bi-heart-fill');
        });
    });

    /* ── Drag-scroll helper (reusable) ── */
    function enableDragScroll(track) {
        let isDown = false,
            startX, scrollLeft;
        track.addEventListener('mousedown', e => {
            isDown = true;
            track.style.cursor = 'grabbing';
            startX = e.pageX - track.offsetLeft;
            scrollLeft = track.scrollLeft;
        });
        track.addEventListener('mouseleave', () => {
            isDown = false;
            track.style.cursor = 'default';
        });
        track.addEventListener('mouseup', () => {
            isDown = false;
            track.style.cursor = 'default';
        });
        track.addEventListener('mousemove', e => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - track.offsetLeft;
            track.scrollLeft = scrollLeft - (x - startX) * 1.5;
        });
    }

    /* ── Latest Products nav ── */
    const latestTrack = document.getElementById('latestTrack');
    document.getElementById('latestPrev').addEventListener('click', () => latestTrack.scrollBy({
        left: -280,
        behavior: 'smooth'
    }));
    document.getElementById('latestNext').addEventListener('click', () => latestTrack.scrollBy({
        left: 280,
        behavior: 'smooth'
    }));
    enableDragScroll(latestTrack);

    /* ── Latest Offers nav ── */
    const offersTrack = document.getElementById('offersTrack');
    document.getElementById('offersPrev').addEventListener('click', () => offersTrack.scrollBy({
        left: -280,
        behavior: 'smooth'
    }));
    document.getElementById('offersNext').addEventListener('click', () => offersTrack.scrollBy({
        left: 280,
        behavior: 'smooth'
    }));
    enableDragScroll(offersTrack);

    /* ── Section 3: Right panel AUTO-SCROLL (no arrows) ── */
    (function() {
        const track = document.getElementById('slidesTrack');
        const dotsWrap = document.getElementById('rightDots');
        const slides = track.querySelectorAll('.slide');
        const total = slides.length;
        let current = 0;
        let autoTimer;

        /* build dots */
        slides.forEach((_, i) => {
            const d = document.createElement('button');
            d.className = 'dot' + (i === 0 ? ' active' : '');
            d.setAttribute('aria-label', 'Slide ' + (i + 1));
            d.addEventListener('click', () => {
                goTo(i);
                resetAuto();
            });
            dotsWrap.appendChild(d);
        });

        function updateDots() {
            dotsWrap.querySelectorAll('.dot').forEach((d, i) => d.classList.toggle('active', i === current));
        }

        function goTo(idx) {
            current = (idx + total) % total;
            track.style.transform = `translateX(-${current * 100}%)`;
            updateDots();
        }

        function resetAuto() {
            clearInterval(autoTimer);
            autoTimer = setInterval(() => goTo(current + 1), 3500);
        }

        /* touch swipe */
        let tx = 0;
        const panel = document.getElementById('rightPanel');
        panel.addEventListener('touchstart', e => {
            tx = e.touches[0].clientX;
        }, {
            passive: true
        });
        panel.addEventListener('touchend', e => {
            const diff = tx - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 40) {
                goTo(current + (diff > 0 ? 1 : -1));
                resetAuto();
            }
        }, {
            passive: true
        });

        resetAuto();
    })();

    /* ── Section 7: Testimonial slider ── */
    (function() {
        const slides = Array.from(document.querySelectorAll('.tcs-slide'));
        const dots = Array.from(document.querySelectorAll('.tcs-dot'));
        const prevBtn = document.getElementById('tcsPrev');
        const nextBtn = document.getElementById('tcsNext');
        let current = 0,
            busy = false,
            timer;

        function goTo(next, dir) {
            if (busy || next === current) return;
            busy = true;
            const exitClass = dir > 0 ? 'is-exit-left' : 'is-exit-right';
            const prev = current;
            slides[prev].classList.remove('is-active');
            slides[prev].classList.add(exitClass);
            slides[next].style.transform = dir > 0 ? 'translateX(50px)' : 'translateX(-50px)';
            slides[next].style.opacity = '0';
            slides[next].classList.add('is-active');
            slides[next].getBoundingClientRect();
            slides[next].style.transform = '';
            slides[next].style.opacity = '';
            dots[prev].classList.remove('is-active');
            dots[next].classList.add('is-active');
            current = next;
            setTimeout(() => {
                slides[prev].classList.remove(exitClass);
                busy = false;
            }, 470);
        }

        function advance(dir) {
            goTo((current + dir + slides.length) % slides.length, dir);
        }

        function resetTimer() {
            clearInterval(timer);
            timer = setInterval(() => advance(1), 5000);
        }

        prevBtn.addEventListener('click', () => {
            advance(-1);
            resetTimer();
        });
        nextBtn.addEventListener('click', () => {
            advance(1);
            resetTimer();
        });
        dots.forEach(dot => {
            dot.addEventListener('click', () => {
                const next = parseInt(dot.dataset.dot, 10);
                goTo(next, next > current ? 1 : -1);
                resetTimer();
            });
        });

        /* swipe */
        let tcsStartX = 0;
        const slider = document.getElementById('tcsSlider');
        slider.addEventListener('touchstart', e => {
            tcsStartX = e.touches[0].clientX;
        }, {
            passive: true
        });
        slider.addEventListener('touchend', e => {
            const diff = tcsStartX - e.changedTouches[0].clientX;
            if (Math.abs(diff) > 40) {
                advance(diff > 0 ? 1 : -1);
                resetTimer();
            }
        });

        /* keyboard */
        document.addEventListener('keydown', e => {
            if (e.key === 'ArrowLeft') {
                advance(-1);
                resetTimer();
            }
            if (e.key === 'ArrowRight') {
                advance(1);
                resetTimer();
            }
        });

        resetTimer();
    })();
</script>

@endsection