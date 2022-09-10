<?php require_once('./layouts/header.php');?>
<body>
	<?php require_once('./layouts/sidebar.php'); ?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="javascript:void(0)" onclick="load_page('./dashboard.php')">Dashboard</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Student Materials</li>
		</ol>
	</nav>

	<?php require_once('./layouts/footer.php'); ?>
</body>
</html>