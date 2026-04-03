@extends('frontend.layouts.FrontendLayout')

@section('content')
<!-- carousel section start  -->
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

<!-- product category start  -->
<div class="section-wrapper">
    <h2 class="section-title">Shop by top categories</h2>

    <div class="categories-row">

        <!-- Sofas -->
        <a href="#" class="cat-item">
            <div class="cat-img-wrap">
                <img src="{{ asset('assets/categories/cat-sofa.png') }}" alt="Sofas" />
            </div>
            <span class="cat-label">Sofas</span>
        </a>

        <!-- Wardrobes -->
        <a href="#" class="cat-item">
            <div class="cat-img-wrap">
                <img src="{{ asset('assets/categories/cat-wardrobe.png') }}" alt="Wardrobes" />
            </div>
            <span class="cat-label">Wardrobes</span>
        </a>

        <!-- Chairs -->
        <a href="#" class="cat-item">
            <div class="cat-img-wrap">
                <img src="{{ asset('assets/categories/cat-chair.png') }}" alt="Chairs" />
            </div>
            <span class="cat-label">Chairs</span>
        </a>

        <!-- Desks -->
        <a href="#" class="cat-item">
            <div class="cat-img-wrap">
                <img src="{{ asset('assets/categories/cat-desk.png') }}" alt="Desks" />
            </div>
            <span class="cat-label">Desks</span>
        </a>

        <!-- Tables -->
        <a href="#" class="cat-item">
            <div class="cat-img-wrap">
                <img src="{{ asset('assets/categories/cat-table.png') }}" alt="Tables" />
            </div>
            <span class="cat-label">Tables</span>
        </a>

        <!-- Lighting -->
        <a href="#" class="cat-item">
            <div class="cat-img-wrap">
                <img src="{{ asset('assets/categories/cat-lighting.png') }}" alt="Lighting" />
            </div>
            <span class="cat-label">Lighting</span>
        </a>

        <!-- Cabinets -->
        <a href="#" class="cat-item">
            <div class="cat-img-wrap">
                <img src="{{ asset('assets/categories/cat-cabinet.png') }}" alt="Cabinets" />
            </div>
            <span class="cat-label">Cabinets</span>
        </a>

        <!-- Office -->
        <a href="#" class="cat-item">
            <div class="cat-img-wrap">
                <img src="{{ asset('assets/categories/cat-office.png') }}" alt="Office" />
            </div>
            <span class="cat-label">Office</span>
        </a>

        <!-- Accessories -->
        <a href="#" class="cat-item">
            <div class="cat-img-wrap">
                <img src="{{ asset('assets/categories/cat-wardrobe.png') }}" alt="Accessories" />
            </div>
            <span class="cat-label">Accessories</span>
        </a>

    </div>
</div>
<!-- product category end -->


<!-- Latest products sections start  -->

<section class="products-section">
    <div class="products-list">

        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="section-title mb-0">Latest products</h2>
            <div class="d-flex gap-2">
                <button class="nav-btn" id="prevBtn" aria-label="Previous">
                    <i class="bi bi-chevron-left"></i>
                </button>
                <button class="nav-btn" id="nextBtn" aria-label="Next">
                    <i class="bi bi-chevron-right"></i>
                </button>
            </div>
        </div>

        <!-- Scroll Track -->
        <div class="scroll-track" id="scrollTrack">

            <!-- Card 1 -->
            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1507473885765-e6ed057f782c?w=400&q=80" alt="Arlomore Table Lamp">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                </div>
                <div class="card-body">
                    <p class="card-brand">BroyHill</p>
                    <p class="card-name">Arlomore Table Lamp</p>
                    <div class="d-flex align-items-center">
                        <span class="price-current">$39.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1555041469-a586c61ea9bc?w=400&q=80" alt="Calligaris Lazy Armchair">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                </div>
                <div class="card-body">
                    <p class="card-brand">ApparelArk</p>
                    <p class="card-name">Calligaris Lazy Armchair</p>
                    <div class="d-flex align-items-center">
                        <span class="price-current">$147.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <!-- Card 3 – Sale -->
            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=400&q=80" alt="Luxe Chair White">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-18%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">PlushLounge</p>
                    <p class="card-name">Luxe Chair White</p>
                    <div class="d-flex align-items-center">
                        <span class="price-current price-sale">$150.00</span>
                        <span class="price-original">$182.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <!-- Card 4 – Sold Out -->
            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&q=80" alt="Sofa In A Box 3 Seater">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sold">SOLD<br>OUT</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">SlumberCraft</p>
                    <p class="card-name">Sofa In A Box 3 Seater</p>
                    <div class="d-flex align-items-center">
                        <span class="price-current">$159.00</span>
                    </div>
                    <button class="add-btn" disabled>Sold out</button>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1592078615290-033ee584e267?w=400&q=80" alt="Natural Linen Pillow">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                </div>
                <div class="card-body">
                    <p class="card-brand">PlushLounge</p>
                    <p class="card-name">Natural Linen Pillow</p>
                    <div class="d-flex align-items-center">
                        <span class="price-current">$5.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <!-- Card 6 – Sale -->
            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1518455027359-f3f8164ba6bd?w=400&q=80" alt="Mobica Arc Floor Lamp">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                    <span class="badge-sale">-12%</span>
                </div>
                <div class="card-body">
                    <p class="card-brand">IdeaInst</p>
                    <p class="card-name">Mobica Arc Floor Lamp</p>
                    <div class="d-flex align-items-center">
                        <span class="price-current price-sale">$83.00</span>
                        <span class="price-original">$94.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

            <!-- Card 7 -->
            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1567538096621-38d2284b23ff?w=400&q=80" alt="Velvet Accent Chair">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                </div>
                <div class="card-body">
                    <p class="card-brand">NestCo</p>
                    <p class="card-name">Velvet Accent Chair</p>
                    <div class="d-flex align-items-center">
                        <span class="price-current">$219.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1567538096621-38d2284b23ff?w=400&q=80" alt="Velvet Accent Chair">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                </div>
                <div class="card-body">
                    <p class="card-brand">NestCo</p>
                    <p class="card-name">Velvet Accent Chair</p>
                    <div class="d-flex align-items-center">
                        <span class="price-current">$219.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>
            <!-- Card 7 -->
            <div class="product-card">
                <div class="card-img-wrap">
                    <img src="https://images.unsplash.com/photo-1567538096621-38d2284b23ff?w=400&q=80" alt="Velvet Accent Chair">
                    <button class="wish-btn" aria-label="Wishlist"><i class="bi bi-heart"></i></button>
                </div>
                <div class="card-body">
                    <p class="card-brand">NestCo</p>
                    <p class="card-name">Velvet Accent Chair</p>
                    <div class="d-flex align-items-center">
                        <span class="price-current">$219.00</span>
                    </div>
                    <button class="add-btn">Add to cart</button>
                </div>
            </div>

        </div>

    </div>
</section>
<!-- Latest products sections end -->



<script>
    const track = document.getElementById('scrollTrack');

    document.getElementById('prevBtn').addEventListener('click', () => {
        track.scrollBy({
            left: -280,
            behavior: 'smooth'
        });
    });
    document.getElementById('nextBtn').addEventListener('click', () => {
        track.scrollBy({
            left: 280,
            behavior: 'smooth'
        });
    });

    document.querySelectorAll('.wish-btn').forEach(btn => {
        btn.addEventListener('click', e => {
            e.stopPropagation();
            const icon = btn.querySelector('i');
            btn.classList.toggle('active');
            icon.classList.toggle('bi-heart');
            icon.classList.toggle('bi-heart-fill');
        });
    });

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


</script>

@endsection