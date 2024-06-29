<?php
$conn1 = mysqli_connect("localhost","root","","crud") or die("connection failed");

$sql = "SELECT * FROM  student";

$result = mysqli_query($conn1, $sql) or die("sql query faild");
$output = "";
if(mysqli_num_rows($result)> 0){

    $output ="<table border ='1' width='100%' cellspacing='0' cellpadding='10px'
    <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Address</th>
    <th>Subject Code</th>
    <th>Phone NO.</th>
    </tr>";

    while($row = mysqli_fetch_assoc($result)){ // ye jo loop hai resul name ke variable chale ga 
        $output .= "<tr>
        <td>{$row['sid']}</td>
        <td>{$row['sname']}</td>
        <td>{$row['saddress']}</td>
        <td>{$row['sclass']}</td>
        <td>{$row['sphone']}</td>
        </tr>";
    }
        $output .= "</table>";
        mysqli_close($conn1);

        echo $output; // ye data return ho jai ga return wali file me
}
else{

echo"<h2>no  record found.</h2>";
}

?>