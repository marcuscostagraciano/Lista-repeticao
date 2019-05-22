<?php

print "Digite a quantidade de números para comparar: ";
$vezes= (int) fgets(STDIN);

if ($vezes==0)
    {print "Não há nenhum número para comparar";
     exit;}

elseif ($vezes<0)
    {print "Não há como comparar uma quantidade negativa de números";
     exit;}    

for ($i=1; $i<=$vezes; $i++)
    {  print "Digite o número: ";
        $numero= (float) fgets(STDIN);

$numnegativo[0]=0;  
        if ($numero<0)
            {$numnegativo[]=$numero;}

$numpositivo[0]=0;
        if ($numero>0)
             {$numpositivo[]=$numero;}

$zero[0]=0;
        if ($numero==0)
             {$zero[]=$numero;}   
    }

$qtdnegativos= (int) (count($numnegativo)-1);
$qtdpositivos= (int) (count($numpositivo)-1);
$qtdzeros= (int) (count($zero)-1);

if ($qtdnegativos>=1)
    {print "A quantidade de números negativos foi: $qtdnegativos\n";}

if ($qtdpositivos>=1)
    {print "A quantidade de números positivos foi: $qtdpositivos\n";}

if ($qtdzeros>=1)
    {print "A quantidade de números neutros(0) foi: $qtdzeros";}
