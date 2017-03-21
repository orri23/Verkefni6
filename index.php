<form action="api.php" method="post">
Image name: <input type="text" name="Name">
URL on the image you choose: <input type="text" name="URL">
<input type="submit" name="submit" value="Upload image">
</form>
	
<?php
	
	$myndlinkar = "http://tsuts.tskoli.is/2t/0210972769/Verkefni6/myndir.json";
	// vísar á skránna sem geymir linka af myndum frá netinu
	$json_array = file_get_contents($myndlinkar); 
	// JSON sótt úr myndir.json.

    $images = json_decode($json_array,true);
    //fylki 
	foreach ($images as $key => $value) { 

	}
?>