<?php

print "Digite quantos números deseja conferir: ";
$numeros= (int) fgets(STDIN);

for ($i=1; $i<=$numeros; $i++)
    {print "Digite um número: ";
     $numeronumero= (float) fgets(STDIN);
    
        if ($numeronumero<0)
            {$numerosnegativos++;}

        elseif ($numeronumero>0)
            {$numerospositivos++;}

        elseif ($numeronumero==0)
            {$zeros++;}         
    }

print "\n"."Quantidade de número negativos: $numerosnegativos"."\n";
print "Quantidade de número positivos: $numerospositivos"."\n";
print "Quantidade de número neutros(0): $zeros";
