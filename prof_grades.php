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
       <li><a href="prof_grades.php">Student Grades</a></li>
       <li><a href="CourseDownloads.html">Course Downloads</a></li>
       <li><a href = "logout.php">Sign Out</a></li>
     </ul>
   </div>

   <div class="main-sec">
     <div class="sub-sec">
       <div>Name:<?php echo $login_session;?></div>
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
   </div>
 </body>
 </html>
