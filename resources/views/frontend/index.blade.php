@extends('frontend.layouts.header')
@section('title', "Top Finance Company in Pune | Lowest Loan Interest in PCMC")
@section('description', "Jfinserv provides top finance company in Pune engaged in business, personal and MSME financing with lowest loan interest rates in PCMC and Pune.")
@section('keywords', "Top Finance Company in Pune, lowest loan interest in PCMC, business loan with low ROI, financial Services in Pune, Loan services in PCMC, Loan in Pune")
@section('canonical', "https://jfinserv.com")
@section('robots', "index, follow")

@section('content')
<!-- Carousel Start -->
<div class="header-carousel owl-carousel">
    <div class="header-carousel-item hero-bg" style="background-image: url(../theme/frontend/img/banner-1.png);">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <p class="text-white text-uppercase fw-bold mb-2">Welcome To Jfinserv</p>
                            <h1 class="display-4 text-white mb-4">Get Rewards with Top Finance Company in Pune</h1>
                            <p class="mb-5 fs-5">We offer a unique earning opportunity through our referral program, rewarding both your referrals with top finance company in Pune.</p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                <a class="btn-search btn btn-light rounded-1 py-3 px-4 px-md-5 me-2 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">ENQUIRE NOW</a>
                                <a class="btn-search btn btn-danger rounded-1 py-3 px-4 px-md-5 ms-2" href="{{ url('/applyNow') }}">APPLY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-carousel-item hero-bg" style="background-image: url(../theme/frontend/img/banner-2.png);">
        <div class="carousel-caption">
            <div class="container">
                <div class="row g-4 align-items-center">
                    <div class="col-lg-6 animated fadeInLeft">
                        <div class="text-sm-center text-md-start">
                            <p class="text-white text-uppercase fw-bold mb-2">Welcome To Jfinserv</p>
                            <h2 class="display-4 text-white mb-4">Top Finance Company in Pune for Easy & Secure Loans</h2>
                            <p class="mb-5 fs-5">Experience fast, secure loans with competitive rates and top finance company in Pune. Enjoy seamless service and exceptional rewards.</p>
                            <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                            <a class="btn-search btn btn-light rounded-1 py-3 px-4 px-md-5 me-2 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal" href="#">ENQUIRE NOW</a>
                            <a class="btn-search btn btn-danger rounded-1 py-3 px-4 px-md-5 ms-2" href="{{ url('/applyNow') }}">APPLY NOW</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="header-carousel-item bg-primary">
        <div class="carousel-caption">
            <div class="container">
                <div class="row gy-4 gy-lg-0 gx-0 gx-lg-5 align-items-center">
                    <div class="col-lg-6 animated fadeInLeft">
                        <div class="calrousel-img">
                            <img src="{{ asset('theme') }}/frontend/img/fast-process.png" class="img-fluid" alt="Top Finance Company in Pune">
                        </div>
                    </div>
                    <div class="col-lg-6 animated fadeInRight">
                        <div class="text-sm-center text-md-end">
                            <p class="text-white text-uppercase fw-bold mb-4">Welcome To Jfinserv</p>
                            <h2 class="display-3 text-white mb-4">Fastest, Secure & Easy Loan Process</h2>
                            <p class="mb-5 fs-5">Experience fast, secure loans with competitive rates and personalized support in Pune. Enjoy seamless service and exceptional rewards.</p>
                            <div class="d-flex justify-content-center justify-content-md-end flex-shrink-0 mb-4">
                                <a class="btn-search btn btn-light rounded-pill py-3 px-4 px-md-5 me-2 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#searchModal" href="#"><i class="fas fa-info-circle me-2" style="font-size: 20px"></i> Enquire Now</a>
                                <a class="btn-search btn btn-light rounded-pill py-3 px-4 px-md-5 ms-2" href="{{ url('/applyNow') }}"><i class="far fa-hand-point-right me-2" style="font-size: 20px"></i> Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
</div>
<!-- Carousel End -->

<!-- Feature Start -->
<div class="container-fluid feature bg-light py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <p class="h4 text-primary">Our Features</p>
            <h2 class="display-4 mb-4">Top Finance Company in Pune</h2>
            <p class="mb-0">We understand that navigating the complexities of the financial landscape can be daunting. That's why our team of experienced professionals is here to guide you every step of the way. With our top financial services in Pune, you can trust us to help you secure the financing you need to achieve your dreams.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="far fa-handshake fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Trusted Company</h4>
                    <p>Trust is our foundation. With experience and a strong track record, we guide clients confidently through their financial journeys.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-gift fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Unlimited Rewards</h4>
                    <p>Earn income for each successful referral. We offer performance bonuses to unlock more earning potential.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fa fa-bullseye fa-3x"></i>
                    </div>
                    <h4 class="mb-4">Fast & Easier Process</h4>
                    <p>A fast & simple loan process provides quick approvals, minimal paperwork, & access to funds within 7 working days.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="feature-item p-4 pt-0">
                    <div class="feature-icon p-4 mb-4">
                        <i class="fas fa-chart-line fa-3x"></i>
                    </div>
                    <h4 class="mb-4">High Range Loan</h4>
                    <p>A high range loan of up to ₹100Cr. offers substantial funding for major investments or purchases, with flexible terms & competitive rates.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

<!-- Video Section Start -->
<section class="video aos-init aos-animate" data-aos="zoom-in-right" data-aos-duration="700">
    <div class="container-fluid p-0">
        <video class="w-100" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0">
            <source src="../theme/frontend/img/intro-video.mp4" type="video/mp4">
            <source src="movie.webm" type="video/webm">Sorry, your browser does not support HTML5 video.
        </video>
    </div>
</section>
<!-- Feature End -->

<!-- About Start -->
<div class="container-fluid bg-light about py-5 pt-5">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="about-item-content bg-white rounded p-5 h-100">
                    <p class="h4 text-primary">About Our Company</p>
                    <h2 class="display-4 mb-4">Your Security. Our Priority.</h2>
                    <p>JFinserv Consultant India Private Limited offers a range of top finance company in Pune, including Home Loans, Project Loans, and MSME Loans, through multiple bank partnerships. We ensure low interest rates, minimal documentation, and flexible terms for a smooth loan process. Our experienced team is dedicated to guiding you through every step to help you achieve your financial goals.</p>
                    <h4 class="text-primary">Why Choose us as the Top Finance Company in Pune?</h3>
                    <p class="text-dark"><i class="fas fa-check text-primary me-3 fa-lg"></i>No limit of loan amount</p>
                    <p class="text-dark"><i class="fas fa-check text-primary me-3 fa-lg"></i>Fast Disbursal Procedure</p>
                    <p class="text-dark"><i class="fas fa-check text-primary me-3 fa-lg"></i>Lowest rate of Interest</p>
                    <p class="text-dark mb-4"><i class="fas fa-check text-primary me-3 fa-lg"></i>Endless earning potential through referrals</p>
                    <a class="btn btn-primary rounded-1 py-2 px-4 uppercase" href="/about" target="_blank">Know More</a>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.1s">
                <div class="bg-white rounded p-5 h-100">
                    <div class="row g-4 justify-content-center">
                        <div class="col-12">
                            <div class="rounded bg-light">
                                <img src="{{ asset('theme') }}/frontend/img/about-1.jpg" class="img-fluid rounded w-100" alt="Top Finance Company in Pune">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">250</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Disbursed Loans</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">7</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Awards Won</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">50</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Skilled Agents</h4>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="counter-item bg-light rounded p-3 h-100">
                                <div class="counter-counting">
                                    <span class="text-primary fs-2 fw-bold" data-toggle="counter-up">75</span>
                                    <span class="h1 fw-bold text-primary">+</span>
                                </div>
                                <h4 class="mb-0 text-dark">Team Members</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Service Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <p class="h4 text-primary">Our Services</p>
            <h2 class="display-4 mb-4">We are Top Finance Company in Pune</h2>
            <p class="mb-0">Choose your loan amount, answer a few questions, and receive an instant loan offer. Share the necessary documents with our representative effortlessly, and select the final loan offer with top finance company in Pune.</p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('theme') }}/frontend/img/Home_Loan.jpg" class="img-fluid rounded-top w-100" alt="Top Finance Company in Pune">
                        <!-- <div class="service-icon p-3">
                            <i class="fa-solid fa-house-chimney fa-2x"></i>
                        </div> -->
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">Home Loan</a>
                            <p class="mb-4">We understand you're seeking a new home, with lowest loan interest rates in PCMC and Pune, we’re here to help you through this important financial decision.</p>
                            <a class="btn btn-primary rounded-1 uppercase py-2 px-4" href="/home-loan" target="_blank">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('theme') }}/frontend/img/Project_Loan.jpg" class="img-fluid rounded-top w-100" alt="Top Finance Company in Pune">
                        <!-- <div class="service-icon p-3">
                            <i class="fa-solid fa-building-shield fa-2x"></i>
                        </div> -->
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">Project Loan</a>
                            <p class="mb-4">We simplify construction financing with lowest loan interest rates in PCMC and Pune, offering tailored loans that ensure a smooth and timely process.</p>
                            <a class="btn btn-primary rounded-1 uppercase py-2 px-4" href="/project-loan" target="_blank">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('theme') }}/frontend/img/MSME_Loan.jpg" class="img-fluid rounded-top w-100" alt="Top Finance Company in Pune">
                        <!-- <div class="service-icon p-3">
                            <i class="fa-solid fa-business-time fa-2x"></i>
                        </div> -->
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">MSME Loan</a>
                            <p class="mb-4">This service meets the diverse needs of small and medium businesses. Whether you're expanding, investing in equipment, or increasing capital.</p>
                            <a class="btn btn-primary rounded-1 uppercase py-2 px-4" href="/msme-loan" target="_blank">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="service-item">
                    <div class="service-img">
                        <img src="{{ asset('theme') }}/frontend/img/Loan_Against_Property.jpg" class="img-fluid rounded-top w-100" alt="Top Finance Company in Pune">
                        <!-- <div class="service-icon p-3">
                            <i class="fa-solid fa-house-laptop fa-2x"></i>
                        </div> -->
                    </div>
                    <div class="service-content p-4">
                        <div class="service-content-inner">
                            <a href="#" class="d-inline-block h4 mb-4">Loan Against Property</a>
                            <p class="mb-4">Get a Loan Against Property with flexible terms and secure repayment from Jfinserv – Pune’s Leading and Trusted Finance Company.</p>
                            <a class="btn btn-primary uppercase rounded-1 py-2 px-4" href="/loan-against-property">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 text-center wow fadeInUp mt-5" data-wow-delay="0.2s">
                <a class="btn btn-dark uppercase rounded-1 py-3 px-5" href="/services">More Services</a>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

<div class="container-fluid emi-calculator">
     <div class="container pb-5">
         <div class="text-center mx-auto pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
             <h4 class="text-primary">EMI Calculator</h4>
             <h2 class="display-4 mb-4">Calculate Your Monthly EMI</h2>
         </div>
         <div class="cal-wrapper m-4 wow fadeInUp" data-wow-delay="0.2s">
             <div class="calulator-wrapper">
                 <div class="row align-items-center">
                     <div class="col-md-8">
                         <div class="calculator" id="calculator">
                             <div class="loan-amount mb-5">
                                 <div class="d-flex justify-content-between align-items-center">
                                     <h2>Loan Amount</h2>
                                     <div class="d-flex align-items-center range-number">
                                         <p>₹</p>
                                         <input type="number" id="loanAmountNumber" min="1000000" max="1000000000" value="10000000" oninput="loanAmountRange.value=value">
                                     </div>
                                 </div>
                                 <input type="range" value="10000000" min="1000000" max="1000000000" id="loanAmountRange" oninput="loanAmountNumber.value=value" step="50000" />
                                 <div class="d-flex justify-content-between">
                                     <span>1L</span>
                                     <span>100C</span>
                                 </div>
                             </div>
                             <div class="Interest mb-5">
                                 <div class="d-flex justify-content-between align-items-center">
                                     <h2>Rate of Interest (p.a)</h2>
                                     <div class="d-flex align-items-center range-number">
                                         <p>%</p>
                                         <input type="number" id="interestNumber" min="1" max="30" value="6" oninput="interestRange.value=value">
                                     </div>
                                 </div>
                                 <input type="range" value="6" min="1" max="30" id="interestRange" oninput="interestNumber.value=value" step=".1" />
                                 <div class="d-flex justify-content-between">
                                     <span>1%</span>
                                     <span>30%</span>
                                 </div>
                             </div>
                             <div class="Loan Tenure">
                                 <div class="d-flex justify-content-between align-items-center">
                                     <h2>Loan Tenure</h2>
                                     <div class="d-flex align-items-center range-number">
                                         <p>Yr</p>
                                         <input type="number" id="tenureNumber" min="1" max="30" value="5" oninput="tenureRange.value=value">
                                     </div>
                                 </div>
                                 <input type="range" value="5" min="1" max="30" id="tenureRange" oninput="tenureNumber.value=value" step="1" />
                                 <div class="d-flex justify-content-between">
                                     <span>1Yr</span>
                                     <span>30Yr</span>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-4 col-sm-6 m-auto">
                         <div class="piechart-wrapper">
                             <div class="piechart">
                                 <canvas width="1000" height="1000" id="pieChart" style="width:100%; height:100%"></canvas>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!-- detail calculation -->
                 <div class="details-wrapper">
                     <h2>Detailed Calculation</h2>
                     <div class="details">
                         <div class="row justify-content-between">
                             <div class="col-lg-3 col-sm-6 col-12 details-card">
                                 <p>Monthly EMI</p>
                                 <bold id="showEmi"></bold>
                             </div>
                             <div class="col-lg-3 col-sm-6 col-12 details-card">
                                 <p>Principal Amount</p>
                                 <bold id="showPrincipal"></bold>
                             </div>
                             <div class="col-lg-3 col-sm-6 col-12 details-card">
                                 <p>Total Interest</p>
                                 <bold id="showInterest"></bold>
                             </div>
                             <div class="col-lg-3 col-sm-6 col-12 details-card">
                                 <p>Total Amount</p>
                                 <bold id="showTotalAmount"></bold>
                             </div>
                         </div>
                     </div>
                 </div>
 
                 <!-- table section -->
                 <div class="details-table d-none">
                     <table class="table">
                         <thead>
                             <tr>
                             <th scope="col">Month - Year</th>
                             <th scope="col">Principal Amount</th>
                             <th scope="col">Interest Charged</th>
                             <th scope="col">Total EMI</th>
                             <th scope="col">Balance</th>
                             </tr>
                         </thead>
                         <tbody id="tbody">
 
                         </tbody>
                     </table>
                 </div>
                 <button class="btn btn-primary mt-4 d-none" id="showMoreBtn">View All</button>
 
             </div>
         </div>
     </div>
 
     <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
 
     <script>
         if (document.getElementById("calculator")) {
         document.getElementsByTagName("body").onload = cal();
         }
         if (document.getElementById("calculator")) {
         // slider styling and color functions
         const rangeInputs = document.querySelectorAll('input[id="loanAmountRange"]');
         const numberInput = document.querySelector('input[id="loanAmountNumber"]');
         function handleInputChange(e) {
             let target = e.target;
             if (e.target.type !== "range") {
             target = document.getElementById("loanAmountRange");
             }
             const min = target.min;
             const max = target.max;
             const val = target.value;
             target.style.backgroundSize = ((val - min) * 100) / (max - min) + "% 100%";
         }
         rangeInputs.forEach((input) => {
             input.addEventListener("input", handleInputChange);
         });
         numberInput.addEventListener("input", handleInputChange);
         // slider styling and color functions
 
         // Interest styling and color functions
         const interestrangeInputs = document.querySelectorAll(
             'input[id="interestRange"]'
         );
         const interestnumberInput = document.querySelector(
             'input[id="interestNumber"]'
         );
         function handleInterestChange(e) {
             let target = e.target;
             if (e.target.type !== "range") {
             target = document.getElementById("interestRange");
             }
             const min = target.min;
             const max = target.max;
             const val = target.value;
             target.style.backgroundSize = ((val - min) * 100) / (max - min) + "% 100%";
         }
         interestrangeInputs.forEach((input) => {
             input.addEventListener("input", handleInterestChange);
         });
         interestnumberInput.addEventListener("input", handleInterestChange);
         // Interest styling and color functions
 
         // Loan Tenure styling and color functions
         const tenureInputs = document.querySelectorAll('input[id="tenureRange"]');
         const tenureInput = document.querySelector('input[id="tenureNumber"]');
         function handletenureChange(e) {
             let target = e.target;
             if (e.target.type !== "range") {
             target = document.getElementById("tenureRange");
             }
             const min = target.min;
             const max = target.max;
             const val = target.value;
             target.style.backgroundSize = ((val - min) * 100) / (max - min) + "% 100%";
         }
         tenureInputs.forEach((input) => {
             input.addEventListener("input", handletenureChange);
         });
         tenureInput.addEventListener("input", handletenureChange);
         // Loan Tenure styling and color functions
         }
         //calcualtion function
         function cal() {
         let loanEvent = document.getElementById("loanAmountRange").value;
         let interestEvent = document.getElementById("interestRange").value;
         let tenureEvent = document.getElementById("tenureRange").value;
 
         let loanAmount = Number(loanEvent);
         let rate = interestEvent;
         let tenure = tenureEvent * 12;
         let r = rate / (12 * 100);
         let emi =
             (loanAmount * r * Math.pow(1 + r, tenure)) / (Math.pow(1 + r, tenure) - 1);
         let interest = emi * tenure - loanAmount;
         let totalAmount = parseFloat(loanAmount) + parseFloat(interest);
         //show Details
         document.getElementById("showEmi").innerHTML =
             "₹" + Number(emi.toFixed(0)).toLocaleString("en-IN");
         document.getElementById("showPrincipal").innerHTML =
             "₹" + Number(loanAmount.toFixed(0)).toLocaleString("en-IN");
         document.getElementById("showInterest").innerHTML =
             "₹" + Number(interest.toFixed(0)).toLocaleString("en-IN");
         document.getElementById("showTotalAmount").innerHTML =
             "₹" + Number(totalAmount.toFixed(0)).toLocaleString("en-IN");
         //pie chart
         let AmountValue = Number(loanAmount);
         let interestValue = Number(interest.toFixed(0));
         // pie chart
         var xValues = ["Loan Amount", "Interest"];
         var yValues = [AmountValue, interestValue];
         var barColors = ["#feb234", "#f64d3f"];
 
         var ctx = document.getElementById("pieChart").getContext("2d");
         if (window.myCharts != undefined) window.myCharts.destroy();
         window.myCharts = new Chart(ctx, {
             type: "doughnut",
             data: {
             labels: xValues,
             datasets: [
                 {
                 backgroundColor: barColors,
                 data: yValues,
                 borderWidth: "0",
                 },
             ],
             },
 
             options: {
             title: {
                 display: true,
             },
             },
         });
 
         // pie chart
         //table function
 
         function calculateEMI(principal, rate, duration) {
             const monthlyRate = rate / 1200;
             const numPayments = duration;
             const emi =
             (principal * monthlyRate * Math.pow(1 + monthlyRate, numPayments)) /
             (Math.pow(1 + monthlyRate, numPayments) - 1);
             const monthNames = [
             "January",
             "February",
             "March",
             "April",
             "May",
             "June",
             "July",
             "August",
             "September",
             "October",
             "November",
             "December",
             ];
 
             // Get the current date and year
             const currentDate = new Date();
             let currentMonth = currentDate.getMonth();
             let currentYear = currentDate.getFullYear();
 
             let balance = principal;
             let data = "";
             for (let i = 0; i < numPayments; i++) {
             const interest = balance * monthlyRate;
             const principalPaid = emi - interest;
             balance -= principalPaid;
             // Calculate the payment month and year
             let paymentMonth = currentMonth + i + 1;
             let paymentYear = currentYear + Math.floor(paymentMonth / 12);
             paymentMonth %= 12;
 
             let month = monthNames[paymentMonth];
             let year = paymentYear;
             let monthlyPrincipal = Number(principalPaid.toFixed(0)).toLocaleString(
                 "en-IN"
             );
             let monthlyInterest = Number(interest.toFixed(0)).toLocaleString("en-IN");
             let monthlyEmi = Number(emi.toFixed(0)).toLocaleString("en-IN");
             let monthlyBalance = Number(balance.toFixed(0)).toLocaleString("en-IN");
             data += `
                         <tr>
                                             <td>${month}  ${year}</th>
                             <td>₹${monthlyPrincipal}</td>
                             <td>₹${monthlyInterest}</td>
                                             <td>₹${monthlyEmi}</td>
                             <td>₹${monthlyBalance}</td>
                                         </tr>
                 `;
             }
             document.getElementById("tbody").innerHTML = data;
         }
         // Declare Values
         var principal = loanAmount;
         var duration = tenure;
         calculateEMI(principal, rate, duration);
 
         //rows hide show function
         let rows = document.querySelectorAll("tr");
         let showMoreBtn = document.getElementById("showMoreBtn");
         if (rows.length > 10) {
             showMoreBtn.style.display = "block";
         } else {
             showMoreBtn.style.display = "none";
         }
         if (rows.length === 0) {
             showMoreBtn.style.display = "none";
         }
 
         const initialRows = 10;
         for (let i = initialRows; i < rows.length; i++) {
             rows[i].style.display = "none";
         }
         function showMoreRows() {
             for (let i = 0; i <= rows.length; i++) {
             if (rows[i]) {
                 rows[i].style.display = "";
                 showMoreBtn.style.display = "none";
             }
             }
         }
         showMoreBtn.addEventListener("click", showMoreRows);
         //rows hide show function
         //cal() end
         }
 
         //validate input fields
         function validateAmount() {
         let val = document.getElementById("loanAmountNumber").value;
         if (val < 100000 || val > 10000000) {
             document.getElementById("loanAmountNumber").style.cssText = `
                 background-color: #f8d9d9;
                 border-color: #ff2020;
                 color: #ff2020;
                 `;
         } else {
             document.getElementById("loanAmountNumber").style.cssText = `
                 background-color: #fff;
                 border: 1px solid #464646;
                 color: #111;
                 `;
         }
         }
         function validateInterest() {
         let val = document.getElementById("interestNumber").value;
         if (val < 1 || val > 30) {
             document.getElementById("interestNumber").style.cssText = `
                 background-color: #f8d9d9;
                 border-color: #ff2020;
                 color: #ff2020;
                 `;
         } else {
             document.getElementById("interestNumber").style.cssText = `
                 background-color: #fff;
                 border: 1px solid #464646;
                 color: #111;
                 `;
         }
         }
         function validateTenure() {
         let val = document.getElementById("tenureNumber").value;
         if (val < 1 || val > 30) {
             document.getElementById("tenureNumber").style.cssText = `
                 background-color: #f8d9d9;
                 border-color: #ff2020;
                 color: #ff2020;
                 `;
         } else {
             document.getElementById("tenureNumber").style.cssText = `
                 background-color: #fff;
                 border: 1px solid #464646;
                 color: #111;
                 `;
         }
         }
         if (document.getElementById("calculator")) {
         document.getElementById("loanAmountRange").addEventListener("change", cal);
         document.getElementById("interestRange").addEventListener("change", cal);
         document.getElementById("tenureRange").addEventListener("change", cal);
         document
             .getElementById("loanAmountNumber")
             .addEventListener("keyup", cal, true);
         document
             .getElementById("loanAmountNumber")
             .addEventListener("keyup", validateAmount, true);
         document
             .getElementById("interestNumber")
             .addEventListener("keyup", cal, true);
         document
             .getElementById("interestNumber")
             .addEventListener("keyup", validateInterest, true);
         document.getElementById("tenureNumber").addEventListener("keyup", cal, true);
         document
             .getElementById("tenureNumber")
             .addEventListener("keyup", validateTenure, true);
         }
 
         //initailize function
     </script>
 </div>
 <!-- Calculator End -->

<!-- Testimonial Start -->
<div class="container-fluid testimonial bg-light py-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <p class="h4 text-primary">Testimonial</p>
            <h2 class="display-4 mb-4">Hear from Our Customers</h2>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            <div class="testimonial-item bg-white rounded">
                <div class="row g-0">
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="d-flex flex-column my-auto text-start p-4">
                            <h4 class="text-dark mb-0">Vishal Sarraf</h4>
                            <p class="mb-3">Businessman</p>
                            <div class="d-flex text-primary mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p class="mb-0">JFinserv made my home loan process stress-free and quick. Their expert team guided me at every step, ensuring minimal paperwork and a competitive interest rate. Highly recommended for anyone seeking financial assistance!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-white rounded">
                <div class="row g-0">
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="d-flex flex-column my-auto text-start p-4">
                            <h4 class="text-dark mb-0">Dr. Neha Pawar</h4>
                            <p class="mb-3">Doctor</p>
                            <div class="d-flex text-primary mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-body"></i>
                            </div>
                            <p class="mb-0">Thanks to JFinserv, I secured a project loan effortlessly. Their dedicated support and transparent process made a complex procedure seem simple. I appreciate their commitment to helping clients achieve their financial goals.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="testimonial-item bg-white rounded">
                <div class="row g-0">
                    <div class="col-12 col-lg-12 col-xl-12">
                        <div class="d-flex flex-column my-auto text-start p-4">
                            <h4 class="text-dark mb-0">Rahul Sonawane</h4>
                            <p class="mb-3">IT Professional</p>
                            <div class="d-flex text-primary mb-3">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-body"></i>
                            </div>
                            <p class="mb-0">JFinserv exceeded my expectations with their quick approvals & low-interest rates. The team's professionalism & expertise gave me confidence throughout the loan process. I would highly recommend them!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FAQs Start -->
<div class="container-fluid faq-section py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-xl-6 wow fadeInLeft" data-wow-delay="0.2s">
                <div class="h-100">
                    <div class="mb-5">
                        <p class="h4 text-primary">Some Important FAQ's</p>
                        <h2 class="display-4 mb-0">Common Frequently Asked Questions</h2>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingOne">
                                <button class="accordion-button border-0" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Q: What all documents are required to apply for any Loan?
                                </button>
                            </h3>
                            <div id="collapseOne" class="accordion-collapse collapse show active" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body rounded">
                                    A: To apply for a home loan, Contract loan, loan against property etc you need to submit documents such as a proof of identity, a proof of address, a loan application form that has been duly filled and your financial documents.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Q: How do you decide the eligibility for a loan against required amount?
                                </button>
                            </h3>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: We determine your eligibility after considering various factors, including your monthly income, your monthly financial obligations, your current age and your retirement age, among other things.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Q: How Jfinserv is Top Finance Company in Pune?
                                </button>
                            </h3>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Jfinserv stands out as Pune’s top finance company due to its customer-centric approach, fast and secure loan processing, low ROI options, and a wide range of financial services. 
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Q: Is there any tax benefits available on EMI?
                                </button>
                            </h3>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Yes, you can claim the amount paid towards the repayment of the principal and the interest components as deductions in your income tax return. The limits on the amount deductible are governed by the applicable income tax laws.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Q: Is collateral required for obtaining a lowest loan interest rates in PCMC and Pune?
                                </button>
                            </h3>
                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: Loan qualification depends on the financial viability of your project. Partial security may be required depending on the nature and size of the loan amount.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h3 class="accordion-header" id="headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    Q: Does Jfinserv charges any commission?
                                </button>
                            </h3>
                            <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    A: No, We do not charge any commission from customer. Our services are free of cost for all users/customers.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInRight" data-wow-delay="0.4s">
                <img src="{{ asset('theme') }}/frontend/img/faq.jpg" class="img-fluid w-100" alt="Top Finance Company in Pune">
            </div>
        </div>
    </div>
</div>
<!-- FAQs End --> 
    
<!-- Bank Partner Start -->
<div class="container-fluid testimonial py-5">
    <div class="text-center mx-auto pb-3 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
        <p class="h4 text-primary">Partnered Banks</p>
        <h2 class="display-4 mb-4">Our Bank Network</h2>
        <!-- <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.</p> -->
    </div>

    <div class="slider pb-5 mb-5">
        <div class="slide-track">
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/ab.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/ar.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/arks.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/bom.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/cbi.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/chola.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/hdb.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/ib.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/indian.png" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/kotak.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/pnb.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/rbl.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/sc.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/ujjivan.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/union.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/yb.jpg" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/boi.png" alt="Top Finance Company in Pune">
            </div>
            <div class="slide">
                <img src="{{ asset('theme') }}/frontend/img/bnk_logos/uco.jpg" alt="Top Finance Company in Pune">
            </div>
        </div>
    </div>
</div>
<!-- Bank Partner End --> 
@endsection