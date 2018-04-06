<?php
   include('session.php');
   session_start();
   
?>
<html>
<head>
  <link type="text/css" href="style.css" rel="stylesheet">
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
      <li><a href="prof_grades.php">Student Grades</a></li>
      <li><a href="CourseDownloads.php">Course Downloads</a></li>
      <li><a href = "logout.php">Sign Out</a></li>
    </ul>
  </div>
  <div class="main-sec">
    <div class="sub-sec">
      <h1> Anonymous Feedback </h1>
    </div>
  </div>
  <div class="footer">
    <div style="text-align:left; padding-left:10px;"><a href="http://www.utsc.utoronto.ca/cms/computer-science-1"><small>Faculty of Computer Science</small></a></div>
    <div style="text-align:left; padding-left:10px; padding-top:10px;"><small>Site Design by...</small></div>
  </div>
</body>
</html>
