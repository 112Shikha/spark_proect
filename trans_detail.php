<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction Page</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <div class="trans-title">
        <h1> SHIKHA SHUKLA</h1>
        <h2> Welcome to your Account</h2>
        <h3> We are always ready to serve you!</h3>
    </div>
    <div class="trans-form">
        <form id="trans-form" method="post" action="">
            <input name ="pname" type="Text" class="form-control" placeholder="Enter Receivers name" required><br>
            <input name ="email" type="email" class="form-control" placeholder="Enter Receivers email" required><br>
            <input name ="contact" type="number" class="form-control" placeholder="Enter Receivers contact number" required><br>
            <input name ="account" type="Text" class="form-control" placeholder="Enter Receivers Account Number" required><br>
            <input name ="amount" type="number" class="form-control" placeholder="Enter Amount" required><br>
            
            <!--<input type="submit" class="form-control submit" value="SEND MONEY">-->
            <div class="button">
                <button type="submit" class="btn" name="submit" onclick="openPopup()">Send Money</button>
        </form>

    </div>
    <div class="popup" id="popup">
        <img src="https://e7.pngegg.com/pngimages/107/701/png-clipart-computer-icons-check-mark-symbol-symbol-miscellaneous-blue.png">
        <h2>Thank You !</h2>
        <p>
            The money is transferred successfully
        </p>
        <button type="button" onclick="closePopup()">OK</button>

    </div>
    <script>
        let popup=document.getElementById("popup");

        function openPopup(){
            popup.classList.add("open-popup");
        }
        function closePopup(){
            popup.classList.remove("open-popup");
        }
    </script>
    
      <?php
      //TO ESTABLISH CONNNECTION
      $conn=mysqli_connect('localhost','root','','sparks');
      if(isset($_POST['submit'])){
      
$name=$_POST["pname"];
$email=$_POST["email"];
$contact=$_POST["contact"];
$account=$_POST["account"];
$amount=$_POST["amount"];



$sql="INSERT INTO trans_detail(pname,email,contact, account, amount)
      VALUES('$name','$email','$contact','$account','$amount')";
 
  $res=mysqli_query($conn,$sql);
      if($res){
          ?>
          
          
        
        
        <?php
        }
        else{
        ?>
        <script>
            alert("Transaction unsuccessfull !")
        </script>
        <?php
        }
    }
    
           ?>
  </body>
</html>