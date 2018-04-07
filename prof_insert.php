<?php
   include('session.php');
   session_start();
   $assignment_1 = mysqli_real_escape_string($db,$_POST['assignment1']);
   $assignment_2 = mysqli_real_escape_string($db,$_POST['assignment2']);
   $assignment_3 = mysqli_real_escape_string($db,$_POST['assignment3']);
   $assignment_4 = mysqli_real_escape_string($db,$_POST['assignment4']);
   $quiz_1 = mysqli_real_escape_string($db,$_POST['quiz1']);
   $quiz_2 = mysqli_real_escape_string($db,$_POST['quiz2']);
   $midterm = mysqli_real_escape_string($db,$_POST['midterm']);
   $final = mysqli_real_escape_string($db,$_POST['final']);
   // Insert the inputted data into the mysql
   $sql_feedback = "UPDATE grades SET $assignment = $new_mark WHERE id = $given_id";
   mysqli_query($db,$sql_feedback);
  ?>
<html>
<head>
  <link type="text/css" href="style.css" rel="stylesheet">
  <link type="text/css" href="AnonFeedback.css" rel="stylesheet">
</head>
<body>

  <?php
    $sql2 = "SELECT type FROM users WHERE username='$login_session'";
    $cr = mysqli_query($db,$sql2);
    $row2 = mysqli_fetch_array($cr,MYSQLI_ASSOC);

    if($row2['type'] == 1){
      echo '<div class="header">
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
              <li><a href="AnonFeedback.php">Anonymous Feedback</a></li>
            </ul>
          </li>
          <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
          <li class="dropdown"><a href="grades.php">Grades</a>
          <ul class="dropdown-content">
            <li><a href="prof_grades.php">All Grades</a></li>
            <li><a href="ViewRemarks.php">Re-Marks</a></li>
            <li><a href="EditMarks.php">Edit Marks</a></li>
          </ul>
          </li>';
    } elseif ($row2['type'] == 2) {
      echo '<div class="header">
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
              </ul>
          </li>
          <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
          <li class="dropdown"><a href="#">Grades</a>
          <ul class="dropdown-content">
            <li><a href="ViewRemarks.php">Re-Marks</a></li>
            <li><a href="EditMarks.php">Edit Marks</a></li>
          </ul>
          </li>';
    } else {
      die ("Not permitted <a href='index.php' style='color:blue'> Go to homepage </a>");
    }
   ?>
   <li><a href="CourseDownloads.php">Course Downloads</a></li>
   <li><a href = "logout.php">Sign Out</a></li>
   </ul>
   </div>
  <div class="main-sec">
    <div class="sub-sec">
      <h1>Edit Marks</h1>
    </div>
    <div class="sub-sec">
      <form action="" method="post" style="padding: 10px;">
        <label>Student ID: </label><br><input type="number" name="given_id" ><br>
        <label>Assignment 1</label><br><input type="number" name="assignment1" value="a1">
        <label>Assignment 2</label><br><input type="number" name="assignment2" value="a2">
        <label>Assignment 3</label><br><input type="number" name="assignment3" value="a3">
        <label>Assignment 4</label><br><input type="number" name="assignment4" value="a4">
        <label>Quiz 1</label><br><input type="number" name="quiz1" value="q1">
        <label>Quiz 2</label><br><input type="number" name="quiz2" value="q2">
        <label>Midterm</label><br><input type="number" name="midterm" value="midterm">
        <label>Final</label><br><input type="number" name="final" value="final">
        <br>
        <input type="submit" name="submit_form" id="submit_form">
      </form>
    </div>

  </div>
  <div class="footer">
    <div style="text-align:left; padding-left:10px;"><a href="http://www.utsc.utoronto.ca/cms/computer-science-1"><small>Faculty of Computer Science</small></a></div>
    <div style="text-align:left; padding-left:10px; padding-top:10px;"><small>Site Design by Zachary Barlow & Megan Kun</small></div>
  </div>
</body>
</html>
