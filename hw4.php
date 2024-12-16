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
<h1>Results</h1>
<?     



//input
$scale = $_POST['scale'];
$height = $_POST['height'];
$radius = $_POST['radius'];
//$capsule = $_POST['capsule'];

//data validation -- one if statgement per input
    $data_is_okay = TRUE;
    
    if (!is_numeric($radius)) {
        $data_is_okay == FALSE;
        print "Please enter a numeric value for temperature. <br>";
    }

    if (!is_numeric($height)) {
        $data_is_okay == FALSE;
        print "Please enter a numeric value for temperature. <br>";
    }

    if (!isset($scale)){
        $data_is_okay = FALSE;
        print "Please select a shape. <br>";
    }
    if ($data_is_okay) {
        
//process -- one calculation per radio button
    if ($scale == "Cylinder") {
        $result = (2*pi()*$radius*$height) + 2*pi()*$radius*$radius;
        print "The surface area of a cylinder with a radius of $radius and height $height is $results".number_format($result,2);
    }
    if ($scale =='Capsule'){
        $result = (2*pi()*$radius*$radius*$height) + (2*pi()*$radius*$height);
        print "The surface area of a capsule with a radius of $radius and height $height is $results".number_format($result,2);

    }
    if ($scale =='Cone'){
        $result = pi()*$radius*$radius + pi()*$radius*sqrt($radius*$radius + $height*$height);
        print "The surface area of a cone with a radius of $radius and height $height is $results".number_format($result,2);

    }
//output
///    print "The surface area of a con".number_format($result,2);
    }


?>

</body>
</html>
