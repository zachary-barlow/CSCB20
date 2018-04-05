<?php
   include('session.php');
   session_start();
   $q1 = mysqli_real_escape_string($db,$_POST['question_1']);
   $q2 = mysqli_real_escape_string($db,$_POST['question_2']);
   $q3 = mysqli_real_escape_string($db,$_POST['question_3']);
   $q4 = mysqli_real_escape_string($db,$_POST['question_4']);

   $sql_user = "SELECT id from users WHERE type='1'";
   $s = mysqli_query($db,$sql_user);
   $row1 = mysqli_fetch_array($s,MYSQLI_ASSOC);

   $p_id = $row1['id'];
   // Insert the inputted data into the mysql
   $sql_feedback = "INSERT INTO feedback (`id`, `type`,`q1`,`q2`,`q3`,`q4`) VALUES ('$p_id','1','$q1','$q2','$q3','$q4')";

   if(!mysqli_query($db,$sql_feedback)) {
     echo "not inserted";
   } else {
     header("refresh:2; url=AnonFeedback.php");
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
          <li><a href="#">Home Page</a></li>
          <li><a href="announcements.php">Announcements</a></li>
          <li class="dropdown"><a href="#">Course Materials</a>
            <ul class="dropdown-content">
              <li><a href="./pdfs/Syllabus.pdf">Syllabus</a></li>
              <li><a href="LectureSlides.php">Lecture Slides</a></li>
              <li><a href="Assignments.php">Assignments</a></li>
              <li><a href="Labs.php">Labs</a></li>
              <li><a href="ProblemSets.php">Problem Sets</a></li>
              <li><a href="Solutions.php">Solutions</a></li>
              <li><a href="AnonFeedback.php">Anonymous Feedback</a></li>
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
  </div>
  <div class="main-sec">
    <div class="sub-sec">
      <form action="" method="post">
        <label>What do you like about the instructor teaching?  :</label><br><textarea id="question_1" name="question_1"></textarea><br>
        <label>What do you recommend the instructor to do to improve their teaching?  </label><br><textarea id="question_2" name="question_2"></textarea><br>
        <label>What do you like about the labs? </label><br><textarea id="question_3" name="question_3"></textarea><br>
        <label>What do you recommend the lab instructors to do to improve their lab teaching?</label><br><textarea id="question_4" name="question_4"></textarea><br>
        <input type="submit" name="submit_form" id="submit_form" >
      </form>
    </div>
  </div>
</body>
</html>
