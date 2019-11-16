<?php 

$request = $_SERVER['REQUEST_URI'];

echo $request;

// switch ($request) {
//     case '/' :
//         require __DIR__ . '/index.php';
//         break;
//     case '' :
//         require __DIR__ . '/index.php';
//         break;
//     case '/recent' :
//         require __DIR__ . '/recent.php';
//         break;
//     case '/archive' :
//         require __DIR__ . '/archive.php';
//         break;
//     case '/top' :
//         require __DIR__ . '/top.php';
//         break;
//     default:
//         require __DIR__ . '404.php';
//         break;
// }
?>