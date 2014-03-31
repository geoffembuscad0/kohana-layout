<!DOCTYPE HTML>
<html lang="en">
<head>
<title><?php echo $title; ?></title>
<?php foreach($styles AS $style){ ?>
<?php echo $style . "\n"; ?>
<?php } ?>
<?php foreach($scripts AS $script){ ?>
<?php echo $script . "\n"; ?>
<?php } ?>
<?php foreach($meta_tags AS $meta_tag){ ?>
<?php echo $meta_tag . "\n"; ?>
<?php } ?>
</head>
<body>
