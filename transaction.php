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
$sql="SELECT * FROM `transaction`" ;
$result=mysqli_query($conn,$sql);
$num=mysqli_num_rows($result);
// echo $num;
// echo "<h1> Transfer Money</h1>";
if($num>0)
{
   
    $table='
        
    <table class="cust-table" border=1>
                <tr>
                     <th>  S.mo </th>
                     <th>Sender</th>
                     <th>Reciever</th>
                     <th>Amount</th>
                     <th>Date and Time</th>

                </tr>
    
    
    ';
   
   
   
   
   
   
    while($row=mysqli_fetch_assoc($result))
    {
        // echo var_dump($row);
        $table .= '
        <tr>
                            <td>'.$row["S.no"].'</td>
                             <td>'.$row["Sender"].'</td>
                             <td>'.$row["Receiver"].'</td>
                             <td>'.$row["Amount"].'</td>
                             <td>'.$row["Date & Time"].'</td>
    
    
                        </tr>
       ';
      }
      $table .= '</table>';
      echo $table;
        
  }
    
  
?>



</body>
</html>