@extends('layouts.app')

@section('title')
Food Menu - {{$settings['general']->site_title}}
@endsection

@section('content')
    
<div id="menu-page">
      @include('includes.food-categories-slider')
</div>
  
    @endsection