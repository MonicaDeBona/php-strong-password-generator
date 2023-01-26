<?php
function randomPswGenerator($length)
{
    $characters = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+-=[]{},;.:";
    $randomPsw = '';
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = random_int(0, strlen($characters) - 1);
        $randomPsw .= $characters[$randomIndex];
    }
    return $randomPsw;
}
