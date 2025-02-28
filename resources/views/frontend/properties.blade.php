@extends('frontend.layouts.header')
@section('title', "Properties in Pune| Affordable property in PCMC - Jfinserv")
@section('description', "Looking for the Properties in Pune? Our Affordable property in PCMC  offers competitive offers to help you secure your dream home. Apply now.")
@section('keywords', "Properties in Pune, Affordable property in PCMC, Houses for sell in Pune, Buy house in Pune")

@section('scripts', "https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js")
@section('scripts2', "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js")


@section('content')
<!-- Header Start -->
<!-- <div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Find Your Dream Home</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="">Home</a></li>
            <li class="breadcrumb-item active text-primary">Properties</li>
        </ol>    
    </div>
</div> -->

<!-- <div class="container-fluid bg-breadcrumb" style="background-image: url(../theme/frontend/img/prop-bnr.jpg);">
    <div class="container py-5">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Find Your Dream Home</h4>
    </div>
</div> -->

@php
    $banners = App\Models\Banner::latest()->get(); // Fetch latest 5 banners
@endphp

@if ($banners->count())
    <div id="bannerCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($banners as $index => $banner)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <div class="container-fluid bg-breadcrumb" style="background-image: url('{{ asset('storage/'.$banner->image) }}'); background-size: cover; background-position: center;">
                        <div class="container py-5">
                            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">
                                {{ $banner->title ?? 'Find Your Dream Home' }}
                            </h4>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <!-- Carousel Controls -->
        <button class="carousel-control-prev" type="button" data-bs-target="#bannerCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#bannerCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Add Carousel Indicators -->
    <div class="carousel-indicators">
        @foreach ($banners as $index => $banner)
            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index === 0 ? 'active' : '' }}" aria-current="true"></button>
        @endforeach
    </div>
@endif


<div class="container-fluid prop-feature">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane shadow p-3 bg-white rounded fade show active" id="pills-flat" role="tabpanel" aria-labelledby="pills-home-tab">
                        <!-- Bootstrap Tabs -->
                        <ul class="nav nav-tabs border-0" id="propertyTabs">
                            <li class="nav-item">
                                <button class="nav-link active text-danger fw-bold" data-bs-toggle="tab" data-bs-target="#buyTab" data-tab="buy">Buy</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link text-muted" data-bs-toggle="tab" data-bs-target="#rentTab" data-tab="rent">Rent</button>
                            </li>
                            <li class="nav-item">
                                <button class="nav-link text-muted" data-bs-toggle="tab" data-bs-target="#commercialTab" data-tab="commercial">Commercial</button>
                            </li>
                        </ul>

                        <!-- Tab Content -->
                        <div class="tab-content p-3 border">
                            <!-- Buy Tab -->
                            <div class="tab-pane fade show active" id="buyTab">
                                <form id="buyForm">
                                    <div class="row align-items-center g-2">
                                        <!-- Location Dropdown -->
                                        <div class="col-md-3">
                                            <div class="dropdown">
                                                <button class="btn btn-light border w-100 text-start" type="button">
                                                    Pune
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Search Input -->
                                        <div class="col-md-6">
                                            <input type="text" class="form-control border" placeholder="Search up to 3 localities or landmarks">
                                        </div>

                                        <!-- Search Button -->
                                        <div class="col-md-3">
                                            <button id="searchButton" class="btn btn-danger w-100 py-2 rounded-1">
                                                <i class="bi bi-search"></i> Search
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Filters Row -->
                                    <div class="row align-items-center g-2 pt-3">
                                        <!-- Property Type -->
                                        <div class="col-md-4 d-flex">
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="property_type_buy" id="full_house_buy" checked>
                                                <label class="form-check-label" for="full_house_buy">Full House</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="property_type_buy" id="land_plot_buy">
                                                <label class="form-check-label" for="land_plot_buy">Land/Plot</label>
                                            </div>
                                        </div>

                                        <!-- BHK Type -->
                                        <div class="col-md-3 bhk-status">
                                            <select class="form-select">
                                                <option>Select BHK</option>
                                                <option>1 BHK</option>
                                                <option>2 BHK</option>
                                                <option>3 BHK</option>
                                            </select>
                                        </div>

                                        <!-- Property Status -->
                                        <div class="col-md-3 bhk-status">
                                            <select class="form-select">
                                                <option>Property Status</option>
                                                <option>Under Construction</option>
                                                <option>Ready to Move</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Rent Tab -->
                            <div class="tab-pane fade" id="rentTab">
                                <form id="rentForm">
                                    <div class="row align-items-center g-2">
                                        <!-- Location Dropdown -->
                                        <div class="col-md-3">
                                            <div class="dropdown">
                                                <button class="btn btn-light border w-100 text-start" type="button">
                                                    Pune
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Search Input -->
                                        <div class="col-md-6">
                                            <input type="text" class="form-control border" placeholder="Search up to 3 localities or landmarks">
                                        </div>

                                        <!-- Search Button -->
                                        <div class="col-md-3">
                                            <button class="btn btn-danger w-100 py-2 rounded-1">
                                                <i class="bi bi-search"></i> Search
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Filters Row -->
                                    <div class="row align-items-center g-2 pt-3">
                                        <!-- Property Type -->
                                        <div class="col-md-4 d-flex">
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="property_type_buy" id="full_house_buy" checked>
                                                <label class="form-check-label" for="full_house_buy">Full House</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="property_type_buy" id="land_plot_buy">
                                                <label class="form-check-label" for="land_plot_buy">Land/Plot</label>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <!-- Commercial Tab -->
                            <div class="tab-pane fade" id="commercialTab">
                                <form id="commercialForm">
                                    <div class="row align-items-center g-2">
                                        <!-- Location Dropdown -->
                                        <div class="col-md-3">
                                            <div class="dropdown">
                                                <button class="btn btn-light border w-100 text-start" type="button">
                                                    Pune
                                                </button>
                                            </div>
                                        </div>

                                        <!-- Search Input -->
                                        <div class="col-md-6">
                                            <input type="text" class="form-control border" placeholder="Search up to 3 localities or landmarks">
                                        </div>

                                        <!-- Search Button -->
                                        <div class="col-md-3">
                                            <button class="btn btn-danger w-100 py-2 rounded-1">
                                                <i class="bi bi-search"></i> Search
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Filters Row -->
                                    <div class="row align-items-center g-2 pt-3">
                                        <!-- Property Type -->
                                        <div class="col-md-3 d-flex">
                                            <div class="form-check me-3">
                                                <input class="form-check-input" type="radio" name="property_type_buy" id="rent" checked>
                                                <label class="form-check-label" for="rent">Rent</label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="buy" id="land_plot_buy">
                                                <label class="form-check-label" for="buy">Buy</label>
                                            </div>
                                        </div>
                                        <!-- Property Status -->
                                        <div class="col-md-3">
                                            <select class="form-select">
                                                <option>Property Type</option>
                                                <option>Office Space</option>
                                                <option>Co-Working</option>
                                                <option>Shop</option>
                                                <option>Showroom</option>
                                                <option>Other Business</option>
                                            </select>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>          
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Properties by Localities -->
<div class="container mt-5">
    <div class="row">
        <!-- <h4 class="display-5 wow fadeInDown text-center mb-0" data-wow-delay="0.1s">Properties by Localities</h4>
        <p class="m-0 text-center mb-4">Explore prime properties based on your location</p> -->
        <div class="col-md-3 bg-light">
            <h4 class="">Discover</h4>
            <p>Pune's Best Localities</p>
        </div>
        <div class="col-md-9">
            <div id="localitiesCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($data['localities']->chunk(3) as $chunk)
                        <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                            <div class="row">
                                @foreach ($chunk as $locality)
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5 class="card-title text-capitailze">{{ $locality->localities }}, {{ $locality->city }}</h5>
                                                <p>₹7000 - ₹14,500 per sqft</p>
                                                <p class="pt-1 pb-4 d-flex justify-content-between"><span>4.5 <i class="fas fa-star text-warning"></i></span> <span>30+ Reviews</span></p>
                                                <div class="card-strip">
                                                    <p class="carf-build mb-0"><img src="{{ asset('theme') }}/frontend/img/office.png" alt="Properties in Pune"></p>
                                                    <p class="card-text pt-2">{{ $locality->property_count }} Properties Available</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <!-- Carousel Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#localitiesCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#localitiesCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>    
</div>

<!-- Featured Properties -->
<div class="container-fluid blog" id="featured_properties">
    <div class="container pt-5">
        <h4 class="display-5 wow fadeInDown text-center mb-0" data-wow-delay="0.1s">Featured Properties</h4>
        <p class="m-0 text-center mb-4">Explore the most exclusive properties</p>

        <div id="featuredPropertyCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $first = true; ?>
                @foreach($data['featuredProperties']->chunk(4) as $propertyGroup)
                    <div class="carousel-item {{ $first ? 'active' : '' }}">
                        <div class="row g-4">
                            @foreach($propertyGroup as $v)
                                <?php 
                                    $img = env('baseURL'). "/" . $v->image;
                                    $title = $v->title;
                                    $category = $v->category_name;
                                    $builder_name = $v->builder_name;
                                    $address = $v->localities . ", " . $v->city;
                                    $bhk = $v->select_bhk;
                                    $area = $v->area;
                                ?>
                                <div class="col-md-3">
                                    <a href="{{ url('property-details/'.$v->properties_id) }}" target="_blank">
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <img src="{{ $img }}" class="img-fluid rounded-top w-100" alt="" style="height: 175px">
                                                <div class="blog-categiry">
                                                    <span>Featured</span>
                                                </div>
                                            </div>
                                            <div class="blog-content p-3 text-muted">
                                                <p class="mb-1 h6 fw-bold">{{ $title }}</p>
                                                <p class="mb-0 txt-p">By {{ $builder_name }}</p>
                                                <p class="mb-0 txt-p">{{ $address }}</p>
                                                <p class="mb-1 d-flex justify-content-between txt-p">
                                                    <span>{{ $bhk }} BHK</span> <span>{{ $area }} SQ. FT.</span>
                                                </p>
                                                <hr>
                                                <p class="mb-0 h5 d-flex justify-content-between align-items-center">
                                                    <strong class="price-format" data-price="{{ $v->from_price }}">{{ $v->from_price }}</strong>
                                                    <button class="btn bg-light text-primary btn-md rounded-1 px-3 py-1">
                                                        <i class="fas fa-phone"></i> Contact
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <?php $first = false; ?>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#featuredPropertyCarousel" data-bs-slide="prev">
                <i class="fas fa-chevron-left text-dark fs-4"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#featuredPropertyCarousel" data-bs-slide="next">
                <i class="fas fa-chevron-right text-dark fs-4"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<!-- All Properties List -->
<div class="container-fluid blog mb-5" id="old_data">
    <div class="container py-5">
        <h4 class="display-5 wow fadeInDown text-center mb-0" data-wow-delay="0.1s">Curated Collections</h4>
        <p class="m-0 text-center mb-4">Explore prime properties based on your recommendation</p>

        <div id="propertyCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php $first = true; ?>
                @foreach($data['allProperties']->chunk(4) as $propertyGroup)
                    <div class="carousel-item {{ $first ? 'active' : '' }}">
                        <div class="row g-4">
                            @foreach($propertyGroup as $v)
                                <?php 
                                    $img = env('baseURL'). "/" . $v->image;
                                    $title = $v->title;
                                    $category = $v->category_name;
                                    $builder_name = $v->builder_name;
                                    $address = $v->localities . ", " . $v->city;
                                    $bhk = $v->select_bhk;
                                    $area = $v->area;
                                ?>
                                <div class="col-md-3">
                                    <a href="{{ url('property-details/'.$v->properties_id) }}" target="_blank">
                                        <div class="blog-item">
                                            <div class="blog-img">
                                                <img src="{{ $img }}" class="img-fluid rounded-top w-100" alt="" style="height: 175px">
                                                <div class="blog-categiry">
                                                    <span>{{ $category }}</span>
                                                </div>
                                            </div>
                                            <div class="blog-content p-3 text-muted">
                                                <p class="mb-1 h6 fw-bold">{{ $title }}</p>
                                                <p class="mb-0 txt-p">By {{ $builder_name }}</p>
                                                <p class="mb-0 txt-p">{{ $address }}</p>
                                                <p class="mb-1 d-flex justify-content-between txt-p">
                                                    <span>{{ $bhk }} BHK</span> <span>{{ $area }} SQ. FT.</span>
                                                </p>
                                                <hr>
                                                <p class="mb-0 h5 d-flex justify-content-between align-items-center">
                                                    <strong class="price-format" data-price="{{ $v->from_price }}">{{ $v->from_price }}</strong>
                                                    <button class="btn bg-light text-primary btn-md rounded-1 px-3 py-1">
                                                        <i class="fas fa-phone"></i> Contact
                                                    </button>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <?php $first = false; ?>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#propertyCarousel" data-bs-slide="prev">
                <i class="fas fa-chevron-left text-dark fs-4"></i>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#propertyCarousel" data-bs-slide="next">
                <i class="fas fa-chevron-right text-dark fs-4"></i>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div>

<div id="search_data"></div>
    


<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
<script>
$(document).ready(function() {
    $('#searchButton').click(function(event) {
        event.preventDefault(); //Prevent page reload

        //Detect active tab correctly
        let activeTab = $('.nav-tabs .nav-link.active').data('tab'); 
        let propertyType = 1; // Default to "Buy"

        if (activeTab === "rent") {
            propertyType = 3; // Rent
        } else if (activeTab === "commercial") {
            propertyType = 2; // Commercial
        }

        let range_id = $('#range_id').val();
        let category_type = $('#category_type').val();
        let location_name = $('#location_name').val();

        $.ajax({
            url: "{{ url('search_properties') }}",
            type: "POST",
            data: {
                _token: "{{ csrf_token() }}",
                property_type_id: propertyType, //Send the correct property type
                range_id: range_id,
                category_type: category_type,
                location_name: location_name
            },
            success: function(response) {
                $('#old_data').hide(); //Hide previous results
                $('#search_data').html(response); //Show filtered properties
                history.pushState(null, '', window.location.pathname); //Remove URL query params
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    });

    //Update active tab & ensure correct filtering
    $('.nav-link').click(function() {
        $('.nav-link').removeClass('text-danger fw-bold').addClass('text-muted'); // Reset styles
        $(this).addClass('text-danger fw-bold').removeClass('text-muted'); // Highlight active tab
    });

    //Prevent form submission when pressing "Enter"
    $('form').submit(function(event) {
        event.preventDefault();
    });
});
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const fullHouseRadio = document.getElementById("full_house_buy");
        const landPlotRadio = document.getElementById("land_plot_buy");
        const bhkStatusFields = document.querySelectorAll(".bhk-status");

        function toggleFields() {
            if (landPlotRadio.checked) {
                bhkStatusFields.forEach(field => field.style.display = "none");
            } else {
                bhkStatusFields.forEach(field => field.style.display = "block");
            }
        }

        // Attach event listeners
        fullHouseRadio.addEventListener("change", toggleFields);
        landPlotRadio.addEventListener("change", toggleFields);

        // Initial state check
        toggleFields();
    });
</script>

<script>
    function formatRupees(amount) {
        amount = parseFloat(amount);
        if (amount >= 10000000) {
            return '₹ ' + (amount / 10000000).toFixed(2) + ' Cr';
        } else if (amount >= 100000) {
            return '₹ ' + (amount / 100000).toFixed(2) + ' L';
        }
        return '₹ ' + amount.toLocaleString('en-IN');
    }

    document.addEventListener("DOMContentLoaded", function () {
        let priceElements = document.querySelectorAll(".price-format");
        
        priceElements.forEach(function (element) {
            let priceValue = element.getAttribute("data-price");
            element.innerText = formatRupees(priceValue);
        });
    });
</script>

@endsection
