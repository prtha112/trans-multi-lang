<?php

class trans 
{
    //gdfgffd
    private $local;
    private $lang;

    public function __construct() 
    {
        session_start();
    }

    public function langLocal(String $lang) 
    {
        $this->local = strtolower($lang);
    }

    public function setLang(String $lang = null): bool 
    {
        $_SESSION['local'] = $lang;
        if (isset($_SESSION['local'])) {
            $this->lang = $_SESSION['local'];
            return TRUE;
        }
        return FALSE;
    }

    public function getLang(): string 
    {
        if (!isset($_SESSION['local'])) {
            return $_SESSION['local'] = $this->local;
        } else {
            return $_SESSION['local'];
        }
    }

    private function getJsonlang(String $path): string 
    {
        $string = file_get_contents('lang/' . $this->getLang() . "/" . $path . '.json');
        return $string;
    }

    public function tr(String $path, String $lang): string 
    {
        $decode_data = json_decode($this->getJsonlang($path), TRUE);
        return $decode_data[0][$lang];
    }


    public function ClearSession() 
    {
        session_destroy();
    }

}

