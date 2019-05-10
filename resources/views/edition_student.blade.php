<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
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
  <section id="container">
    <section id="main-content">
      <section class="wdrapper">
     <div id="login-page">
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{url('/logout_student')}}">Logout</a></li>
        </ul>
      </div>
      <div class="container">
         
        <form class="form-login" action="{{ url('/student_updated/'.$all_students_info->id) }}" method="post">
          {{ csrf_field() }}
          <h2 class="form-login-heading">Update Information</h2>
          <div class="login-wrap">
            <input type="text" name="roll" class="form-control" value="{{($all_students_info->roll)}}" autofocus>
            <br>
            <input type="text" name="batch" class="form-control" value="{{($all_students_info->batch)}}" autofocus>
            <br>
            <input type="text" name="password" class="form-control" value="{{($all_students_info->password)}}" autofocus>
            <br>
            <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> Update Student</button><hr>
          </div>
        </form>

         <h1 class="alert-danger text-center">

      
      </h1>

        <br><br>
      </div>
     </div>
      </section>
    </section>
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>DIU</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Rakesh Roy <a href="https://www.facebook.com/rakesh.rex.52">Developer</a>
        </div>
      </div>
    </footer>
  </section>
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>

</body>

</html>
