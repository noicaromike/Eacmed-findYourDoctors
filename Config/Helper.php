<?php


class Helper
{
    public function sanitizeData($data)
    {
        
        foreach ($data as $key => $value) {
            $data[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
        }
        return $data;
    }
    
}
