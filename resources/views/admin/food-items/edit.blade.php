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
                    <h2 class="pageheader-title">Edit Food Item </h2>
                    <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="/admin/food-items/all" class="breadcrumb-link">All Food Items</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Food Item</li>
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
                        <h5 class="card-header">Edit an Existing Food Item</h5>
                        <div class="card-body">
                        <form method="POST" action="/admin/food-items/{{$item->id}}">
                                @csrf
                                @method('PUT')

                                <div class="form-group">
                                    <label for="inputTitle">Title</label>
                                    <input id="inputTitle" type="text" class="form-control form-control-lg @error('title') is-invalid @enderror" name="title" value="{{old ('title', $item->title) }}" required autocomplete="title" autofocus placeholder="Title">

                                    @error('title')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="inputPrice">Price</label>
                                    <input id="inputPrice" type="text" class="form-control form-control-lg @error('price') is-invalid @enderror" name="title" value="{{old ('price', $item->title) }}" required autocomplete="price" autofocus placeholder="Price">

                                    @error('price')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="inputcategory">Category</label>
                                    <select name="category_id" class="form-control" id="category_id">
                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}"
                                                @if(category->id == $item->category_id)
                                                    selected
                                                @endif>
                                                {{$category->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="inputdescription">Description</label>
                                    <textarea id="inputdescription" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" name="image_url"  value="{{old('description', $item->description)}}"  required autofocus placeholder="Enter a description">{{ old('description') }}</textarea>

                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="imageURL">Image URL</label>
                                <input id="imageURL" type="text" class="form-control form-control-lg @error('image_url') is-invalid @enderror" name="image_url"  value="{{old('image_url', $item->image_url)}}" required autofocus placeholder="Enter image URL">

                                    @error('image_url')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>                            
                                
                                <div class="row">
                                    <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                        
                                    </div>
                                    <div class="col-sm-6 pl-0">
                                        <p class="text-right">
                                            <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                            
                                        </p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end basic form -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- horizontal form -->
                <!-- ============================================================== -->
 
                <!-- ============================================================== -->
                <!-- end horizontal form -->
                <!-- ============================================================== -->
            </div>
            <div class="row">
                <!-- ============================================================== -->
                <!-- valifation types -->
                <!-- ============================================================== -->
          
                <!-- ============================================================== -->
                <!-- end valifation types -->
                <!-- ============================================================== -->
            </div>

    @endsection