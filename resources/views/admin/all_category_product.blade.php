@extends('admin_layout')
@section('admin_content')
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
        <!--Order Listing-->
        <div class="product-list">

            <div class="row border-bottom mb-4">
                <div class="col-sm-8 pt-2">
                    <h6 class="mb-4 bc-header">Danh sách danh mục</h6>
                </div>

            </div>

            <div class="table-responsive product-list">

                <table class="table table-bordered table-striped mt-0" id="datatable">
                    <thead>
                        <tr>
                            <th style="width: 10px;" class="p-0 pr-4 align-middle">
                                <div class="form-check-box cta">
                                    <span class="color1">
                                        <input type="checkbox" id="orderAll">
                                        <label for="orderAll"></label>
                                    </span>
                                </div>
                            </th>
                            <th>ID Danh Mục</th>
                            <th>Tên Danh Mục</th>
                            <!-- <th>Tổng tiền</th> -->
                            <th>Ngày thêm</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($all_category_product as $key => $cate_pro)
                        <tr>
                            <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                <div class="form-check-box cta">
                                    <span class="color1">
                                        <input type="checkbox" id="order2">
                                        <label for="order2"></label>
                                    </span>
                                </div>
                            </td>
                            <td style="font-size: 18px;">{{$cate_pro ->category_id}}</td>
                            <td style="font-size: 18px;" class="align-middle">
                                {{$cate_pro ->category_name}}
                            </td>
                            <td style="font-size: 18px;">{{$cate_pro->created_at}}</td>
                            <td class="align-middle text-center">
                                <a href="" class="btn btn-success edit" role="button" data-toggle="modal"
                                    data-target="#editmodal"><i class="fa fa-pencil"></i></a>
                                <a onclick="return confirm('Bạn có chắc muốn xóa {{$cate_pro->category_name}}?')"
                                    href="{{URL::to('/delete-category-product/'.$cate_pro->category_id)}}"
                                    class="btn btn-danger" role="button"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        @endforeach
                </table>

                <div class="text-right">
                    <a href="{{URL::to('/add-category-products')}}" class="btn btn-outline-theme"><i
                            class="fa fa-plus"></i> Thêm danh mục</a>
                </div>
            </div>
        </div>
        <!--/Order Listing-->


        <!--Order Update Modal-->
        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle"> Update Product</h5>
                        <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button> -->
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Tên danh mục</th>
                                        <th>Ngày thêm</th>
                                        <th>Chức năng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">01</td>
                                        <td scope="row" class="align-middle"> <input value=""
                                                name="category_product_name" id="nameproduct" class="form-control"
                                                type="text" required>
                                        </td>
                                        <td class="text-center align-middle">{{$cate_pro->created_at}}
                                        </td>
                                        <td style="width: 120px;" class="text-center align-middle">
                                            <button type="submit" class="btn btn-theme mr-1">
                                                <i class="fa fa-pencil-square-o"></i>
                                            </button>
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
        </div>
        <!--Order Update Modal-->
    </div>
</div>

<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>


<script type="text/javascript">
$(document).on('click', '.edit', function() {
    var _this = $(this).parent('tr');
    $('#nameproduct').val(_this.find('.align-middle').text());
});
</script>
@endsection