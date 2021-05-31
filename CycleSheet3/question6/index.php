<?php
  if (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0') {
    $hit = $_COOKIE['hits'];
    $hit++;
    setcookie('hits', $hit, time() + (60 * 60 * 24), "/");
  }
  if (!isset($_COOKIE['hits'])) {
    setcookie('hits', '1', time() + (60 * 60 * 24), "/");
  } else {
    echo "<h1>Number of Page Hits = " . $_COOKIE['hits'];
  }
?>