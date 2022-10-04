@extends('master') 
@section('content')

  <div class="container">
    <div class="row justify-content-center mt-5" style="padding-top:8%">
      <div class="col-lg-4 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Login</h2>
          </div>
          <div class="card-body">

            <form action="login" method="Post">
                @csrf
              <div class="mb-4">
                <label for="username" class="form-label">Username/Email</label>
                <input type="text" class="form-control" id="username" name="email" />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" />
              </div>
               
              <div class="d-grid">
                <button type="submit" class="btn btn-primary text-light main-bg">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


@endsection