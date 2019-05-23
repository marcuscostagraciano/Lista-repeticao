<?php

$menor=99999;
$maior=-99999;

print "Número de jogadores para comparação de altura: ";
$numjogadores= (int) fgets(STDIN);

for ($i=1; $i<=$numjogadores; $i++)
    {
        print "Inscrição do atleta: ";
        $inscricao= (float) fgets(STDIN);

        print "Altura em cm do atleta: ";
        $alturaatleta= (int) fgets(STDIN);

        if ($alturaatleta<$menor)
            {$alturamenor= $alturaatleta;
             $inscricaobaixo=$inscricao;
             $menor=$alturamenor;}

        if ($alturaatleta>$maior)
            {$alturamaior= $alturaatleta;
             $inscricaoalto=$inscricao;
             $maior=$alturamaior;}
        
$alturageral+=$alturaatleta;
$mediaaltura= $alturageral/$numjogadores;
}
$alturamenor= $alturamenor/100;
$alturamaior= $alturamaior/100;
$mediaaltura= $mediaaltura/100;


print "A inscrição do atleta mais baixo foi: $inscricaobaixo, e a sua altura é de: $alturamenor"."m\n";
print "A incrição do atleta mais alto foi: $inscricaoalto, e a sua altura é de: $alturamaior"."m\n";
print "A altura média foi de: $mediaaltura"."m\n";