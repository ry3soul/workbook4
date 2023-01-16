//sql and bootstrap table 
// add information to table from sql


if (mysqli_num_rows($result) > 0) {    
        while($row = mysqli_fetch_array($result)) {
            echo "<tr> ";
            echo " <td>" . $row["id"] . "</td>";
            echo " <td>" . $row["name"] . "</td>";
            echo " <td>" . $row["region"] . "</td>";
            echo " <td>" . $row["value"] . "</td>";
            echo "</tr>\n";       // Add a newline at the end
        }
    } else {
        echo "0 results";
    }
			mysqli_close($conn);	// remember to close db connection

