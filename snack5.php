<!-- Snack 5
 Creare un array contenente qualche alunno di un’ipotetica classe.
 Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
 Stampare Nome, Cognome e la media dei voti di ogni alunno.
-->

<?php 
     $studentsArray = [
        [
            'name' => 'Paperino',
            'lastname' => 'Rossi',
            'vote' => [ 7, 7, 8, 9, 9, 7 ],
        ],
          [
            'name' => 'Pluto',
            'lastname' => 'Bianchi',
            'vote' => [ 6, 4, 5, 6, 7, 8 ],
        ],
          [
            'name' => 'Pippo',
            'lastname' => 'Verdi',
            'vote' => [ 1, 4, 3, 3, 1, 4 ],
        ],
    ];


    for($i=0; $i < count($studentsArray); $i++){
        ?>
        <h3>
            <?php echo $studentsArray[$i]['name']?>
            <?php echo $studentsArray[$i]['lastname']?>
        </h3>
        <?php

          $allVote = 0;
          
          for($index = 0; $index < count($studentsArray[$i]['vote']); $index++ ){
              $allVote += $studentsArray[$i]['vote'][$index]; 

        }
           $mediaVote = $allVote / 6 ; 
           echo $mediaVote;
    }
?>





