<?php include('includes/session.admin.php'); ?>

<!-- Page Body -->
<body>
	<div class="container">
		<div class="card border-0 shadow my-5">
			<div class="card-body p-5 bg-dark text-light">
				<h1 class="fw-light">Add Class</h1>
				<div class="w-75 p-3 mx-auto">
					<!-- Input form -->
					<form method="post">
						<div class="row">
							<div class="col">
								<label>Class Name</label>
								<input type="text" class="form-control" id="crsName" name="crsName" />
							</div>
							<div class="col">
								<label>Class ID</label>
								<input type="text" class="form-control" id="crsIDCode" name="crsIDCode" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Class Instructor</label>
 								<!-- <input type="text" class="form-control" id="crsInstructor" name="crsInstructor" /> -->
                                <select class="form-select" id="crsInstructor" name="crsInstructor">
                                    <option selected>Instructor</option>
                                    <?php include('plugins/list.instructor.php'); ?>
                                </select>
							</div>
						</div>
						<br />
						<div class="row text-center align-middle">
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon">Mon</label>
								<input type="checkbox" class="custom-control-input" id="crsMon" name="crsMon" />
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon">Tues</label>
								<input type="checkbox" class="custom-control-input" id="crsTues" name="crsTues" />
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon">Wed</label>
								<input type="checkbox" class="custom-control-input" id="crsWed" name="crsWed" />
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon">Thurs</label>
								<input type="checkbox" class="custom-control-input" id="crsThurs" name="crsThurs" />
							</div>
							<div class="col custom-control custom-switch"><br />
								<label class="custom-control-label" for="classMon">Fri</label>
								<input type="checkbox" class="custom-control-input" id="crsFri" name="crsFri" />
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Start Time</label>
								<input type="time" class="form-control"  id="crsStartTime"  name="crsStartTime" />
							</div>
							<div class="col">
								<label>End Time</label>
								<input type="time" class="form-control"  id="crsEndTime"  name="crsEndTime" />
							</div>
							<div class="col">
								<label></label>
								<select class="form-select" id="crsSemester" name="crsSemester">
									<option selected>Semester</option>
									<option value="Fall">Fall</option>
									<option value="Spring">Spring</option>
									<option value="Summer">Summer</option>
								</select>
							</div>
						</div>
						<br />
						<div class="row">
							<div class="col">
								<label>Class Description</label>
								<textarea type="text" class="form-control" id="crsDescription" name="crsDescription" rows="2"></textarea>
							</div>
						</div>
						<br />
						<input type="submit" class="btn btn-dark btn-outline-light" id="addClass" name="addClass" value="Add Class" />
						<?php include('plugins/add.class.php'); ?>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>