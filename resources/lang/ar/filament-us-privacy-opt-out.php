<?php

return [
    'resource' => [
        'label' => 'خيار الخصوصية',
        'plural_label' => 'خيارات الخصوصية',
    ],

    'fields' => [
        'subject' => 'المستهلك',
        'right' => 'الحق',
        'action' => 'الاختيار',
        'state' => 'الولاية',
        'created_at' => 'سُجّل في',
        'source' => 'المصدر',
        'ip_address' => 'عنوان IP',
        'user_agent' => 'وكيل المستخدم',
        'metadata' => 'بيانات وصفية',
    ],

    'right' => [
        'sale' => 'بيع البيانات الشخصية',
        'targeted_advertising' => 'الإعلانات الموجهة',
        'profiling' => 'التنميط',
        'sensitive_data' => 'البيانات الحساسة',
    ],

    'action' => [
        'opted_out' => 'انسحب',
        'opted_in' => 'اشترك أو وافق',
    ],

    'sources' => [
        'gpc' => 'إشارة Global Privacy Control',
        'form' => 'نموذج',
        'claimed' => 'رُبط بعد تسجيل الدخول',
    ],

    'filters' => [
        'visitors' => 'زوار بدون حساب',
        'gpc' => 'من إشارة Global Privacy Control',
    ],

    'visitor' => 'زائر',
];
