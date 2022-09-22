<?php include('includes/session.admin.php'); ?>

<?php include('plugins/profile.class.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<h1 class="fw-light">Update Class</h1>
				<div class="w-75 p-3 mx-auto">
					<!-- Input form -->
					<form method="post">
						<div class="row">
							<div class="col">
								<label>Class Name</label>
								<input type="text" class="form-control" id="crsName" name="crsName" value="<?=$crsName?>" />
							</div>
							<div class="col">
								<label>Class ID</label>
								<input type="text" class="form-control" id="crsIDCode" name="crsIDCode" value="<?=$crsIDCode?>" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Class Instructor</label>
 								<!-- <input type="text" class="form-control" id="crsInstructor" name="crsInstructor" /> -->
                                <select class="form-select" id="crsInstructor" name="crsInstructor">
                                    <option>Instructor</option>
                                    <?php include('plugins/list.instructor.php'); ?>
                                </select>
							</div>
						</div>
						<br />
						<div class="row text-center align-middle">
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon">Mon</label>
								<input type="checkbox" class="custom-control-input" id="crsMon" name="crsMon" <?php echo $checked_crsMon; ?> />
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon">Tues</label>
								<input type="checkbox" class="custom-control-input" id="crsTues" name="crsTues" <?php echo $checked_crsTues; ?> />
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon">Wed</label>
								<input type="checkbox" class="custom-control-input" id="crsWed" name="crsWed" <?php echo $checked_crsWed; ?> />
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon">Thurs</label>
								<input type="checkbox" class="custom-control-input" id="crsThurs" name="crsThurs" <?php echo $checked_crsThurs; ?> />
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon">Fri</label>
								<input type="checkbox" class="custom-control-input" id="crsFri" name="crsFri" <?php echo $checked_crsFri; ?> />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Start Time</label>
								<input type="time" class="form-control"  id="crsStartTime"  name="crsStartTime" value="<?=$crsStartTime?>" />
							</div>
							<div class="col">
								<label>End Time</label>
								<input type="time" class="form-control"  id="crsEndTime"  name="crsEndTime" value="<?=$crsEndTime?>" />
							</div>
							<div class="col">
								<label></label>
								<select class="form-select" id="crsSemester" name="crsSemester" value="<?=$crsSemester?>">
									<option selected>Semester</option>
									<option value="Fall" <?php if ($crsSemester == "Fall") echo "selected"; ?>>Fall</option>
									<option value="Spring" <?php if ($crsSemester == "Spring") echo "selected"; ?>>Spring</option>
									<option value="Summer" <?php if ($crsSemester == "Summer") echo "selected"; ?>>Summer</option>
								</select>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Class Description</label>
								<textarea type="text" class="form-control" id="crsDescription" name="crsDescription" rows="2"><?=$crsDescription?></textarea>
							</div>
						</div>
						<div class="row mt-4">
                            <div class="col text-center">
                                <input type="submit" class="btn btn-dark btn-outline-light" id="updateClass" name="updateClass" value="Update Class" />
                            </div>
                            <div class="col text-center">
                                <input type="submit" class="btn btn-dark btn-outline-light" id="deleteClass" name="deleteClass" value="Delete Class" />
                            </div>
                        </div>
						<?php include('plugins/update.class.php'); ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>