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
                    <span id="cerrarRegistro">X</span><p>
                    <?php         
                    $this->load->helper('form');           
                    echo form_open('/user/register/gamer');
                    $attr = array('class' => 'reddy');
                    
                    echo form_label('Username ', 'username', $attr);
                    echo form_input('username', set_value('username'));                    
                    
                    echo form_label('Password ','password', $attr);                    
                    
                    echo form_password('pwd');
                    
                    #echo form_password('password2', 'Password Again');
                    
                    echo form_label('ID Battlenet', 'id_battlenet', $attr);
                    echo form_input('id_battlenet', set_value('id_battlenet'));
                    
                    echo '</p><p>';
                    
                    $registrarme = array('value' => 'Registrarme', 'class' => 'boton');
                    echo form_submit($registrarme);
                    
                    
                    $reset = array('value' => 'Restablecer', 'class' => 'boton');
                    echo form_reset($reset);                    
                    
                    echo '</p>';
                    
                    
                    
                    ?>              
                </div>
                    <?php
                    echo validation_errors('<p class="error_register">');
                    echo form_close();
                    ?>                
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
                        <ul>
                            <?php if( $this->session->userdata('rol') == 'admin') { ?>
                                <ul><strong><a href="">Torneos Por Aprobar</a> &raquo; </strong>
                                    
                                </ul>
                            <?php } ?>
                            <ul><strong>Crea tu propio torneo !</strong>
                                <li><a href="/starcrafty/torneos/crearpub">Crear Torneo Público</a></li>
                                <li><a href="/starcrafty/torneos/crearpriv">Crear Torneo Privado</a></li>

                            </ul>
                            <ul><strong>Mis Torneos</strong>
                                <?php $torneos_creados = $this->session->userdata('torneos_creados'); ?>
                                <?php if($torneos_creados) { ?>
                                    <?php foreach($torneos_creados as $torneo) { ?>
                                        <li><a href="/starcrafty/torneos/detalle/<?php echo $torneo->id ?>"><?php echo $torneo->nombre ?></a> | <a href="/starcrafty/torneos/actualizar/<?php echo $torneo->id ?>">actualizar info... </a></li>
                                    <?php } ?>
                                <?php } else{ ?>
                                <p>No tienes ningún torneo</p>
                                <?php } ?>
                            </ul>
                            <ul><strong>Mi Cuenta</strong>
                                <li><a href="crearTorneo.html">Actualizar Información</a></li>
                            </ul>
                        </ul>                 
                    </div>
                    <?php } ?>
					<div id="content">
						<h1>Starcrafty | Peruvian SC2 Tournaments</h1>
						<div id="contentNews">
                            <img src="<?php echo base_url();?>application/site_media/img/sc2_1.png">
                        </div>
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
