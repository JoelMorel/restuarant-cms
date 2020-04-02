@extends('layouts.app')

@section('content')
    
<div id="waitlist-page">
  <div class="content-box">
    <div class="row">
        <div class="col-md-9">
          <h1>Sign-up for the Waitlist</h1>
          <form>
            <div class="form-group">
              <div class="row">
                <div class="col">
                  <label for="nameInput">Name:</label>
                  <input type="text" class="form-control" placeholder="First Name Last Name">
                </div>
              </div>
            </div>
            
            <div class="form-group">
              <label for="emailInput">Email Address:</label>
              <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
            </div>
            <div class="form-group">
              <label for="phoneInput">Phone Number:</label>
              <input type="text" class="form-control" name="phone" id="phoneInput" placeholder="###-###-####">
            </div>
            <div class="form-group">
              <label for="guestNumberInput">Number of Guests:</label>
              <select class="form-control" name="guest" id="guestNumberInput">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="form-group">
              <label for="timeInput">Time:</label>
              <select class="form-control" name="time" id="timeInput">
                <option value="1">1:00pm</option>
                <option value="2">2:00pm</option>
                <option value="3">3:00pm</option>
                <option value="4">4:00pm</option>
                <option value="5">5:00pm</option>
                <option value="6">6:00pm</option>
                <option value="7">7:00pm</option>
                <option value="8">8:00pm</option>
                <option value="9">9:00pm</option>
                <option value="10">10:00pm</option>
              </select>
            </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary mb-2">Reserve</button>
            </div>
          </form>
        </div>
        <div class="col-md-3">
          Please Note: Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur officia, veniam animi tempore neque aperiam mollitia. Nobis cupiditate quisquam vero asperiores adipisci explicabo natus quas modi exercitationem, corporis dignissimos tempore.
        </div>
    </div>

    
    
  </div>
</div>
  
    @endsection