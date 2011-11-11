                        <div class="separator last"></div>
                        <div class="separator last"></div>
                        
                        
                        <div id="footer">
                            <p>Nosotros <a href="#">¿Quién es Starcrafty?</a> | <a href="#">Contáctenos</a> | <a href="#">Administrador</a></p>
                            <p>Torneos <a href="#">Mis Torneos</a> | <a href="#">Mis Reservas</a> | <a href="#">En Competencia</a> | <a href="#">Concluídos</a> | <a href="#">Suspendidos</a></p>
                            <p>Cuenta <a href="#">Crear Cuenta</a> | <a href="#">Resumen de Cuenta</a></p>
                            <p>FAQ <a href="#">Ayuda</a></p>
                        </div>
                    </div>                    
                </div>	
</div>
<div id="backgroundPopUp"></div>        
        <script src="<?php echo base_url();?>application/site_media/js/jquery.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>application/site_media/js/mainScript.js" type="text/javascript"></script>
        <script src="<?php echo base_url();?>application/site_media/js/jquery.autocomplete.min.js" type="text/javascript"></script>        
        <?php if(isset($second_js)) { ?>
            <?php if($second_js) { ?>        
            <script src="<?php echo base_url();?>application/site_media/js/<?php echo $second_js?>.js" type="text/javascript"></script>        
            <?php } ?>
        <?php } ?>
        <?php if(isset($third_js)) { ?>
            <?php if($third_js) { ?>        
            <script src="<?php echo base_url();?>application/site_media/js/<?php echo $third_js?>.js" type="text/javascript"></script>        
            <?php } ?>
        <?php } ?>
    </body>
</html>
