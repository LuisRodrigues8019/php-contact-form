<html>
  <head><title>variables</title></head>
  <body>
  	<?php
      $name="Luis";
      $age=40;
      $eyes="brown";
      $family= array(
        0 => 'Dos santos', 
        1 => 'Da Silva', 
        2 =>'Rodrigues');
    $hungry= true; 
    
    ?>
    <p>HI my name is <?php echo $name?></p>
    <p>Hi am <?php echo $age?> years old</p>
    <p>My eyes are <?php echo $eyes?> like the song brown sugar from Rolling Stones</p>
    <p>The first person in my family is <?php echo $family[0]; ?></p>
    
  </body>
</html> 