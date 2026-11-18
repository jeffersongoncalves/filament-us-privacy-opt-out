<?php

return [
    'resource' => [
        'label' => 'انتخاب حریم خصوصی',
        'plural_label' => 'انتخاب‌های حریم خصوصی',
    ],

    'fields' => [
        'subject' => 'مصرف‌کننده',
        'right' => 'حق',
        'action' => 'انتخاب',
        'state' => 'ایالت',
        'created_at' => 'ثبت‌شده در',
        'source' => 'منبع',
        'ip_address' => 'نشانی IP',
        'user_agent' => 'عامل کاربر',
        'metadata' => 'فراداده',
    ],

    'right' => [
        'sale' => 'فروش داده‌های شخصی',
        'targeted_advertising' => 'تبلیغات هدفمند',
        'profiling' => 'پروفایل‌سازی',
        'sensitive_data' => 'داده‌های حساس',
    ],

    'action' => [
        'opted_out' => 'انصراف داد',
        'opted_in' => 'پذیرفت یا رضایت داد',
    ],

    'sources' => [
        'gpc' => 'سیگنال Global Privacy Control',
        'form' => 'فرم',
        'claimed' => 'پس از ورود به حساب منتقل شد',
    ],

    'filters' => [
        'visitors' => 'بازدیدکنندگان بدون حساب',
        'gpc' => 'از سیگنال Global Privacy Control',
    ],

    'visitor' => 'بازدیدکننده',
];
