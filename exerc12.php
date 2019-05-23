<?php

print "Número de números para soma: ";
$qtdnumeros= (int) fgets(STDIN);

for ($i=1; $i<=$qtdnumeros; $i++)
    {$soma+=1/$i;}

print "O resultado da soma foi: $soma";