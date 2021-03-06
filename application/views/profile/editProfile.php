<div class="col-md-7">

	<!-- Basic Information
              ================================================= -->
	<div class="edit-profile-container">
		<div class="block-title">
			<h4 class="grey"><i class="icon ion-android-checkmark-circle"></i>Edit basic information</h4>
			<div class="line"></div>
			<?php foreach ($info as $i) : ?>
				<p><?= $i->name ?> was created on <?= date('d-F-y', $i->date_created); ?></p>
				<div class="line"></div>
				<?= $this->session->flashdata('message'); ?>
		</div>
		<div class="edit-block">



			<div class="row">
				<div class="form-group col-xs-12">
					<form action="<?= base_url('profile/editBasic'); ?>" method="post">
						<label for="email">Full Name</label>
						<input id="name" class="form-control input-group-lg" type="text" name="name" title="Enter Full Name" placeholder="Full Name" value="<?= $i->name; ?>" autocomplete="off" />

				</div>
			</div>

			<div class="row">
				<div class="form-group col-xs-12">
					<form action="<?= base_url('profile/editBasic'); ?>" method="post">
						<label for="email">Work as</label>
						<input id="work" class="form-control input-group-lg" type="text" name="work" title="Enter Your Work" placeholder="Work" value="<?= $i->work; ?>" autocomplete="off" />

				</div>
			</div>

			<div class=" row">
				<div class="form-group col-xs-12">
					<label for="email">My email</label>
					<input id="email" class="form-control input-group-lg" type="text" name="email" title="Enter Email" placeholder="My Email" value="<?= $i->email; ?>" autocomplete="off" />
				</div>
				<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
			</div>

			<div class="row">
				<div class="form-group col-xs-12">
					<label for="exampleInputEmail1">Birthday Date</label>
					<input type="date" class="form-control" id="date" name="date" aria-describedby="emailHelp" value="<?= $i->birthdate; ?>" autocomplete="off">

				</div>
			</div>


			<div class=" form-group gender">
				<span class="custom-label"><strong>I am a: </strong></span>
				<label class="radio-inline">

					<?php if ($i->gender == 'Male') : ?>

						<input type="radio" name="gender" checked id="gender" value="Male">Male
				</label>
				<label class="radio-inline">
					<input type="radio" name="gender" id="gender" value="Female">Female
				</label>
			<?php else : ?>
				<input type="radio" name="gender" id="gender" value="Male">Male
				</label>
				<label class="radio-inline">
					<input type="radio" name="gender" checked id="gender" value="Female">Female
				</label>
			<?php endif; ?>
			</div>
			<div class="row">
				<div class="form-group col-xs-6">
					<label for="city"> My city</label>
					<input id="city" class="form-control input-group-lg" type="text" name="city" title="Enter city" placeholder="Your city" value="<?= $i->city; ?>" autocomplete="off">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-xs-12">
					<label for="my-info">About me</label>
					<textarea id="bio" name="bio" class="form-control" placeholder="Some texts about me" rows="4" cols="400" autocomplete="off"><?= $i->bio; ?></textarea>
				</div>
			</div>
			<button id="submit" type="submit" class="btn btn-primary" style="background-color:#0486FE; ">Save Changes</button>
		<?php endforeach; ?>
		</form>


		</div>
	</div>
</div>
