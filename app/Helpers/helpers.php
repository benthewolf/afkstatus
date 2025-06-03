<?php

function removeCardFormat(string $card)
{
    return str_replace(' ', '', str_replace('-', '', $card));
}

function getCardType(string $card)
{
    $cardTypes = [
        'uatp' => '/^(?!1800)1\d{0,14}/',
        'amex' => '/^3[47]\d{0,13}/',
        'discover' => '/^(?:6011|65\d{0,2}|64[4-9]\d?)\d{0,12}/',
        'diners' => '/^3(?:0([0-5]|9)|[689]\d?)\d{0,11}/',
        'mastercard' => '/^(5[1-5]\d{0,2}|22[2-9]\d{0,1}|2[3-7]\d{0,2})\d{0,12}/',
        'dankort' => '/^(5019|4175|4571)\d{0,12}/',
        'instapayment' => '/^63[7-9]\d{0,13}/',
        'jcb15' => '/^(?:2131|1800)\d{0,11}/',
        'jcb' => '/^(?:35\d{0,2})\d{0,12}/',
        'maestro' => '/^(?:5[0678]\d{0,2}|6304|67\d{0,2})\d{0,12}/',
        'mir' => '/^220[0-4]\d{0,12}/',
        'visa' => '/^4\d{0,15}/',
        'unionpay' => '/^(62|81)\d{0,14}/',
    ];

    $cardUnformatted = removeCardFormat($card);

    foreach ($cardTypes as $type => $cardType) {
        if (preg_match($cardType, $cardUnformatted)) {
            return $type;
        }
    }

    return false;
}

if (! function_exists('bool2text')) {
    /** Convert a truthy value to string "True", otherwise "False" **/
    function bool2text($value)
    {
        return $value ? 'true' : 'false';
    }
}

if (! function_exists('maskCardNumber')) {
    function maskCardNumber($cardNumber, $firstDigits = 6, $lastDigits = -4)
    {
        // Determine the length of the card number
        $length = strlen($cardNumber);

        // Keep the first n digits visible
        $masked = substr($cardNumber, 0, $firstDigits);

        // Mask the rest of the digits with '*'
        for ($i = $firstDigits; $i < $length - $firstDigits; $i++) {
            $masked .= 'x';
        }

        // Keep the last n digits visible
        $masked .= substr($cardNumber, $lastDigits);

        return $masked;
    }
}
if (! function_exists('ordinalNumber')) {
    function ordinalNumber($number)
    {
        $ends = ['th', 'st', 'nd', 'rd', 'th', 'th', 'th', 'th', 'th', 'th'];
        if ((($number % 100) >= 11) && (($number % 100) <= 13)) {
            return $number . 'th';
        } else {
            return $number . $ends[$number % 10];
        }
    }
}

function getCountry($user_locale)
{
    $localeParts = explode(',', $user_locale);
    $preferredLocale = $localeParts[0];
    $countryCode = substr($preferredLocale, 3, 2);

    return $countryCode;
}

if (! function_exists('convertArrToObj')) {
    function convertArrToObj($array)
    {
        return is_array($array) ? (object) array_map(__FUNCTION__, $array) : $array;
    }
}

if (! function_exists('template')) {

    function template($filename)
    {
        return 'https://dbsbfj4kzy6ko.cloudfront.net/assets/zenithxl/' . $filename;
    }
}

if (! function_exists('landinghelper')) {

    function landinghelper($filename)
    {
        return 'images/' . $filename;
    }
}

function convertNumber($number)
{
    $numbers = [
        1 => 'one',
        2 => 'two',
        3 => 'three',
        4 => 'four',
        5 => 'five',
        6 => 'six',
        7 => 'seven',
        8 => 'eight',
        9 => 'nine',
        10 => 'ten'
    ];

    return $numbers[$number] ?? 'Number out of range';
}
