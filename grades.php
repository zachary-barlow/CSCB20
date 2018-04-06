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
       <li class="dropdown"><a href="#">Grades</a>
       <ul class="dropdown-content">
         <li><a href="https://markus.utsc.utoronto.ca/cscb20w18/?locale=en">Markus</a></li>
         <li><a href="#">All Grades</a></li>
       </ul>
       </li>
       <li><a href="CourseDownloads.php">Course Downloads</a></li>
       <li><a href = "logout.php">Sign Out</a></li>
     </ul>
   </div>

   <div class="main-sec">
     <div class="sub-sec">
       <div>Name:<?php echo $login_session;?></div>
     </div>
     <div class="sub-sec">
      <!-- grades here -->
      <?php
        //$cq = "SELECT column_name FROM information_schema.columns WHERE table_name='grades'";

        //$result = mysqli_query($db,$cq);
        // get column names (all projects/quizzes/test grades)
      /*  $columns = array();
        while($row = mysqli_fetch_array($result)){
            echo '<p>' . $row["Field"] . '</p>';
        }*/
        /*$sql = "SHOW COLUMNS FROM grades";
        $result = mysqli_query($db,$sql);
        while($row = mysqli_fetch_array($result)){
            echo '<p>' . $row['Field'].":</p>";
        }*/

        $sql_id = "SELECT id FROM users WHERE username = '$login_session' ";
        $id_result = mysqli_query($db,$sql_id);
        $id = mysqli_fetch_array($id_result,MYSQLI_ASSOC);

        $sql_marks = "SELECT * FROM grades WHERE grades.id = $id[id]";
        $marks = mysqli_query($db,$sql_marks);
        $marks_row = mysqli_fetch_array($marks,MYSQLI_ASSOC);
        echo '<ul>';
        foreach ($marks_row as $key ) {
          echo '<li style="display: inline; padding: 5px;">' . $key . '</li>';
        }
        echo '</ul><br>';
      ?>

      <p><a href="RemarkRequest.php">Remark Request</a></p>
     </div>
   </div>
 </body>
 </html>
