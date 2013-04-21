<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title ?> - ADCC</title>
<!-- <link href="664.css" rel="stylesheet" type="text/css" /> -->
<?php
  $this->load->helper('html');
  echo "\n". link_tag('assets/css/664.css');
  echo "\n". link_tag('assets/css/form.css');
  echo "\n". link_tag('assets/css/news.css');
  echo "\n". link_tag('assets/css/about.css');
  echo "\n". link_tag('assets/css/custom-theme/jqueryui.css');

  echo "\n". link_tag('assets/css/events.css');
  echo "\n". link_tag('assets/css/jquery.timepicker.css');
  echo "\n". link_tag('assets/css/chosen.css');
    // echo "\n". link_tag('assets/stylesheets/'. $theme .'.css');
  $this->load->helper('url');
?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/jquery.timepicker.min.js"></script>
<script type="text/javascript" src="<?=base_url()?>assets/js/chosen.jquery.min.js"></script>
</head>

<body>

<div class="container">

  <div class="header"><a href="#"> </a></div>
  
  <div class="menu">
    <ul class="nav">
      <li><a href="<?php echo site_url() ?>">Home</a></li>
      <li><a href="<?php echo site_url('events') ?>">Upcoming Events</a></li>
      <li><a href="<?php echo site_url('news') ?>">News</a></li>
      <li><a href="<?php echo site_url('media') ?>">Media</a></li>
      <li><a href="<?php echo site_url('about') ?>">About</a></li>
      <li><a href="<?php echo site_url('contact') ?>">Contact</a></li>
    </ul> 
  </div>
