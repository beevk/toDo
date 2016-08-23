<?php 
    require_once "libs/session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ToDo Maker</title>
 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/resources/demos/style.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <script>
        $( function() {
            $( "#due_date" ).datepicker({
                dateFormat: "yy-mm-dd",
                changeMonth: true,
                changeYear: true
            });
            $( "#seekbar" ).slider({
                range: "max",
                min: 0,
                max: 100,
                value: 2,
                slide: function( event, ui ) {
                    $( "#progress" ).html( ui.value + '%');
                    $( "#progressValue" ).val( ui.value );
                }
            });
            $( "#progress" ).val( $( "#seekbar" ).slider( "value" ) );
        } );

  </script>
  </script>
</head>
<body>
	<div class="container-fluid">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <a class="brand" href="index.php"><h2>To-Do Maker</h2></a><br>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="index.php"><span class="glyphicon glyphicon-th-list"> All</span></a></li>
                    <li><a href="index.php?label=Important"><span class="glyphicon glyphicon-pencil"></span> &nbsp;&nbsp;Important</a></li>
                    <li><a href="index.php?label=ReadLater"><span class="glyphicon glyphicon-send"></span> &nbsp;&nbsp;Read Later</a></li>
                    <li><a href="index.php?label=Inbox"><span class="glyphicon glyphicon-inbox"> Inbox</span></a></li>
                </ul><br>
            </div>

            <div class="col-sm-10">
                <h3>Welcome <?php echo $_SESSION['username'] . '!';?></h3>
                <hr>
 
