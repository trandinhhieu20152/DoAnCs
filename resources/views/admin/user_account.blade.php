@extends('admin_layout')
@section('admin_content')
<div class="col-sm-9" style="margin-top:50px">
    <!--Datatable-->
    <div class="mt-1 mb-3 p-1 button-container bg-white border shadow-sm">
        <h6 class="mb-2">Tài Khoản
            <a href="{{URL::to('/add-account')}}" class="fa fa-plus" style="color:#00cc6a" aria-hidden="true"></a>
        </h6>
        <hr>
        <div class="table-responsive">
            <table id=" example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên người dùng</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th>Quyền</th>
                        <th>Ngày tạo</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                @foreach($data as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->password}}</td>
                    <td>
                        <?php 
                        if($user->level==0){
                            ?>
                        <span class="badge badge-info p-2" style="font-size: 14px;">Admin</span>
                        <?php
                        }else{                        
                            ?>
                        <button type="button" class="btn btn-light">User</button>
                        <?php
                            }                        
                        ?>
                    </td>
                    <td>2008/10/16</td>
                    <td>
                        <a href="{{URL::to('/update-account/'.$user->id)}}" type="button"
                            class="btn btn-success icon-round shadow">
                            <i class="fa fa-check">
                                <input type="hidden" name="level" value="0">
                            </i>
                        </a>
                        <!-- <a href="" class="btn btn-success edit" role="button" data-toggle="modal"
                            data-target="#editmodal"><i class="fa fa-pencil"></i></a> -->
                        <button type="button" class="btn btn-danger icon-round shadow">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
                @endforeach
            </table>
            <div class="d-flex">
                <div class="ml-auto">
                    <nav aria-label="">
                        {!! $data->render()!!}
                    </nav>
                </div>
            </div>

        </div>
    </div>
    <!--/Datatable-->
    <!--Order Update Modal-->
    <!-- <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle"> Update Account</h5>
                </div>
                <div class="modal-body">
                    <form action="" method="post">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Quyền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">01</td>
                                    </td>
                                    <td class="align-middle">
                                        <select name="power" id="" class="custom-select" required="">
                                            <option value="0">Admin</option>
                                            <option value="1">User</option>
                                        </select>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div> -->
    <!--Order Update Modal-->
</div>

@endsection