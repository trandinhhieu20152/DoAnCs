@extends('admin_layout')
@section('admin_content')
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <div class="mt-4 mb-3 p-3 button-container bg-white border shadow-sm">
        <h6 class="mb-3">Sửa sản phẩm</h6>
        <?php 
            $message= Session::get('message');
            if($message){
                echo '<script> alert("Bạn đã sửa sản phẩm thành công!");</script>';
                Session::put('message',null);
            }
        ?>
        @foreach ($products as $product)

        <form action="{{ route('Product.update',['id'=>$product->product_id]) }}" method="post"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label class="control-label col-sm-2" for="input-1">Tên Sản phẩm</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="input-1" name="product_name"
                        value="{{ $product->product_name }}" />
                </div>
            </div>

            <div class="form-group row">
                <label class="control-label col-sm-2" for="input-4">Giá sản phẩm</label>
                <div class="col-sm-10">
                    <input type="number" id="input-4" name="product_price" class="form-control"
                        value="{{ $product->product_price }}" />
                </div>
            </div>
            <div class="form-group row">
                <label for="exampleFormControlSelect1" class="control-label col-sm-2">Danh mục sản phẩm</label>
                <div class="col-sm-10">
                    <select class="form-control" name="category_id" id="exampleFormControlSelect1">
                        @foreach ($all_category as $item)
                        @if($product->category_id==$item->category_id)
                        <option selected value="{{$item->category_id}}">{{$item->category_name}}</option>
                        @else
                        <option value="{{$item->category_id}}">{{$item->category_name}}</option>
                        @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="exampleFormControlFile1">Ảnh sản phẩm</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" name="product_image">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="input-11">Mô tả chi tiết</label>
                <div class="col-sm-10">
                    <textarea rows="5" class="form-control" id="input-11"
                        name="product_des">{{ $product->product_des }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <button name="product_edit" type="submit" class="btn btn-primary"> Cập nhật sản phẩm</button>
            </div>
        </form>
        @endforeach

    </div>
</div>
@endsection