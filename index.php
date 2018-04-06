<?php
   include('session.php');
   session_start();
?>
<html>
<head>
  <link type="text/css" href="style.css" rel="stylesheet">
  <link type="text/css" href="index.css" rel="stylesheet">
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
          </li>';
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
                <li><a href="ProblemSets.php">Problem Sets</a></li>
                <li><a href="Solutions.php">Solutions</a></li>
                <li><a href="prof_anon.php">Anonymous Feedback</a></li>
            </ul>
          </li>
          <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
          <li class="dropdown"><a href="#">Grades</a>
          <ul class="dropdown-content">
            <li><a href="prof_grades.php">All Grades</a></li>
            <li><a href="ViewRemarks.php">Re-Marks</a></li>
            <li><a href="EditMarks.php">Edit Marks</a></li>
          </ul>
          </li>';
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
                <li><a href="ProblemSets.php">Problem Sets</a></li>
                <li><a href="Solutions.php">Solutions</a></li>
                </ul>
          </li>
          <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
          <li class="dropdown"><a href="#">Grades</a>
          <ul class="dropdown-content">
            <li><a href="ta_marks.php">All Grades</a></li>
            <li><a href="ViewRemarks.php">Re-Marks</a></li>
            <li><a href="EditMarks.php">Edit Marks</a></li>
          </ul>
          </li>';
    }
   ?>
   <li><a href="CourseDownloads.php">Course Downloads</a></li>
   <li><a href = "logout.php">Sign Out</a></li>
   </ul>
   </div>
  <div class="main-sec">
    <div class="sub-sec">
      <h5 style="color: grey;margin-left: 15px;">Welcome <?php echo $firstname;?></h5>
    </div>
    <div class="sub-sec">
      <h1>CSCB20 &#8211; Introduction to Databases and Web Applications</h1>
      <h5 style="color: grey; margin-left: 5%; margin-bottom: -8px;">Course Overview</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <div class="sub-sec">
      <h3>Instructor Information</h3>
      <ul>
        <li>Instructor: A. Attarwala</li>
        <li>Lecture: Mondays 9am - 11am in SW319</li>
        <li>Email: abbas.attarwala@utoronto.ca</li>
      </ul>
    </div>
    <div class="calender, sub-sec">
      <h1>Course Calender</h1>
      <hr>
      <iframe src="https://calendar.google.com/calendar/embed?title=CSCB20&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=ztbarlow66%40gmail.com&amp;color=%2329527A&amp;ctz=Europe%2FLondon" style="border-width:0; margin-left:0.5%" width="99%" height="600px" frameborder="0" scrolling="no"></iframe>
    </div>
  </div>

  <div class="footer">
    <div style="text-align:left; padding-left:10px;"><a href="http://www.utsc.utoronto.ca/cms/computer-science-1"><small>Faculty of Computer Science</small></a></div>
    <div style="text-align:left; padding-left:10px; padding-top:10px;"><small>Site Design by Zachary Barlow & Megan Kun</small></div>
  </div>
</body>
</html>
