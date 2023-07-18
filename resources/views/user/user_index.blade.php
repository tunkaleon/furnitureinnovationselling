@extends('user.layouts.user_layout')
@section('content')
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('user.layouts.sidebar')
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- ============================================================== -->
                    <!-- pageheader  -->
                    <!-- ============================================================== -->
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">Furniture Innovation Selling </h2>
                    
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"> your Dashboard</a></li>
                                            {{-- <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li> --}}
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-md-3 g-4" style="margin-bottom: 150px;">
                        <div class="col">
                          <div class="card h-100 text text:light" style="background-color: rgb(54, 54, 83); color:white">
                           
                            <div class="card-body">
                              <h5 class="card-title text text-light">PANDING ORDER</h5>
                              <p class="card-text">{{ $data }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100" style="background-color:rgb(54, 54, 83);">
                            <div class="card-body text text-light">
                              <h5 class="card-title text text-light">DELIVERED ORDER</h5>
                              <p class="card-text">{{ $payed }}</p>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="card h-100" style="background-color:rgb(54, 54, 83);">
                            <div class="card-body text text-light">
                              <h5 class="card-title text text-light">EARNED MONEYY</h5>
                              <p class="card-text">{{ $price }} Frw</p>
                            </div>
                          </div>
                        </div>
                    
                    </div>
            <!-- footer -->
            <!-- ============================================================== -->
            @endsection