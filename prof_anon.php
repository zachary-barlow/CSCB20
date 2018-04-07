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
      </li>
      <li><a href="CourseDownloads.php">Course Downloads</a></li>
      <li><a href = "logout.php">Sign Out</a></li>
    </ul>
  </div>
  <div class="main-sec">
    <div class="sub-sec">
      <h1> Anonymous Feedback </h1>
    </div>
    <?php
      $id_sql = "SELECT id from users where username='$login_session'";
      $id_query = mysqli_query($db,$id_sql);
      $id = mysqli_fetch_array($id_query,MYSQLI_ASSOC);
      $sql = "SELECT * from feedback WHERE id='$id' ";
      $item = mysqli_query($db,$sql);

      while($row = mysqli_fetch_array($item,MYSQLI_ASSOC)){
          $sql_col = "SHOW COLUMNS FROM feedback";
          $res = mysqli_query($db,$sql_col);
          echo '<div class="sub-sec">';
          echo '<h3>Feedback</h3>';
          echo '<div style="display:table; width:auto;background-color:#3E464A; border:1px solid white;border-spacing:5px; color: white; margin-left:10%">';
          echo '<div style="display:table-row;width:auto;"> ';
          while($rows = mysqli_fetch_array($res,MYSQLI_ASSOC)){
            if($rows['Field'] == 'id' || $rows['Field'] == 'usertype'){
            } else {
              echo '<div style="display: table-column; float:left; width: 200px;">' . $rows['Field']."</div>";
            }
          }
          echo '<br><div style="display: table-column; float:left; width: 200px; background-color: #ffffff;color:black; border:1px solid #62A6CB">' .$row['q1'] . '</div>';
          echo '<div style="display: table-column; float:left; width: 200px; background-color: #ffffff;color:black; border:1px solid #62A6CB">' .$row['q2'] . '</div>';
          echo '<div style="display: table-column; float:left; width: 200px; background-color: #ffffff;color:black; border:1px solid #62A6CB">' .$row['q3'] . '</div>';
          echo '<div style="display: table-column; float:left; width: 200px; background-color: #ffffff;color:black; border:1px solid #62A6CB">' .$row['q4'] . '</div>';
          echo '</div></div></div>';
      }
     ?>
  </div>
    <div class="footer">
      <div style="text-align:left; padding-left:10px;"><a href="http://www.utsc.utoronto.ca/cms/computer-science-1"><small>Faculty of Computer Science</small></a></div>
      <div style="text-align:left; padding-left:10px; padding-top:10px;"><small>Site Design by Zachary Barlow & Megan Kun</small></div>
    </div>
</body>
</html>
