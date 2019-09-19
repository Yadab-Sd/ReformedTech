<?php

  $conn = new mysqli("localhost", "root", "", "reformedtech");
  $obj = $conn -> query("SELECT campaign.id,
                                campaign.name,
                                lander.id,
                                conversations.revenue
                          FROM
                                conversations
                          JOIN campaign,
                               lander
                          WHERE 1
                          ");

  $obj2 = $conn -> query("SELECT
                                sum(conversations.revenue)
                          FROM
                                conversations
                          WHERE 1
                          ");

  $count = $conn -> query("SELECT * FROM lander");

  
  print_r($obj2 -> fetch_array()[0]);
  echo "\n".$count -> num_rows;
  echo $conn -> error;
 ?>
