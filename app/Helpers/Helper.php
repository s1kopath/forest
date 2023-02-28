<?php

if (!function_exists('refferel_bonus')) {
    function refferel_bonus()
    {
        return 1; //1$
    }
}

if (!function_exists('registration_bonus')) {
    function registration_bonus()
    {
        return 20; //20$
    }
}

if (!function_exists('email_mask')) {
    function email_mask($email)
    {
        $em   = explode("@", $email);
        $name = implode('@', array_slice($em, 0, count($em) - 1));
        $len  = floor(strlen($name) / 2);

        return substr($name, 0, $len) . str_repeat('*', $len) . "@" . end($em);
    }
}

if (!function_exists('otp_generator')) {
    function otp_generator()
    {
        $digits = 5;
        return rand(pow(10, $digits - 1), pow(10, $digits) - 1);
    }
}

