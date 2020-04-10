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
                    <h2 class="pageheader-title">Offers </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="#/admin/all" class="breadcrumb-link">All Offers</a></li>
                               
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
                <!-- basic table -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <h5 class="card-header">Members</h5>
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">id</th>
                                        <th scope="col">Full Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Phone #</th>
                                        <th scope="col">Date Created</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($members as $members)
                                        <tr>
                                            <th scope="row">{{$members->id}}</th>
                                            <td>{{$members->fname}} {{$members->lname}}</td>
                                            <td>{{$members->email}}</td>
                                            <td>{{$members->phone_num}}</td>

                                            <td>{{date('m/d/Y', strtotime($members->updated_at))}}</td>
                                            <td>
                                                <a href="/admin/food-members/{{$members->id}}/edit"><i class="far fa-edit"></i></a>
                                            </td>
                                            <td>
                                                
                                                <a href="#" onclick="event.preventDefault();
                                                document.getElementById('delete-category-{{$members->id}}').submit();">
                                                    <i class="far fa-trash-alt"></i>
                                                </a>
                                                <form id="delete-category-{{$members->id}}" action="/admin/food-members/{{$members->id}}/delete" method="POST" style="display: none;">
                                        @method('DELETE')
                                        @csrf
                                    </form>

                                            </td>
                                        </tr>    
                                    @endforeach
                                    
                                
                                </tbody>
                            </table>
                            {{-- {{$members->links() }} --}}
                        </div>
                    </div>
                </div>
   
            </div>
    
    
    @endsection