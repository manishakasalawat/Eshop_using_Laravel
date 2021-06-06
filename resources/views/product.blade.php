@extends('product-layout')
@section('includes/homemenu')
    
@endsection
@section('content')
<section class="hero-slider">
    <!-- Single Slider -->
    <div class="single-slider">
        <div class="row">
            <!-- Single Banner  -->
            <div class="col-lg-4 col-md-6 col-12">
                <h2>{{ $product->product_name }}</h2>
                <p>
                    {!! $product->product_desc !!}</p>
            </div>
        </div>
      
    </div>
    <!--/ End Single Slider -->
</section>
    
    <a href="/">Go to Home</a>

@endsection
