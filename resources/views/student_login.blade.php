<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Student Login</title>

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">
</head>

<body>
  <div class="float-right text-success">
   <h2><a href="{{url('/teacher_login')}}">Teacher Login</a></h2>
  </div>

  <div id="login-page">
    <div class="container">
      <form class="form-login" method="post" action="{{url('/student_login')}}">
        {{ csrf_field() }}
        <h2 class="form-login-heading">sign in now</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Registration No" name="Reg_number" autofocus required>
          <br>
          <select type="text" class="form-control"name="shift" autofocus>
            <option value="DAY">DAY</option>
            <option value="EVENING">EVENING</option>
          </select>
          <br> 
          <input type="text" class="form-control" placeholder="Batch no" name="batch" autofocus required>
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password" required><br>
          <button class="btn btn-theme btn-block" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        </div>
      </form>
    </div>
  </div>
    <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('lib/jquery.backstretch.min.js')}}"></script>
    <script>
      $.backstretch("{{asset('img/login-bg.jpg')}}", {
        speed: 500
      });
    </script>
</body>
</html>
