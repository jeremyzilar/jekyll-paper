<?php

$doc_root = rtrim($_SERVER['DOCUMENT_ROOT'], '/');
$request_uri = $_SERVER['REQUEST_URI'];
$host = $_SERVER['HTTP_HOST'];
$basename =  basename($_SERVER['REQUEST_URI'], '.php');

// localhost check
if ($host == 'local.work') {
  $site_url = 'http://'. $host . '/juliettecezzar';
} else {
  $site_url = $host;
}

$base = ($basename === $site) ? 'home' : $basename ;
// print_r($base);