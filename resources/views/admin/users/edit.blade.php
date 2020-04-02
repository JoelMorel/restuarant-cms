@extends('layouts.admin')

@section('title', 'Page Title')

@section('content')

    <div class="container-fluid  dashboard-content">
        <!-- ============================================================== -->
        <!-- pageheader -->
        <!-- ============================================================== -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">Edit User </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/users/all" class="breadcrumb-link">All Users</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end pageheader -->
        <!-- ============================================================== -->

            <div class="row">
                <!-- ============================================================== -->
                <!-- basic form -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Edit User</h5>
                        <div class="card-body">
                            <form action="#" id="basicform" data-parsley-validate="">
                                <div class="form-group">
                                    <label for="inputName">User Name:</label>
                                    <input id="inputName" type="text" name="name" data-parsley-trigger="change" required="" placeholder="Enter a users fullname" autocomplete="off" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputEmail">Email:</label>
                                    <input id="inputEmail" type="email" name="email" data-parsley-trigger="change" required="" placeholder="Enter users email" autocomplete="off" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputPassword">Password:</label>
                                    <input id="inputPassword" type="text" name="password" data-parsley-trigger="change" required="" placeholder="Enter users password" autocomplete="off" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="inputPhone">Phone #:</label>
                                    <input id="inputPhone" type="password" name="phone" data-parsley-trigger="change" required="" placeholder="XXX-XXX-XXXX" autocomplete="off" class="form-control">
                                </div>
                             
                                <div class="form-group">
                                    <label for="inputRole">Role:</label>
                                    <select class="form-control" id="inputRole">
                                        <option value="admin">Admin</option>
                                        <option value="moder">Mod</option>
                                        <option value="user">User</option>

                                    </select>
                                </div>
                                    <div class="col-sm-1 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

    @endsection