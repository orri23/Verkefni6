<?php
  
	
  $url = "http://apis.is/petrol";
  //slóð á API sem skilar JSON
	$json = file_get_contents($url);
  // JSON sótt úr API 
  $json_array = json_decode($json, true);
  
 echo "<pre>";
  print_r($json_array);
  echo "</pre>";


?>
<!DOCTYPE html>
<html>
  <head> 
      <title>Bensínstöðvar</title>
  </head>
<body>


<table>
      <tr>
         <th>Bensínstöð</th>
         <th>bensin95</th>
         <th>Dísel</th> 
      </tr>
      
      <?php
      
        foreach ($json_array['results'] as $key => $value) {
    
       echo "<th>" . $value['company'] . "</th>";
      
       echo "<th>" . $value['bensin95'] . "</th>";
      
       echo "<th>" . $value['diesel'] . "</th>";

  }
      ?>
</table>
</body>
</html>