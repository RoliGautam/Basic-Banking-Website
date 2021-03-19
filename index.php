
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" 
    crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
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

            <div class="welcome">
               <strong> Welcome to 'The Spark Banking Website'</strong>
            </div>

        <div class="logo">
        <strong>The Spark Banking</strong> 
        <p> <h4><span style = "color:black"> "A way towards safe and secure transaction!"</span></h4>  </p>
        <br>
        </div>




<div class="cont">


<div class="row">

<div class="one">
    <img src="userlogo.png" alt="User">
    <br>

    <a href="createuser.php">
        <button class="btn"> <strong>Create User</strong> </button>
    </a>

</div>
<div class="one">
    <img src="moneytransfer.png" alt="Money transfer">
    <br>

    <a href="transfermoney.php">
        <button class="btn"> <strong>Transfer Money</strong> </button>
    </a>

</div>
<div class="one">
    <img src="historytransact.png" alt="History">
    <br>
    <br>
    
    <a href="transferhistory.php">
        <button class="btn"> <strong>Transaction History</strong> </button>
    </a>

</div>

</div>


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