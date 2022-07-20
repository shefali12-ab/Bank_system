

 
<?php
  include 'nav.php';
  $servername="localhost";
$username="root";
$password="";
$database="customer";

//connection
$conn=mysqli_connect($servername,$username,$password,$database);
//connection was not successful
if(!$conn)
{
    die("failed to connect" . mysqli_connect_error()) ;
}
else{
    // echo 'connection successful';
}
$sql="SELECT * FROM `customers`" ;
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
// echo $num;
// echo "<h1> Transfer Money</h1>";
if($num>0)
{
   
    $table='
        
    <table class="cust-table" border=1>
                <tr>
                     <th>  ID </th>
                     <th>Name</th>
                     <th>Email</th>
                     <th>Balance</th>
                     

                </tr>
    
    
    ';
   
   
   
   
   
   
    while($row=mysqli_fetch_assoc($result))
    {
        // echo var_dump($row);
        $table .= '
        <tr>
                            <td>'.$row["ID"].'</td>
                             <td>'.$row["Name"].'</td>
                             <td>'.$row["Email"].'</td>
                             <td>'.$row["Balance"].'</td>
                             
                             
    
    
                        </tr>
       '
       
       ;
      }
      $table .= '</table>';
      echo $table;
        
  }
    
  
?>


<?php include('footer.php'); ?>
<link rel="stylesheet" href="css/index.css">
</body>
</html>