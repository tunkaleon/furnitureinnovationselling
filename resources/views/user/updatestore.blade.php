
@extends('superadmin.layouts.apps')
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
                                {{-- <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p> --}}
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link"> Your Dashboard</a></li>
                                            {{-- <li class="breadcrumb-item active" aria-current="page">SuperAdmin Dashboard</li> --}}
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
                                    <h5 class="mb-0">List of all users</h5>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th>Product Name</th>
                                                    <th>Total_product </th>
                                                    <th>Price</th>
                                                   
                                                  
                                                </tr>
                                            </thead>
                                           
                                            <tbody>
                                                <?php
                                                $total_product=0;
                                                ?>
                                                <tr>
                                                    @foreach ($store as $store)
                                                    <td>{{ $store->product_name }}</td>
                                                    <td>{{ $store->total_quantity }}</td>
                                                    <td>{{ $store->total_quantity * $store->total_price }}</td>
                                                    {{-- <td class="align-middle" style="width: 150px"><button style=" border:none;" class="margin-right:10px"><a onclick ="return confirm('are you sure you want to update?')" href="{{ url('showupdate', $data->id) }}"><i class="fa fa-edit"></i></a></button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                   <button style=" border:none;color:white"><a onclick ="return confirm('are you sure you want to delete?')" href="{{ url('delete_product', $data->id) }}"></i><img src="/img/delete.jpg" alt="" width="40px"></a></button></td> --}}
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

                           
        @endsection   
    <!-- ============================================================== -->
    <!-- end valifation types -->
    <!-- ============================================================== -->
</div>