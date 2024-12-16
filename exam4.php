<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="exam4.css"> 
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
    <div id="leftcol">
Enter state to search for: 
        <form method="post" action="exam4.php">
        <input type="text" name="states"> <br />
        <input type="submit" name="submit" value="submit">
    </form>
    </div>
    <div id="rightcol">
<? 

$states = $_POST['states'];
$event_list = file("airports.csv", FILE_IGNORE_NEW_LINES);

print "<h2>Airports found for $states</h2>";
     print "<h5> Name :: \t\tIata Code</h5>";
foreach ($event_list as $row) {
    //we need a variable for each field in the file
    list($file_code, $file_city, $file_state) =
        explode(",", $row);
        
    if ($file_state == $states){
        print "$file_city :: \t\t $file_code <br>";
        
    }
}
?>
    </div>
</body>
</html>
