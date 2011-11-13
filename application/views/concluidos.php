<div id="mainContent">
    <h2>Torneos Concluídos</h2>
    <?php if($torneos) {?>
    <div class="separator last"></div>
    <div id="tournament">                  
        <?php foreach($torneos as $torneo) {?>
        <!-- Image of the tournament -->
        <div class="tournamentImg">
            <img src="<?php echo $torneo->imagen ?>">
        </div>
        
        <div class="tournamentOptions">         
        
            <!-- Status of the tournament -->
            <p><a href="#" class="opcion">Ver Resultados</a></p>
            <p><span class="statusTournament <?php echo str_replace(" ", "", strtolower($torneo->estado)) ?>"></span><code><?php echo $torneo->estado ?></code></p>
            
            <!-- Share the tournament -->                           
            <div class="shareTournament">
                
                <!-- Facebook share-->
                <script>var fbShare = {
                            url: 'http://www..com/',
                            size: 'big',
                            google_analytics: 'true'
                }</script>
                <script src="http://widgets.fbshare.me/files/fbshare.js"></script>                                    
                <!-- End facebook share -->
                
                <!-- Twitter share -->
                <script type="text/javascript">
                tweetmeme_url = 'http://www..com/';
                </script>
                <script type="text/javascript" src="http://tweetmeme.com/i/scripts/button.js"></script>                                    
                <!-- End twitter share-->
                                        
            </div>
            <!-- End share the tournament -->

        </div>
                                
        <div class="tournamentContent">
            <!-- Title of the tournament --><!-- Comments of the tournament -->
            <h3>Torneo Drago Summer ! | <a href="#">Comentarios(22)</a></h3>                                                                    
            <!-- Tags of the tournament -->
            <p>Etiquetas: <a href="#">Torneo Starcraft II 2011</a> , <a href="#">Miraflores Starcraft II</a></p>
            
            <!-- Description of the tournament -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam elementum aliquet pretium. 
            Praesent aliquet feugiat velit eget luctus. Morbi nec mauris mauris. 
            Ut eu sapien diam. Donec quam nibh, tincidunt sit amet vulputate ut, 
            hendrerit non lacus. In luctus nulla nec libero molestie eleifend. 
            Fusce pellentesque libero eget massa tempus id euismod est fringilla. 
            In faucibus cursus nibh et luctus. Phasellus vel enim eget lectus 
            fermentum ornare. <a href="#"> más ...</a></p>                                  
        </div>
                            
    </div>


    <div class="separator"></div>
    <?php } ?>
    <?php } else { ?>
        <div class="separator last"></div>
        <p class="centrar advice">No tenemos torneos <em>Concluidos</em> !</p>
        <div class="img_excep">
            <img src="<?php echo base_url() ?>application/site_media/img/marine.png" />
        </div>
    <?php } ?>
