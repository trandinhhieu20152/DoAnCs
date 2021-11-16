@extends('admin_layout')
@section('admin_content')
<div class="col-sm-7" style="margin-top:50px">
    <!--Default elements-->
    <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
        <h2 class="mb-2">Sửa danh mục</h2>
        <form action="" method="post" class="form-horizontal mt-4 mb-5">
            <div class="form-group row">
                <label class="control-label col-sm-2" for="input-1">Tên danh mục</label>
                <div class="col-sm-10">
                    <input type="text" name="category_name" class="form-control" id="input-1" value="{{ $data->category_name }}">
                </div>
            </div>
            <div class="d-flex">
                <div class="ml-auto">
                    <button type="submit" class="btn btn-primary" style="margin-right:20px">Sửa danh mục</button>
                </div>
            </div>
        </form>
    </div>

</div>
@endsection