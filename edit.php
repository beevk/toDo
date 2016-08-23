<?php 
	require_once "statics/header.php";
	require_once "libs/listToDo.php";

 ?>

<div id="mainContent">
	<div id="head">
		<h2> Edit To-Do </h2>		
	</div>

	<div id="mainBody">
		<form method="post" action="">
			<?php 
				if(isset($err)) {
					echo "<div class='alert alert-danger'> <strong> Error! </strong>" . $err . "</div>";
				}

				if(isset($success)) {
					echo "<div class='alert alert-success'> <strong> Success! </strong>" . $success . "</div>";
				}

				$givenArray = array('Inbox', 'ReadLater', 'Important');	
				$selectedArray = array($list['label']);
				$arrayRem = array_diff($givenArray, $selectedArray);
			?>

			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="title" id="value" value="<?php echo $list['title'];?>" >
			</div>
			<div class="form-group">
				<label for="desc">Description<small> (optional)</small></label>
				<textarea type="text" class="form-control" name="desc" id="desc"> <?php echo $list['description'];?> </textarea>
			</div>
			<div class="form-group">
				<label for="due_date">Due Date</label>
				<input type="text" class="form-control" name="due_date" id="due_date" value="<?php echo $list['dueDate'];?>">
			</div>
			<div class="form-group">
				<label for="label_under">Label Under</label>
				<select name="label_under" class="form-control" id="label_under">
					<option value="<?php echo $list['label'];?>"><?php echo $list['label'];?></option>
					<?php 
						foreach ($arrayRem as $val) { ?>
							<option value="<?php echo $val;?>"> <?php if($val=='ReadLater')echo "Read Later"; else echo $val; ?></option>
					<?php	}
					?>
				</select>
			</div>
			<div class="form-group">
				<label for="progressValue">Progress Status</label>
				<div id="seekbar"></div>
				<div id="progress"> <?php echo $list['progress'];?> % </div>
				<input type="hidden" name="progressValue" value="<?php echo $list['progress'];?>" id="progressValue">
			</div>
			<div class="form-group">
				<input type="submit" name="edit_todo" id="edit_todo" value="Update" class="btn btn-warning">
			</div>
		<?php //} ?>
		</form>
	</div>
</div>