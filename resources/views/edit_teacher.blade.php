<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edition</title>
 <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
  <section id="container">
     <section class="jumbotron jumbotron-fluid">
      <h1 class="text-right"><button class="btn btn-warning btn-lg">
    <a href="{{('/logout_teacher')}}">Logout</a>
    </button></h1>
     <div id="login-page">
      <div class="container">
         
        <form class="form-login" action="{{ url('/updated_teachers/'.$all_teachers_info->id) }}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <h2 class="form-login-heading">Update Teacher Information</h2>
          <div class="login-wrap">
            <input type="text" name="name" value="{{($all_teachers_info->name)}}" class="form-control" autofocus>
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
            <input type="text" name="email" class="form-control" value="{{($all_teachers_info->email)}}" autofocus>
            <br>
            <label>Batch</label>
            <input type="text" name="batch" class="form-control" value="{{($all_teachers_info->batch)}}" autofocus>
            <br>
            <div class="form-group">
              <label>Shift</label>
              <select class="form-control p-input" name="shift">
                <option value="DAY">Day</option>
                <option value="EVENING">Evening</option>
              </select>
            </div><br>
            <input type="file" name="image" class="form-control" autofocus>
            <br>
            <input type="password" name="password" class="form-control" value="{{($all_teachers_info->password)}}"><br>
            <button class="btn btn-success btn-lg btn-block"  type="submit"><i class="fa fa-lock"></i> Update Teacher</button><hr>
          </div>
        </form>

         <h1 class="alert-danger text-center">

      
      </h1>

        <br><br>
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
  </section>
  <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
</body>

</html>
