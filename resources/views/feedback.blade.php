<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback</title>
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
</head>
<body>
  <section id="container">
    <section id="main-content">
      <section class="jumbotron">
        <div class="top-menu">
        <h1 class="text-right"><button class="btn btn-warning btn-lg">
    <a href="{{('/logout_student')}}">Logout</a>
    </button></h1>
      </div>
	   <div id="login-page">
	    <div class="container">

	      <form class="form-login" action="{{ url('/save_feedback') }}" method="post" enctype="multipart/form-data">
	      	{{ csrf_field() }}
	        <h3 class="form-login-heading">Feedback Teacher Performance</h3>
	          <label>Teacher name</label>
	          <input type="text" name="name" class="form-control" value="{{($all_teachers_info->name)}}" required autofocus><br>

            <label>Semester</label>
            <input type="text" name="semester" class="form-control" placeholder="Semester no" required autofocus>
            <br>

              <input type="hidden" name="faculty" class="form-control" value="{{($all_teachers_info->faculty)}}" required autofocus>

	          <div class="form-group">
                <input type="hidden" name="department" class="form-control" value="{{($all_teachers_info->department)}}" required autofocus>
            <br>
            <div class="form-group">
                <input type="hidden" name="shift" class="form-control" value="{{($all_teachers_info->shift)}}" required autofocus>
            <br>
            </div>
            <input type="hidden" name="batch" class="form-control" value="{{($all_teachers_info->batch)}}" required autofocus>
            <br>
            <input type="hidden" name="subject" class="form-control" value="{{($all_teachers_info->course_name)}}" required autofocus>
            <br>
             <input type="hidden" name="uid" value="{{($all_teachers_info->uid)}}"><br><hr>

             <h1>Questions</h1><br>
             <label>1</label>
             <h5>ProvidingSullabus and lesson plan to students at the beginning of the semester and following this properly .</h5>
             <select class="form-control p-input" name="q_1">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
             <label>2</label>
             <h5>Is he/she always well prepared?</h5>
             <select class="form-control p-input" name="q_2">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
             <label>3</label>
             <h5>How much prepared does he/she take for giving his/her lesson?</h5>
             <select class="form-control p-input" name="q_3">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
             <label>4</label>
             <h5>His/Her efficiency to make a subject clear</h5>
             <select class="form-control p-input" name="q_4">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
             <label>5</label>
             <h5>How much are his/her efforts for providing updated information?</h5>
             <select class="form-control p-input" name="q_5">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
             <label>6</label>
             <h5>How is his attention to individual students</h5>
             <select class="form-control p-input" name="q_6">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
             <label>7</label>
             <h5>How do u consider his/her temperament in dealing with the student</h5>
             <select class="form-control p-input" name="q_7">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
             <label>8</label>
             <h5>Is he/she always punctual in starting and ending the class?</h5>
             <select class="form-control p-input" name="q_8">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
             <label>9</label>
             <h5>Is he fair in evaluting ___ the students?</h5>
             <select class="form-control p-input" name="q_9">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>
             <label>10</label>
             <h5>Is he/she available fo student's consultation?</h5>
             <select class="form-control p-input" name="q_10">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
              <br>

	          <button class="btn btn-success btn-lg btn-block"  type="submit"><i class="fa fa-lock"></i> Feedback Teacher</button><hr>
	        
	      </form>

      <h1 class="alert-danger text-center">
      <?php
      $feedback = Session::get('feedback');
      if ($feedback) {
        echo $feedback;
        Session::put('feedback',null);
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
