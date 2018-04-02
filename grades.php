<?php
  include("session.php");
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
       <li><a href="#">Home Page</a></li>
       <li><a href="announcements.html">Announcements</a></li>
       <li class="dropdown"><a href="#">Course Materials</a>
         <ul class="dropdown-content">
           <li><a href="./pdfs/Syllabus.pdf">Syllabus</a></li>
           <li><a href="LectureSlides.html">Lecture Slides</a></li>
           <li><a href="Assignments.html">Assignments</a></li>
           <li><a href="Labs.html">Labs</a></li>
           <li><a href="ProblemSets.html">Problem Sets</a></li>
           <li><a href="Solutions.html">Solutions</a></li>
           <li><a href="https://docs.google.com/forms/d/e/1FAIpQLSevS2OIlHblbgb1Cd_3aBoLrRGqCLDhfKo5wRFh4Mj4Pq-rrA/viewform?usp=sf_link">Anonymous Feedback</a></li>
         </ul>
       </li>
       <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
       <li class="dropdown"><a href="grades.php">Grades</a>
       <ul class="dropdown-content">
         <li><a href="https://markus.utsc.utoronto.ca/cscb20w18/?locale=en">Markus</a></li>
         <li><a href="#">All Grades</a></li>
       </ul>
       </li>
       <li><a href="CourseDownloads.html">Course Downloads</a></li>
       <li><a href = "logout.php">Sign Out</a></li>
     </ul>
   </div>

   <div class="main-sec">
     <div class="sub-sec">
       <div>Name:<?php echo $firstname $lastname;?></div>
     </div>
     <div class="sub-sec" id="grades">
      <!-- grades here -->
      <?php
        $gq = "SELECT * from grades where id=$result";
        $cq = "SHOW COLUMNS FROM grades"
        $gr = mysqli_query($db, $gq);
        $r = mysqli_fetch_array($gr, MYSQLI_ASSOC);
        $result = mysqli_query($db,$cq);
        // get column names (all projects/quizzes/test grades)
        $columns = array();
        while($row = mysqli_fetch_array($result)){
            $columns[] += $row["Field"];
        }
        for($i = 0; $i <$numrows; $i++) {
          //select statement
          $sql = "SELECT $columns[i] FROM grades WHERE id=$result";
          $query = mysqli_query($db, $gq);
          $res = mysqli_fetch_array($gr, MYSQLI_ASSOC);
          echo '<h5>' . $columns[i] . ':   ' . $res . '</h5><br>';
        }
      ?>
     </div>
   </div>
 </body>
 </html>
