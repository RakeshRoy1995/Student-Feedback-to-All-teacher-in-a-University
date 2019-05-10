<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style type="text/css">
  body  {
  background-image: url("image/79d6c53039cd25197dc4ca7a223d2b95.jpg");
  background-color: #cccccc;
   }
  </style>
  <title>Teacher Feedback </title>

  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <form class="form-inline mr-auto" method="post" action="{{url('/logout_senior_teacher')}}">
          {{csrf_field()}}
          <input class="form-control" type="text" name="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
      </div>
      <p><a class="navbar-brand font-italic" href="#">Search By any Name/ID/Depertment/Faculty</a></p>
      <h1 class="text-right"><button class="btn btn-warning btn-lg">
    <a href="{{('/logout_teacher')}}">Logout</a>
    </button></h1>
    </nav>
  <section id="container py-4">
    <div class="jumborrtron jumtbotron-fluid">
        <div class="form py-4">
          <div class="form-group">
            @if(!empty($all_search_info))
            <h1><a href="#">Search Records</a> </h1>
            <table class="table">
            <thead>
            <tr>
            <th><strong>Name</strong></th>
            <th><strong>Faculty</strong></th>
            <th><strong>Department</strong></th>
            <th><strong>Image</strong></th>
            <th><strong>User ID</strong></th>
            <th><strong>Detail</strong></th>
            </tr>
            </thead>
             <tbody>
              @foreach($all_search_info as $datas)
              <th><strong>{{$datas->name}}</strong></th>
              <th><strong>{{$datas->faculty}}</strong></th>
              <th><strong>{{$datas->department}}</strong></th>
              <th><strong><img src="{{$datas->image}}" style="width:150px; height:75px;" alt=""></strong></th>
              <th><strong>{{$datas->uid}}</strong>
              <th><strong><a href="{{url('/details/'.$datas->uid) }}"><button type="button" class="btn btn-success">Details</strong></a></th> 
              </tbody>
              @endforeach                 
            </table>
              <h1 class="">{{ $all_search_info->links() }}</h1>
              @endif 
          </div>
        <br><br>
        @if(!empty($all_teachers_info))
        <h1><a href="#">All Teacher Record</a> </h1>
        <table class="table">
        <thead>
        <tr>
        <th><strong>Name</strong></th>
        <th><strong>Faculty</strong></th>
        <th><strong>Department</strong></th>
        <th><strong>Image</strong></th>
        <th><strong>User ID</strong></th>
        <th><strong>Avarage Performance</strong></th>
        <th><strong>Detail</strong></th>
        </tr>
        </thead>
        <tbody>
        
        @foreach($all_teachers_info as $allteachers_info)
        <th><strong>{{$allteachers_info->name}}</strong></th>
        <th><strong>{{$allteachers_info->faculty}}</strong></th>
        <th><strong>{{$allteachers_info->department}}</strong></th>
        <th><strong><img src="{{$allteachers_info->image}}" style="width:150px; height:75px;" alt=""></strong></th>
        <th><strong>{{$allteachers_info->uid}}</strong>
        <th><strong>{{$allteachers_info->total}} %</strong></th>
        <th><strong><a href="{{url('/details/'.$allteachers_info->uid) }}"><button type="button" class="btn btn-success">Details</strong></a></th>		
        </tbody>
        @endforeach
        @endif
        </table>
    </div>
    </div>
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
  <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>