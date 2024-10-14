@extends('frontend.layout.master')
@section('content1')




@php

$products = DB::table('products')->get();

@endphp
<div class="product-section">
			<div class="container">
				<div class="row">
				<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">Crafted with excellent material.</h2>
						<p class="mb-4">Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. </p>
						<p><a href="shop.html" class="btn">Explore</a></p>
					</div> 
					@foreach($products as $data)

					<!-- Start Column 1 -->
					<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
						<div class="product-item">
							<img src="{{asset('backend/assets/img/'.$data->image)}}" class="img-fluid mb-4 aspect-ratio-1" alt="">
								
								<h3>{{$data->name}}</h3>
								<span>${{$data->price}}</span>
							</div>
					
						
					</div> 
					<!-- End Column 1 -->

					@endforeach


				</div>
			</div>
		</div>



@endsection
    
