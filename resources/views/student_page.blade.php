<?php
$Reg_number = Session::get('Reg_number');
$update = Session::get('updated_message');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student Page</title>

  <!-- Bootstrap core CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>
  <section id="container">
    <section id="main-content">
      <form method="post" action="{{url('/student_edition')}}">
            {{csrf_field()}}
           <div>
             <input type="hidden" name="Reg_number" class="form-control" value="<?php echo $Reg_number;?>" required autofocus>
             <br>
             <h1><button class="btn btn-info"  type="submit"> Update your Information</button></h1>
           </div> 
          </form>
     <section class="wrapper">
      <div class="top-menu">
        <ul class="nav pull-right btn btn-warning">
          <li><a class="logout" href="{{url('/logout_student')}}">Logout</a></li>
        </ul>
      </div>
		<div class="form py-4g">
		<table class="table table-dark">
		<thead>
		<tr>
		  <th>Course Name</th>
		  <th>Teacher's Name</th>
		  <th>FeedBack</th>
		</tr>
		</thead>
		<tbody>
		  @foreach($feedback_teachers_info as $all_student_info)
		  <th class="btn btn-secondary"><strong>{{$all_student_info->course_name}}</strong></th>
		  <th class="alert alert-primary"><strong>{{$all_student_info->name}}</strong></th>
		  <th class="btn btn-success"><strong>
          <a href="{{url('/feedback/'.$all_student_info->uid) }}">Feedback</a>
		  </strong></th>
		</tbody>
		@endforeach
		</table>
		      <h1 class="btn btn-success">
		      <?php
		      $feedback = Session::get('feedback');
		      if ($feedback) {
		        echo $feedback;
		        Session::put('feedback',null);
		      }
          if ($update) {
            Session::put('updated_message',null);
            echo $update;
          }

		      ?>

		      </h1>


          


		      <br /><br /><br /><br />
    <br /><br /></div>
    </section>
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
</body>
</html>
