@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THÊM SẢN PHẨM
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
                                <form role="form" action="{{URL::to('save-product')}}" method="post" enctype="multipart/form-data">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label>Tên sản phẩm</label>
                                    <input type="text" class="form-control" name="product_name" placeholder="Điền tên sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả sản phẩm</label>
                                    <input type="text" class="form-control" name="product_desc" placeholder="Điền mô tả sản phẩm">
                                </div>

                                <div class="form-group">
                                    <label>Giá tiền</label>
                                    <input type="text" class="form-control" name="product_price" placeholder="Điền giá tiền">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh danh mục</label>
                                    <input type="file" name="product_image" id="exampleInputFile">
                                </div>

                                <div class="form-group">
                                    <select name="category_product" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                        <option value="{{$cate->category_id}}" >{{$cate->category_name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select name="product_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                                </div>

                                <button type="submit" name="add_product" class="btn btn-info">Thêm sản phẩm</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@endsection