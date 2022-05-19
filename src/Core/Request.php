<?php 


class Request 
{
    private $request = [];

    public function get(string $param)
    {
        if (in_array($param, $this->request)) {
            return $this->request[$param];
        }

        return null;
    }
}