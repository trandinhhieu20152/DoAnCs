@extends('admin_login')
@section('login_content')
<div class="wrapper">
    <form action="{{URL::to('/forgotpassword')}}" method="post">
        <div class="form-group">
            {{csrf_field()}}
            <label>Email address</label>
            <input type="email" name="email" class="form-control" placeholder="Enter email">
        </div>
        <button type="submit" class="btn btn-primary">Send</button>
    </form>
</div>
@endsection