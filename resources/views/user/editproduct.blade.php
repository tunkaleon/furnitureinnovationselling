
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
                        <!-- valifation types -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <center><h5 class="card-header">Add New product</h5></center>
                                @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close"  data-dismiss="alert" aria-hidden="true">x</button>
                                    {{ session()->get('message') }}
                                </div>
                                @endif
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="" method="POST" action="{{ url('updates' ,$data->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $data->id }}">
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Product name</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="product name" class="form-control" name="pname"required value="{{ $data->product_name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Few Description</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                {{-- <input type="text" required="" placeholder="product description" class="form-control" name="description" required> --}}
                                                <textarea name="description" id="" cols="5" rows="3" class="form-control" placeholder="enter atleast one line">value="{{ $data->description }}"</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">More Description</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                {{-- <input type="text" required="" placeholder="product description" class="form-control" name="description" required> --}}
                                                <textarea name="moredescription" id="" cols="5" rows="3" class="form-control" placeholder="enter more description">value="{{ $data->description }}"</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Quantity</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" required="" placeholder="product quantity" class="form-control" name="quantity"required value="{{ $data->quantity }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Price</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" required="" placeholder="product price" class="form-control" name="price"required value="{{ $data->price }}">
                                            </div>
                                        </div>
                                        <label class="col-12 col-sm-3 col-form-label text-sm-right">old Image</label>
                                        <img src="/img/{{ $data->image }}" height="100">
                                        <div class="form-group row">
                                           
                                                <label class="col-12 col-sm-3 col-form-label text-sm-right"> New Image</label>
                                                <div class="col-12 col-sm-8 col-lg-6">
                                                    <input type="file" required="" placeholder=" image" class="form-control" name="image" required>
                                                </div>
                                        </div>
                                                 
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary" name="submit">update</button>
                                                <button class="btn btn-space btn-secondary">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                          
        @endsection   
    <!-- ============================================================== -->
    <!-- end valifation types -->
    <!-- ============================================================== -->
</div>