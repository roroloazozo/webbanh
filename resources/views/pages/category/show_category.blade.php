@extends('welcome')
@section('content')
<div class="features_items">
    @foreach($category_name as $key => $name)
    <h2 class="title text-center">{{$name->category_name}}</h2>
    @endforeach

	@foreach($category_by_id as $key => $pro)
    <a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}">
	<div class="col-sm-4">
		<div class="product-image-wrapper">	
			<div class="single-products">
				<div class="productinfo text-center">
					<img style="with: auto; height: 250px" src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" alt="" />
					<h2>{{number_format($pro->product_price).' '.'VNĐ'}}</h2>
					<p>{{$pro->product_name}}</p>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
				</div>
				<div class="product-overlay">
					<div class="overlay-content">
						<h2>{{number_format($pro->product_price).' '.'VNĐ'}}</h2>
						<p>{{$pro->product_name}}</p>
						<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
					</div>
				</div>
			</div>
			<div class="choose">
				<ul class="nav nav-pills nav-justified">
					<li><a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}"><i class="fa fa-plus-square"></i>Xem chi tiết</a></li>
					<li><a href="{{URL::to('/chi-tiet-san-pham/'.$pro->product_id)}}"><i class="fa fa-plus-square"></i>Thêm vào giỏ hàng</a></li>
				</ul>
			</div>
		</div>
	</div>
    </a>
	@endforeach
	</div>				
</div>
@endsection