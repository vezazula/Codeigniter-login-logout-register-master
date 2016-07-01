<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Portifólio</title>
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- css -->
	<link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/magnific-popup.css') ?>" rel="stylesheet">
	<link href="<?= base_url('assets/css/creative.css') ?>" rel="stylesheet">
    <link href="<?= base_url('https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800') ?>" rel='stylesheet' type='text/css'>
    <link href="<?= base_url('https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic') ?>" rel='stylesheet' type='text/css'>
</head>
<body id="page-top">
	<header id="site-header">
		<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="navbar-header">
						<a class="navbar-brand page-scroll" href="<?= base_url() ?>">Veronica Zazula</a>
					</div>
				</div>
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<?php if (isset($_SESSION['username']) && $_SESSION['logged_in'] === true) : ?>
							<li><a href="<?= base_url('logout') ?>">Logout</a></li>
						<?php else : ?>
							<li>
								<a href="<?= base_url('register') ?>">Registro</a>
							</li>
							<li>
								<a href="<?= base_url('login') ?>">Login</a>
							</li>
							 <li>
                        		<a href="<?= base_url('index') ?>">Sobre</a>
                    		</li>
                    		<li>
                       			<a href="<?= base_url('trabalho') ?>">Trabalho</a>
                    		</li>
                    		<li>
                       			<a href="<?= base_url('formacao') ?>">Formação</a>
                    		</li>
                    		<li>
                        		<a href="<?= base_url('enviar') ?>">Contato</a>
                    		</li>
                    		<li>
                        		<a href="<?= base_url('pdf') ?>">Gerar PDF</a>
                    		</li>
						<?php endif; ?>
					</ul>
				</div><!-- .navbar-collapse -->
			</div><!-- .container-fluid -->
		</nav><!-- .navbar -->


	<main id="site-content" role="main">
		
		<?php if (isset($_SESSION)) : ?>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
					</div>
				</div><!-- .row -->
			</div><!-- .container -->
		<?php endif; ?>
		
