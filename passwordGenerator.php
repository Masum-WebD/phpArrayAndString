<?php 
function generatePassword($length) {
    $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+';
    $password = '';

    $charCount = strlen($characters);
    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $charCount - 1);
        $password .= $characters[$randomIndex];
    }

    return $password;
}

$passwordLength = 12;
$generatedPassword = generatePassword($passwordLength);

echo "Generated Password: $generatedPassword\n";