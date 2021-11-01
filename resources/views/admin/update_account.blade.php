@extends('admin_layout')
@section('admin_content')
<div class="col-sm-7" style="margin-top:50px">
    <!--Default elements-->
    <div class="mt-1 mb-3 p-3 button-container bg-white border shadow-sm">
        <h2 class="mb-2">Update Account</h2>
        <form action="{{URL::to('/update-account')}}" method="post" class="form-horizontal mt-4 mb-5">
            {{csrf_field()}}
            <input type="hidden" name="id" value="{{$data->id}}">
            <div class="form-group row">
                <label class="control-label col-sm-2" for="input-1">Họ và Tên</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" id="input-1" value="{{$data->name}}"
                        placeholder="Trần Tèo..">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="input-2">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" value="{{$data->email}}" class="form-control" id="input-2"
                        placeholder="johndoe@gmail.com">
                </div>
            </div>
            <div class="form-group row">
                <label class="control-label col-sm-2" for="input-2">Quyền</label>
                <div class="col-sm-10">
                    <select name="power" id="" class="custom-select" required="">
                        <option value="0">Admin</option>
                        <option value="1">User</option>
                    </select>
                </div>
            </div>
            <div class="d-flex">
                <div class="ml-auto">
                    <button type="submit" class="btn btn-primary" style="margin-right:20px">Sửa tài khoản</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection