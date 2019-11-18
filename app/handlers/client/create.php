<?php

  require_once dirname(__DIR__, 3)."/config/initialize.php";

  $name = $_POST["name"] ?? null;
  $email = $_POST["email"] ?? null;
  $phonenumber = $_POST["phonenumber"] ?? null;
  $address = $_POST["address"] ?? null;
  $city = $_POST["city"] ?? null;
  $zipcode = $_POST["zipcode"] ?? null;

  if (
    !is_null($name) &&
    !is_null($email) &&
    !is_null($phonenumber) &&
    !is_null($address) &&
    !is_null($city) &&
    !is_null($zipcode)
  ) {
    
    if (preg_match("/^[\d ]*$/", $phonenumber) === 1) {
      
      if (!Client::find(["name" => $name])) {
        $client = new Client;
        $client->name = $name;
        $client->email = $email;
        $client->phonenumber = str_replace(" ", "", $phonenumber);
        $client->address = $address;
        $client->city = $city;
        $client->zipcode = $zipcode;
        $client->save();
        echo "success";
      } else {
        echo "exists";
      }      
      
    } else {
      echo "phonenumber";
    }
    
  } else {
    echo "empty";
  }