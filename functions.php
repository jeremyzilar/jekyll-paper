<?php

$doc_root = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$request_uri = $_SERVER['REQUEST_URI'];
$host = $_SERVER['HTTP_HOST'];
$basename =  basename($_SERVER['REQUEST_URI'], '.php');

// localhost check
if ($host == 'local.work') {
  $site_url = 'http://'. $host . $request_uri;
} else {
  $site_url = $host;
}

$base = ($basename === $site) ? 'home' : $basename ;
// print_r($request_uri);

$page_base = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
$page_base = str_replace('.php', '', $page_base);
// echo $page_base;



// Page Conditions
if ($page_base == 'writing') {
  $page_title = 'Writing';
}

if ($page_base == 'contact') {
  $page_title = 'Contact';
}

if ($page_base == 'speaking') {
  $page_title = 'Speaking';
}