<html>
    <head>
        <title>Fetch and show data from the database</title>
    </head>
    <body>
        <table border = "2">

            <tr>
                <th>Full Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Message</th>
            </tr>


<?php
include("connection.php");
error_reporting(0);
$query = "select * from form";
$data = mysqli_query($conn,$query);
$total = mysqli_num_rows($data);



if($total!=0){
    while($result=mysqli_fetch_assoc($data))
    {
        echo  "
        <tr>
        <td>".$result['fname']."</td>
        <td>".$result['email']."</td>
        <td>".$result['phone']."</td>
        <td>".$result['message']."</td>
        ";
    }
}
else{
    echo "No records found";
}

?>

       </table>
    </body>
</html>