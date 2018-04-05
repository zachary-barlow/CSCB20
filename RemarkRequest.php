<?php
   include('session.php');
   session_start();
   $assignment = mysqli_real_escape_string($db,$_POST['question_1']);
   $reason = mysqli_real_escape_string($db,$_POST['question_2']);

   // Insert the inputted data into the mysql
   $sql_feedback = "INSERT INTO remarks (`id`, `assignment`,`reason`) VALUES ('$user_id','$assignment','$reason')";

   if ($assignment == "" || $reason == ""){
      print "incomplete form";
   } else {
      mysqli_query($db,$sql_feedback);
      echo "submitted";
   }

  ?>
<html>
<head>
  <link type="text/css" href="style.css" rel="stylesheet">
  <link type="text/css" href="AnonFeedback.css" rel="stylesheet">
</head>
<body>
  <div class="header">
    <h1>CSCB20</h1>
    <ul class="links">
      <li><a href="index.php">Home Page</a></li>
      <li><a href="announcements.php">Announcements</a></li>
      <li class="dropdown"><a href="#">Course Materials</a>
        <ul class="dropdown-content">
          <li><a href="./pdfs/Syllabus.pdf">Syllabus</a></li>
          <li><a href="LectureSlides.php">Lecture Slides</a></li>
          <li><a href="Assignments.php">Assignments</a></li>
          <li><a href="Labs.php">Labs</a></li>
          <li><a href="ProblemSets.php">Problem Sets</a></li>
          <li><a href="Solutions.php">Solutions</a></li>
          <li><a href="#">Anonymous Feedback</a></li>
        </ul>
      </li>
      <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
      <li class="dropdown"><a href="grades.php">Grades</a>
      <ul class="dropdown-content">
        <li><a href="https://markus.utsc.utoronto.ca/cscb20w18/?locale=en">Markus</a></li>
        <li><a href="grades.php">All Grades</a></li>
      </ul>
      </li>
      <li><a href="CourseDownloads.php">Course Downloads</a></li>
      <li><a href = "logout.php">Sign Out</a></li>
    </ul>
  </div>
  <div class="main-sec">
    <div class="sub-sec">
      <h1>Remark Request</h1>
    </div>
    <div class="sub-sec">
      <form action="" method="post" style="padding: 10px;">
        <label>Which project do you want to have remarked?</label><br><textarea id="question_1" name="question_1" ></textarea><br>
        <label>Why do you want to be remarked?</label><br><textarea id="question_2" name="question_2" ></textarea><br>
        <input type="submit" name="submit_form" id="submit_form">
      </form>
    </div>
  </div>
</body>
</html>
