@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            SỬA SẢN PHẨM
                        </header>
                        <?php
                                $message = Session::get('message');
                                if($message){
                                    echo $message;
                                    Session::put('message', null);
                                }
                            ?>
                        <div class="panel-body">
                            <div class="position-center">
                                @foreach($edit_product as $key => $pro)
                                <form role="form" action="{{URL::to('/update-product/'.$pro->product_id)}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="product_name" value="{{$pro->product_name}}">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <input type="text" class="form-control" name="product_desc" value="{{$pro->product_desc}}">
                                </div>

                                <div class="form-group">
                                    <label>Giá tiền</label>
                                    <input type="text" class="form-control" name="product_price" value="{{$pro->product_price}}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh danh mục</label>
                                    <input type="file" name="product_image" id="exampleInputFile">
                                    <img src="{{URL::to('public/uploads/product/'.$pro->product_image)}}" height="100" width="100">
                                </div>

                                <div class="form-group">
                                    <select name="category_product" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                        @if($cate->category_id==$pro->category_id)
                                        <option selected value="{{$cate->category_id}}" >{{$cate->category_name}}</option>
                                        @else
                                        <option value="{{$cate->category_id}}" >{{$cate->category_name}}</option>
                                        @endif
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                        @if($pro->product_status==0)
                                        <option selected value="0" >Ẩn</option>
                                        <option value="1">Hiện</option>
                                        @else
                                        <option value="0" >Ẩn</option>
                                        <option selected value="1">Hiện</option>
                                        @endif
                                    </select>
                                </div>

                                <button type="submit" name="edit_product" class="btn btn-info">Cập nhật sản phẩm</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@endsection