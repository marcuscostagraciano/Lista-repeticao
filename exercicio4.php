<?php

for ($i=0; $i<=100; $i++)
    {if ($i%2==0)
        {$somapares+=$i;}

     else 
        {$somaimpares+=$i;}  
    }

print "A soma dos números pares entre 0 e 100 é: $somapares"."\n";
print "A soma dos números impares entre 0 e 100 é: $somaimpares";
