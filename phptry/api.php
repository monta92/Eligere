<?php
  $host='localhost';
  $user='pnpadmin';
  $password='PnProot5806';
  $connection = mysql_connect($host,$user,$password);
  $fullname = $_POST['a'];
  $id = $_POST['b'];
  $reg_date = $_POST['c'];

    
  if (($_GET["getpost"]) == "postItem");
  {
        $dbconnect = @mysql_select_db('inventory_pnp', $connection);
        $query = "INSERT INTO `inventory_pnp`.`item` (`fullname`)
                  VALUES ('$fullname');";
        mysql_query($query, $connection) or die(mysql_error());
        echo $query;
  }
       /*
else {
,'$reg_date','$id'
, `id`, `reg_date`
             }
       */
?>
