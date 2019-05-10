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
    </aside><br/><br><br><br>
     <section id="main-content">
      <section class="wdrapper">
        <table class="table table-dark">
        <thead>
        <tr>
        <th><strong>Question 1</strong></th>
        <th><strong>Question 2</strong></th>
        <th><strong>Question 3</strong></th>
        <th><strong>Question 4</strong></th>
        <th><strong>Question 5</strong></th>
        <th><strong>Question 6</strong></th>
        <th><strong>Question 7</strong></th>
        <th><strong>Question 8</strong></th>
        <th><strong>Question 9</strong></th>
        <th><strong>Question 10</strong></th>
        <th><strong>Edit</strong></th>
        <th><strong>Delete</strong></th>
        </tr>
        </thead>
        <tbody>
        @foreach($all_teachers_info as $allteachers_info)
        <th><strong>{{$allteachers_info->ques_1}}</strong></th>
        <th><strong>{{$allteachers_info->ques_2}}</strong></th>
        <th><strong>{{$allteachers_info->ques_3}}</strong></th>
        <th><strong>{{$allteachers_info->ques_4}}</strong></th>
        <th><strong>{{$allteachers_info->ques_5}}</strong></th>
        <th><strong>{{$allteachers_info->ques_6}}</strong></th>
        <th><strong>{{$allteachers_info->ques_7}}</strong></th>
        <th><strong>{{$allteachers_info->ques_8}}</strong></th>
        <th><strong>{{$allteachers_info->ques_9}}</strong></th>
        <th><strong>{{$allteachers_info->ques_10}}</strong></th>
        <th><strong><a href="{{url('/question_edit/'.$allteachers_info->id) }}"><button type="button" class="btn btn-success">Edit</strong></a></th>
        <th><strong><a href="{{url('/question_delete/'.$allteachers_info->id) }}"><button type="button" class="btn btn-success">Delete</strong></a></th>

        <th><strong>{{$allteachers_info->id}}</strong></th>
        </tbody>
        @endforeach
        </table>
      </section>
     </section>

    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>DIU</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Rakesh Roy Developer</a>
        </div>
      </div>
    </footer>
      
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
