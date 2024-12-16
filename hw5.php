<!doctype html>
<html lang="en">
<head>
  <title>  </title>
  <link rel="stylesheet" href="hw05.css"> 
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

    $starting = $_POST['starting'];
    $iterations = $_POST['iterations'];
    $growth = $_POST['growth'];
    print "<div>
            <h1> Population Growth </h1>
            Starting Population: ".number_format($starting,0)."
            <br>
            Growth rate: $growth.0%
            <br>
            <br>
            To perform another calculation <a href=\"hw05_input.html\">click here</a>
            <br>
        </div>
        <br>
    ";
    
    print "<table>
                <tr>
                    <th>Year</th>
                    <th>Population</th>
                    <th>Change</th>
                </tr>
            ";
$year = 2020;
$population = $starting;

    for ($i=0; $i < $iterations; $i++) {
        
        $change = $population * ($growth/100);
        
        $population += $change;
        
        $years = $year + $i;
        print "<tr>
                    <td>$years</td>
                    <td>".number_format($population,0)."</td>
                    <td>".number_format($change,0)."</td>
                </tr>";
    }
    print "</table>";  
?>

</body>
</html>
