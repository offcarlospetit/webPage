<?php

    function visitante($record) {
          $db_host = "instance-1";
          $db_username = "root";
          $db_password = "root";
          $db_name = "sitio";
          $db_table = "visita";
          $counter_page = "visit";
          $counter_field = "visit";
          $db = mysqli_connect ($db_host, $db_username, $db_password, $db_name) or die("Host o base de datos no disponible");

          $sql_call = "INSERT INTO ".$db_table." (".$counter_page.") VALUES ('". new \Date()."')";

          mysqli_query($db, $sql_call) or die("Error al introducir los datos");

        $sql_call = "SELECT count(*) FROM ".$db_table." ";
        $sql_result = mysqli_query($db, $sql_call) or die("Error en la petición SQL");
        $row = mysqli_fetch_assoc($sql_result);
        $x = $row;

        mysqli_close($db);
        return $x;
  }
?>