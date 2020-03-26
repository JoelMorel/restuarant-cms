@extends('layouts.app')

@section('title', 'Page Title')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
    @endsection

@section('content')
<div class="">
    <h1>Giftcards PAGE</h1>
  </div>
    @endsection