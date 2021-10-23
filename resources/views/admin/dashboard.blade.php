@extends('admin_layout')
@section('admin_content')
<div class="col-sm-9 col-xs-12 content pt-3 pl-0">
    <h5 class="mb-3"><strong>Tổng quan</strong></h5>

    <!--Dashboard widget-->
    <div class="mt-1 mb-3 button-container">
        <div class="row pl-0">
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <div class="bg-white border shadow">
                    <div class="media p-4">
                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-theme">
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="media-body pl-2">
                            <h3 class="mt-0 mb-0"><strong>300</strong></h3>
                            <p><small class="text-muted bc-description">Tài khoản</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <div class="bg-white border shadow">
                    <div class="media p-4">
                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-danger">
                            <i class="fas fa-envelope-open"></i>
                        </div>
                        <div class="media-body pl-2">
                            <h3 class="mt-0 mb-0"><strong>3.1M</strong></h3>
                            <p><small class="text-muted bc-description">Khách hàng</small></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <div class="bg-white border shadow">
                    <div class="media p-4">
                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-white">
                            <i class="fa fa-tags text-theme"></i>
                        </div>
                        <div class="media-body pl-2">
                            <h3 class="mt-0 mb-0"><strong>1022</strong></h3>
                            <p><small class="bc-description text-muted">Đặt hàng</small></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-3">
                <div class="bg-white border shadow">
                    <div class="media p-4">
                        <div class="align-self-center mr-3 rounded-circle notify-icon bg-white">
                            <i class="fa fa-tags text-theme"></i>
                        </div>
                        <div class="media-body pl-2">
                            <h3 class="mt-0 mb-0"><strong>1022</strong></h3>
                            <p><small class="bc-description text-muted">Đặt hàng</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/Dashboard widget-->



    <!--Chart Section-->

    <!--Chart Section-->

    <div class="mt-4 mb-4 p-3 bg-white border shadow-sm lh-sm">
        <!--Order Listing-->
        <div class="product-list">

            <div class="row border-bottom mb-4">
                <div class="col-sm-8 pt-2">
                    <h6 class="mb-4 bc-header">Danh sách đơn hàng</h6>
                </div>

            </div>

            <div class="table-responsive product-list">

                <table class="table table-bordered table-striped mt-0" id="productList">
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
                            <th>ID Đặt Hàng</th>
                            <th>Khách hàng</th>
                            <th>Trạng thái</th>
                            <th>Tổng tiền</th>
                            <th>Ngày đặt hàng</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                <div class="form-check-box cta">
                                    <span class="color1">
                                        <input type="checkbox" id="order2">
                                        <label for="order2"></label>
                                    </span>
                                </div>
                            </td>
                            <td>Ord#14</td>
                            <td class="align-middle">
                                Andy Webb
                            </td>
                            <td class="align-middle"><span class="badge badge-danger">Cancelled</span></td>
                            <td class="align-middle">$200</td>
                            <td>15/09/2018</td>
                            <td class="align-middle text-center">
                                <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i
                                        class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                <div class="form-check-box cta">
                                    <span class="color1">
                                        <input type="checkbox" id="order3">
                                        <label for="order3"></label>
                                    </span>
                                </div>
                            </td>
                            <td>Ord#15</td>
                            <td class="align-middle">
                                Andy Webb
                            </td>
                            <td class="align-middle"><span class="badge badge-success">Delivered</span></td>
                            <td class="align-middle">$200</td>
                            <td>15/09/2018</td>
                            <td class="align-middle text-center">
                                <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i
                                        class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                <div class="form-check-box cta">
                                    <span class="color1">
                                        <input type="checkbox" id="order4">
                                        <label for="order4"></label>
                                    </span>
                                </div>
                            </td>
                            <td>Ord#16</td>
                            <td class="align-middle">
                                Stephanie Cott
                            </td>
                            <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                            <td class="align-middle">$200</td>
                            <td>15/09/2018</td>
                            <td class="align-middle text-center">
                                <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i
                                        class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                <div class="form-check-box cta">
                                    <span class="color1">
                                        <input type="checkbox" id="order5">
                                        <label for="order5"></label>
                                    </span>
                                </div>
                            </td>
                            <td>Ord#17</td>
                            <td class="align-middle">
                                Andy Webb
                            </td>
                            <td class="align-middle"><span class="badge badge-danger">Cancelled</span></td>
                            <td class="align-middle">$200</td>
                            <td>15/09/2018</td>
                            <td class="align-middle text-center">
                                <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i
                                        class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                <div class="form-check-box cta">
                                    <span class="color1">
                                        <input type="checkbox" id="order6">
                                        <label for="order6"></label>
                                    </span>
                                </div>
                            </td>
                            <td>Ord#18</td>
                            <td class="align-middle">
                                Andy Webb
                            </td>
                            <td class="align-middle"><span class="badge badge-success">Delivered</span></td>
                            <td class="align-middle">$200</td>
                            <td>15/09/2018</td>
                            <td class="align-middle text-center">
                                <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i
                                        class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td style="width: 10px;" class="p-0 pr-1 align-middle">
                                <div class="form-check-box cta">
                                    <span class="color1">
                                        <input type="checkbox" id="order7">
                                        <label for="order7"></label>
                                    </span>
                                </div>
                            </td>
                            <td>Ord#19</td>
                            <td class="align-middle">
                                Stephanie Cott
                            </td>
                            <td class="align-middle"><span class="badge badge-warning">Pending</span></td>
                            <td class="align-middle">$200</td>
                            <td>15/09/2018</td>
                            <td class="align-middle text-center">
                                <button class="btn btn-theme" data-toggle="modal" data-target="#orderInfo">
                                    <i class="fa fa-eye"></i>
                                </button>
                                <button class="btn btn-success" data-toggle="modal" data-target="#orderUpdate"><i
                                        class="fa fa-pencil"></i></button>
                                <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            </td>
                        </tr>
                </table>

                <div class="text-right">
                    <button class="btn btn-outline-theme"><i class="fa fa-eye"></i> View full
                        orders</button>
                </div>
            </div>
        </div>
        <!--/Order Listing-->

        <!--Order Info Modal-->
        <div class="modal fade" id="orderInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="row">Item</th>
                                    <th>Quantity</th>
                                    <th>Unit price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td scope="row">Red Shoes</td>
                                    <td>2</td>
                                    <td>$400</td>
                                    <td>$800</td>
                                </tr>
                                <tr>
                                    <td scope="row">Blue shirt</td>
                                    <td>1</td>
                                    <td>$400</td>
                                    <td>$400</td>
                                </tr>
                                <tr>
                                    <td scope="row">Knickers</td>
                                    <td>3</td>
                                    <td>$300</td>
                                    <td>$900</td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-right mt-4 p-4">
                            <p><strong>Sub - Total amount: $14,768.00</strong></p>
                            <p><strong>Shipping: $1000.00</strong></p>
                            <p><span>vat(10%): $150.00</span></p>
                            <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Order Info Modal-->

        <!--Order Update Modal-->
        <div class="modal fade" id="orderUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Ord#13 details update</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th scope="row">Item</th>
                                    <th class="order-qty-head">Quantity</th>
                                    <th>Unit price</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="align-middle">01</td>
                                    <td scope="row" class="align-middle">Red Shoes</td>
                                    <td class="text-center align-middle"><input type="text" value="2" class="order-qty">
                                    </td>
                                    <td class="align-middle">$400</td>
                                    <td class="align-middle">$800</td>
                                    <td style="width: 120px;" class="align-middle">
                                        <button class="btn btn-theme mr-1"><i
                                                class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">02</td>
                                    <td class="align-middle" scope="row">Blue shirt</td>
                                    <td class="text-center align-middle"><input type="text" value="1" class="order-qty">
                                    </td>
                                    <td class="align-middle">$400</td>
                                    <td class="align-middle">$400</td>
                                    <td class="align-middle">
                                        <button class="btn btn-theme mr-1"><i
                                                class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle">03</td>
                                    <td class="align-middle" scope="row">Knickers</td>
                                    <td class="text-center align-middle"><input type="text" value="3" class="order-qty">
                                    </td>
                                    <td class="align-middle">$300</td>
                                    <td class="align-middle">$900</td>
                                    <td class="align-middle">
                                        <button class="btn btn-theme mr-1"><i
                                                class="fa fa-pencil-square-o"></i></button>
                                        <button class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="text-right mt-4 p-4">
                            <p><strong>Sub - Total amount: $14,768.00</strong></p>
                            <p><strong>Shipping: $1000.00</strong></p>
                            <p><span>vat(10%): $150.00</span></p>
                            <h4 class="mt-2"><strong>Total: $16,050.00</strong></h4>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <!--Order Update Modal-->
    </div>

    <!--Footer-->
    <div class="row mt-5 mb-4 footer">
        <div class="col-sm-8">
            <span>&copy; All rights reserved 2019 designed by <a class="text-theme" href="#">A-Fusion</a></span>
        </div>
        <div class="col-sm-4 text-right">
            <a href="#" class="ml-2">Contact Us</a>
            <a href="#" class="ml-2">Support</a>
        </div>
    </div>
    <!--Footer-->

</div>
@endsection