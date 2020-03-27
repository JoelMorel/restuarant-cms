@extends('layouts.app')

@section('content')
    
<div id="offers-page">
  <div class="content-box">
    <div class="row">
        <div class="col-md-8 offset-md-2">
          <h1>Sign-up for our offers!</h1>
          <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <div class="row">
                  <div class="col">
                    <label for="nameInput">Name:</label>
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="form-group">
                <label for="emailInput">Email Address:</label>
                <input type="email" class="form-control" name="email" id="emailInput" placeholder="name@example.com">
              </div>
            </div>
          </form>
        </div>

            <div class="form-group">
              <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
          </form>
        </div>
        <div class="col-md-6">
          
        </div>
    </div>

    
    
  </div>
</div>
  
    @endsection