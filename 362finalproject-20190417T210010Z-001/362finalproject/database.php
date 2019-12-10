<?php
   $dataHost = 'localhost:3036';
   $dataUser = 'root';
   $dataPass = 'toor';
   
   $conn = mysql_connect($dataHost, $dataUser, $dataPass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT  FROM ';
   mysql_select_db('DB NAME');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "{$row['emp_id']}  <br> ".
         "{$row['emp_name']} <br> ".
         "{$row['emp_salary']} <br> ".
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>