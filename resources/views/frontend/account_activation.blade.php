@extends('frontend.layouts.header')
@section('title', "Financial Services in Pune | Lowest Loan Interest in PCMC - Jfinserv")

@section('content')
    <div class="container">
        <div class="text-center" style="margin-top: 1%">

         
            @if($result['status'] == 'failed')
                <h4 class="text-danger"><?php echo $result['message']?></h4>
            @else
                <h4 class="text-success"><?php echo $result['message']?></h4>
                <a href="{{ route('login') }}" class="btn btn-primary mt-4">Go to Login</a>
                <br>
            @endif
        </div>
@endsection
