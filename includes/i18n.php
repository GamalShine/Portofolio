<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check for language switch request
if (isset($_GET['lang']) && in_array($_GET['lang'], ['id', 'en'])) {
    $_SESSION['lang'] = $_GET['lang'];
    
    // Rebuild query parameters without 'lang'
    $queryParams = $_GET;
    unset($queryParams['lang']);
    
    $url = strtok($_SERVER["REQUEST_URI"], '?');
    if (!empty($queryParams)) {
        $url .= '?' . http_build_query($queryParams);
    }
    
    header("Location: $url");
    exit;
}

// Default to Indonesian
$current_lang = $_SESSION['lang'] ?? 'id';

// Load translation file
$lang_file = __DIR__ . "/../lang/{$current_lang}.php";
if (file_exists($lang_file)) {
    $translations = include $lang_file;
} else {
    $translations = [];
}

// Helper function for translation
function __($key) {
    global $translations;
    return $translations[$key] ?? $key;
}
?>
