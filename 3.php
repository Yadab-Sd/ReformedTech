<?php

  $conn = new mysqli("localhost", "root", "", "reformedtech");
  $obj = $conn -> query("SELECT campaigns.id,
                                campaigns.name,
                                landers.id,
                                conversions.revenue
                          FROM
                                conversions
                          JOIN campaigns,
                               landers
                          WHERE 1
                          ");

  $obj2 = $conn -> query("SELECT
                                sum(conversions.revenue)
                          FROM
                                conversions
                          WHERE 1
                          ");

  $count = $conn -> query("SELECT * FROM landers");

  
  print_r($obj2 -> fetch_array()[0]);
  echo "\n".$count -> num_rows;
  echo $conn -> error;
 ?>
