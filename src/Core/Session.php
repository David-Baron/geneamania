<?php 

session_start();

class Session
{
    public function getAttribute(string $attribute)
    {
        $value = in_array($attribute, $_SESSION) ? $_SESSION[$attribute] : null;
    }

    public function setAttribute(string $attribute, $value)
    {
        $_SESSION[$attribute] = $value;
    }
}