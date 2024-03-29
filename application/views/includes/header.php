<!DOCTYPE html>
<html lang="es">
	<head>
		<meta content="text/html" charset="utf-8">
		<meta name="description" content="Gestionar reservas de torneos de starcraft 2">
		<meta name="keywords" content="torneos sc2 perú, sc2 perú torneos, torneos sc2 latinoamerica">
		<meta name="author" content="Christian Ramón, Omar Barboza">
		<meta name="robots" content="all ,follow, index">
		<meta name="generator" content="geany">

		<title>Starcrafty | SC2 Peruvian Tournaments</title>
		<link href='http://fonts.googleapis.com/css?family=Gochi+Hand' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php echo base_url();?>application/site_media/css/css.css" type="text/css" media="screen" />	
        <?php if(isset($second_css)) { ?>
            <?php if($second_css) { ?>
                <link rel="stylesheet" href="<?php echo base_url();?>application/site_media/css/<?php echo $second_css; ?>.css" type="text/css" media="screen" />	
            <?php } ?>
        <?php } ?>
        
	</head>
    
    <body>
    <div id="container">
			<div id="header">
                <div id="registro">                    
                    <p><span id="cerrarRegistro">X</span></p>
                    <?php         
                    $this->load->helper('form');           
                    echo form_open('/user/register/gamer');                    
                    ?>
                    <p>
                    <?php echo form_label('Username ', 'username');
                    echo form_input('username', set_value('username')); ?>
                    </p>                
                    
                    <p>
                    <?php echo form_label('Password ','password');                  
                    echo form_password('pwd'); ?>
                    </p>
                    
                    <p>
                    <?php echo form_label('ID Battlenet ', 'id_battlenet');
                    echo form_input('id_battlenet', set_value('id_battlenet')); ?>
                    </p>
                    
                    <p>
                    <?php $registrarme = array('value' => 'Registrarme', 'class' => 'boton');
                    echo form_submit($registrarme);
                    
                    
                    $reset = array('value' => 'Restablecer', 'class' => 'boton');
                    echo form_reset($reset); ?>                    
                    
                    </p>
                </div>                   
                    <?php echo validation_errors();?>
                        
                    <?php echo form_close(); ?>
				<div id="headerTop">
                    <?php if(!($this->session->userdata('is_logged')) ) { ?>
                    <form method="post" action="/starcrafty/user/login/">
                        <input type="text" name="username" placeholder="Nombre Usuario">
                        <input type="password" name="pwd" placeholder="Tu pass ...">
                        <input type="submit" value="ingresar">			
                    </form>
                    <?php } ?>
				</div>
				<div id="headerLeft">
                    <?php if($this->session->userdata('is_logged')) { ?>
					<?php echo $this->session->userdata('username');?> |
                    <a href="/starcrafty/user/logout/" id="salir">Salir</a>
                    <?php } else { ?>
					<a href="#" id="registrate">Regístrate</a>
                    <?php } ?>
				</div>
			</div>
			
				<div id="main">
                    <?php if($this->session->userdata('is_logged')) { ?>
					<div id="barLeft">
                        <img src="<?php echo base_url() ?>application/site_media/img/sc2terran.png">
                        <ul>
                            <?php if( $this->session->userdata('rol') == 'admin') { ?>
                                <ul>
                                    <li><strong><code><a href="/starcrafty/torneos/poraprobar">Torneos Por Aprobar</a></code> &raquo; </strong></li>
                                    <li><strong><code><a href="/starcrafty/torneos/administrar">Todos los Torneos</a></code> &raquo;</strong></li>
                                </ul>
                            <?php } ?>
                            <ul><strong>Crea tu propio torneo !</strong>
                                <li><a href="/starcrafty/torneos/crearpub">Crear Torneo Público</a></li>
                                <li><a href="/starcrafty/torneos/crearpriv">Crear Torneo Privado</a></li>

                            </ul>
                            <ul class="misTorneosSession"><strong>Mis Torneos</strong>
                                <?php $torneos_creados = $this->session->userdata('torneos_creados'); ?>
                                <?php if($torneos_creados) { ?>
                                    <?php foreach($torneos_creados as $torneo) { ?>
                                        <li><a href="/starcrafty/torneos/detalle/<?php echo $torneo->id ?>"><?php echo $torneo->nombre ?></a>
                                            <ul><br/>
                                                
                                                <li><a href="/starcrafty/torneos/actualizar/<?php echo $torneo->id ?>">Actualizar información </a></li>
                                                <li><a href="/starcrafty/reserva/listar/<?php echo $torneo->id ?>">Reservas</a></li>
                                            </ul>
                                        </li>
                                    <?php } ?>
                                <?php } else{ ?>
                                <p>No tienes ningún torneo</p>
                                <?php } ?>                
                            </ul>
                            
                            <ul class="misTorneosSession"><strong>Mis Reservas</strong>
                                <?php $mis_reservas = $this->session->userdata('mis_reservas'); ?>
                                <?php if($mis_reservas) { ?>
                                    <?php foreach ($mis_reservas as $reserva): ?>
                                        <li><?php echo $reserva->nombre_torneo; ?></li>                                       
                                    <?php endforeach ?>

                                <?php } else { ?>
                                <p>No tienes reservas hechas </p>
                                <?php } ?>
                            </ul>

                            <ul><strong>Mi Cuenta</strong>
                                <li><a href="#">Actualizar Información</a></li>
                            </ul>
                        </ul>                 
                    </div>
                    <?php } ?>
					<div id="content">
                        <header>
                            <h1>Starcrafty | Peruvian SC2 Tournaments</h1>
                        </header>
						<div id="menu">
							<a href="/starcrafty/torneos/" class="button buttonRed">Torneos</a>
								<div id="torneoMenu">
									<ul>
									<li><a href="/starcrafty/torneos/activos/" class="button buttonRed lefty">Activos</a></li>
									<li><a href="/starcrafty/torneos/concluidos/" class="button buttonRed lefty">Concluídos</a></li>
									<li><a href="/starcrafty/torneos/suspendidos/" class="button buttonRed lefty">Suspendidos</a></li>												
									</ul>
									
								</div>

							<a href="/starcrafty/torneos/reservas/" class="button buttonRed">Hacer Reservas</a>
							<a href="/starcrafty/resultados/" class="button buttonRed">Resultados</a>
							<a href="/starcrafty/ranking/" class="button buttonRed">Ranking</a>
							<a href="/starcrafty/faq/" class="button buttonRed">Preguntas Frecuentes</a>
							<a href="/starcrafty/contactanos/" class="button buttonRed">Contáctanos</a>
						</div>
