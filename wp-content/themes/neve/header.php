<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description'); ?></title>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

	<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

	<link rel = "stylesheet" href = "<?php echo get_stylesheet_directory_uri() . '/assets/css/custom/home.css'?>">
    <link rel="icon" href="<?php echo get_site_url() . '/img/logo-prev.png'; ?>" type="image/x-icon">

</head>
<body>
	<?php $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
echo $url;?>
	<div class="header" style = "background-color: #bda819">
		<nav class="navbar navbar-expand-lg bg-body-tertiary">
			<div class="container-fluid justify-content-center position-relative">
				<a class="navbar-brand" href="<?php echo get_site_url(); ?>">
					<img src="<?php echo get_site_url(); ?>/wp-content/uploads/2023/01/cropped-jlo-logo-1.png" class="neve-site-logo skip-lazy" alt="" decoding="async" data-variant="logo" srcset="" sizes="(max-width: 200px) 100vw, 200px" style="filter: invert(0);">				
				</a>

				<button class="position-absolute end-0 me-2 btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRightNavMenu" aria-controls="offcanvasRightNavMenu">
					<i class="bi bi-list text-light fs-1"></i>
				</button>
				
			</div>
		</nav>
	</div>

	<div class="result-alert position-absolute start-0 end-0 col-lg-6 col-11 mx-auto my-2 shadow text-center">
		<?php

			if(isset($_SESSION['result'])){
				echo $_SESSION['result'];
				unset($_SESSION['result']);
			}

		?>
	</div>

	<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRightNavMenu" aria-labelledby="offcanvasRightLabel" style = "background-color: #bda819">
		<div class="offcanvas-header">
			<h5 class="offcanvas-title" id="offcanvasRightLabel"></h5>
			<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
		</div>
		<div class="offcanvas-body">
			<ul class="navbar-nav">

				<?php foreach(get_header_nav_list_array() as $menu_item):

				$nav_item_text = $menu_item['name'];
				$redirect_url = $menu_item['url'];

				echo get_nav_list_item_html($nav_item_text, $redirect_url);

				endforeach; ?>

			</ul>
		</div>
	</div>
	
</body>
</html>