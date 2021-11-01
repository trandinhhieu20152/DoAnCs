@extends('admin_login')
@section('login_content')
<div class="wrapper">
    <div class="title-text">
        <div class="title login">
            Login Form
        </div>
        <div class="title signup">
            Signup Form
        </div>
    </div>
    <div class="form-container">
        <div class="slide-controls">
            <input type="radio" name="slide" id="login" checked>
            <input type="radio" name="slide" id="signup">
            <label for="login" class="slide login">Login</label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slider-tab"></div>
        </div>
        <?php 
                $message = Session::get('message');
                if($message){
                    echo '<script> alert("Tài khoản hoặc mật khẩu của bạn không nhập đúng");</script>';
                    Session::put('message',null);
                }
            ?>
        <div class="form-inner">
            <form action="{{URL::to('/admin-dashboard')}}" class="login" method="post">
                <!-- security -->
                {{ csrf_field() }}
                <div class="field">
                    <input type="text" name="admin_email" placeholder=" Email Account">
                </div>
                <div class="field">
                    <input type="password" name="admin_password" placeholder="Password">
                </div>
                <div class="pass-link">
                    <a href="{{URL::to('/forgotpassword')}}">Forgot password?</a>
                </div>
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Login">
                </div>
                <div class="signup-link">
                    Not a member? <a href="">Signup now</a>
                </div>
            </form>
            <form action="{{URL::to('/register-dashboard')}}" class="signup" method="post">
                {{ csrf_field() }}
                <div class="field">
                    <input type="text" name="name" placeholder="Name">
                </div>
                <div class="field">
                    <input type="text" name="email" placeholder="Email Address">
                </div>
                <div class="field">
                    <input type="password" name="password" placeholder="Password">
                </div>
                <div class="field">
                    <input type="password" name="repassword" placeholder="Confirm password">
                </div>
                <input type="hidden" name="level" value="1">
                <div class="field btn">
                    <div class="btn-layer"></div>
                    <input type="submit" value="Signup">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection