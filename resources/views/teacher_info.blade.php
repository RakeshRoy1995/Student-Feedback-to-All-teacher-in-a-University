<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<style>
  body  {
    background-image: url("image/dynamicw.png");
    background-color: #cccccc;
  }
</style>
  <title>Teacher Info</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
    <h1 class="text-right"><button class="btn btn-warning btn-lg">
    <a href="{{('/logout_teacher')}}">Logout</a>
    </button></h1>

    <section id="main-content">
        <br><br>
        <table class="table table-bordered">
        <thead>
        <tr>
        <th><strong>Name</strong></th>
        <th><strong>Faculty</strong></th>
        <th><strong>Department</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Number</strong></th>
        <th><strong>Image</strong></th>
        <th><strong>Edit</strong></th>
        <th><strong>Performance</strong></th>
        </tr>
        </thead>
        <tbody>
        @foreach($all_teachers_info as $allteachers_info)
        <th><strong>{{$allteachers_info->name}}</strong></th>
        <th><strong>{{$allteachers_info->faculty}}</strong></th>
        <th><strong>{{$allteachers_info->department}}</strong></th>
        <th><strong>{{$allteachers_info->email}}</strong></th>
        <th><strong>{{$allteachers_info->number}}</strong></th>
        <th><strong><img src="{{$allteachers_info->image}}" style="width:150px; height:75px;" alt=""></strong></th>
        <th><strong><a href="{{url('/edition_teacher/'.$allteachers_info->id) }}"><button type="button" class="btn btn-dark">Edit</strong></a></th>
        <th><strong><a href="{{url('/performance_teacher/'.$allteachers_info->uid) }}"><button type="button" class="btn btn-success">Performance</strong></a></th>		
        </tbody>
        </table>
        <br /><br />

      <form class="form-login" action="{{url('/performance')}}" method="post">
        {{ csrf_field() }}
      <h2 class="text-primary">Seach Feedback</h2>
      <input type="hidden" name="name" class="form-control" value="{{$allteachers_info->name}}" autofocus required>  
      <input type="text" name="uid" class="form-control" value="{{$allteachers_info->uid}}" autofocus required>
      <br>
      <label>Day/Evening</label>
      <select class="form-control p-input" name="shift">
        <option value="DAY">DAY</option>
        <option value="EVENING">EVENING</option>
      </select> 
      <br>
      <input type="text" name="batch" class="form-control" placeholder="Enter Batch No" required autofocus> <hr>
      <button class="btn btn-theme btn-block btn-outline-success"  type="submit"><i class="fa fa-lock"></i> Search Feedback</button>
      </form>
      @endforeach
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