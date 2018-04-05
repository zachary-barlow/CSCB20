<?php
   include('session.php');
   session_start();
?>
<html>
<head>
  <link type="text/css" href="style.css" rel="stylesheet">
  <link type="text/css" href="announcement.css" rel="stylesheet">
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
          <li><a href="#">Announcements</a></li>
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
      </div>';
    } elseif ($row2['type'] == 1) {
      echo '<div class="header">
        <h1>CSCB20</h1>
        <ul class="links">
          <li><a href="index.php">Home Page</a></li>
          <li><a href="#">Announcements</a></li>
          <li class="dropdown"><a href="#">Course Materials</a>
            <ul class="dropdown-content">
              <li><a href="./pdfs/Syllabus.pdf">Syllabus</a></li>
              <li><a href="LectureSlides.php">Lecture Slides</a></li>
              <li><a href="Assignments.php">Assignments</a></li>
              <li><a href="Labs.php">Labs</a></li>
              <li><a href="ProblemSets.php">Problem Sets</a></li>
              <li><a href="Solutions.php">Solutions</a></li>
              <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSevS2OIlHblbgb1Cd_3aBoLrRGqCLDhfKo5wRFh4Mj4Pq-rrA/viewform?usp=sf_link">Anonymous Feedback</a></li>
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
          <li><a href="#">Announcements</a></li>
          <li class="dropdown"><a href="#">Course Materials</a>
            <ul class="dropdown-content">
              <li><a href="./pdfs/Syllabus.pdf">Syllabus</a></li>
              <li><a href="LectureSlides.php">Lecture Slides</a></li>
              <li><a href="Assignments.php">Assignments</a></li>
              <li><a href="Labs.php">Labs</a></li>
              <li><a href="ProblemSets.php">Problem Sets</a></li>
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
    <div class="sub-sec"><h1>Announcements</h1></div>
    <div class="announcement, sub-sec">
      <div class="indented">
        <h3>Announcement 1</h2>
        <small>Posted on: *insert date*</small><br>
        <small>Posted by: *PERSON*</small>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed perferendis saepe, adipisci quae sint aperiam esse, placeat veritatis rem, dolores quibusdam eum autem deserunt! Nam ipsa ex, neque quae similique.</p>
      </div>
    </div>
    <div class="announcement, sub-sec">
      <div class="indented">
        <h3>Announcement 2</h2>
        <small>Posted on: *insert date*</small><br>
        <small>Posted by: *PERSON*</small>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed perferendis saepe, adipisci quae sint aperiam esse, placeat veritatis rem, dolores quibusdam eum autem deserunt! Nam ipsa ex, neque quae similique.</p>
      </div>
    </div>
    <div class="announcement, sub-sec">
      <div class="indented">
        <h3>Announcement 3</h2>
        <small>Posted on: *insert date*</small><br>
        <small>Posted by: *PERSON*</small>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed perferendis saepe, adipisci quae sint aperiam esse, placeat veritatis rem, dolores quibusdam eum autem deserunt! Nam ipsa ex, neque quae similique.</p>
      </div>
    </div>
    <div class="announcement, sub-sec">
      <div class="indented">
        <h3>Announcement 4</h2>
        <small>Posted on: *insert date*</small><br>
        <small>Posted by: *PERSON*</small>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed perferendis saepe, adipisci quae sint aperiam esse, placeat veritatis rem, dolores quibusdam eum autem deserunt! Nam ipsa ex, neque quae similique.</p>
      </div>
    </div>
  </div>
  <div class="footer">
    <div style="text-align:left; padding-left:10px;"><a href="http://www.utsc.utoronto.ca/cms/computer-science-1"><small>Faculty of Computer Science</small></a></div>
    <div style="text-align:left; padding-left:10px; padding-top:10px;"><small>Site Design by...</small></div>
  </div>
</body>
</html>
