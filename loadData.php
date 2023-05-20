<?php

$con = mysqli_connect("localhost","root","","crud") or die("Connection failed");
$query = "SELECT * FROM tbl_student";

$sql = mysqli_query($con,$query) or die("Query Unsuccessful");

$output = "";


if (mysqli_num_rows($sql)) {
    while ($row = mysqli_fetch_assoc($sql)) {
        $output .="<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['fname']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['phone']}</td>
                    <td>
                    <a href='edit.php?id={$row["sid"]}' class='btn btn-primary'>Edit</a>
                    <a href='delete.php?id={$row["sid"]}' class='btn btn-danger'>Delete</a>
                    </td>
                </tr>";
    }
}
else{
    echo "<h2>No Record Found</h2>";
}


mysqli_close($con);
echo $output;





?>