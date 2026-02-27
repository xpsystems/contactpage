<?php
// config.php

// Site Information
$site_config = [
    'site_name' => 'xpsystems',
    'site_title' => 'xpsystems Contact',
    'site_description' => 'Contact information for xpsystems.',
    'version' => 'v1.0.0',
    'current_year' => date('Y'),
];

// Navigation Links (Used in header)
$nav_links = [
    ['label' => 'Home', 'url' => 'https://xpsystems.eu'],
    ['label' => 'Status', 'url' => 'https://status.xpsystems.eu'],
    ['label' => 'Domains', 'url' => 'https://domains.xpsystems.eu'],
    ['label' => 'OpenSource', 'url' => 'https://opensource.xpsystems.eu'],
];

// Footer Links
$footer_links = [
    ['label' => 'Impressum', 'url' => 'https://xpsystems.eu/impressum'],
    ['label' => 'Privacy', 'url' => 'https://xpsystems.eu/privacy'],
];

// Contact Information
$contact_emails = [
    ['label' => 'General Inquiries', 'email' => 'contact@xpsystems.eu'],
    ['label' => 'Germany', 'email' => 'contact@xpsystems.de'],
];

$contact_person = [
    'name' => 'Fabian Ternis',
    'role' => 'Founder',
    'email' => 'f.ternis@xpsystems.eu',
];

$social_links = [
    ['platform' => 'Instagram', 'handle' => '@xpsystems.eu', 'url' => 'https://instagram.com/xpsystems.eu'],
    ['platform' => 'Instagram', 'handle' => '@xpsystems.de', 'url' => 'https://instagram.com/xpsystems.de'],
    ['platform' => 'Instagram', 'handle' => '@ternisfabian', 'url' => 'https://instagram.com/ternisfabian', 'personal' => true],
];
?>