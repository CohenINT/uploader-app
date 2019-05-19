<?php

if(isset($_POST["submit"]))
{
//    $txt= $_POST["txt_convert_to"];
//    $hash= password_hash($txt,PASSWORD_DEFAULT);

//    echo "<h2>". $hash."</h2>"."</ br> <h1>".password_verify($txt,$hash)."</h1>";

// $date1= "9.5.2019";
// $date2 = date("d-m-Y");
// $days = (strtotime($date1)-strtotime($date2))/(60*60*24);
// echo $days;


// $arrayName = array('Name' =>"Moshe" ,"Age"=>"29","Email"=>"moshe22cohen@gmail.com" );


// extract($arrayName,EXTR_PREFIX_SAME,"wddx");
// echo "$Name,$Age,$Email";

// $arr= array("value1","value2","value3","value4");

// unset($arr[1]);
// $arr["kind"]="new2";
// echo $arr["kind"];

$age = array("Peter"=>"37", "Ben"=>"27", "Joe"=>"43");
ksort($age);
print_r($age);
}