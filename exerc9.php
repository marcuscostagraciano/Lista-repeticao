<?php

for ($i=1; $i<=5; $i+=0.1)
    {$x=$i;
    
    $y= (3+(2*$x)+(6*$x**2))/(1+(9*$x)+(16*$x**2));

    print "O valor de Y, para X=$i é $y\n";    
    }