<?php
require 'connection.php';

$sql = "select * from `products`";

$result = $connect->query($sql) or die($connect->error());
$number = 1;
$table='<table>
          <thead>
            <th>#id</th>
            <th>name</th>
            <th>price</th>
            <th>description</th>
            <th>operations</th>
          </thead>
          <tbody id="myTable">';


if($result){
  while($row=$result->fetch_assoc()){
      $id = $row['id'];
      $table.='<tr>
      <td>'.$number.'</td>
      <td>'.$row['name'].'</td>
      <td>'.$row['price'].'</td>
      <td>'.$row['description'].'</td>
      <td><button><a href="update.php?updateId='.$id.'">update</a></button>
          <button><a href="delete.php?deleteId='.$id.'">delete</a></button>
      </td>
      </tr>'; 
      $number++;
  }
}
$table.='</tbody></table>';

echo $table;

