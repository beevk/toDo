<?php 
	require_once "statics/header.php";
	require_once "libs/listToDo.php";

 ?>

<div id="mainContent">
	<div id="head">
		<h2> Create To-Do </h2>		
	</div>

	<div id="mainBody">
		<form method="post" action="addNew.php">
			<?php 
				if(isset($err)) {
					echo "<div class='alert alert-danger'> <strong> Error! </strong>" . $err . "</div>";
				}

				if(isset($success)) {
					echo "<div class='alert alert-success'> <strong> Success! </strong>" . $success . "</div>";
				}
					
			?>

			<?php 
			foreach($listto as $key) { ?>

			<div class="form-group">
				<label for="title">Title</label>
				<input type="text" class="form-control" name="title" id="value" value="<?php echo $key['title'];?>" >
			</div>
			<div class="form-group">
				<label for="desc">Description<small> (optional)</small></label>
				<textarea type="text" class="form-control" name="desc" id="desc"></textarea>
			</div>
			<div class="form-group">
				<label for="due_date">Due Date</label>
				<input type="text" class="form-control" name="due_date" id="due_date">
			</div>
			<div class="form-group">
				<label for="label_under">Label Under</label>
				<select name="label_under" class="form-control" id="label_under">
					
				</select>
			</div>
			<div class="form-group">
				<input type="submit" name="create_todo" id="create_todo" value="Update" class="btn btn-warning">
			</div>
		<?php } ?>
		</form>
	</div>
</div>