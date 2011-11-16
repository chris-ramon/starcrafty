<link rel="stylesheet" href="<?php echo base_url();?>application/site_media/css/estiloFixture.css" type="text/css" media="screen" />	


<div >
    
<h1><a href=""><?php echo $torneoNombre;?></a> <span class="statusTournament <?php echo str_replace(" ", "", strtolower($estado)) ?>"></span><em><?php echo $estado ?></em></h1>

    
    <div class="separator"></div>

 <h2>Fixture</h2>

<form method="post" id="crearRondasForm" enctype="multipart/form-data" action="/starcrafty/fixture/updateFixture/<?php echo $torneoId;?>/<?php echo $rondaId;?>">


<div class="demoFixture">

    <table >
       
        
           <thead><tr >
    <?php 
    
     if($ultimaRondaModificada==0)//no hay matches registrados
     {
     
         ?>
         
                <th><div><p><?php echo "Ronda: 1";?></p></div></th>
                    <th><div><p><?php echo "Siguiente Ronda:2";?></p></div></th>
         <?php 
         
     }
    else   //hay matches registrados ya de una ronda
    {
        for($r=1;$r<=$ultimaRondaModificada;$r++) { ?>
    
            
                <th><div><p><?php echo "Ronda: ".$r;?></p></div></th>
           
            
            <?php }?>
            
            
    <th><div ><p><?php echo "Ronda: ".$r;?></p></div></th>
            
           
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
                           <input type="hidden" name="<?php echo $g;?>" value="" />
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
                 for($n=$ultimaRondaModificada+1;$n<=$ultimaRondaModificada+1;$n++)//$numeroRondas
                 {
                     
                     ?><td>
                         
                         <?php
                         
                         
                         $encuentros=1;
                         for($g=1;$g<=$numeroMatchesTeoricos[$n];$g++)
                             
                         {
                             ?>
                                    
                       <div name ="<?php echo $encuentros;?>" ronda="<?php echo $n;?>" jugador="" match="<?php echo $encuentros;?>" class="droppables">
                           
                           <p><?php echo "Pendiente";?></p>
                            <input type="hidden" name="<?php echo $encuentros++;?>" value="" />
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
    <input type="submit" value="Actualizar fixture" />
        
      </form>  
</div>