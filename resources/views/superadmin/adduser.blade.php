
@extends('superadmin.layouts.apps')
@section('content')

        @include('superadmin.layouts.sidebar')

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
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <center><h5 class="card-header">Add New user</h5></center>
                                {{-- @if (session()->has('message'))
                                <div class="alert alert-success">
                                    <button type="button" class="close"  data-dismiss="alert" aria-hidden="true">x</button>
                                    {{ session()->get('message') }}
                                </div>
                                @endif --}}
                                    
                         
                                <div class="card-body">
                                    <form id="validationform" data-parsley-validate="" novalidate="" action="{{ url('adduser') }}" method="POST">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">names</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="text" required="" placeholder="user" class="form-control" name="name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Email</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="email" required="" placeholder="enter email" class="form-control" name="email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">phone number</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="number" required="" placeholder="enter phone number" class="form-control" name="phone">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Address</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="type" required="" placeholder="enter  address" class="form-control" name="address">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">Password</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="password" required="" placeholder="enter new password " class="form-control" name="password">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-12 col-sm-3 col-form-label text-sm-right">conform Password</label>
                                            <div class="col-12 col-sm-8 col-lg-6">
                                                <input type="password" required="" placeholder="enter confirmation password" class="form-control" name="password_confirmation">
                                            </div>
                                        </div>
                                        <div class="form-group row text-right">
                                            <div class="col col-sm-10 col-lg-9 offset-sm-1 offset-lg-0">
                                                <button type="submit" class="btn btn-space btn-primary" name="submit">save</button>
                                                      <button class="btn btn-space btn-secondary"><a href="{{ url('adduser') }}" class="text text-light">Cancel</a></button>
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
           
                    <div class="row">
                        <!-- ============================================================== -->
                        <!-- data table  -->
                        <!-- ============================================================== -->
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="mb-0 text-center">List of all users</h5>
                                    
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table id="example" class="table table-striped table-bordered second" style="width:100%">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Agent Name</th>
                                                    <th>Email</th>
                                                    <th> Usertype</th>
                                                    <th>action</th>
                                                   
                                                  
                                                </tr>
                                            </thead>
                                            @foreach ($data as $data)
                                            <tbody>
                                                <tr>                                                       
                                                    <td>{{ $data->name }}</td>
                                                    <td>{{ $data->email }}</td>
                                                    <td>
                                                        @if($data->usertype == 2)
                                                        <p class="text text-danger"> Admin</p>
                                                        @elseif($data->usertype == 1)
                                                        <p class="text text-primary">Agent</p>
                                                        @else
                                                        <p class="text text-sucess">Client</p>
                                                        @endif

                                                    </td>
                                                    <td class="align-middle" style="width: 150px"><button style=" border:none;" class="margin-right:10px"><a onclick ="return confirm('are you sure you want to update user?')" href="{{ url('edit_user',$data->id ) }}"><i class="fa fa-edit"></i></a></button> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                                   <button style=" border:none;color:white"><a onclick ="return confirm('are you sure you want to delete this user?')" href="{{ url('delete_user', $data->id) }}"></i><img src="/img/delete.jpg" alt="" width="40px"></a></button></td>
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