<?php

if (!$this) {
    exit(header('HTTP/1.0 403 Forbidden'));
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Song Library</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/style.css" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h3 id="projectName">SONG LIBRARY</h3>
    </div>
    <div class="container">
        <h3 class="navigation">Navigation</h3>
        <div class="navigation">
            <div class="btn-group">
                <a href="<?php echo URL_WITH_INDEX_FILE; ?>" class="btn btn-default">Start</a>
                <!--<a href="<?php echo URL_WITH_INDEX_FILE; ?>home/exampleone" class="btn btn-default">About</a>-->
                <!--<a href="<?php echo URL_WITH_INDEX_FILE; ?>home/exampletwo" class="btn btn-default">About 2</a>-->
                <a href="<?php echo URL_WITH_INDEX_FILE; ?>songs/" class="btn btn-default">Songs</a>
            </div>
        </div>
    </div>
