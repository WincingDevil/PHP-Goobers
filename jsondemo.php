<?php
  // JSON string 
  $jsonStr=<<<EOM
 [{ "id":123, 
 "first_name":"John", 
 "last_name":"Doe", 
 "startDate":{"date":"2017-05-22 00:00:00.000000","timezone_type":3, "timezone":"America\/New_York"},
 "SSN":"111-22-3333"
},
{"id":456,
 "first_name":"Jane",
 "last_name":"Doe",
 "startDate":{"date":"2016-05-22 00:00:00.000000","timezone_type":3,"timezone":"America\/New_York"}, "SSN":"444-55-6666"
}]
EOM;
	// Convert JSON to Object
  $jsonObject = json_decode($jsonStr);
 // Loop through Object
  foreach($jsonObject as $key => $value) {
    echo $value->last_name . ", " . $value->first_name . " ". $value->startDate->date . "\n";
  }
print "=====\n";

  // Convert JSON string to Array (Add "true")
  $jsonArray = json_decode($jsonStr, true);
  foreach ($jsonArray as $key => $value) {
    print $value["last_name"] . ", " . $value["first_name"] . " " . $value["startDate"]["date"] . "\n";
  }
#var_dump($jsonArray);
?>