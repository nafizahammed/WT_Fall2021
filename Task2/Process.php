<?php
   	//Get form data
	   $formdata = array(
	      'firstName'=> $_POST["firstName"],
	      'lastName'=> $_POST["lastName"],
          'age'=> $_POST["age"],
          'designation'=> $_POST["designation"],
          'preferred language'=> $_POST[preferred language"],
	      'email'=>$_POST["email"],
	      'password'=> $_POST["password"]
          'file'=> $_POST["file"]
	   );

     $existingdata = file_get_contents('data.json');
    
     $tempJSONdata = json_decode($existingdata);
     $tempJSONdata[] =$formdata;
     $jsondata = json_encode($tempJSONdata, JSON_PRETTY_PRINT);
	   
	if(file_put_contents("data.json", $jsondata)) {
	        echo "Data successfully saved <br>";
	    }
	   else 
	        echo "no data saved";

     $data = file_get_contents("data.json");
	 $mydata = json_decode($data);
     echo "my value: ".$mydata[1]->lastName. " My email is ".$mydata[1]->email;
for($i=0;$i<3;$i++)
{
    echo "<br>";
     echo $mydata[$i]->email;
}