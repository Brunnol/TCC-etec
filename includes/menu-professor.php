<?php?>
<header>
	<!-- Fixed navbar -->
	<nav class="navbar fixed-top navbar-dark bg-black p-0">
		<button class="navbar-toggler p-1 border-1" type="button" data-toggle="menu">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand h1 p-4" href="home.php">Painel do Professor</a>
		<a href="sair.php" class="p-2 border-0 text-white p-0">
			<i>Sair</i> <i class="fas fa-sign-out-alt"></i>
		</a>
	</nav>
	<div class="fechar-menu-lateral"></div>
	<div class="menu-lateral bg-light p-0">
		<div class="w-100 h-auto bg-dark" id="navbar-header">
			<div id="area-usuario" class="text-light">
				<div class="icon">
					<i class="fas fa-user-circle"></i>
				</div>
				<div class="text-right">
					<a class="nm-user"><?php echo $_SESSION['nm_usuario']." ".$_SESSION['sobrenome']; ?></a>
					<i class="email-user"><?php echo $_SESSION['email']; ?></i>
				</div>
			</div>
		</div>
		<ul id="navbar-body">
			<li class="menu-item">
				<a class="menu-link ml-4" href="home.php"><i class="fas fa-home fa-lg mr-3"></i>Home</a>
			</li>
			<li class="menu-item" data-dropdawn-toggle="menu-dropdown3">
				<a class="menu-link ml-4 " href="avaliacoes.php"><i class="far fa-calendar-alt fa-lg mr-3"></i>Avaliações</a>
			</li>
			<li class="menu-item" data-dropdawn-toggle="menu-dropdown1">
				<a class="menu-link ml-4 " href="#"><i class="far fa-calendar-alt fa-lg mr-3"></i>Eventos<i class="fas fa-caret-down ml-2" id="seta1"></i> </a>
			</li>
			<ul class="menu-dropdown-body bg-dark" id="menu-dropdown1" >
				<li class="menu-dropdown-item">
					<a class="menu-dropdown-link" href="#"><i class="fas fa-caret-right ml-5 mr-2"></i>Eventos públicos</a>
				</li>
				<li class="menu-dropdown-item">
					<a class="menu-dropdown-link" href="#"><i class="fas fa-caret-right ml-5 mr-2"></i>Eventos privados</a>
				</li>
			</ul>
			<li class="menu-item">
				<a class="menu-link ml-4" href="#"><i class="fas fa-chalkboard fa-lg mr-3"></i>Turmas</a>
			</li>
		</ul>
	</div>
</header>