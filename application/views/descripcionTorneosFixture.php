<link rel="stylesheet" href="<?php echo base_url();?>application/site_media/css/estiloFixture.css" type="text/css" media="screen" />	


<div >
    
<h1><a href=""><?php echo $torneoNombre;?></a> <span class="statusTournament <?php echo str_replace(" ", "", strtolower($estado)) ?>"></span><em><?php echo $estado ?></em></h1>

    
    <div class="separator"></div>

 <h2>Fixture                    </h2>
 <a href="/starcrafty/fixture/descargarFixture/<?php echo $torneoId;?>">Descargar Fixture</a>
 




<div class="demoFixture">

    <table >
       
        
           <thead><tr >
    <?php 
    
     if($ultimaRondaModificada==0)//no hay matches registrados
     {
     
         ?>
         
                <th><p><?php echo "Ronda: 1";?></p></th>
                    <th><p><?php echo "Siguiente Ronda:2";?></p></th>
         <?php 
         
     }
    else   //hay matches registrados ya de una ronda
    {
        for($r=1;$r<=$numeroRondas;$r++) { ?>
    
            
                <th><p><?php 
                
                echo "Ronda: ".$r;?></p></th>
           
            
            <?php }?>
            
            
    <th><div ><p><?php echo "Ronda: Final";?></p></div></th>
            
           
     <?php }?>   
    
    
     </tr>
        </thead>
            
           <tbody>
               <tr>
             <?php
             //echo $ultimaRondaModificada;
             //print_r( $numeroMatchesPorRonda);
             //print_r( $matchesOrdenados);
             //print_r( $numeroMatchesTeoricos);
             
             //presentar solo los inscritos en las reservas en un <td>
             ?>
                   <td>
                       <?php 
                                
                                foreach($reservas as $reserva)
                                {
                                   
                                    ?>
                                    
                       <div name="<?php echo $reserva->id_user;?>" nom="<?php echo $jugadores[$reserva->id_user]->username;?>"  ronda="0" jugador="<?php echo $reserva->id_user;?>" class="draggables">
                           
                           
                           <p><?php echo $jugadores[$reserva->id_user]->username;?></p>
                           <p>Ranking:<?php echo $jugadores[$reserva->id_user]->ranking;?></p>
                       </div>
                                    <?php
                                    
                                }
                       
                       ?>
                   </td>
                   
             <?php 
             
             
             if($ultimaRondaModificada==0)//todavia no hay ningun dato en los matches
             {
                    //anadir td vacios
                 for($k=1;$k<=1  ;$k++)  //$numeroRondas
                 
                 {
                     
                     ?><td>
                         
                         <?php 
                         
                         $encuentros=1;
                         for($g=1;$g<=$numeroMatchesTeoricos[$k];$g++){
                             
                             
                             ?>
                                    
                         <div name ="<?php echo $encuentros;?>" ronda="<?php echo $k;?>" jugador="" match="<?php echo $encuentros++;?>"  class="droppables">
                           
                           <p><?php echo "Pendiente";?></p>
                           
                       </div>
                                    <?php
                         }
                             ?>
                         
                         
                     </td>
                     
                     
                     <?php 
                 }
                 
             }
             else  //existe ya un cambio hasta la ronda indicada
             {
                 //presentar hasta los ganadores de la ultima ronda modificada y los demas espacios vacios
                 for($h=1;$h<=$ultimaRondaModificada;$h++)
                 {
                     
                     ?><td>
                         
                         <?php 
                         $encuentros=1;
                         foreach($matchesOrdenados[$h] as $matches){
                             
                             
                             ?>
                                    
                       <div nom="<?php echo $jugadores[$matches->ganador]->username;?>" name="<?php echo $matches->ganador;//print_r( $matches);?>" ronda="<?php echo $h;?>" jugador="" match="<?php echo $encuentros++;?>" class="draggables">
                           
                           
                           <p><?php echo $jugadores[$matches->ganador]->username;?></p>
                           <p>Ranking:<?php echo $jugadores[$matches->ganador]->ranking;?></p>
                           
                           
                       </div>
                                    <?php
                                    
                         }
                             ?>
                         
                         
                     </td>
                     
                     
                     <?php 
                 }
                 
                 if($ultimaRondaModificada<$numeroRondas)
                 {
                 for($n=$ultimaRondaModificada+1;$n<=$numeroRondas;$n++)//$numeroRondas
                 {
                     
                     ?><td>
                         
                         <?php
                         
                         
                         $encuentros=1;
                         for($g=1;$g<=$numeroMatchesTeoricos[$n];$g++)
                             
                         {
                             ?>
                                    
                       <div name ="<?php echo $encuentros;?>" ronda="<?php echo $n;?>" jugador="" match="<?php echo $encuentros;?>" class="droppables">
                           
                           <p><?php echo "Pendiente";?></p>
                           
                       </div>
                                    <?php }
                             ?>
                         
                     </td>
                     
                     
                     <?php 
                 }
                 }
             }
             
             
           
             ?>
                     
                 
                 
                
    
      
                  </tr>   
        </tbody>
    </table>
    
        
      
</div>
     <div class="separator"></div>

 
 <div class="comment">
        <img src="../site_media/img/raza.png"><a href="#"><?php echo $torneoNombre;?></a> para <a href="#">Starcrafty</a><br>
        
        <a href="#">Agregar comentario</a>
        
    </div>
    <div class="comment">
        1  Comentarios
        
    </div>
    
    
    <div class="comment">
        <img src="../site_media/img/raza.png">Gamer 123<br>
        Buen torneo, prometedor!!
        <a href="#">Responder</a>
        
    </div>
    <div class="addComment">
        <table >
            
            <tbody>
                <tr>
                    <td><input  type="text" name="nombre" value="<<Ingrese su nombre>>" /></td>
                    <td>Nombre</td>
                    <td>* Campo obligatorio</td>
                </tr>
                <tr>
                    <td><input type="text" name="correo" value="<<Correo>>"  /></td>
                    <td>Correo</td>
                    <td>* Campo obligatorio</td>
                </tr>
                <tr>
                    <td >Mensaje<br>
                        <textarea  class ="comentarioRellenar" cols="20" rows="5" placeholder="Ingrese comentarios"></textarea>
                        
                    
                </tr>
                
            </tbody>
            
        </table>
        <input type="submit"  value="Enviar" /><input type="reset" value="Restablecer"  />

        
    </div>
        
        
 
