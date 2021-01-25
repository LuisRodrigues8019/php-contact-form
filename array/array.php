<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$countries = array( 'Belgium', 'France' , 'Germany', 'Netherlands', 'Ukraine' ); 
$countries[] = 'England';
echo $countries[2];

echo '<pre>';
print_r($countries);
echo '</pre>';

var_dump($countries);



$family = array( 'Dos Santos', 'Rodrigues', 'Da Silva');
print_r ($family);

$recepies = array( 'mouse au chocolta', 'tortilla', 'caldeirada' );
print_r ($recepies);

$movies = array('point break', 'vanilla sky', 'matrix');
echo $movies [0];

$me = array (
    'firstname' => 'Luis',
     'lastname' => 'Rodrigues',
    'age' => '40', 
    'season' => 'summer',
     'footbal' => true,
     'hobbies' => array ('video games', 'paintball', 'music'),
     

     $mother = array (
        'firstname' => 'Rita' ,
        'lastname' => 'Dos Santos' ,
         'age' => '65',
        'hobbies' => array ('music', 'dance'),
    )

   

);
    

$soulmate = array (
    'firstname' => 'Monica',
    'lastname' => 'Rodrigues',
    'age' => '30',
    'hobbies' => array ('dance', 'music', 'movies'),

);


$child = array_intersect($me['hobbies'], $soulmate['hobbies']);

$child = array_merge($me['hobbies'], $soulmate['hobbies']);


echo '<pre>';
print_r($child);
echo '</pre>';


echo '<pre>';
print_r($me);
echo '</pre>';
$a= count ($me['hobbies']);
$b= count ($mother['hobbies']);
$total = $a + $b;
//echo count ($me['hobbies']);
//echo count ($mother['hobbies']);
echo $total;

$web_development= array(

    'frontend'=> array (''),
    'backend' => array (''),
);

array_push($web_development['frontend'],'xhtml', 'CSS', 'Flash', 'JavaScript');

array_push($web_development['backend'],'Ruby on Rails');


echo '<pre>';
print_r($web_development);
echo '</pre>';

echo '<pre>';
print_r(str_replace('xhtml', 'html', $web_development['frontend'], $i));
echo '</pre>';

echo '<pre>';
print_r(array_splice($web_development['frontend'],3,1));
echo '</pre>';

print_r($web_development['frontend']);


?>
</body>
</html>
