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
      <section class="wrapper">
        <div class="form py-4">
        <br><br>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <h3>Search By any Name/ID/Depertment/Faculty</h3>
          <form class="form-inline mr-auto" method="post" action="{{url('/allteachers')}}">
            {{csrf_field()}}
            <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
         </div>
        </nav>
        <hr>
        <div class="form-group">
            @if(!empty($all_search_info))
            <h1><a href="#">Search Records</a> </h1>
            <table class="table">
            <thead>
            <tr>
            <th><strong>Name</strong></th>
            <th><strong>Faculty</strong></th>
            <th><strong>Department</strong></th>
            <th><strong>Email</strong></th>
            <th><strong>Batch</strong></th>
            <th><strong>Shift</strong></th>
            <th><strong>Image</strong></th>
            <th><strong>Teacher ID</strong></th>
            <th><strong>Edit</strong></th>
            <th><strong>Delete</strong></th>
            </tr>
            </thead>
             <tbody>
              @foreach($all_search_info as $datas)
              <th><strong>{{$datas->name}}</strong></th>
              <th><strong>{{$datas->faculty}}</strong></th>
              <th><strong>{{$datas->department}}</strong></th>
              <th><strong>{{$datas->email}}</strong></th>
              <th><strong>{{$datas->batch}}</strong></th>
              <th><strong>{{$datas->shift}}</strong></th>
              <th><strong><img src="{{$datas->image}}" style="width:150px; height:75px;" alt=""></strong></th>
              <th><strong>{{$datas->uid}}</strong>
               <th><strong><a href="{{url('/teacher_edit/'.$datas->id) }}"><button type="button" class="btn btn-success">Edit</strong></a></th>
        <th><strong><a href="{{url('/teacher_delete/'.$datas->id) }}"><button type="button" class="btn btn-danger">Delete</strong></a></th>
              </tbody>
              @endforeach                 
            </table>
              <h1 class="">{{ $all_search_info->links() }}</h1>
              @endif 
          </div>
          @if(!empty($all_teachers_info))
        <h4 class="mx-1">View Records</h4>
        <h3><a href="{{ url('/addteachers') }}">Insert New Record</a> </h3>
        <table class="table table-dark">
        <thead>
        <tr>
        <th><strong>Name</strong></th>
        <th><strong>Faculty</strong></th>
        <th><strong>Department</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Batch</strong></th>
        <th><strong>Shift</strong></th>
        <th><strong>Image</strong></th>
        <th><strong>Teacher ID</strong></th>
        <th><strong>Edit</strong></th>
        <th><strong>Delete</strong></th>
        </tr>
        </thead>
        <tbody>
        @foreach($all_teachers_info as $allteachers_info)
        <th><strong>{{$allteachers_info->name}}</strong></th>
        <th><strong>{{$allteachers_info->faculty}}</strong></th>
        <th><strong>{{$allteachers_info->department}}</strong></th>
        <th><strong>{{$allteachers_info->email}}</strong></th>
        <th><strong>{{$allteachers_info->batch}}</strong></th>
        <th><strong>{{$allteachers_info->shift}}</strong></th>
        <th><strong><img src="{{$allteachers_info->image}}" style="width:150px; height:75px;" alt=""></strong></th>
        <th><strong>{{$allteachers_info->uid}}</strong></th>
        <th><strong><a href="{{url('/teacher_edit/'.$allteachers_info->id) }}"><button type="button" class="btn btn-success">Edit</strong></a></th>
        <th><a onclick='javascript:confirmationDelete($(this));return false;' href="{{url('/teacher_delete/'.$allteachers_info->id) }}"  class="btn btn-danger">Delete</a></th>

        <!-- <th><strong><a href="{{url('/teacher_delete/'.$allteachers_info->id) }}"><button type="button" class="btn btn-danger">Delete</strong></a></th> -->
        </tbody>
        @endforeach
        </table>
        <h1 class="">{{ $all_teachers_info->links() }}</h1>
        @endif
      </div>
     </section>
    </section>
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>DIU</strong>. All Rights Reserved
        </p>
        <div class="credits">
          Created with Rakesh Roy<br> <a href="https://www.facebook.com/rakesh.rex.52">Developer</a>
        </div>
      </div>
    </footer>

    <script type="text/javascript">
      function confirmationDelete(anchor)
{
   var conf = confirm('Are you sure want to delete this record?');
   if(conf)
      window.location=anchor.attr("href");
    }
    </script>
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