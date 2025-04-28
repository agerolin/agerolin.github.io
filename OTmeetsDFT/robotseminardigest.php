 <?php      

$servername = "mysql4.cc.jyu.fi";
$username = "geomeg";
$password = "qSZ1UaeVTWuh5w1g";
$dbname = "geomeg";
$i = 0;

$mysqli = new mysqli($servername, $username, $password, $dbname);
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL I: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

// Attempt select query execution
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed WW3: " . mysqli_connect_error());
}

	$today = date('Y-m-d', time());

$sql = "SELECT * FROM `Seminars`";

// $sql = "SELECT * FROM `Seminars` WHERE (`active`= 1) AND (`semdate` >= curdate()+INTERVAL DAYOFWEEK(curdate()) AND `semdate` < curdate()+INTERVAL DAYOFWEEK(curdate())+6 DAY) ORDER BY `Seminars`.`semdate` ASC";
$result = mysqli_query($conn, $sql);

$i =0;
$j=0;

	
      
 // Check connection
if(! $conn){
    die("ERROR: Could not connect. " . mysql_error());
}	

if (mysqli_num_rows($result) > 0) {				
	
	
					
   while($row = mysqli_fetch_assoc($result)) {
   
  			echo "Date: ".  $date . " Title " .  $row["title"] . "(" . $row["location"]. ")";

   }
}

	mail("augustogerolin@gmail.com","Digest test","test","test");


?>