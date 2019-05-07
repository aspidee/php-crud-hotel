<?php

  $servername = "localhost";
  $username = "root";
  $password = "aspideee";
  $dbname = "Prova1";

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_errno) {

    echo $conn->connect_error;
    return;
  }

  $sql = "
          SELECT pagamenti.status, pagamenti.price
          FROM pagamenti
          WHERE status LIKE 'pending'
          ORDER BY price DESC
  ";
  $result = $conn->query($sql);
  // var_dump($result); die();

  $res = [];
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
      // var_dump($row); echo "<br>";
      $res[] = $row;
    }
  } else {

    echo "0 results";
  }
  $conn->close();

  // var_dump($res);

  echo json_encode($res);


 ?>
