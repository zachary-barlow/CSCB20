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
       <h1>Student Grades</h1>
      <!-- grades here -->
      <?php
        $sql_cols = "SHOW COLUMNS FROM grades";
        $res = mysqli_query($db,$sql_cols);

        $gq = "SELECT * from grades";
        $gr = mysqli_query($db, $gq);
        //$count = mysqli_num_rows($gq);
        // print all items in table
        echo '<div style="display:table; width:auto;background-color:#3E464A; border:1px solid white;border-spacing:5px; color: white; margin-left:8%; margin-top: 2%;">';
        while($r = mysqli_fetch_array($gr,MYSQLI_ASSOC)){
            echo '<div style="display:table-row;width:auto;">';
            while($row = mysqli_fetch_array($res)){
                echo '<div style="display: table-column; float:left; width: 100px;">' . $row['Field']."</div>";
            }
            echo "</div>";
            echo '<div style="display:table-row;width:auto;">';
            foreach ($r as $key ) {
              echo '<div style="display: table-column; float:left; width: 100px; background-color: #62A6CB; color: black">' . $key . '</div>';
            }
            echo '</div><br>';
        }
        echo "</div>";
      ?>
     </div>
   </div>
 </body>
 </html>
