<?php
   include('session.php');
   session_start();
?>
<html>
<head>
  <link type="text/css" href="style.css" rel="stylesheet">
  <link type="text/css" href="LectureSlides.css" rel="stylesheet">
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
              <li><a href="#">Lecture Slides</a></li>
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
              <li><a href="#">Lecture Slides</a></li>
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
              <li><a href="#">Lecture Slides</a></li>
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
    }
   ?>
   <li><a href="CourseDownloads.php">Course Downloads</a></li>
   <li><a href = "logout.php">Sign Out</a></li>
   </ul>
   </div>
  <div class="main-sec">
    <div class="sub-sec">
      <h1>Lecture Slides</h1>
    </div>
    <div class="sub-sec">
      <div class="indented">
        <h3>Lecture 1 : (DATE)</h3>
        <p>Slides : <a href="./pdfs/B20Week1.pdf">B20Week1.pdf</a><br><a href="./pdfs/B20Week2.pdf" style="margin-left: 50px;">B20Week2.pdf</a></p>
        <hr>
        <h3>Readings</h3>
        <ol>
          <li>What is a database? Very high level introduction to a Database : http://web.calstatela.edu/library/whatisadatabase.html</li>
          <li>A basic tutorial on SQL : https://www.w3resource.com/sql/tutorials.php</li>
          <li>(Basic introduction to SQL) : https://www.w3schools.com/sql/</li>
          <li>(DIfference between a Primary and a Foreign Key) : https://www.essentialsql.com/what-is-the-difference-between-a-primary-key-and-a-foreign-key/</li>
        </ol>
      </div>
    </div>
    <div class="sub-sec">
      <div class="indented">
        <h3>Lecture 2 : (DATE)</h3>
        <p>Slides : <a href="./pdfs/cscb20Week2.pdf">cscb20Week2.pdf</a></p>
        <hr>
        <h3>Readings</h3>
        <ol>
          <li>Examples on joins and other operations using relational algebra : http://www.cs.toronto.edu/~faye/343/f07/lectures/wk3/03_RAlgebra.pdf</li>
          <li>http://people.cs.pitt.edu/~chang/156/05algebra.html</li>
          <li>Very good examples on the different kinds of join and other operations on relatinal algebra : https://courses.cs.washington.edu/courses/cse444/10sp/lectures/lecture16.pdf</li>
        </ol>
      </div>
    </div>
    <div class="sub-sec">
      <div class="indented">
        <h3>Lecture 3 : (DATE)</h3>
        <p>Slides : <a href="./pdfs/cscb20Week3and4.pdf">cscb20Week3and4.pdf</a><br><a href="./pdfs/cscb20Week3.pdf" style="margin-left: 50px;">cscb20Week3.pdf</a></p>
        <hr>
        <h3>Readings</h3>
        <ol>
          <li>http://www.cs.cornell.edu/projects/btr/bioinformaticsschool/slides/gehrke.pdf</li>
          <li>https://www.tutorialspoint.com/dbms/relational_algebra.htm</li>
        </ol>
      </div>
    </div>
    <div class="sub-sec">
      <div class="indented">
        <h3>Lecture 4 : (DATE)</h3>
        <hr>
        <h3>Readings</h3>
        <ol>
          <li>https://stackoverflow.com/questions/8696383/difference-between-natural-join-and-inner-join</li>
          <li>https://www.w3resource.com/sql/joins/natural-join.php</li>
          <li>https://stackoverflow.com/questions/1018822/inner-join-on-vs-where-clause</li>
        </ol>
      </div>
    </div>
  </div>
    <div class="footer">
      <div style="text-align:left; padding-left:10px;"><a href="http://www.utsc.utoronto.ca/cms/computer-science-1"><small>Faculty of Computer Science</small></a></div>
      <div style="text-align:left; padding-left:10px; padding-top:10px;"><small>Site Design by Zachary Barlow & Megan Kun</small></div>
    </div>
</body>
</html>
