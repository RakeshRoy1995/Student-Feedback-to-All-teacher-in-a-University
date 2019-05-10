<?php
          $name = Session::get('name');
          if ($name) {
            Session::put('name',null);
          }
          $total = Session::get('total');
          if ($total) {
            Session::put('total',null);
          }
          // echo $name;
          $t_name = $name;
          $q_2p = Session::get('q_2p');
          if ($q_2p) {
            Session::put('q_2p',null);
          }
          $q_1p = Session::get('q_1p');
          if ($q_1p) {
            Session::put('q_1p',null);
          }
          $q_3p = Session::get('q_3p');
          if ($q_3p) {
            Session::put('q_3p',null);
          }
          $q_4p = Session::get('q_4p');
          if ($q_4p) {
            Session::put('q_4p',null);
          }
          $q_5p = Session::get('q_5p');
          if ($q_5p) {
            Session::put('q_5p',null);
          }
          $q_6p = Session::get('q_6p');
          if ($q_6p) {
            Session::put('q_6p',null);
          }
          $q_7p = Session::get('q_7p');
          if ($q_7p) {
            Session::put('q_7p',null);
          }
          $q_8p = Session::get('q_8p');
          if ($q_8p) {
            Session::put('q_8p',null);
          }
          $q_9p = Session::get('q_9p');
          if ($q_9p) {
            Session::put('q_9p',null);
          }
          $q_10p = Session::get('q_10p');
          if ($q_10p) {
            Session::put('q_10p',null);
          }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Details </title>

  <link href="{{asset('bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

</head>
<body>
  <h1 class="text-right"><button class="btn btn-warning btn-lg">
    <a href="{{('/logout_senior_teacher')}}">Logout</a>
    </button></h1>
    <div class="jumbotron">
      <h4 class="text-monospace border border-white"><p class="text-muted">
        This is full of details of
      </p><p class="text-info"><?php echo $name['name'];?></p><p class="text-info">Faculty: <?php echo $name['faculty'];?></p>
        <p class="text-info">Department:<?php echo $name['department'];?></p>
        <p class="text-info">Total:<?php echo $total ;?> %</p>
      </h4>

      @foreach($all_teachers_info as $allteachers_info)
      <table class="table table-bordered">
       <thead> 
        <tr>
          <th>1.{{$allteachers_info->ques_1}}</th>
          <th>2.{{$allteachers_info->ques_2}}</th> 
          <th>3.{{$allteachers_info->ques_3}}</th>
          <th>4.{{$allteachers_info->ques_4}}</th>
          <th>5.{{$allteachers_info->ques_5}}</th> 
          <th>6.{{$allteachers_info->ques_6}}</th>
          <th>7.{{$allteachers_info->ques_7}}</th>
          <th>8.{{$allteachers_info->ques_8}}</th> 
          <th>9.{{$allteachers_info->ques_9}}</th>
          <th>10.{{$allteachers_info->ques_10}}</th>
        </tr>
        </thead>
      <tbody>
        <tr>
          <td><?php echo $q_1p; ?> %</td>
          <td><?php echo $q_2p; ?> %</td>
          <td><?php echo $q_3p; ?> %</td>
          <td><?php echo $q_4p; ?> %</td>
          <td><?php echo $q_5p; ?> %</td>
          <td><?php echo $q_6p; ?> %</td>
          <td><?php echo $q_7p; ?> %</td>
          <td><?php echo $q_8p; ?> %</td>
          <td><?php echo $q_9p; ?> %</td>
          <td><?php echo $q_10p; ?> %</td>
        </tr>
       </tbody> 
      </table>
    @endforeach
    </div>


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
