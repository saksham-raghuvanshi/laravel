<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      
      <form action="{{url('/')}}/register" method="post">
        @csrf
        <div class="form-check">
            <h1>Register</h1>
        
          <div class="form-group">
            <label for="">Name</label>
            <input type="name" class="form-control" name="name" id="name" value="{{old('name')}}" aria-describedby="nameHelpId" placeholder="Name">
            <span class="text-danger">
              @error('name')
              {{$message}}                
              @enderror
            </span>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="email" value="{{old('email')}}" aria-describedby="emailHelpId" placeholder="Email">
            <span class="text-danger">
              @error('email')
              {{$message}}                
              @enderror
            </span>
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password" id="password" aria-describedby="passwordHelpId" placeholder="Password">
            <span class="text-danger">
              @error('password')
              {{$message}}                
              @enderror
            </span>
          </div>

          <div class="form-group">
            <label for="password_conf">Confirmed Password</label>
            <input type="password" class="form-control" name="password_conf" id="password_conf" aria-describedby="passwordHelpId" placeholder="Confirmed Password">
            <span class="text-danger">
              @error('password_conf')
              {{$message}}                
              @enderror
            </span>
          </div>
          <button class="btn btn-primary">Submit</button
        </div>
    </form>
</div>

</body>
</html>