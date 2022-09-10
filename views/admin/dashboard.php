<?php require_once('./layouts/header.php'); ?>

<body>
	<?php require_once('./layouts/sidebar.php'); ?>
	<div class="row d-flex justify-content-center">
		<div class="col-lg-3">
			<div class="card my-2">
				<div class="card-body mx-auto">
					<img
					src="./imgs/student.png"
					alt="student"
					loading="lazy"
					class="img-fluid"
					width="200px"
					height="200px"
					data-src="./imgs/">

					<input
					type="button"
					value="Student Entry"
					class="btn text-center btn-block btn-primary text-wrap"
					onclick="load_page('./view_student_entry.php')" />
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card my-2">
				<div class="card-body mx-auto">
					<img
					src="./imgs/ann.png"
					alt="announcement"
					loading="lazy"
					class="img-fluid"
					width="200px"
					height="200px"
					data-src="./imgs/">

					<input
					type="button"
					value="Post Announcement"
					class="btn text-center btn-block btn-primary text-wrap"
					onclick="load_page('./view_post_announcement.php')" />
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card my-2">
				<div class="card-body mx-auto">
					<img
					src="./imgs/team.png"
					alt="team"
					loading="lazy"
					class="img-fluid"
					width="200px"
					height="200px"
					data-src="./imgs/">

					<input
					type="button"
					value="Professors"
					class="btn text-center btn-block btn-primary text-wrap"
					onclick="load_page('./view_professors.php')" />
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<div class="card my-2">
				<div class="card-body mx-auto">
					<img
					src="./imgs/material.png"
					alt="material"
					loading="lazy"
					class="img-fluid"
					width="200px"
					height="200px"
					data-src="./imgs/">

					<input
					type="button"
					value="Student Materials"
					class="btn text-center btn-block btn-primary text-wrap"
					onclick="load_page('./view_materials.php')" />
				</div>
			</div>
		</div>
	</div>

	<?php require_once('./layouts/footer.php'); ?>

	<script type="text/javascript">
		$(function(){

			$('.img-fluid').lazyload({
				effect: 'fadeIn'
			});

		});
	</script>

</body>
</html>