<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Transaction</title>
    <link rel="stylesheet" href="style3.css">
    
        
        
</head>
<body>
    <div class="main">
        <h1> Hey Shikha ! Have a look of your tansaction history</</h1>
        <div class="center">
            <div class="table-data">


       <table>
        <thead>
        <tr>
            <th> Sr No.</th>
            <th> Name</th>
            <th> Email</th>
            <th> Contact No</th>
            <th> Account No</th>
            <th> Amount</th>
            <th> Date</th>
            <th> Time</th>
        </tr>
         </head>
          <tbody>
        

          <?php
          $conn=mysqli_connect('localhost','root','','sparks');
          $sql="SELECT * FROM trans_detail";
          $result=mysqli_query($conn,$sql);
          $nums=mysqli_num_rows($result);

    
           while($row = mysqli_fetch_assoc($result)){
            ?>

            <tr>
            <td><?php echo $row['id']; ?> </td>
            <td><?php echo $row['pname']; ?> </td>
            <td><?php echo $row['email']; ?> </td>
            <td><?php echo $row['contact']; ?> </td>
            <td><?php echo $row['account']; ?> </td>
            <td><?php echo $row['amount']; ?> </td>
            <td><?php echo $row['Date']; ?> </td>
            <td><?php echo $row['Time']; ?> </td>
           <?php
        }
           ?>
            </tbody>
            </table>
         </div>
       </div>
    </div>
</body>
</html>