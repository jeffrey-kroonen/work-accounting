<?php

  require_once dirname(__DIR__, 3)."/config/initialize.php";

  $id = (int)$_POST["id"] ?? null;

  if (!is_null($id)) {
    
    $client = Client::find($id);
    
    if ($client) {
      
      $client->delete();
      echo "success";
      
    } else {
      echo "does not exists";
    }
    
  } else {
    echo "empty";
  }