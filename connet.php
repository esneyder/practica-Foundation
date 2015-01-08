<?php
   $mongo = new  MongoClient();
$db = $mongo->selectDB("practica");
$add_persona=$mongo->selectCollection($db,"persona");
  ?>