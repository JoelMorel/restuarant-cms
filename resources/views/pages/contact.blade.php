@extends('layouts.app')

@section('title')
Contact - {{$settings['general']->site_title}}
@endsection

@section('content')
    
<div id="contact-page">
  <div class="content-box">
    <div class="row">
        <div class="col-md-6">
          <h1>Contact Us</h1>
          <p>
            {{$settings["general"]->address_1}} {{$settings["general"]->address_2}}<br>
            {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zip}}
          </p>
          <h3>Call Us</h3>
          <p>
  
            <a href="tel:{{$settings["general"]->phone_number}}">{{$settings["general"]->phone_number}}}}</a>
          </p>

         
        </div>

        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12890.847440328282!2d-115.1691146!3d36.124877!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8dbdfd347d00cb9b!2sMorels%20French%20Steakhouse%20and%20Bistro!5e0!3m2!1sen!2sus!4v1587595917061!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>

    
    
  </div>
</div>
  
    @endsection