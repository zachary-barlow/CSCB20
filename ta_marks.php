<?php
  include("session.php");
  session_start();
?>

 <html>
 <head>
   <link type="text/css" href="style.css" rel="stylesheet">
 </head>
 <body>
  <?php
    $sql2 = "SELECT * FROM users WHERE username='$login_session'";
    $cr = mysqli_query($db,$sql2);
    $row2 = mysqli_fetch_array($cr,MYSQLI_ASSOC);

    if ($row2['type'] == 2) {
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
          </li>
          <li><a href="CourseDownloads.php">Course Downloads</a></li>
          <li><a href = "logout.php">Sign Out</a></li>
        </ul>
      </div>';
    } else {
      die ("Not permitted <a href='index.php' style='color:blue'> Go to homepage </a>");
    }

  ?>

   <div class="main-sec">
     <div class="sub-sec">
         <h5 style="color: grey;margin-left: 15px;">Name: <?php echo $firstname;?></h5>
     </div>
     <div class="sub-sec" id="grades">
      <!-- grades here -->
      <?php
        $gq = "SELECT * from grades";
        $gr = mysqli_query($db, $gq);
        //$count = mysqli_num_rows($gq);
        // print all items in table
        while($r = mysqli_fetch_array($gr,MYSQLI_ASSOC)){
            echo '<ul>';
            foreach ($r as $key ) {
              echo '<li style="display: inline; padding: 5px;">' .$key . '</li>';
            }
            echo '</ul><br>';
        }
      ?>
     </div>
       <div class="footer">
         <div style="text-align:left; padding-left:10px;"><a href="http://www.utsc.utoronto.ca/cms/computer-science-1"><small>Faculty of Computer Science</small></a></div>
         <div style="text-align:left; padding-left:10px; padding-top:10px;"><small>Site Design by Zachary Barlow & Megan Kun</small></div>
       </div>
   </div>
 </body>
 </html>
