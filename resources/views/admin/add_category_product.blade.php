@extends('admin_layout')
@section('admin_content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THÊM DANH MỤC SẢN PHẨM
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
                                <form role="form" action="{{URL::to('save-category-product')}}" method="post">
                                    {{csrf_field()}}
                                <div class="form-group">
                                    <label>Tên danh mục sản phẩm</label>
                                    <input type="text" class="form-control" name="category_product_name" placeholder="Điền tên danh mục sản phẩm">
                                </div>
                                <div class="form-group">
                                    <label>Mô tả danh mục sản phẩm</label>
                                    <input type="text" class="form-control" name="category_product_desc" placeholder="Điền mô tả danh mục">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputFile">Ảnh danh mục</label>
                                    <input type="file" id="exampleInputFile">
                                </div>

                                <div class="form-group">
                                    <select name="category_status" class="form-control input-sm m-bot15">
                                        <option value="0">Ẩn</option>
                                        <option value="1">Hiển thị</option>
                                    </select>
                                </div>

                                <button type="submit" name="add_caetgory_product" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
        </div>
@endsection