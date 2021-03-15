<?php

class Helper{

public function getLang()
{
    $uri = $_SERVER['REQUEST_URI'];
	$lang = (substr($uri , -3) == '-fa') ? 'fa' : 'en';
    return $lang;
}
public function getLangVars()
{
    $langVar = file_get_contents('./resources/lang/' . $this->getLang() . '.json');
    return $langVar;
}
}

?>