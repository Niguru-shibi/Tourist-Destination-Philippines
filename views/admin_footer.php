<?php
    require("connect_db.php");

    $get_ftr_sql = "SELECT * FROM footer_tb";

    $get_ftr_query = mysqli_query($conn, $get_ftr_sql);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
		<meta name="generator" content="Hugo 0.101.0">
		<title>Phillipine Guide Tourist Services  | Admin</title>
		<link rel="icon" type="image/x-icon" href="../images/logo.jpg">

		<link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/dashboard/">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Bootstrap core CSS -->
		<link href="https://getbootstrap.com/docs/4.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

		<!-- Favicons -->
		<link rel="manifest" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/manifest.json">
		<link rel="mask-icon" href="/docs/4.6/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
		<meta name="msapplication-config" content="/docs/4.6/assets/img/favicons/browserconfig.xml">
		<meta name="theme-color" content="#563d7c">

		<!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
		<link href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap4.css" rel="stylesheet">-->

		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css">
		<link href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">
		
		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				-ms-user-select: none;
				user-select: none;
			}
	
			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
				font-size: 3.5rem;
				}
			}
			.auto-resize {
				min-height: 100px;
				overflow-y: hidden;
				resize: none;
				text-align: justify;
			}
            .logo{
				height: 70px; 
				width: auto;
				border-radius:50%;
			}
		</style>

		
		<!-- Custom styles for this template -->
		<link href="../assets/dist/css/dashboard.css" rel="stylesheet">
		
		<!-- dataTable JS -->
        <script src=https://code.jquery.com/jquery-3.7.1.js></script>
        <script src=https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/js/bootstrap.bundle.min.js></script>
        <script src=https://cdn.datatables.net/2.3.2/js/dataTables.js></script>
        <script src=https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js></script>

		<!--Favcons-->
		<link rel="manifest" href="https://getbootstrap.com/docs/4.6/assets/img/favicons/manifest.json">
	</head>
	<body>
    
	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
		<a class="navbar-brand" href="index.php">
        <img class="logo" src="../images/logo.jpg" alt="logo">
        </a>
		<a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">Phillipine Guide Tourist Services</a>
		<button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap">
			<a class="nav-link" href="../views/index.php">Sign out</a>
			</li>
		</ul>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
				<div class="sidebar-sticky pt-3">
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>MAIN</span>
					</h6>
					<ul class="nav flex-column">
						<li class="nav-item">
							<a class="nav-link active" href="dashboard.php?page=dashboard">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
								Dashboard <span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link " href="inquiry.php?page=inquiry">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-message-square"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
								Inquiry
							</a>
						</li>
					</ul>
			
					<h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
						<span>PAGES</span>
					</h6>
					
					<ul class="nav flex-column mb-2">
						<li class="nav-item">
							<a class="nav-link" href="admin_home.php?page=adminhome">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
								Home
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="admin_services.php?page=adminservices">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
								Services
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#" onclick="underConstruction()">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
								Contact
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="admin_footer.php?page=adminfooter">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file-text"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
								Footer
							</a>
						</li>
					</ul>
				</div>
			</nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
				<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
					<h1 class="h2">Manage Footer Page</h1>
					<div class="btn-toolbar mb-2 mb-md-0">
						<div class="btn-group mr-2">
							<button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
							<button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
						</div>
						<button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>
							This week
						</button>
					</div>
				</div>
				<div class="row justify-content-center">
					<div class="col-md-10">
						<h2>Featured Footer Edit</h2>
						<div class="table-responsive">
							<table id="table1" class="table table-striped table-md table-hover table-bordered">
								<thead>
									<tr align="center">
										<th>No.</th>
										<th>Name</th>
										<th>Description</th>
										<th>Action</th>
										
									</tr>
								</thead>
								<tbody>
                                    <?php  $n = 0; foreach ($get_ftr_query as $ftr): $n++ ?>
										<tr>
											<td align="center"><?= $n ?></td>
											<td style="
												background-image:url(<?= $ftr['ftr_imgLink'] == 0? '../images/'.$img['ftr_img']:$img['ftr_img'] ?>);
												background-size:cover;
												background-position: center;
												background-repeat: no-repeat;
												">
												<b style="text-shadow: 	-1px -1px 0 white,
																	1px -1px 0 white,
																	-1px  1px 0 white, 
																	1px  1px 0 white;"
												>
													<?= $ftr['ftr_name']."</br><small>".$ftr['ftr_position']. "</small>"?>
												</b>
											</td>
											<td style="text-align: justify;"><?= $ftr['ftr_desc'] ?> </td>
											<td align="center">
												<button class="btn btn-primary btn-sm" 
												   title="UPDATE FOOTER FEATURE" 
												   data-toggle="modal"
												   data-target="#update_ftr_<?= $ftr['ftr_id']?>"
												   >
													<span class="fa fa-edit" title="UPDATE FOOTER FEATURE"></span>
												</button>
											</td>
										</tr>
                                        <div class="modal fade" id="update_ftr_<?= $ftr['ftr_id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none">
											<div class="modal-dialog" style="max-width:700px;">
												<div class="modal-content">
													<form action="process_data.php?page=admin_home" method="post" enctype="multipart/form-data">
														<div class="modal-header">
															<h5 class="modal-title" id="exampleModalLabel">Update Footer Featured</h5>
															<button type="button" class="btn btn-sm" data-dismiss="modal" style="color:red;"><span class="fa fa-exit">x</span></button>
														</div>
														<div class="modal-body">
															<div>
																<div class="p-4 p-md-5 border rounded-3 bg-light">
																	<div class="form-floating mb-3">
																		<div class="row">
																			<div class="col-sm-2" align="right">
																				<b>Image:</b>
																			</div>
																			<div class="col-sm-10" align="center">
																				<img src="<?= $ftr['ftr_imgLink'] == 0? '../images/'.$img['ftr_img']:$img['ftr_img'] ?>" 
																					 width="100%"
																				/>
																			</div>
																			<div class="col-sm-2" align="right">
																				<b>Name:</b>
																			</div>
																			<div class="col-sm-10">
																				<input class="form-control"
																					   type="text" 
																					   name="name" 
																					   value="<?= $ftr['ftr_name']?> "
																					   required
																					/>
																			</div>
                                                                            <div class="col-sm-2" align="right">
																				<b>Position:</b>
																			</div>
																			<div class="col-sm-10">
																				<input class="form-control"
																					   type="text" 
																					   name="position" 
																					   value="<?= $ftr['ftr_position']?> "
																					   required
																					/>
																			</div>
                                                                            <div class="col-sm-2" align="right">
																				<b>Description:</b>
																			</div>
																			<div class="col-sm-10">
																				<textarea class="form-control auto-resize"
																						type="text" 
																						name="desc" 
																						oninput="autoResizeTextarea(this)"
																						required
																					></textarea>
																			</div>
                                                                                <hr><label><small style="color:red;">Note:</small> Fill-in the form below to change/update the Image and/or link "More" button</label><hr>
                                                                            <div class="col-sm-3" align="right">
																				<b>Online Image Link:</b>
																			</div>
																			<div class="col-sm-9">
																				<input class="form-control"
																					   type="text" 
																					   name="changeImageLink"
																					/>
																			</div>
                                                                            <div class="col-sm-3" align="right">
																				<b>Choose Local Image</b>
																			</div>
																			<div class="col-sm-9">
																				<input class="form-control"
																					   type="file" 
																					   name="changeImage"
																					/>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="modal-footer">
															<input type="hidden" value="<?= $ftr['ftr_id'] ?>" name="id">
															<button type="submit" class="btn btn-success btn-sm" name="ftrBtn"><span class="fa fa-save"></span></button>
														</div>
													</form>
												</div>
											</div>
										</div>
									<?php endforeach ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
        
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.6/assets/js/vendor/jquery.slim.min.js"><\/script>')</script>
		<script src="https://getbootstrap.com/docs/4.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

      
        <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
		<script src="../assets/dist/js/dashboard.js"></script>
		
		<script>
			new DataTable('#table1');
			
			function underConstruction(){
				alert('Feature is underconstruction.');
			}
		</script>
		
		
	

</body>
</html>