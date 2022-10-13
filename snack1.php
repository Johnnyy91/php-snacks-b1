<!--Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<style>
    .red{
        background-color:red;
    }
</style>
<?php 
  $array = [
    [
        'team1' => 'Olimpia Milano' , 
        'team2' => 'Cantù',
        'points1' => 55 ,
        'points2' => 60 ,
    ],
      [
        'team1' => 'Miami' , 
        'team2' => 'Lakers',
        'points1' => 43 ,
        'points2' => 87 ,
    ],   
];

  for($i=0; $i<count($array); $i ++){
     ?>
     <div class="red"> 
        <?php echo $array[$i]['team1'] ?> -- <?php echo $array[$i]['team2'] ?> 
        <?php echo $array[$i]['points1'] ?> -- <?php echo $array[$i]['points2'] ?> 
    </div> 
     <?php
  }
?>
