@extends('frontend.layouts.header')
@section('title', "Home Loan Services in Pune | Business Loan Services in Pune")
@section('description', "Discover tailored Home Loan Services in Pune and Business Loan Services in Pune. Our expert team of  business loan provider in Pune.")
@section('keywords', "loan services in Pune, Home Loan Services in Pune, Business loan services in Pune, business loan provider in pune, Business loan in Pune")
@section('canonical', "https://jfinserv.com/services")
@section('robots', "index, follow")

@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "BreadcrumbList", 
  "itemListElement": [{
    "@type": "ListItem", 
    "position": 1, 
    "name": "Jfinserv",
    "item": "https://jfinserv.com/"  
  },{
    "@type": "ListItem", 
    "position": 2, 
    "name": "Loan Services in Pune",
    "item": "https://jfinserv.com/services"  
  }]
}
</script>
@section('endsection')

@section('content')
<!-- Header Start -->
<div class="container-fluid bg-breadcrumb" style="background-image: url(../theme/frontend/img/services.jpg);">
    <div class="container py-5">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
    </div>
</div>
<!-- Header End -->

<!-- Service Start -->
<div class="container service py-5 mb-5">
    <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
        <p class="h4 text-primary">One Stop Solution</p>
        <h1 class="display-4 mb-4">Best Loan Services in Pune for All Your Lending Needs</h1>
        <p class="mb-0">Select your desired loan amount, complete a brief set of questions, and receive an instant loan offer. Effortlessly provide the required documents to our representative. Choose the final sanctioned loan offer with terms that align with your needs.</p>
    </div>
    <div class="row g-4 justify-content-center pb-5">
        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="service-item shadow">
                <div class="service-img">
                    <img src="{{ asset('theme') }}/frontend/img/Home_Loan.jpg" class="img-fluid rounded-top w-100" alt="Loan Services in Pune">
                </div>
                <div class="service-content p-4">
                    <div class="service-content-inner">
                        <h3 title="home loan services in Pune"><a href="{{ url('home-loan') }}" class="d-inline-block h4 mb-4">Home Loan</a></h3>
                        <p class="mb-4">We understand you're seeking a new home, with low rates & a seamless process, we’re here to help you through home loan services in Pune.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('home-loan') }}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.4s">
            <div class="service-item shadow">
                <div class="service-img">
                    <img src="{{ asset('theme') }}/frontend/img/Loan_Against_Property.jpg" class="img-fluid rounded-top w-100" alt="Loan Services in Pune">
                </div>
                <div class="service-content p-4">
                    <div class="service-content-inner">
                        <h3 title="loan against property in Pune"><a href="{{ url('loan-against-property')}}" class="d-inline-block h4 mb-4">Loan Against Property</a></h3>
                        <p class="mb-4">JFinserv offers Loans Against Property in Pune with flexible repayment options and exclusive tax benefits. Check your eligibility today.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('loan-against-property')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.6s">
            <div class="service-item shadow">
                <div class="service-img">
                    <img src="{{ asset('theme') }}/frontend/img/Project_Loan.jpg" class="img-fluid rounded-top w-100" alt="Loan Services in Pune">
                </div>
                <div class="service-content p-4">
                    <div class="service-content-inner">
                        <h3 title="Project Loan Services in Pune"><a href="{{ url('project-loan')}}" class="d-inline-block h4 mb-4">Project Loan</a></h3>
                        <p class="mb-4">We simplify construction financing with Project Loan Services in Pune, offering tailored loans that ensure a smooth and timely process.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('project-loan')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.8s">
            <div class="service-item shadow">
                <div class="service-img">
                    <img src="{{ asset('theme') }}/frontend/img/MSME_Loan.jpg" class="img-fluid rounded-top w-100" alt="Loan Services in Pune">
                </div>
                <div class="service-content p-4">
                    <div class="service-content-inner">
                        <h3 title="MSME Loan Services in Pune"><a href="{{ url('msme-loan')}}" class="d-inline-block h4 mb-4">MSME Loan</a></h3>
                        <p class="mb-4">This service meets the diverse needs of MSME Loan Services in Pune. Whether you're expanding, investing in equipment, or increasing capital.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('msme-loan')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.8s">
            <div class="service-item shadow">
                <div class="service-img">
                    <img src="{{ asset('theme') }}/frontend/img/overdraft_loan.jpg" class="img-fluid rounded-top w-100" alt="Loan Services in Pune">
                </div>
                <div class="service-content p-4">
                    <div class="service-content-inner">
                        <h3 title="Overdraft Facility in Pune"><a href="{{ url('overdraft-facility')}}" class="d-inline-block h4 mb-4">Overdraft Facility</a></h3>
                        <p class="mb-4">An overdraft facility in Pune allows you to withdraw funds beyond your furthermore account balance, up to a predetermined limit.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('overdraft-facility')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.8s">
            <div class="service-item shadow">
                <div class="service-img">
                    <img src="{{ asset('theme') }}/frontend/img/lrd_loan.jpg" class="img-fluid rounded-top w-100" alt="Loan Services in Pune">
                </div>
                <div class="service-content p-4">
                    <div class="service-content-inner">
                        <h3><a href="{{ url('lease-rental-discounting')}}" class="d-inline-block h4 mb-4">Lease Rental Discounting (LRD)</a></h3>
                        <p class="mb-4">Lease Rental Discounting (LRD) allows property owners to obtain loans by using future rental income as collateral.</p>
                        <a class="btn btn-primary rounded-pill py-2 px-4" href="{{ url('lease-rental-discounting')}}">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Service End -->

@endsection