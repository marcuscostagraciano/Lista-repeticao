<?php

print "Digite o número de pessoas que deseja medir e calcular a altura: ";
$numeropessoas= (int) fgets(STDIN);
$vezes= 0;

while ($vezes<$numeropessoas)
    {print "Digite a altura em cm: ";
     $altura= (float) fgets(STDIN);
    
     $alturatotal+= $altura; 
     $vezes++;
    }

$mediaaltura= ($alturatotal/100)/$numeropessoas;
$mediaaltura = round ($mediaaltura, 3);

print "A média de altura foi: $mediaaltura";
