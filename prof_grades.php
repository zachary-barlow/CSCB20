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
       <li><a href="announcements.php">Announcements</a></li>
       <li class="dropdown"><a href="#">Course Materials</a>
         <ul class="dropdown-content">
           <li><a href="./pdfs/Syllabus.pdf">Syllabus</a></li>
           <li><a href="LectureSlides.php">Lecture Slides</a></li>
           <li><a href="Assignments.php">Assignments</a></li>
           <li><a href="Labs.html">Labs</a></li>
           <li><a href="ProblemSets.php">Problem Sets</a></li>
           <li><a href="Solutions.php">Solutions</a></li>
           <li><a href="prof_anon.php">Anonymous Feedback</a></li>
         </ul>
       </li>
       <li><a href="https://piazza.com/class/jcpjjp5l4bywd">Discussion Board</a></li>
       <li class="dropdown"><a href="#">Grades</a>
       <ul class="dropdown-content">
         <li><a href="#">Student Grades</a></li>
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
       <div>Name: <?php echo $firstname;?></div>
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
