@extends('admin_layout')
@section('admin_content')
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <div class="mt-4 mb-3 p-3 button-container bg-white border shadow-sm">
        <h6 class="mb-3">Thêm danh mục sản phẩm</h6>
        <?php 
            $message= Session::get('message');
            if($message){
                echo '<script> alert("Bạn đã thêm sản phẩm thành công!");</script>';
                Session::put('message',null);
            }
        ?>
        <form action="{{ route('Product.store') }}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group row">
                <label class="control-label col-sm-2" for="input-1">Tên Sản phẩm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="product_name" placeholder="Tên Sản phẩm" />
                </div>
            </div>
            
            <div class="form-group row">
                <label class="control-label col-sm-2" for="input-4">Giá sản phẩm</label>
                <div class="col-sm-10">
                    <input type="number" id="input-4" name="product_price" class="form-control" placeholder="Giá sản phẩm" />
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlSelect1" class="control-label col-sm-2">Danh mục sản phẩm</label>
                <div class="col-sm-10">
                    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                        @foreach ($all_category as $item)
                            <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="exampleFormControlFile1">Ảnh sản phẩm</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="product_image" id="exampleFormControlFile1">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="input-11">Mô tả chi tiết</label>
                <div class="col-sm-10">
                    <textarea rows="5" class="form-control" id="input-11" name="product_des" placeholder="Mô tả chi tiết"></textarea>
                </div>
            </div>
            <div class="form-group">
                <button name="product_add" type="submit" class="btn btn-primary"> Thêm sản
                    phẩm</button>
            </div>
        </form>
    </div>
</div>
@endsection