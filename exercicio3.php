<?php

$numerodigitado=1;
$numerodenumeros=0;

while ($numerodigitado!=0)
    {print "Digite um número, ou digite 0 para parar: ";
     $numerodigitado= (float) fgets(STDIN);
    
    if ($numerodigitado!=0)
        {
            $numeros["$numerodenumeros"]=$numerodigitado;
            $numerodenumeros++;
        }    
    }

sort ($numeros);
print "\n"."O menor número foi: ".$numeros[0]."\n";
print "O maior número foi: ".$numeros[count ($numeros)-1]."\n";
