<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <br/>

      <form class="form-login" action="{{url('/question')}}" method="post">
        {{ csrf_field() }}
        <h3 class="text-info">Enter Question here</h3><hr>
      <input type="text" name="ques_1" class="form-control" placeholder="Enter Question number one" autofocus required>
      <br>
      <input type="text" name="ques_2" class="form-control" placeholder="Enter Question number two" autofocus required><br>
      <input type="text" name="ques_3" class="form-control" placeholder="Enter Question number three" autofocus required><br>
      <input type="text" name="ques_4" class="form-control" placeholder="Enter Question number four" autofocus required><br>
      <input type="text" name="ques_5" class="form-control" placeholder="Enter Question number five" autofocus required><br>
      <input type="text" name="ques_6" class="form-control" placeholder="Enter Question number six" autofocus required><br>
      <input type="text" name="ques_7" class="form-control" placeholder="Enter Question number Seven" autofocus required><br>
      <input type="text" name="ques_8" class="form-control" placeholder="Enter Question number Eight" autofocus required><br>
      <input type="text" name="ques_9" class="form-control" placeholder="Enter Question number Nine" autofocus required><br>
      <input type="text" name="ques_10" class="form-control" placeholder="Enter Question number Ten" autofocus required><br>
      <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> Add Question</button>
      </form>

      <h1 class="alert-success text-center">
      <?php
      $message = Session::get('message');
      if ($message) {
        echo $message;
        Session::put('message',null);
      }

      ?>
      </h1>
      
     </section>
    </section>

<script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <!--script for this page-->

</body>

</html>
