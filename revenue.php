<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prac";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * from addcontract WHERE `Description`='Internet'";
$result = mysqli_query($conn, $sql);


if (mysqli_num_rows($result) > 0) {
  

    while ($row = mysqli_fetch_assoc($result)) {
        
        echo '<tr>
                <td>' . $row["Contract Id"] . '</td>
                <td>' . $row["Contract Name"] . '</td>
                <td>' . $row["Status"] . '</td>
                <td>' . $row["Contract Type"] . '</td>
                <td>' . $row["Start Date"] . '</td>
                <td>' . $row["End Date"] . '</td>
                <td>' . $row["Description"] . '</td>
              </tr>';
              
    }
    echo '</tbody></table>';
} else {
    echo "No data found.";
}

mysqli_close($conn);
?> 