<?php	/// session_start();
		$mostrarerror = 1;
		$arrclieval = ['Alberto','Mónica','Ricardo','Irma','Alexis'];
		$arrseguval = ['Baja'.'Media','Alta','Estricta'];
		$arridioval = ['Castellano','Inglés','Croata','Islandés'];
		$arrservval = ['Alimentos','Bebidas','Empaques','Postres','Delicatessen','Cubiertos'];

		include('libs/quicks.php');
		$rsmens = [
			[
				'mens_id' => 1,
				'idprod' => 1,
				'nomagen' => 'Albert Einstein',
				'fecham' => '23.05.21 14:05',
				'contenido' => 'Locura es esperar resultados diferentes.',
				'urgente' => 1
			],
			[
				'mens_id' => 2,
				'idprod' => 2,
				'nomagen' => 'Isaac Newton',
				'fecham' => '22.05.21 09:05',
				'contenido' => 'Locura es esperar resultados diferentes.',
				'urgente' => 1
			],
			[
				'mens_id' => 3,
				'idprod' => 3,
				'nomagen' => 'Nikola Tesla',
				'fecham' => '20.05.21 20:05',
				'contenido' => 'Locura es esperar resultados diferentes.',
				'urgente' => 1
			],
			[
				'mens_id' => 4,
				'idprod' => 4,
				'nomagen' => 'Micchio Kaku',
				'fecham' => '12.05.21 08:25',
				'contenido' => 'Locura es esperar resultados diferentes.',
				'urgente' => 1
			],
			[
				'mens_id' => 5,
				'idprod' => 5,
				'nomagen' => 'Stephen Hawking',
				'fecham' => '10.05.21 22:25',
				'contenido' => 'Locura es esperar resultados diferentes.',
				'urgente' => 1
			],
			[
				'mens_id' => 6,
				'idprod' => 6,
				'nomagen' => 'Galileo Galilei',
				'fecham' => '07.05.21 10:13',
				'contenido' => 'Locura es esperar resultados diferentes.',
				'urgente' => 1
			]
		];
		$doing = 'Nuevo';
		$done = 'Crear';
		$idone = 'fa-plus-circle';
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>Xinaptia - en Progreso: Xistema </title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta content="Xinaptia" name="author">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<base href="https://alfanegocios.com.ar/sandbox2/reindex.php" target="_top">
		<link rel="shortcut icon" href="images/favicon.png">
		<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
		<link href="css/bootstrap-table.min.css" rel="stylesheet" type="text/css">
		<link href="css/icons.css" rel="stylesheet" type="text/css">
		<link href="css/app.min.css" rel="stylesheet" type="text/css">
		<link href="css/jquery.toast.min.css" rel="stylesheet" type="text/css">
        <link href="css/multi-select.css" rel="stylesheet" type="text/css" />
		<link href="css/bootstrap-select.min.css" rel="stylesheet" type="text/css" />
		<link href="css/flatpickr.min.css" rel="stylesheet" type="text/css" />
		<link href="css/specials.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<div id="wrapper">

			<div class="navbar-custom">
				<ul class="list-unstyled topnav-menu float-right mb-0">
        
					<li class="dropdown notification-list">
						<a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
							<i class="fe-bell noti-icon"></i>
							<span class="badge badge-danger rounded-circle noti-icon-badge">6</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-lg">
	<!-- Inicio Desplegable Mensajes-->
							<div class="dropdown-item noti-title">
								<h5 class="m-0">
									<span class="float-right">
										<a href="" class="text-dark">
											<small>Limpiar todos</small>
										</a>
									</span>Notificaciones
								</h5>
							</div>

							<div class="slimscroll noti-scroll">
<?php		$destamsg = ' active';
			foreach($rsmens as $rsmkey => $rsmval) {
				echo '								<a href="javascript:void(0);" class="dropdown-item notify-item'.$destamsg.'">
									<div class="notify-icon">
										<img src="'.Avatarea($rsmval['idprod']).'" class="img-fluid rounded-circle" alt="'.$rsmval['nomagen'].'"/>
									</div>
									<p class="notify-details">'.$rsmval['nomagen'].'</p>
									<p class="text-muted mb-0 user-msg">
										<small>'.$rsmval['contenido'].'</small>
										<small class="text-muted">publicado '.$rsmval['fecham'].'</small>
									</p>
								</a>
';
				$destamsg = '';
			}
?>
							</div>
							<a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
								Ver Todos
								<i class="fi-arrow-right"></i>
							</a>
						</div>
					</li>
	<!-- Fin Desplegable Mensajes-->

	<!-- Inicio Ajustes del Usuario -->
					<li class="dropdown notification-list">
						<a class="nav-link dropdown-toggle nav-user mr-0 waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
							<img src="<?php echo Avatarea(0); ?>" alt="user-image" class="rounded-circle">
							<span class="pro-user-name ml-1">
								Giordano Bruno
							</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-dropdown ">
							<div class="dropdown-header noti-title">
								<h6 class="text-overflow m-0">¡ Hola !</h6>
							</div>
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-user"></i>
								<span>Mis Datos</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-settings"></i>
								<span>Settings</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item notify-item">
								<i class="fe-lock"></i>
								<span>Bloquear</span>
							</a>
							<div class="dropdown-divider"></div>
							<a href="javascript:void(0);" class="dropdown-item notify-item sabot" data-some="index.htm" data-val="rvire">
								<i class="fe-tag"></i>
								<span>Volveré</span>
							</a>
							<a href="javascript:void(0);" class="dropdown-item notify-item sabot" data-some="index.htm" data-val="lgut">
								<i class="fe-log-out"></i>
								<span>Salir</span>
							</a>
						</div>
					</li>
	<!-- Fin Ajustes del Usuario -->

					<li class="dropdown notification-list">
						<a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
							<i class="fe-settings noti-icon"></i>
						</a>
					</li>

				</ul>

				<div class="logo-box">
					<a href="javascript:void(0);" class="logo text-center sabot" data-some="eslobby">
						<span class="logo-lg">
							<img src="images/logo-light.png" alt="alfanegocios.com.ar/xinap" height="30">
						</span>
						<span class="logo-sm">
							<img src="images/logo-sm.png" alt="alfanegocios.com.ar/xinap" height="24">
						</span>
					</a>
				</div>

				<ul class="list-unstyled topnav-menu topnav-menu-left m-0">
					<li>
						<button class="button-menu-mobile waves-effect waves-light">
							<i class="fe-menu"></i>
						</button>
					</li>
        
	<!-- Inicio Agregador Superior -->
					<li class="dropdown d-none d-lg-block">
						<a class="nav-link dropdown-toggle waves-effect waves-light" data-toggle="dropdown" href="javascript:void(0);" role="button" aria-haspopup="false" aria-expanded="false">
							Agregar
						</a>
						<div class="dropdown-menu">

							<a href="#" class="dropdown-item">
								<i class="fas fa-grip-vertical mr-1"></i>
								<span> Campo </span>
							</a>
							<a href="#" class="dropdown-item">
								<i class="fas fa-fingerprint mr-1"></i>
								<span> Característica </span>
							</a>
							<a href="#" class="dropdown-item">
								<i class="fas fa-map mr-1"></i>
								<span> Local </span>
							</a>
							<a href="#" class="dropdown-item">
								<i class="fas fa-map-marked-alt mr-1"></i>
								<span> Término </span>
							</a>
							<a href="#" class="dropdown-item">
								<i class="fas fa-plane-departure mr-1"></i>
								<span> PreFlight </span>
							</a>
							<a href="#" class="dropdown-item">
								<i class="fas fa-handshake mr-1"></i>
								<span> Productor </span>
							</a>
							<a href="#" class="dropdown-item">
								<i class="fas fa-user-circle mr-1"></i>
								<span> Cliente </span>
							</a>
							<a href="#" class="dropdown-item">
								<i class="fas fa-clipboard-list mr-1"></i>
								<span> Servicio </span>
							</a>
							<a href="#" class="dropdown-item">
								<i class="fas fa-hashtag mr-1"></i>
								<span> Tipos </span>
							</a>
							<a href="#" class="dropdown-item">
								<i class="fas fa-magic mr-1"></i>
								<span> Traducción </span>
							</a>
							<a href="#" class="dropdown-item">
								<i class="fas fa-box-open mr-1"></i>
								<span> Xistema </span>
							</a>

							<div class="dropdown-divider"></div>

							<a href="javascript:void(0);" class="dropdown-item sabot" data-some="some">
								<i class="fe-headphones mr-1"></i>
								<span>Ayuda & Soporte</span>
							</a>

						</div>
					</li>
 	<!-- Fin Agregador Superior -->

				</ul>
			</div>

	<!-- Inicio Menu Colapsable-->
			<div class="left-side-menu">
				<div class="slimscroll-menu">

					<div id="sidebar-menu">
						<ul class="metismenu" id="side-menu">

							<li>
								<a href="javascript: void(0);">
									<i class="fas fa-grip-vertical"></i>
									<span> Campo </span>
									<span class="menu-arrow"></span>
								</a>
								<ul class="nav-second-level" aria-expanded="false">
									<li>
										<a href="es4f24r">Listar</a>
									</li>
									<li>
										<a href="es4f24i">Agregar</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript: void(0);">
									<i class="fas fa-fingerprint"></i>
									<span> Característica </span>
									<span class="menu-arrow"></span>
								</a>
								<ul class="nav-second-level" aria-expanded="false">
									<li>
										<a href="es4e1Fn">Listar</a>
									</li>
									<li>
										<a href="es4e1Fe">Agregar</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript: void(0);">
									<i class="fas fa-map"></i>
									<span> Local </span>
									<span class="menu-arrow"></span>
								</a>
								<ul class="nav-second-level" aria-expanded="false">
									<li>
										<a href="es2j56n">Listar</a>
									</li>
									<li>
										<a href="es2j56j">...con Término</a>
									</li>
									<li>
										<a href="es2j56e">Agregar</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript: void(0);">
									<i class="fas fa-plane-departure"></i>
									<span> PreFlight </span>
									<span class="menu-arrow"></span>
								</a>
								<ul class="nav-second-level" aria-expanded="false">
									<li>
										<a href="es5h55o">Listar</a>
									</li>
									<li>
										<a href="es5h55d">Agregar</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript: void(0);">
									<i class="fas fa-handshake"></i>
									<span> Productor </span>
									<span class="menu-arrow"></span>
								</a>
								<ul class="nav-second-level" aria-expanded="false">
									<li>
										<a href="es4a14r">Listar</a>
									</li>
									<li>
										<a href="es4a14g">...con Cliente</a>
									</li>
									<li>
										<a href="es4a14i">Agregar</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript: void(0);">
									<i class="fas fa-clipboard-list"></i>
									<span> Servicio </span>
									<span class="menu-arrow"></span>
								</a>
								<ul class="nav-second-level" aria-expanded="false">
									<li>
										<a href="es2d34r">Listar</a>
									</li>
									<li>
										<a href="es2d34i">Agregar</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript: void(0);">
									<i class="fas fa-hashtag"></i>
									<span> Tipos </span>
									<span class="menu-arrow"></span>
								</a>
								<ul class="nav-second-level" aria-expanded="false">
									<li>
										<a href="es3g22o">Listar</a>
									</li>
									<li>
										<a href="es3g22d">Agregar</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript: void(0);">
									<i class="fas fa-magic"></i>
									<span> Traducción </span>
									<span class="menu-arrow"></span>
								</a>
								<ul class="nav-second-level" aria-expanded="false">
									<li>
										<a href="es3i31o">Listar</a>
									</li>
									<li>
										<a href="es3i31d">Agregar</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="javascript: void(0);">
									<i class="fas fa-box-open"></i>
									<span> Xistema </span>
									<span class="menu-arrow"></span>
								</a>
								<ul class="nav-second-level" aria-expanded="false">
									<li>
										<a href="es5c44n">Listar</a>
									</li>
									<li>
										<a href="es5c44e">Agregar</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
	<!-- Fin Menú Colapsable-->


			<div class="content-page">
				<div class="content">
					<div class="container-fluid">

						<div class="row">
							<div class="col-12">
								<div class="page-title-box">
									<div class="page-title-right">
										<ol class="breadcrumb m-0">
											<li class="breadcrumb-item"><a href="javascript: void(0);">Xinaptia</a></li>
											<li class="breadcrumb-item"><a href="javascript: void(0);">Xistema</a></li>
											<li class="breadcrumb-item"><a href="javascript: void(0);"><?php echo $doing; ?></a></li>
										</ol>
									</div>
									<h4 class="page-title"><?php echo $doing; ?> Xistema</h4>
								</div>
							</div>
						</div>
<?php	if($mostrarerror == 1) { ?>
						<div class="row">
							<div class="col-12">
								<div class="card text-white bg-danger">
									<div class="card-body">
										<h5 class="card-title text-white">Se encontraron estos errores.</h5>
										<p class="card-text">La suma de los catetos no es igual a la hipotenusa</p>
									</div>
								</div>
							</div>
						</div>
<?php	} ?>
						<div class="row">
							<div class="col-12">
								<div class="card">
									<div class="card-body">
										<form name="frmratc" id="frmratc" target="" method="post" class="needs-validation" novalidate>
											<div class="form-group form-row">
												<div class="col-12 col-md-6">
													<label for="dspcliente" class="col-form-label col-12">Cliente</label>
													<select class="selectpicker col-9" data-live-search="true" data-style="btn-light" name="dspcliente" id="dspcliente">
														<option value="">Seleccione..</option>
<?php		foreach($arrclieval as $cliekey => $clieval) {
				echo '														<option value="'.$cliekey.'">'.$clieval.'</option>
';
			}
?>
													</select>
												</div>
												<div class="col-12 col-md-6">
													<label for="fldhost" class="col-form-label">Ip Especial</label>
													<input type="text" class="form-control stymax" maxlength="20" name="fldhost" id="fldhost" value="">
												</div>
											</div>
											<div class="form-group form-row">
												<div class="col-12 col-md-6">
													<label for="fldsite" class="col-form-label">URL (<code>*</code>)</label>
													<input type="text" class="form-control stymax" maxlength="50" required name="fldsite" id="fldsite" value="">
													<div class="valid-feedback">
														Se ve bien!.
													</div>
													<div class="invalid-feedback">
														Algo falta o está incorrecto en URL.
													</div>
												</div>
												<div class="col-12 col-md-6">
													<label for="dspseguri" class="col-form-label col-12">Seguridad (<code>*</code>)</label>
													<select class="selectpicker col-9" data-live-search="true" data-style="btn-light" required name="dspseguri" id="dspseguri">
														<option value="">Seleccione..</option>
<?php		foreach($arrseguval as $segukey => $seguval) {
				echo '														<option value="'.$segukey.'">'.$seguval.'</option>
';
			}
?>
													</select>
													<div class="valid-feedback">
														Se ve bien!.
													</div>
													<div class="invalid-feedback">
														Algo falta o está incorrecto en Seguridad.
													</div>
												</div>
											</div>
											<div class="form-group form-row">
												<div class="col-12 col-md-6">
													<label for="fldbase" class="col-form-label">Base (<code>*</code>)</label>
													<input type="text" class="form-control stymax" maxlength="16" required name="fldbase" id="fldbase" value="">
													<div class="valid-feedback">
														Se ve bien!.
													</div>
													<div class="invalid-feedback">
														Algo falta o está incorrecto en Base.
													</div>
												</div>
												<div class="col-12 col-md-6">
													<label for="flduser" class="col-form-label">UserName (<code>*</code>)</label>
													<input type="text" class="form-control stymax" maxlength="16" required name="flduser" id="flduser" value="">
													<div class="valid-feedback">
														Se ve bien!.
													</div>
													<div class="invalid-feedback">
														Algo falta o está incorrecto en UserName.
													</div>
												</div>
											</div>
											<div class="form-group form-row">
												<div class="col-12 col-md-6">
													<label><br>Admin fijo (<code>*</code>)</label>
													<div class="custom-control custom-switch">
														<input type="checkbox" class="custom-control-input" name="chbfixedadm" id="chbfixedadm" value="1">
														<label for="chbfixedadm" class="custom-control-label">Admin fijo</label>
													</div>
												</div>
												<div class="col-12 col-md-6">
													<label for="fldmailadm" class="col-form-label">Email Adm (<code>*</code>)</label>
													<input type="email" class="form-control stymax" maxlength="50" required name="fldmailadm" id="fldmailadm" value="">
													<div class="valid-feedback">
														Se ve bien!.
													</div>
													<div class="invalid-feedback">
														Algo falta o está incorrecto en Email Adm.
													</div>
												</div>
											</div>
											<div class="form-group form-row">
												<div class="col-12 col-md-6">
													<label for="mslidiomas" class="col-form-label">Idiomas</label>
													<select multiple="multiple" class="multi-select" id="mslidiomas" name="mslidiomas[]" data-plugin="multiselect">
<?php		foreach($arridioval as $idiokey => $idioval) {
				echo '														<option value="'.$idiokey.'">'.$idioval.'</option>
';	
			}
?>
													</select>
												</div>
												<div class="col-12 col-md-6">
													<div class="col-12 form-row">
														<div class="col-12">
															<label for="fldmaincolor" class="col-form-label">1º Color (<code>*</code>)</label>
															<input type="text" class="form-control stymax" maxlength="6" required name="fldmaincolor" id="fldmaincolor" value="">
															<div class="valid-feedback">
																Se ve bien!.
															</div>
															<div class="invalid-feedback">
																Algo falta o está incorrecto en 1º Color.
															</div>
														</div>
													</div>
													<div class="col-12 form-row">
														<div class="col-12">
															<label for="fldseccolor" class="col-form-label">2º Color (<code>*</code>)</label>
															<input type="text" class="form-control stymax" maxlength="6" required name="fldseccolor" id="fldseccolor" value="">
															<div class="valid-feedback">
																Se ve bien!.
															</div>
															<div class="invalid-feedback">
																Algo falta o está incorrecto en 2º Color.
															</div>
														</div>
													</div>
													<div class="col-12 form-row">
														<div class="col-12">
															<label><br>Sitio Amplio (<code>*</code>)</label>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" name="chbfullsite" id="chbfullsite" value="1">
																<label for="chbfullsite" class="custom-control-label">Sitio Amplio</label>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group form-row">
												<div class="col-6 form-row">
													<div class="col-12">
														<label for="fldrecsitekey" class="col-form-label">Clave Pública RC</label>
														<input type="text" class="form-control stymax" maxlength="50" name="fldrecsitekey" id="fldrecsitekey" value="">
													</div>
													<div class="col-12 form-row">
														<div class="col-12">
															<label for="fldrecsecret" class="col-form-label">Clave Secreta RC</label>
															<input type="text" class="form-control stymax" maxlength="50" name="fldrecsecret" id="fldrecsecret" value="">
														</div>
													</div>
													<div class="col-12 form-row">
														<div class="col-12">
															<label><br>Estado (<code>*</code>)</label>
															<div class="custom-control custom-switch">
																<input type="checkbox" class="custom-control-input" name="chbestatus" id="chbestatus" checked="checked" value="1">
																<label for="chbestatus" class="custom-control-label">Activo</label>
															</div>
														</div>
													</div>
												</div>
												<div class="col-6 form-row">
													<label for="mslservicio" class="col-form-label">Servicio (<code>*</code>)</label>
													<select multiple="multiple" class="multi-select" required id="mslservicio" name="mslservicio[]" data-plugin="multiselect">
<?php		foreach($arrservval as $servkey => $servval) {
				echo '															<option value="'.$servkey.'">'.$servval.'</option>
';	
			}
?>
													</select>
													<div class="valid-feedback">
														Se ve bien!.
													</div>
													<div class="invalid-feedback">
														Algo falta o está incorrecto en Servicio.
													</div>
												</div>
											</div>
											<div class="form-group form-row">
												<div class="col-12">
													<input type="hidden" name="rid" id="rid" value="0"><br><br>
													(<code>*</code>) Campos necesarios
													<button type="submit" name="accnbtn" id="accnbtn" class="btn btn-primary waves-effect waves-light float-right mx-2">
														<span class="btn-label"><i class="fas <?php echo $idone; ?>"></i></span><?php echo $done; ?>
													</button>
													<a href="#">
														<button type="button" name="regres" id="regres" class="btn btn-secondary waves-effect waves-light float-right mx-2">
														<span class="btn-label"><i class="fas fa-reply"></i></span>Volver
														</button>
													</a>
												</div>
											</div>

										</form>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
				<form action="" method="post" name="extfrm" id="extfrm"><input name="extval" id="extval" type="hidden" value=""><input name="extcomp" id="extcomp" type="hidden" value=""></form>

				<footer class="footer">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-6">
								2021 <?php if(date('Y') > 2021) echo ' - '.date('Y'); ?> &copy; Xinaptia por <a href="https://xinaptia.com" target="_blank">Xinaptia</a> 
							</div>
							<div class="col-md-6">
								<div class="text-md-right footer-links d-none d-sm-block">
									<a href="https://xinaptia.com">Quienes Somos</a>
									<a href="javascript:void(0);" class="sabot" data-some="some">Ayuda & Soporte</a>
									<a href="javascript:void(0);" target="_blank">Contacto</a>
								</div>
							</div>
						</div>
					</div>
				</footer>
           	</div>

	<!-- Inicio Ajustes de la Página -->
			<div class="right-bar">
				<div class="rightbar-title">
					<a href="javascript:void(0);" class="right-bar-toggle float-right">
						<i class="dripicons-cross noti-icon"></i>
					</a>
					<h5 class="m-0 text-white">Ajustes</h5>
				</div>

				<div class="slimscroll-menu">
					<div class="user-box">
						<div class="user-img">
							<img src="<?php echo Avatarea(0); ?>" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
							<a href="javascript:void(0);" class="user-edit"><i class="mdi mdi-pencil"></i></a>
						</div>
						<h5><a href="javascript: void(0);">Giordano Bruno</a> </h5>
						<p class="text-muted mb-0"><small>Consultor General</small></p>
					</div>

					<hr class="mt-0" />
					<h5 class="pl-3">Ajustes Básicos</h5>
					<hr class="mb-0" />

					<div class="p-3">

						<div class="checkbox checkbox-primary mb-2">
							<input id="checkset2" class="sabot" data-some="some" data-val="l" type="checkbox">
							<label for="checkset2">Recordar cambios de hoy</label>
						</div>
					</div>

					<hr class="mt-0" />
					<h5 class="pl-3 pr-3">Mensajes <span class="float-right badge badge-pill badge-danger">6</span></h5>
					<hr class="mb-0" />
					
	<!-- Inicio Desplegable de Mensajes (de la Página) -->
					<div class="p-3">
						<div class="inbox-widget">
<?php		$destamsg = ' active';
			foreach($rsmens as $rsmkey => $rsmval) {
				echo '							
							<div class="inbox-item">
								<div class="inbox-item-img"><img src="'.Avatarea($rsmval['idprod']).'" class="rounded-circle" alt="'.$rsmval['nomagen'].'"></div>
								<p class="inbox-item-author"><a href="javascript: void(0);" class="text-dark">'.$rsmval['nomagen'].'</a></p>
								<p class="inbox-item-text">'.$rsmval['contenido'].'</p>
							</div>
';
			} ?>
						</div>
        			</div>
	<!-- Fin Desplegable de Mensajes (de la Página)-->
			    </div>
			</div>
	<!-- Fin Ajustes de la Página -->

			<div class="rightbar-overlay"></div>

			<script src="libs/vendor.min.js"></script>
			<script src="libs/jquery.multi-select.js"></script>
			<script src="libs/jquery.autocomplete.min.js"></script>
			<!-- <script src="libs/bootstrap-select.min.js"></script> -->
			<script src="libs/bootstrap-maxlength.min.js"></script>
			<script src="libs/form-advanced.init.es.js"></script>
			<script src="libs/flatpickr.es.min.js"></script>
			<script src="libs/form-pickers.init.js"></script>
			<script src="libs/shoot.js"></script>
			<script src="libs/jquery.toast.min.js"></script>
			<script src="libs/toastr.init.js"></script>
			<script src="libs/app.min.js"></script>
		</div>
	</body>
</html>