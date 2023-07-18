@extends('superadmin.layouts.apps')
@section('content')


        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        @include('superadmin.layouts.sidebar')
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
                                <h2 class="pageheader-title">E-commerce Dashboard Template </h2>
                                <p class="pageheader-text">Nulla euismod urna eros, sit amet scelerisque torton lectus vel mauris facilisis faucibus at enim quis massa lobortis rutrum.</p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                            <li class="breadcrumb-item active" aria-current="page">E-Commerce Dashboard Template</li>
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
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-6" style="margin-top: 80px">
                            <div class="card">
                                <center><h5 class="card-header">Add New category</h5></center>
                                {{-- @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close"  data-dismiss="alert" aria-hidden="true">x</button>
                                    {{ session()->get('message') }}
                                </div>
                                @endif --}}
                                    
                         
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="" action="{{ url('updatecategory',$data->id) }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">names</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="hidden" value="{{ $data->id }}">
                                                <input type="text" required="" class="form-control" name="name" value="{{ $data->name }}">
                                            </div><br>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Old Image</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                               <img src="/img/{{ $data->image }}" width="40%">
                                            </div><br>
                                            
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right"> New Image</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="file" required="" placeholder=" image" class="form-control" name="image" required>
                                            </div>
                                    </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary" name="submit">update</button>
                                                <button class="btn btn-space btn-secondary"><a href="{{ url('furniture_category') }}" class="text text-light">Cancel</a></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                      
                        <!-- ============================================================== -->
                        <!-- end valifation types -->
                        <!-- ============================================================== -->
                    </div>
           
                    <!-- end recent orders  -->
            </div>         
        </div>
    </div>                   
@endsection