<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyDompet | {{$title}}</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <style>
    .container {
      background-color: #f8f9fa;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      height: 100vh;
      text-align: center;
    }
    .col-md-6 {
      display: flex;
      flex-direction: column;
      align-items: center;
    }    
    .form-group {
      justify-content: center;
      align-items: center;
      width: 100%;
      margin-bottom: 20px;
      margin-top: 10px;
    }
    .btn-primary {
      background-color: #28a745;
      border-color: #28a745;
    }
     .form-control {
      background-color: #E6F0EB;
      width: 100%;
    }
    .login-image {
      width: 300px;
      height: auto;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
   <div class="container">
       <div class="col-md-6">
         <h1 class="mb-4">Welcome Back</h1>
         <img src="{{URL::asset('img/WelcomeLogin.png')}}" class="login-image" alt="Illustration">
         <div class="col-md-6">
          <form action="{{route('login.auth')}}" method="POST">
            @csrf
            <div class="form-group">
               <input type="email" class="form-control" placeholder="Email" name="email">
            </div>
            <div class="form-group">
               <input type="password" class="form-control" placeholder="Password" name="password">
            </div>
            <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
            </form>
            <div class="text-center mt-3">
              Don't have account? <a href="/register">Register</a>
            </div>
         </div>
         
     </div>
   </div>
 </body>
 </html>