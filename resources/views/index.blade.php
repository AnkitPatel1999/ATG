<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>ATG Task</title>
    <style type="text/css">
      .alert-danger{
        padding: 0px;
        margin:0px;
        border:none;
        background-color:white;
        color: red;
      }
      .mb-4, .my-4 {
    margin-bottom: 0rem!important;
}
      .sp{
        height: 25px;
        width: auto;
      }
      .btn-block{
        margin-top: 14px;
      }
      .h4{
        margin-bottom: 35px;
      }
    </style>
  </head>
  <body>
     <div class="row">
      <div class="col-sm-5 offset-3">
        @if(session('status'))
          <div class="alert alert-success"><center>{{session('status')}}</center></div>  
        @endif
      </div>
    </div>
  

    <div class="row justify-content-center">
      <div class="col-sm-4">
        <form class="text-center border border-light p-5" action="/signup" method="POST">
          {{ csrf_field() }}
          <p class="h4">Sign In</p>
          <!-- Name -->
          <input type="text" name="name" class="form-control mb-4" placeholder="Name" value="{{old('name')}}">
            <div class="sp">
              @error('name')
                <p class="alert alert-danger">{{$errors->first('name')}} </p>
              @enderror
            </div>

          <!-- Email -->
          <input type="email" name="email" class="form-control mb-4" placeholder="E-mail" value="{{old('email')}}">
            <div class="sp">
              @error('email')
                <p class="alert alert-danger">{{$errors->first('email')}} </p>
              @enderror
            </div>

           <!-- Pincode -->
          <input type="number" name="pincode"  class="form-control mb-4" placeholder="Pincode" value="{{old('pincode')}}">
            <div class="sp">
              @error('pincode')
                <p class="alert alert-danger">{{$errors->first('pincode')}} </p>
              @enderror
            </div>

          <!-- Submit in button -->
          <button class="btn btn-info btn-block" type="submit">Sign in</button>
        </form>

      </div>
    </div>
   





    <!-- code here -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
