<?php
   include('session.php');
   session_start();
   if(isset($_POST['submit_form'])){
     $q1 = mysqli_real_escape_string($db,$_POST['question_1']);
     $q2 = mysqli_real_escape_string($db,$_POST['question_2']);
     $q3 = mysqli_real_escape_string($db,$_POST['question_3']);
     $q4 = mysqli_real_escape_string($db,$_POST['question_4']);
     $prof_insert = mysqli_real_escape_string($db,$_POST['prof']);
     // Insert the inputted data into the mysql
     $sql_feedback = "INSERT INTO feedback (`id`, `usertype`,`q1`,`q2`,`q3`,`q4`) VALUES ('$prof_insert','1','$q1','$q2','$q3','$q4')";
     $insert = mysqli_query($db,$sql_feedback);
     if(!$insert) {
       die("DAMMIT");
     } else {
       header("refresh:2; url=AnonFeedback.php");
     }
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
      <h1> Anonymous Feedback </h1>
    </div>
    <div class="sub-sec">
      <div class="contain_stuff">
        <form action="" method="post">
          <?php
            $type = 1;
            $profs_sql = "SELECT id FROM users WHERE type='$type'";
            $prof = mysqli_query($db, $profs_sql);
            while($row_prof = mysqli_fetch_array($prof,MYSQLI_ASSOC)){
              $name_prof = "SELECT firstname, lastname FROM users WHERE id='$row_prof[id]'";
              $prof_name = mysqli_query($db, $name_prof);
              $row_name = mysqli_fetch_array($prof_name,MYSQLI_ASSOC);
              echo "<label>$row_name[firstname] $row_name[lastname]:</label><input type='radio' name='prof' value='$row_prof[id]'>";
          }
           ?>
           <br><br>
          <label>What do you like about the instructor teaching?  :</label><br><textarea name="question_1"></textarea><br><br>
          <label>What do you recommend the instructor to do to improve their teaching?  </label><br><textarea  name="question_2"></textarea><br><br>
          <label>What do you like about the labs? </label><br><textarea  name="question_3"></textarea><br><br>
          <label>What do you recommend the lab instructors to do to improve their lab teaching?</label><br><textarea name="question_4"></textarea><br><br>
          <input type="submit" name="submit_form" id="submit_form" >
        </form>
      </div>
    </div>
  </div>
    <div class="footer">
      <div style="text-align:left; padding-left:10px;"><a href="http://www.utsc.utoronto.ca/cms/computer-science-1"><small>Faculty of Computer Science</small></a></div>
      <div style="text-align:left; padding-left:10px; padding-top:10px;"><small>Site Design by Zachary Barlow & Megan Kun</small></div>
    </div>
</body>
</html>
