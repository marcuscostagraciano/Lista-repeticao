<?php

print "Digite o número para fatoração: ";
$numero= (float) fgets(STDIN);

$numerofatoracao=1;

for ($i=$numero; $i>0; $i--)
    {$numerofatoracao= $numerofatoracao*$i;    
}

print "A fatoração resultou em: $numerofatoracao";