@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
    @endsection

@section('content')
<div class="welcome-jumbo">
    <h1>MENU PAGE</h1>
  </div>
    @endsection