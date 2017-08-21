<?php

$doc_root = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$request_uri = $_SERVER['REQUEST_URI'];
$host = $_SERVER['HTTP_HOST'];
$basename =  basename($request_uri, '.php');

// localhost check
if ($host == 'local.work') {
  $site_url = 'http://'. $host . $request_uri;
} else {
  $site_url = $host . '/';
}

$base = ($basename === 'juliettecezzar') ? 'home' : $basename ;
// print_r($base);

// $page_base = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
// $page_base = str_replace('.php', '', $page_base);
// echo $page_base;



// Page Conditions
if ($base == 'home') {
  $page_title = 'Home';
}

if ($base == 'writing') {
  $page_title = 'Writing';
}

if ($base == 'contact') {
  $page_title = 'Contact';
}

if ($base == 'speaking') {
  $page_title = 'Speaking <span>(selected)</span>';
}