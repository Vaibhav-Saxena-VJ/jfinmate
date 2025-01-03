@extends('frontend.layouts.header')
@section('title', "Properties Details - Jfinserv")
@section('description', "")
@section('keywords', "")

@section('content')
<!-- Details Start -->
    <div class="container-fluid bg-light about">
    <?php 
    
        foreach($data['propertie_details'] as $v) {  
            $price_range = $v->from_price. " to ". $v->to_price;
            $img = env('baseURL'). "/".$v->image;
            $boucher = env('baseURL'). "/".$v->boucher;
            $address = $v->localities.", ".$v->city;
            $area = $v->area;
            $category = $v->category_name;
       
    ?>
        <div class="container py-5">
            <div class="row g-5 text-display" style="font-family: 'DM Sans';">
                <div class="col-xl-9 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="about-item-content bg-white rounded p-5">
                        <p><small>Posted On: 30-Aug-24 <span class="float-end">Property ID: 74438353</span></small>
                        <h5><span class="text-primary">₹ {{ $v->from_price }}</span><span class="px-2"></span><a class="text-muted" href="/emi-calculator" target="_blank"><small><u>EMI - ₹ 85k</u><span class="px-3">|</span><a class="text-muted" data-bs-toggle="modal" data-bs-target="#searchModal" href="#"><u>For more enquiry</u></small></a></h5>
                        <h4 class="mb-4">{{ $v->select_bhk }} BHK Flat for Sale in {{ $v->title }}, {{ $address }}</h4>
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="rounded bg-light">
                                    <img src="https://housing-images.n7net.in/4f2250e8/bf5048809763fdb490e4c4ad51134884/v0/large/f_premium-tathawade_chinchwad-pune-aishwaryam_group.jpeg" class="img-fluid rounded w-100" alt="">
                                </div>
                                <ul class="d-inline-flex p-0 mt-2" style="list-style: none;">
                                    <li><img src="https://housing-images.n7net.in/4f2250e8/bf5048809763fdb490e4c4ad51134884/v0/large/f_premium-tathawade_chinchwad-pune-aishwaryam_group.jpeg" class="img-fluid rounded w-100" alt=""></li>
                                    <li class="px-2"><img src="https://housing-images.n7net.in/4f2250e8/bf5048809763fdb490e4c4ad51134884/v0/large/f_premium-tathawade_chinchwad-pune-aishwaryam_group.jpeg" class="img-fluid rounded w-100" alt=""></li>
                                    <li><img src="https://housing-images.n7net.in/4f2250e8/bf5048809763fdb490e4c4ad51134884/v0/large/f_premium-tathawade_chinchwad-pune-aishwaryam_group.jpeg" class="img-fluid rounded w-100" alt=""></li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 rounded bg-light py-3 align-items-center">
                                        <ul class="d-inline-flex p-0 m-0 text-dark" style="list-style: none;">
                                            <li class="px-2 border-end border-2 border-dark"><i class="fas fa-bed  text-muted"></i> <strong>3</strong> Beds</li>
                                            <li class="px-2 border-end border-2 border-dark"><i class="fas fa-bath  text-muted"></i> <strong>2</strong> Baths</li>
                                            <li class="px-2 border-end border-2 border-dark"><i class="fas fa-border-none  text-muted"></i> <strong>3</strong> Balconies</li>
                                            <li class="px-2"><i class="fas fa-car  text-muted"></i> <strong>1</strong> Parkings</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12 mt-3">
                                        <ul class="p-0 m-0 text-dark body-list" style="list-style: none;">
                                            <li class="body-list--item">
                                                <p class="m-0 text-muted">Carpet Area</p>
                                                <p><strong>{{ $area }} sqft</strong></p>
                                            </li>
                                            <li class="body-list--item">
                                                <p class="m-0 text-muted">Developer</p>
                                                <p><strong>Kolte Patil</strong></p>
                                            </li>
                                            <li class="body-list--item">
                                                <p class="m-0 text-muted">Project</p>
                                                <p><strong>{{ $v->title }}</strong></p>
                                            </li>
                                            <li class="body-list--item">
                                                <p class="m-0 text-muted">Floor</p>
                                                <p><strong>10/16</strong></p>
                                            </li>
                                            <li class="body-list--item">
                                                <p class="m-0 text-muted">Lifts</p>
                                                <p><strong>4</strong></p>
                                            </li>
                                            <li class="body-list--item">
                                                <p class="m-0 text-muted">Furnished Type</p>
                                                <p><strong>Semi-Furnished</strong></p>
                                            </li>
                                            <li class="body-list--item">
                                                <p class="m-0 text-muted">Status</p>
                                                <p><strong>Ready to Move</strong></p>
                                            </li>
                                            <li class="body-list--item">
                                                <p class="m-0 text-muted">Transaction type</p>
                                                <p><strong>{{ $category }}</strong></p>
                                            </li>
                                            <li class="body-list--item">
                                                <p class="m-0 text-muted">Lifts</p>
                                                <p><strong>4</strong></p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-12">
                                        <h5 class="text-dark"><strong><i class="fas fa-cloud-sun fa-2x text-primary"></i> East Facing Property</strong></h5>
                                    </div>
                                </div>
                            </div><hr>
                            <div class="col-md-12 prop-details">
                                <h2>More Details</h2>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <th>Price Breakup</th>
                                                <td>₹ 1 Cr | ₹ 55000</td>
                                            </tr>
                                            <tr>
                                                <th>Booking Amount</th>
                                                <td>₹3.0 Lac</td>
                                            </tr>
                                            <tr>
                                                <th>Address</th>
                                                <td>Flat No 1002 Floor No 10 Wing A Unique legacy grand Keshav Nagar Mundhwa Pune., Keshav Nagar, Pune - East, Maharashtra</td>
                                            </tr>
                                            <tr>
                                                <th>Landmarks</th>
                                                <td>Renuka mata mandir</td>
                                            </tr>
                                            <tr>
                                                <th>Amenities</th>
                                                <td>Gym, Swimming Pool, Parking, Indoor Sports Activity, Park</td>
                                            </tr>
                                            <tr>
                                                <th>Furnishing</th>
                                                <td>Semi-Furnished</td>
                                            </tr>
                                            <tr>
                                                <th>Flooring</th>
                                                <td>Vitrified, Wooden, Marble</td>
                                            </tr>
                                            <tr>
                                                <th>Loan Offered</th>
                                                <td>
                                                    <p class="m-0">
                                                        <strong>Estimated EMI: ₹55024</strong><br>
                                                        <a class="text-dark" href="#" data-bs-toggle="modal" data-bs-target="#searchModal"><u>Apply for Loan</u></small></a><br>
                                                        BANKS LIST
                                                    </p>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <p class="text-dark mt-3"><strong>Description: </strong> This property is very good location and good 3 BHK flat available for more details please contact.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="bg-white rounded p-3">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div class="rounded bg-light">
                                    <img src="https://housing-images.n7net.in/4f2250e8/bf5048809763fdb490e4c4ad51134884/v0/large/f_premium-tathawade_chinchwad-pune-aishwaryam_group.jpeg" class="img-fluid rounded w-100" alt="">
                                </div>
                            </div>
                            <div class="col-12">
                                <a href="#">
                                    <div class="counter-item bg-light rounded p-3 h-100 justify-content-center">
                                        <h5 class="mb-0 text-dark"><i class="fas fa-download text-primary"></i> Download Brochure</h5>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white rounded p-3 mt-3">
                        <div class="row g-4 justify-content-center">
                            <div class="col-12">
                                <div>
                                    <h5 class="mb-0"><strong>Reach Us</strong></h5>
                                    <h6 class="mb-0 text-dark">+91 96358 456712</h6>
                                    <a href="#" class="btn btn-primary rounded-pill py-2 w-100 mt-3"><i class="fa fa-phone-alt"></i> Call Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?> 
    </div>
<!-- Details End -->
    
@endsection