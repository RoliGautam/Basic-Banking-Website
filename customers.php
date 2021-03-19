<?php

//connecting to database.. 
$severname = "localhost";
$username = "root";
$password = "";
$database = "spark";

$conn = mysqli_connect($severname, $username, $password, $database);


$sql = "SELECT * FROM `customers`";
$result=mysqli_query($conn, $sql);



?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="customers.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Basic banking website</title>
  </head>
  <body>

  <div id="bodyhead">
            <marquee  scrollamount="10px" behaviour="alternate" >
                <h4>The Spark Basic Banking Website</h4></marquee>
            </div>

             <div  id = "menu">
                <ul>
                <li><a  href="index.php">Home</a></li>
                <li><a href="customers.php">Customers</a></li>
                <li><a href="transferhistory.php">Transfer History</a></li>
                </ul>
             </div>


    
<div class="heading">
    <strong>   <u> <p>Customers Details</p></u>
</strong>
</div>

<div class="tab">

<table class="table" border="1" cellspacing="14px" cellpadding="8px">
 <tr>
<th>ID</th>
<th>NAME</th>
<th>EMAIL-ID</th>
<th>BALANCE</th>
</tr>

<tbody>
             <tr>
                         <?php 
                            $counter = 1;
                            while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                            	echo "
                            		<td>".$counter."</td>
                            		<td>".$row['Name']."</td>
                            		<td>".$row['email-id']."</td>
                            		<td>".$row['balance']."</td>
                            		
                            		</td></tr>
                            	";
                            	$counter += 1;
                            }
                            ?>
                    </tr>
                </tbody>

</table>

</div>




<footer id="foot">
                 <div id = "footer">
                 <p>Author : Roli Gautam<br>
                 "GRIP March Internship"</p>
             </div>
  
   </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
    -->
  </body>
</html>