<?php 
    require_once "statics/header.php";
    require_once "libs/listToDo.php";
?>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <ul class="nav navbar-nav">
    		    <li class="active"><h3> &nbsp;&nbsp;Manage To-Do</h3></li>
    		</ul>
    		<ul class="nav navbar-nav navbar-right">
            	<li><a href="addNew.php" class="btn btn-success"> + Add New </a></li>
            </ul>
        </div>
    </nav><!-- End head -->
    <br>

    <div id="mainBody">
	<table class="table table-striped table-responsive">
	    <thead>
	      <tr>
	        <td>Title</td>
	        <td>Snippet</td>
	        <td>Due Date</td>
	        <td>Time Left</td>
	        <td>Progress</td>
            <td>Action</td>
	      </tr>
	    </thead>
	    <tbody>
	      
	        <?php 
                if($list !=  0){
                    foreach ($list as $key => $value) { 
                        $today = strtotime('now');
                        $due = strtotime($value['dueDate']);
                        if($due > $today) {
                            $hours = ($due - $today) / 3600;
                            $timeLeft = $hours / 24;
                            $timeLeft = number_format($timeLeft, 2, '.', '');
                            if($timeLeft < 1) {
                                $timeLeft = "Less than a day";
                            }
                            else {
                                $timeLeft = "{$timeLeft} days";
                            }
                        }
                        else {
                            $timeLeft = "Expired!";
                        }
                        ?>
                        <tr>
                            <td> <?php echo $value['title']; ?></td>
                            <td> <?php echo $value['description']; ?></td>
                            <td> <?php echo $value['dueDate']; ?></td>
                            <td> <?php echo $timeLeft; ?></td>

                            <td><div class = "progress"> 
                                <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $value['progress']; ?>"
                                    aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $value['progress'];?>%">
                                    <span class="sr-only"><?php echo $value['progress'];?>% Complete</span>
                                </div>
                                </div>
                            </td>

                            <td> Edit   |   Delete </td>
                        </tr>
            
                 <?php
                    }
                }
                else { ?>
                    <tr>
                        <td><td><td><td><td>Sorry! No more To-Do Under this section.</td></td></td></td></td>
                    </tr>
                <?php }
            ?>
	      </tr>
	      
	    </tbody>
	</table>
    				
		</div><!-- End mainBody -->
	</div>
</div><!-- Wrapper ends-->

    <!--footer class="container-fluid">
        <p>Footer Text</p>
    </footer-->

</body>
</html>