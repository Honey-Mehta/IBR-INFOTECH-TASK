<!DOCTYPE html>
<html lang="en">
<head>
  <title>Custom Authentication</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>


  
<div class="container">
  <div class="row">
      <div class="col-md-4 col-md-offset-4" style="margin-top:20px;">
        <h4>Admin Registration</h4>
        <hr>
        <form action="{{route('register-user')}}" method="post" enctype="multipart/form-data">
        @if(Session::has('success'))
          <div class="alert alert-success">{{Session::get('success')}}</div>
          @endif
          @if(Session::has('fail'))
          <div class="alert alert-danger">{{Session::get('fail')}}</div>
          @endif
       
          @csrf
             

             <div class="form-group">
                 <label for="email">Email</label>
                 <input type="text" class="form-control" placeholder="Enter Email" name="email" value="">
                
             </div>

             <div class="form-group">
                 <label for="password">Password</label>
                 <input type="password" class="form-control" placeholder="Enter Password" name="password" value="">
                
             </div>


             






             <div class="form-group">
                 <button class="btn btn-block btn-primary" type="submit">
                  Register


                 </button>
             </div>
             <br>
             <a href="/login">Already Registered !! Login Here</a>
        </form>
      </div>
  </div>
</div>

</body>
</html>
