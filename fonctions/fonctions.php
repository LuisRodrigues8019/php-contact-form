<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctions</title>
</head>
<body>
<?php

//methode explode c'est un separateur

$str= explode(" ", "According to a researcher (sic) at Cambridge University , it doesn't matter in what order the letters in a word are, the only important thing is that the first and last letter be at the right place. The rest can be a total mess and you can still read it without problem. This is because the human mind does not read every letter by itself but the word as a whole ."); //explode

foreach ($str as $st){
	echo str_shuffle($st). " ";
}

$luis= explode(",", "1,2,3,4,5,7,8,9,10");
foreach($luis as $value){
    echo str_shuffle($value). " ";
}
?>

<br>
<br>

<?php
//methode1
$firstname = 'sex machine';
 echo ucfirst($firstname);

 //methode 2 avec function

 function firstname($firstname){
    return ucfirst($firstname);
 }

 $firstname=('emilie');

 echo firstname($firstname);

?>
<br>
<?php
//display the current year echo date("l jS \of F Y h:i:s A");
$format= date("Y h:i:s");

function year($format){
    return ($format);
}
echo "<br><br> greenwitch time:".($format);

?>

<?php

//methode 1
$sum1= 5;
$sum2= 10;
function sum($sum1, $sum2){
    return ($sum1 + $sum2);
};

echo "<br><br> la somme est:".sum($sum1, $sum2);

//methode2

function sum1($sum3, $sum4){
    return ($sum3 + $sum4);
};

echo "<br><br> la somme est:".sum1(5, 5);

?>

<br>
<br>

<?php
//methode is numeric. mprove that function so that it checks whether the argument is indeed a Number

function number($number, $number2){

    if (is_numeric($number)&& is_numeric($number2)){
        echo ($number + $number2);
    }else{
        echo "Error: argument is not a number.";
    }
}
number(10, 'm');

?>
<br>
<br>

<?php
//Create a function that takes as argument a string of characters and returns an acronym made of the initials of each word

function acronyme($str){ //entre paranthese l'argument
$str= explode(" ", $str);
foreach ($str as $mot){
    echo ucfirst(substr($mot,0,1));// prend les de la fonction acronyme 0,1 il vas prendre icwt 0,2 incowetr
	
    }
}

acronyme('in code we trust');

?>
<br>
<br>
<?php
//Create a function that replaces the letters "a" and "e" with "æ"
function letter($letter){
    if (strstr($letter, 'ae')){ //condition strstr methode qui va chercher des caracteres dans un string qu'on precise dans la condition "ae"
    echo str_replace("ae", "æ", $letter); // remplace ae par æ
    }else{
        echo "error";
    }
}
letter("caecotrophie");

?>
<br>
<br>
<?php
//Create the opposite function, which replaces "æ" by "ae"
function letter1($letter1){
    if (strstr($letter1, 'æ')){
    echo str_replace("æ", "ae", $letter1);
    }else{
        echo "error";
    }
}
letter1("chænichthys");

?>
<br>
<br>
<?php
//Create a random words generator
function getrandomword(){
$fruits = array ('pomme', 'poire', 'banane', 'framboise', 'kiwi', 'mandarine', 'orange');
$fruits5 = [];
$fruits7 = [];

foreach ($fruits as $key => $value) {
    if(strlen($value) <= 5){
        array_push($fruits5,$value);
    }else{
        array_push($fruits7,$value);
    }
}
echo $fruits5[rand(0,count($fruits5)-1)]. " ".$fruits7[rand(0,count($fruits7)-1)];
}

getrandomword();

?>
<br>
<br>
<?php

//De-capitalize the string

function decapitalize($decapitalize){
    return strtolower($decapitalize);
}

$decapitalize=("STOP YELLING I CAN'T HEAR MYSELF THINKING !!");

echo decapitalize($decapitalize);

?>

<br>
<br>

<?php

//Make it DRY by creating a custom function calculate_cone_volume

function volumecone($rayon, $hauteur){
    $volume = $rayon * $rayon * 3.14 * $hauteur * (1/3);  
    return 'The volume of a cone which ray is' . $rayon. ' and height is' . $hauteur . ' = ' . $volume . ' cm<sup>3</sup><br />'; 
}

echo volumecone(4, 3);

?>


<?php
echo '</br>';
function feedback($message, $css_class='info'){
    return '<div class="'.$css_class.'">'.ucfirst($css_class).': '.$message.'</div><br>';
}

echo feedback('Incorrect email address');
echo feedback('Incorrect email', 'warning');
echo feedback('Incorrect email', 'error');


?>
<br>
<br>
<form action="">
<input type="submit" value="genarator">
</form>
</body>
</html>