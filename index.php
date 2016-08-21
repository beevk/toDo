<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home of ToDo</title>
	<title>ToDo Maker</title>
 	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="css/style.css">
 	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="table-responsive">
            <table class="table table-hover">
                <tr>
                    <td><a href="#"><i class="glyphicon glyphicon-home"></i>Manage your To-Do</a></td>
                </tr>
                <tr>
                    <td><a href="#"><i class="glyphicon glyphicon-inbox"></i>Inbox</a></td>
                </tr>
                <tr>>
                    <td><a href="#"><i class="glyphicon glyphicon-repeat"></i>Read Later</a></td>
                </tr>
                <tr>
                    <td><a href="#"><i class="glyphicon glyphicon-lock"></i>Important</a></td>
                </tr>
            </table>
        </div><!-- sidebar-wrapper ends -->

        <div id="mainContent" class="clearFix">
    		<div id="head">
    			<h2> Manage To-Do </h2>
    			<div id="add_more">
    				<a href="addNew.php" class="btn btn-success"> + Add New </a>
    			</div><!-- End add_more -->
    		</div><!-- End head -->

    		<div id="mainBody">
    			<table class="table table-striped">
				    <thead>
				      <tr>
				        <th>Title</th>
				        <th>Snippet</th>
				        <th>Due Date</th>
				        <th>Time Left</th>
				        <th>Progress</th>
				      </tr>
				    </thead>
				    <tbody>
				      <tr>
				        <td>John</td>
				        <td>Doe</td>
				        <td>john@example.com</td>
				      </tr>
				      
				    </tbody>
				</table>
    				
    		</div><!-- End mainBody -->
    	</div>
    </div><!-- Wrapper ends-->
    
</body>
</html>