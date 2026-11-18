<?php

return [
    'resource' => [
        'label' => '隐私选择',
        'plural_label' => '隐私选择',
    ],

    'fields' => [
        'subject' => '消费者',
        'right' => '权利',
        'action' => '选择',
        'state' => '州',
        'created_at' => '记录时间',
        'source' => '来源',
        'ip_address' => 'IP 地址',
        'user_agent' => '用户代理',
        'metadata' => '元数据',
    ],

    'right' => [
        'sale' => '出售个人数据',
        'targeted_advertising' => '定向广告',
        'profiling' => '画像分析',
        'sensitive_data' => '敏感数据',
    ],

    'action' => [
        'opted_out' => '已选择退出',
        'opted_in' => '已选择加入或同意',
    ],

    'sources' => [
        'gpc' => '全球隐私控制（GPC）信号',
        'form' => '表单',
        'claimed' => '登录后认领',
    ],

    'filters' => [
        'visitors' => '无账户的访客',
        'gpc' => '来自全球隐私控制（GPC）信号',
    ],

    'visitor' => '访客',
];
