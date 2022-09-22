<?php include('includes/session.user.php'); ?>

<?php include('plugins/profile.class.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<h1 class="fw-light">Remove Course</h1>
				<div class="w-75 p-3 mx-auto">
					<!-- Input form -->
					<form method="post">
						<div class="row">
							<div class="col">
								<label>Class Name</label>
								<input type="text" class="form-control" id="crsName" name="crsName" value="<?=$crsName?>" readonly />
							</div>
							<div class="col">
								<label>Class ID</label>
								<input type="text" class="form-control" id="crsIDCode" name="crsIDCode" value="<?=$crsIDCode?>" readonly />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Class Instructor</label>
 								<input type="text" class="form-control" id="crsInstructor" name="crsInstructor" value="<?=$crsInstructor?>" readonly />
 							</div>
						</div>
						<br />
						<div class="row text-center align-top">
							<span><strong>Weekdays</strong></span>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon"><strong><?=$day_crsMon?></strong></label>
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon"><strong><?=$day_crsTues?></strong></label>
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon"><strong><?=$day_crsWed?></strong></label>
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon"><strong><?=$day_crsThurs?></strong></label>
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon"><strong><?=$day_crsFri?></strong></label>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Start Time</label>
								<input type="time" class="form-control"  id="crsStartTime"  name="crsStartTime" value="<?=$crsStartTime?>" readonly />
							</div>
							<div class="col">
								<label>End Time</label>
								<input type="time" class="form-control"  id="crsEndTime"  name="crsEndTime" value="<?=$crsEndTime?>" readonly />
							</div>
							<div class="col">
								<label></label>
 								<input type="text" class="form-control" id="crsSemester" name="crsSemester" value="<?=$crsSemester?>" readonly />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Class Description</label>
								<textarea type="text" class="form-control" id="crsDescription" name="crsDescription" rows="2" readonly><?=$crsDescription?></textarea>
							</div>
						</div>
						<div class="row mt-4">
                            <div class="col">
                                <input type="submit" class="btn btn-dark btn-outline-light" id="dropButton" name="dropButton" value="Drop Course" />
                            </div>
                            <div class="col">
                            </div>
                        </div>
						<?php include('plugins/update.course.php'); ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>