@extends('admin_layout')
@section('admin_content')
<div class="col-sm-7" style="margin-top:50px">
    <!--Default elements-->
    <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
        <h2 class="mb-2">Bài viết our story</h2>
        <form action="{{URL::to('/update-post')}}" method="post" class="form-horizontal mt-4 mb-5">
            {{csrf_field()}}
            <input type="hidden" name="id" value="1">
            <div class="form-group row">
                <label class="control-label col-sm-2" for="input-1">Nội dung</label>
                <div class="col-sm-10">
                    <textarea style="width: 600px; height: 300px" name="content" class="form-control" id="input-1" >{{ $data->content }} </textarea>
                </div>
            </div>
            <div class="d-flex">
                <div class="ml-auto">
                    <button type="submit" class="btn btn-primary" style="margin-right:20px">Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection