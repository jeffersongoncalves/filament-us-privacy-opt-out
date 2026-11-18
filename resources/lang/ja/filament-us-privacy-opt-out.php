<?php

return [
    'resource' => [
        'label' => 'プライバシーの選択',
        'plural_label' => 'プライバシーの選択',
    ],

    'fields' => [
        'subject' => '消費者',
        'right' => '権利',
        'action' => '選択',
        'state' => '州',
        'created_at' => '記録日時',
        'source' => '取得元',
        'ip_address' => 'IPアドレス',
        'user_agent' => 'ユーザーエージェント',
        'metadata' => 'メタデータ',
    ],

    'right' => [
        'sale' => '個人データの販売',
        'targeted_advertising' => 'ターゲティング広告',
        'profiling' => 'プロファイリング',
        'sensitive_data' => 'センシティブデータ',
    ],

    'action' => [
        'opted_out' => 'オプトアウト済み',
        'opted_in' => 'オプトインまたは同意',
    ],

    'sources' => [
        'gpc' => 'Global Privacy Control シグナル',
        'form' => 'フォーム',
        'claimed' => 'ログイン後に引き継ぎ',
    ],

    'filters' => [
        'visitors' => 'アカウントのない訪問者',
        'gpc' => 'Global Privacy Control シグナルから',
    ],

    'visitor' => '訪問者',
];
