<?php

return [
    'resource' => [
        'label' => 'गोपनीयता विकल्प',
        'plural_label' => 'गोपनीयता विकल्प',
    ],

    'fields' => [
        'subject' => 'उपभोक्ता',
        'right' => 'अधिकार',
        'action' => 'विकल्प',
        'state' => 'राज्य',
        'created_at' => 'दर्ज किया गया',
        'source' => 'स्रोत',
        'ip_address' => 'IP पता',
        'user_agent' => 'यूज़र एजेंट',
        'metadata' => 'मेटाडेटा',
    ],

    'right' => [
        'sale' => 'व्यक्तिगत डेटा की बिक्री',
        'targeted_advertising' => 'लक्षित विज्ञापन',
        'profiling' => 'प्रोफ़ाइलिंग',
        'sensitive_data' => 'संवेदनशील डेटा',
    ],

    'action' => [
        'opted_out' => 'ऑप्ट-आउट किया',
        'opted_in' => 'ऑप्ट-इन या सहमति दी',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control संकेत',
        'form' => 'फ़ॉर्म',
        'claimed' => 'लॉगिन के बाद जोड़ा गया',
    ],

    'filters' => [
        'visitors' => 'बिना खाते वाले आगंतुक',
        'gpc' => 'Global Privacy Control संकेत से',
    ],

    'visitor' => 'आगंतुक',
];
