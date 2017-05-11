<?php

class trans {

    public $local;
    public $lang;

    public function __construct() {
        session_start();
    }

    public function LangLocal(String $lang) {
        $this->local = $lang;
    }

    public function CheckSession(String $lang = null) {
        $_SESSION['local'] = $lang;
        if (isset($_SESSION['local'])) {
            $this->lang = $_SESSION['local'];
            return TRUE;
        }
        return FALSE;
    }

    public function GetSession() {
        if (!isset($_SESSION['local'])) {
            return $_SESSION['local'] = $this->local;
        } else {
            return $_SESSION['local'];
        }
    }

    public function trans_lang(String $path, String $lang) {
        $string = file_get_contents('lang/' . $this->GetSession() . "/" . $path . '.json');
        $decode_data = json_decode($string, TRUE);
        return $decode_data[0][$lang];
    }

    public function GetPathLang(String $path) {
        $string = file_get_contents('lang/' . $path . '.json');
        $json_a = json_decode($string, true);
        foreach ($json_a as $value) {
            $gettrans[] = $value;
        }
        return $gettrans;
    }

    public function ClearSession() {
        session_destroy();
    }

}

