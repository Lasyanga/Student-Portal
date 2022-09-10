<?php require_once('./layouts/header.php'); ?>

<body>
	<?php require_once('./layouts/sidebar.php'); ?>

	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="javascript:void(0)" onclick="load_page('./dashboard.php')">Dashboard</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Student Entry</li>
		</ol>
	</nav>

	<div class="card mb-2">
	  <div class="card-body">
	    Student Entry

	    <div class="mt-2">
	    	<input type="button" value="Add" class="btn btn-success" id="add_btn" style=""/>
	    </div>
	  </div>
	</div>

	<!-- student list table -->
	<div class="table-responsive-md mb-5" style="overflow-x: auto;">
		<table class="table table-striped table-bordered table-hover" id="student_table">
		  <thead class="thead-dark">
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">First</th>
		      <th scope="col">Last</th>
		      <th scope="col">Handle</th>
		    </tr>
		  </thead>
		  <tbody>
		    <tr>
		      <th scope="row">1</th>
		      <td>Mark</td>
		      <td>Otto</td>
		      <td>@mdo</td>
		    </tr>
		    <tr>
		      <th scope="row">2</th>
		      <td>Jacob</td>
		      <td>Thornton</td>
		      <td>@fat</td>
		    </tr>
		    <tr>
		      <th scope="row">3</th>
		      <td>Larry</td>
		      <td>the Bird</td>
		      <td>@twitter</td>
		    </tr>
		  </tbody>
		</table>
	</div>
	<!-- student list table -->

	<div id="modal"></div>

	<?php require_once('./layouts/footer.php'); ?>

	<script>
		jQuery(function(){

			jQuery('#student_table').DataTable();

			jQuery('#add_btn').click(function(e){
				e.preventDefault();

				console.dir("press: ");
			});
		});
	</script>

</body>
</html>