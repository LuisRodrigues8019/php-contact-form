<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
$code="code";
foreach ($pronouns as $value){
    if ($value==$pronouns[2]) {
        $code=$code.'s';
    };
    echo "</br>", $value, " ", $code;
    $code="code";

}

?>

<?php

$amount_of_lines = 1;

while ($amount_of_lines <= 120){
    echo "<br>", $amount_of_lines;

    $amount_of_lines ++; 
}

for ($amount_of_lines=1; $amount_of_lines <=120; $amount_of_lines++){
    echo "<br>", $amount_of_lines;
}

?>

<?php

$becode= array('Luis', 'Celine', 'Sex Machine', 'Gianluca', 'Gemma', 'Asad');
    foreach ($becode as $becode){
        echo "<br>", ($becode);
    }

?>




<br>


<select name="country">
<option value=""></option>
<?php
$countries= array('Portugal', 'Belgium', 'England', 'Austria', 'Canada', 'Japan', 'China', 'Ireland', 'Spain', 'France');
foreach($countries as $value){
echo "<option>". $value ."</option>";

}
?>
</select>

<?php
$countries= array(
    'PT' => 'Portugal', 
    'BE'=> 'Belgium', 
    'ENg'=> 'England', 
    'Au'=> 'Austria', 
    'CA' => 'Canada', 
    'JP'=> 'Japan', 
    'CH' => 'China', 
    'IR' =>'Ireland', 
    'Sp' => 'Spain', 
    'Fr' => 'France'
);


?>
<select name="country">
<option value="Portugal"></option>
<?php

foreach($countries as $value){
echo "<option>". $value ."</option>";

}
?>
</select>
    
</body>
</html>