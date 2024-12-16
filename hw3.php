<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="hw03.css"> 
  <!-- ----------------------------------
            BIS1523/BIS2523 Documentation
   Name:
   Netid:
   Date:
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
<?
$submit = $_POST['submit'];
$name = $_POST['name'];

$exam1 = $_POST['exam1']; 
$exam2 = $_POST['exam2'];
$exam3 = $_POST['exam3'];

$hw1 = $_POST['hw1'];
$hw2 = $_POST['hw2'];
$hw3 = $_POST['hw3'];
$hw4 = $_POST['hw4'];
$hw5 = $_POST['hw5'];

$examAVG = ($exam1 + $exam2 + $exam3)/3;
$hwAVG = ($hw1 + $hw2 + $hw3 + $hw4 + $hw5)/5;

$finalAVG = ((($hwAVG)*0.15) + ($examAVG*0.85));

print "<h1 style=text-align:left;> Homework 3 - Grade Report for $name </h1> 
        <h2>Your final average is: ".number_format($finalAVG,2);
        
print        "</h2>Exam Average: ".number_format($examAVG,2);
print        "<br><br>Homework Average: ".number_format($hwAVG,2);

   
   

      ?>
</head>
<body>

</body>
</html>
