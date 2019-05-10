<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <title>Admin Panel</title>

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
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <a href="{{url('/admin_dashborad') }}" class="logo"><b>Dashbo<span>rd</span></b></a>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{url('/logout')}}">Logout</a></li>
        </ul>
      </div>
    </header>
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"><img src="{{asset('img/_MG_5744.JPG')}}" class="img-circle" width="80"></a></p>
          <h5 class="centered">Rakesh Roy</h5>
          <li class="mt">
            <a href="{{url('/admin_dashborad') }}">
              <i class="fa fa-dashboard"></i>
              <span>Dashboard</span>
              </a>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>Oparation</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('/allteachers') }}">All Teachers</a></li>
              <li><a href="{{ url('/allstudents') }}">All Students</a></li>
              <li><a href="{{url('/addteachers') }}">Add Teachers</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-cogs"></i>
              <span>Question</span>
              </a>
            <ul class="sub">
              <li><a href="{{url('/question')}}">Add Question</a></li>
              <li><a href="{{url('/allquestion')}}">All Question</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </aside>
    <section id="main-content">
      <section class="wdrapper">
	   <div id="login-page">
	    <div class="container">
	      <form class="form-login" action="{{ url('/save_students') }}" method="post">
	      	{{ csrf_field() }}
	        <h2 class="form-login-heading">Add Students Information</h2>
	        <div class="login-wrap">
	          <input type="text" name="name" class="form-control" placeholder="Student's Name" autofocus>
	          <br>
	          <div class="form-group">
	          	<label>Faculty</label>
	          	<select class="form-control p-input" name="faculty">
	          		<option value="science">Science</option>
	          		<option value="social">Social</option>
	          		<option value="bussiness">Bussiness </option>
	          	</select>
	          </div>
	          <br>
	          <div class="form-group">
	          	<label>Depeartment</label>
	          	<select class="form-control p-input" name="department">
	          		<option value="CSE">CSE</option>
	          		<option value="EEE">EEE</option>
	          		<option value="EETE ">EETE </option>
	          	</select>
	          </div>
	          <br>
	          <input type="text" name="roll" class="form-control" placeholder="Student's Roll" autofocus>
	          <br>
            <select type="text" class="form-control"name="shift" autofocus>
            <option value="DAY">DAY</option>
            </select><br>
	          <input type="text" name="batch" class="form-control" placeholder="Batch No" autofocus>
	          <br>
	          <input type="text" name="Reg_number" class="form-control" placeholder="Student's Registration Number" autofocus>
	          <br>
	          <input type="password" name="password" class="form-control" placeholder="Password"><br>
	          <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> Add Student</button><hr>
	        </div>
	      </form>

         <h1 class="alert-danger text-center">

      <?php
      $message = Session::get('message');
      if ($message) {
        echo $message;
        Session::put('message',null);
      }

      ?>
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
          Created By Rakesh <br>
          Developer
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
