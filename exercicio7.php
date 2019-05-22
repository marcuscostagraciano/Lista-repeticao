<?php

print "Digite a quantidade de tinta da caneta: ";
$tinta= (float) fgets(STDIN);

$qtdtinta= $tinta;

while ($qtdtinta>0){

print "\nDigite (S - para escrever) ou (N - para não escrever): ";
$escrever = fgetc(STDIN);

if ($escrever=="S" or $escrever=="s")
    {print "Enquanto tem tinta a caneta escreve...";
        $qtdtinta= $qtdtinta - (($tinta*2)/100);}       

elseif ($escrever=="N" or $escrever=="n")
    {   print "Você desisitu de escrever... ";
        print "Sobraram $qtdtinta de tinta";
        exit;}

}

print "\nSobraram $qtdtinta de tinta";
