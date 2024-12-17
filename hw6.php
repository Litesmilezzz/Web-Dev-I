<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href=""> 
  <!-- ----------------------------------
            BIS1523/BIS2523 Documentation
   Name:
   Netid:
   Date:
   
   Variables used:
      <variable name>  <description of data variable will hold>
  
   -------------------------------------  -->
</head>
<body>


<? 
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

function find_max($n1, $n2, $n3){
    if ($n1 > $n2 and $n1 > $n3){
        return $n1;
    }

    elseif ($n2 > $n3){
        return $n2;
    }
    else {
        return $n3;
    }
}
print "Max number entered is: ".find_max($n1, $n2, $n3);
?>
</body>
</html>
