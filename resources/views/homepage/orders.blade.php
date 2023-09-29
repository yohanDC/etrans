@extends('layouts.master')
@section('content')
<!--wrapper-->
<div class="wrapper">
    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--start breadcrumb-->
            <section class="py-3 border-bottom d-none d-md-flex">
                <div class="container">
                    <div class="page-breadcrumb d-flex align-items-center">
                        <h3 class="breadcrumb-title pe-3">My Orders</h3>
                        <div class="ms-auto">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0 p-0">
                                    <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i> Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="javascript:;">Account</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">My Orders</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </section>
            <!--end breadcrumb-->
            <!--start shop cart-->
            <section class="py-4">
                <div class="container">
                    <h3 class="d-none">Account</h3>
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="card shadow-none mb-3 mb-lg-0">
                                        <div class="card-body">
                                            <div class="list-group list-group-flush">	<a href="account-dashboard.html" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Dashboard <i class='bx bx-tachometer fs-5'></i></a>
                                                <a href="account-orders.html" class="list-group-item active d-flex justify-content-between align-items-center">Orders <i class='bx bx-cart-alt fs-5'></i></a>
                                                <a href="account-downloads.html" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Downloads <i class='bx bx-download fs-5'></i></a>
                                                <a href="account-addresses.html" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Addresses <i class='bx bx-home-smile fs-5'></i></a>
                                                <a href="account-payment-methods.html" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Payment Methods <i class='bx bx-credit-card fs-5'></i></a>
                                                <a href="account-user-details.html" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Account Details <i class='bx bx-user-circle fs-5'></i></a>
                                                <a href="#" class="list-group-item d-flex justify-content-between align-items-center bg-transparent">Logout <i class='bx bx-log-out fs-5'></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="card shadow-none mb-0">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead class="table-light">
                                                    <tr>
                                                        <th>Order</th>
                                                        <th>Date</th>
                                                        <th>Status</th>
                                                        <th>Total</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td>#800</td>
                                                        <td>Novermber 15, 2021</td>
                                                        <td>
                                                            <div class="badge rounded-pill bg-light w-100">Completed</div>
                                                        </td>
                                                        <td>$100.00 for 1 item</td>
                                                        <td>
                                                            <div class="d-flex gap-2">	<a href="javascript:;" class="btn btn-light btn-sm rounded-0">View</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#796</td>
                                                        <td>Novermber 12, 2021</td>
                                                        <td>
                                                            <div class="badge rounded-pill bg-light w-100">Failed</div>
                                                        </td>
                                                        <td>$100.00 for 1 item</td>
                                                        <td>
                                                            <div class="d-flex gap-2"> <a href="javascript:;" class="btn btn-light btn-sm rounded-0">View</a>
                                                                <a href="javascript:;" class="btn btn-light btn-sm rounded-0">Pay</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#859</td>
                                                        <td>Novermber 10, 2021</td>
                                                        <td>
                                                            <div class="badge rounded-pill bg-light w-100">Failed</div>
                                                        </td>
                                                        <td>$100.00 for 1 item</td>
                                                        <td>
                                                            <div class="d-flex gap-2"> <a href="javascript:;" class="btn btn-light btn-sm rounded-0">View</a>
                                                                <a href="javascript:;" class="btn btn-light btn-sm rounded-0">Pay</a>
                                                                <a href="javascript:;" class="btn btn-light btn-sm rounded-0">Cancel</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#869</td>
                                                        <td>Novermber 9, 2021</td>
                                                        <td>
                                                            <div class="badge rounded-pill bg-light w-100">Cancelled</div>
                                                        </td>
                                                        <td>$120.00 for 1 item</td>
                                                        <td>
                                                            <div class="d-flex gap-2"> <a href="javascript:;" class="btn btn-light btn-sm rounded-0">View</a>
                                                                <a href="javascript:;" class="btn btn-light btn-sm rounded-0">Pay</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#829</td>
                                                        <td>Novermber 8, 2021</td>
                                                        <td>
                                                            <div class="badge rounded-pill bg-light w-100">Completed</div>
                                                        </td>
                                                        <td>$224.00 for 2 item</td>
                                                        <td>
                                                            <div class="d-flex gap-2"> <a href="javascript:;" class="btn btn-light btn-sm rounded-0">View</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#879</td>
                                                        <td>Novermber 8, 2021</td>
                                                        <td>
                                                            <div class="badge rounded-pill bg-light w-100">Completed</div>
                                                        </td>
                                                        <td>$126.00 for 3 item</td>
                                                        <td>
                                                            <div class="d-flex gap-2"> <a href="javascript:;" class="btn btn-light btn-sm rounded-0">View</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>#863</td>
                                                        <td>Novermber 4, 2021</td>
                                                        <td>
                                                            <div class="badge rounded-pill bg-light w-100">Failed</div>
                                                        </td>
                                                        <td>$200.00 for 2 item</td>
                                                        <td>
                                                            <div class="d-flex gap-2"> <a href="javascript:;" class="btn btn-light btn-sm rounded-0">View</a>
                                                                <a href="javascript:;" class="btn btn-light btn-sm rounded-0">Pay</a>
                                                                <a href="javascript:;" class="btn btn-light btn-sm rounded-0">Cancel</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--end row-->
                        </div>
                    </div>
                </div>
            </section>
            <!--end shop cart-->
        </div>
    </div>
    <!--end page wrapper -->
</div>
<!--end wrapper-->

@endsection
