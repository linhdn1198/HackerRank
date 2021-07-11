<?php
function superReducedString($s) {
    for ($i = 1; $i < strlen($s); $i++)
    {
        if ($s[$i - 1] == $s[$i])
        {
			$s = substr($s,0,$i - 1) . substr($s,$i + 1,strlen($s));
			$i = 0;
        }
		

    }
    
    if (strlen($s) == 0)
    {
        return 'Empty String';
    } else {
      return $s;  
    }
}


echo superReducedString('aaavvvvsssasc');
