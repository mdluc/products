<?php
require 'connection.php';

$search = isset($_GET['search']) ? $_GET['search'] : "";


if($search){
  $sql = "select * from `products` 
  where (name LIKE '$search%' OR name LIKE '%$search' OR name LIKE '%$search%') OR 
  (price LIKE '$search%' OR price LIKE '%$search' OR price LIKE '%$search%')";

  $result = $connect->query($sql) or die($connect->error());
  $result_count = $result->num_rows;
  
  if ($result_count > 0) {
      echo "<h2>You searched for <i>$search</i>:</h2>";
      echo "<h4>" . $result_count, $result_count > 1 ? " results " : " result ", " found" . "</h4>";
      echo '<table><tbody>';
      while ($row = $result->fetch_assoc()) {
          echo '
         <tr>
         <td>' . $row['name'] . '</td>
         <td>' . $row['price'] . '</td>
         <td>' . $row['description'] . '</td>
         </tr>
         ';
      }
      echo '</tbody></table>';
  
  } else {echo '<h2>There were no results for your search</h2>';}
}
