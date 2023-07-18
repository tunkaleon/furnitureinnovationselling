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
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- data table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0">List of padding order</h5>
                           
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Price</th>
                                                    <th>Quantity</th>
                                                    <th>Client Name</th>
                                                    <th>Email</th>
                                                    <th>Phone</th>
                                                    <th>Address</th>
                                                    <th>Stutus</th>
                                                </tr>
                                            </thead>
                                            @foreach ( $data as $data)
                                            <tbody>

                                                <tr>
                                                    <td>{{ $data->product_name }}</td>
                                                    <td>{{ $data->price }}</td>
                                                    <td>{{ $data->quantity }}</td>
                                                    <td>{{ $data->client_name }}</td>
                                                    <th>{{ $data->email }}</th>
                                                    <th>{{ $data->phone }}</th>
                                                    <th>{{ $data->address }}</th>
                                                    <th>{{ $data->payment_stutus }}&nbsp;&nbsp;&nbsp;
                                                        @if ($data->payment_stutus=='proccessing')
                                                            
                                                      
                                                            <a href="{{ url('check',$data->id) }}"onclick="return confirm('are you sure this product is payed')" class="text text-danger">click to conform</a>
                                                            @else
                                                            <p></p>
                                                        @endif
                                                    </th>
                                                </tr>
                                                
                                            </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                    <br>    
                                </div>
                            </div>
                        </div>
                        <!-- ============================================================== -->
                        <!-- end data table  -->
                        <!-- ============================================================== -->
                    </div>
            <!-- footer -->
            <!-- ============================================================== -->
            @endsection