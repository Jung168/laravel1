<?php

use Illuminate\Support\Facades\Route;










// 1. Route: /country/name/{country?}
// Default: 'Cambodia'
Route::get('/country/name/{country?}', function (string $country = 'Cambodia') {
    
    $countryName = ucwords(strtolower($country)); // Clean up the input
    
    $message = ($countryName === 'Cambodia')
        ? "No country provided, showing default country."
        : "You looked up the country: $countryName.";

    return [
        'input_value' => $countryName,
        'message' => $message,
    ];
});


// 2. Route: /country/capital/{capital?}
// Default: 'Phnom Penh'
Route::get('/country/capital/{capital?}', function (string $capital = 'Phnom Penh') {
    
    $capitalName = ucwords(strtolower($capital));
    
    $message = ($capitalName === 'Phnom Penh')
        ? "No capital provided, showing default capital."
        : "The capital city is: $capitalName.";

    return [
        'input_value' => $capitalName,
        'message' => $message,
    ];
});


// 3. Route: /country/language/{lang?}
// Default: 'Khmer'
Route::get('/country/language/{lang?}', function (string $lang = 'Khmer') {
    
    $language = ucwords(strtolower($lang));
    
    $message = ($language === 'Khmer')
        ? "No language provided, showing default language."
        : "The language you requested is: $language.";

    return [
        'input_value' => $language,
        'message' => $message,
    ];
});
