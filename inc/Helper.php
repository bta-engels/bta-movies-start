<?php
class Helper
{
    public static function dump($data)
    {
        echo '<pre class="text-info">' . print_r($data, true) . '</pre>';
    }

    public static function vdump($data)
    {
        echo '<pre class="text-info">';
        var_dump($data);
        echo '</pre>';
    }
}
