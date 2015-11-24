<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Arrays inside of Arrays</title>
    <meta charset="utf-8"/>
    <style>
      @import url(https://fonts.googleapis.com/css?family=Hind);

      body {
        font-family: 'Hind', sans-serif;
        font-size: 1.1em;
      }
      table, td { border: 1px solid; padding: 4px; }
      th { background-color: #aabbcc; padding: 4px; }

      tr:nth-child(odd) {
          background-color: #ccbbaa;
      }
    </style>
  </head>
  <body>

    <div id="content">
<?php

    $customers = array("status" => "success", "msg" => "Retrieved 3 customers",
        "customers" => array(
            array("first_name" => "Arron", "last_name" => "Ferguson", "email" => "arron_ferguson@bcit.ca"),
            array("first_name" => "Jim", "last_name" => "Parry", "email" => "jim_parry@bcit.ca"),
            array("first_name" => "Terri", "last_name" => "Carde", "email" => "terri_carde@bcit.ca")
        ));

    // http://php.net/manual/en/function.json-encode.php
    $json =  json_encode($customers, JSON_FORCE_OBJECT);

    // show it as JSON in text form
    echo $json;

    // http://php.net/manual/en/function.json-decode.php
    // true
    $stuff = json_decode($json, true);

    var_dump($stuff);

    echo "<p>" . $stuff['status'] . "</p>";
    echo "<p>" . $stuff['msg'] . "</p>";

    $customers = $stuff['customers'];

    echo "<table><tr><th>First Name</th><th>Last Name</th><th>Email</th></tr>";
    foreach($customers as $key => $customer) {
        echo "<tr><td>" . $customer['first_name']
            . "</td><td>" . $customer['last_name']
            . "</td><td>" . $customer['email']
            . "</td></tr>";
    }
    echo "</table>";

?>
    </div>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>
        /*<![CDATA[*/
        $(document).ready(function() {


        });
        /*]]>*/
    </script>

  </body>
</html>
