<?php
// Multidimensional array
$superheroes = array(
    "spider-man" => array(
        "name" => "Peter Parker",
        "email" => "peterparker@mail.com",
    ),
    "super-man" => array(
        "name" => "Clark Kent",
        "email" => "clarkkent@mail.com",
    ),
    "iron-man" => array(
        "name" => "Tony Stark",
        "email" => "TonyStark@mail.com",
    )
);
 
// Printing all the keys and values one by one
echo $superheroes[0][1];
$keys = array_keys($superheroes);
print_r($superheroes);

for($i = 0; $i < count($superheroes); $i++) {

    echo $keys[$i] . "{<br>";
    foreach($superheroes[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";

    }
   echo "}<br>";


}
?>