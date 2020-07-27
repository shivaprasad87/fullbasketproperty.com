<?php

//for facebook

  $config = array(
  			"providers" => array(
                  "Facebook" => array(
                      "enabled" => true,
                      "keys"    => array ( "id" => "340605133112737", "secret" => "b74898261e547c845f79c03df4bd8c54" ),
                  )
              ),
              // if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
              "debug_mode" => (ENVIRONMENT == 'development'),
              "debug_file" => APPPATH . '/logs/hybridauth.log'
  );
?>