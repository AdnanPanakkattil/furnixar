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
                        <img
                            src="{{ asset('assets/categories/Categories1.jfif') }}"
                            alt="Recliner"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Recliner</span>
                </a>
            </div>

            <!-- 2. Sofa -->
            <div class="col d-flex justify-content-center">
                <a href="#" class="cat-col cat-col-wrapper">
                    <div class="cat-circle">
                        <img
                            src="{{ asset('assets/categories/categories2.jpg') }}"
                            alt="Sofa"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Sofa</span>
                </a>
            </div>

            <!-- 3. Dining Set -->
            <div class="col d-flex justify-content-center">
                <a href="#" class="cat-col cat-col-wrapper">
                    <div class="cat-circle">
                        <img
                            src="{{ asset('assets/categories/categories3.jpg') }}"
                            alt="Dining Set"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Dining Set</span>
                </a>
            </div>

            <!-- 4. Beds -->
            <div class="col d-flex justify-content-center">
                <a href="#" class="cat-col cat-col-wrapper">
                    <div class="cat-circle">
                        <img
                            src="{{ asset('assets/categories/categories4.webp') }}"
                            alt="Beds"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Beds</span>
                </a>
            </div>

            <!-- 5. Study Tables -->
            <div class="col d-flex justify-content-center">
                <a href="#" class="cat-col cat-col-wrapper">
                    <div class="cat-circle">
                        <img
                            src="{{ asset('assets/categories/categories5.webp') }}"
                            alt="Study Tables"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Study Tables</span>
                </a>
            </div>

            <!-- 6. Mattress -->
            <div class="col d-flex justify-content-center">
                <a href="#" class="cat-col cat-col-wrapper">
                    <div class="cat-circle">
                        <img
                            src="{{ asset('assets/categories/categories6.webp') }}"
                            alt="Mattress"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Mattress</span>
                </a>
            </div>

            <!-- 7. Decor -->
            <div class="col d-flex justify-content-center">
                <a href="#" class="cat-col cat-col-wrapper">
                    <div class="cat-circle">
                        <img
                            src="{{ asset('assets/categories/categories7.webp') }}"
                            alt="Decor"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Decor</span>
                </a>
            </div>

            <!-- 8. Wardrobes -->
            <div class="col d-flex justify-content-center">
                <a href="#" class="cat-col cat-col-wrapper">
                    <div class="cat-circle">
                        <img
                            src="{{ asset('assets/categories/categories8.jpg') }}"
                            alt="Wardrobes"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Wardrobes</span>
                </a>
            </div>

            <!-- 9. Chairs -->
            <div class="col d-flex justify-content-center">
                <a href="#" class="cat-col cat-col-wrapper">
                    <div class="cat-circle">
                        <img
                            src="https://images.unsplash.com/photo-1503602642458-232111445657?w=400&h=400&fit=crop"
                            alt="Chairs"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Chairs</span>
                </a>
            </div>

            <!-- 10. Outdoor -->
            <div class="col d-flex justify-content-center">
                <a href="#" class="cat-col cat-col-wrapper">
                    <div class="cat-circle">
                        <img
                            src="https://images.unsplash.com/photo-1600121848594-d8644e57abab?w=400&h=400&fit=crop"
                            alt="Outdoor"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Outdoor</span>
                </a>
            </div>

            <!-- 11. Dressing Table -->
            <div class="col d-flex justify-content-center">
                <a href="#" class="cat-col cat-col-wrapper">
                    <div class="cat-circle">
                        <img
                            src="https://images.unsplash.com/photo-1540518614846-7eded433c457?w=400&h=400&fit=crop"
                            alt="Dressing Table"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Dressing Table</span>
                </a>
            </div>

            <!-- 12. Coffee Tables -->
            <div class="col d-flex justify-content-center">
                <a href="#" class="cat-col cat-col-wrapper">
                    <div class="cat-circle">
                        <img
                            src="https://images.unsplash.com/photo-1567016432779-094069958ea5?w=400&h=400&fit=crop"
                            alt="Coffee Tables"
                            loading="lazy" />
                    </div>
                    <span class="cat-label">Coffee Tables</span>
                </a>
            </div>

        </div><!-- /row -->
    </div><!-- /container -->
</section>
<!-- prodect catogery section end -->


@endsection