<?php
   include('session.php');
   session_start();
?>
<html>
<head>
  <link type="text/css" href="style.css" rel="stylesheet">
  <link type="text/css" href="ProblemSets.css" rel="stylesheet">
</head>
<body>
  <?php
    $sql2 = "SELECT type FROM users WHERE username='$login_session'";
    $cr = mysqli_query($db,$sql2);
    $row2 = mysqli_fetch_array($cr,MYSQLI_ASSOC);

    if($row2['type'] == 0){
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
              <li><a href="#">Problem Sets</a></li>
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
      </div>';
    } elseif ($row2['type'] == 1) {
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
              <li><a href="#">Problem Sets</a></li>
              <li><a href="Solutions.php">Solutions</a></li>
              <li><a href="prof_anon.php">Anonymous Feedback</a></li>
            </ul>
          </li>
          <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
          <li><a href="prof_grades.php">Student Grades</a></li>
          <li><a href="CourseDownloads.php">Course Downloads</a></li>
          <li><a href = "logout.php">Sign Out</a></li>
        </ul>
      </div>';
    } else {
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
              <li><a href="#">Problem Sets</a></li>
              <li><a href="Solutions.php">Solutions</a></li>
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSevS2OIlHblbgb1Cd_3aBoLrRGqCLDhfKo5wRFh4Mj4Pq-rrA/viewform?usp=sf_link">Anonymous Feedback</a></li>
            </ul>
          </li>
          <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
          <li><a href="https://markus.utsc.utoronto.ca/cscb20w18/?locale=en">My Grades</a></li>
          <li><a href="CourseDownloads.php">Course Downloads</a></li>
          <li><a href = "logout.php">Sign Out</a></li>
        </ul>
      </div>';
    }

   ?>
  <div class="main-sec">
    <div class="sub-sec">
      <h1> In Class Problem Sets </h1>
    </div>
    <div class="sub-sec">
      <h2> January 15: Worksheet 1 </h2>
      <ul>
        <li><a href="./pdfs/Worksheet1.pdf">Worksheet 1</a></li>
        <li><a href="./pdfs/SolutionsToWorksheet1.pdf">Worksheet 1 Solutions</a></li>
      </ul>
    </div>
    <div class="sub-sec">
      <h2> January 22: Worksheet 2 </h2>
      <ul>
        <li><a href="./pdfs/Worksheet2.pdf">Worksheet 2</a></li>
      </ul>
    </div>
    <div class="sub-sec">
      <h2> February 5: Worksheet 3 </h2>
      <ul>
        <li><a href="./pdfs/Worksheet3.pdf">Worksheet 3</a></li>
      </ul>
    </div>
  </div>
  <div class="footer">
    <div style="text-align:left; padding-left:10px;"><a href="http://www.utsc.utoronto.ca/cms/computer-science-1"><small>Faculty of Computer Science</small></a></div>
    <div style="text-align:left; padding-left:10px; padding-top:10px;"><small>Site Design by...</small></div>
  </div>
</body>
</html>
