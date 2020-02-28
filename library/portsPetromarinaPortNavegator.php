<?php
     require_once "DbPdo.php";

     require_once "UploadClass.php";
               
               $obj_prod4 = new UploadClass(); 
               $row = $obj_prod4->dataBaseports01();  
?>
 
<div class="searchPortsItems1">

                        <div id="menup" >
                                <ul>
                                    <li class="nivel" >
                                      <img src="../img/logoPorts-white.png" alt=""> 
                                    </li>
                                    <li class="nivel1"><a href="#" class="nivel1" class="btn btn-secondary">AMERICA</a>
                                  
                                      <ul id="uno" class="oculta"> 
                      <?php         
                                  for ($i=0; $i < count($row); $i++){ if ($row[$i]['id_continent'] == 1 &&  $row['valido'] <> "NO") {        
                      ?>
                                        <li>
                                                    <a href="#" onclick="portViews('<?php echo $row[$i]['coordenadasS']; ?>','<?php echo $row[$i]['coordenadasW']; ?>','<?php echo $row[$i]['name']; ?>','<?php echo $row[$i]['country']; ?>','<?php echo $row[$i]['video']; ?>','<?php echo $row[$i]['id']; ?>')">
                                                    
                                                            <?php echo $row[$i]['name']; ?> (<?php echo $row[$i]['country']; ?>)
                                                    
                                                    </a>   
                                                    
                                        </li>
                      <?php      
                                } } 
                      ?>   

                                    </li>
                                            </ul>
                                        
                                            </li>
                                            <li class="nivel1"><a href="#" class="nivel1">ASIA</a>
                                          
                                              <ul id="dos" class="oculta">
                      <?php         
                                  for ($i=0; $i < count($row); $i++){ if ($row[$i]['id_continent'] == 2 &&  $row['valido'] <> "NO") {          
                      ?>
                                        <li>
                                                    <a href="#" onclick="portViews('<?php echo $row[$i]['coordenadasS']; ?>','<?php echo $row[$i]['coordenadasW']; ?>','<?php echo $row[$i]['name']; ?>','<?php echo $row[$i]['country']; ?>','<?php echo $row[$i]['video']; ?>','<?php echo $row[$i]['id']; ?>')">
                                                    
                                                            <?php echo $row[$i]['name']; ?> (<?php echo $row[$i]['country']; ?>)
                                                    
                                                    </a>   
                                                    
                                        </li>
                      <?php      
                                } } 
                      ?>  
                                              
                                              </ul>
                                          
                                            </li>
                                            <li class="nivel1"><a href="#" class="nivel1">EUROPA</a>
                                          
                                              <ul id="tres" class="oculta">
                      <?php         
                                  for ($i=0; $i < count($row); $i++){ if ($row[$i]['id_continent'] == 3 &&  $row['valido'] <> "NO") {        
                      ?>
                                        <li>
                                                    <a href="#" onclick="portViews('<?php echo $row[$i]['coordenadasS']; ?>','<?php echo $row[$i]['coordenadasW']; ?>','<?php echo $row[$i]['name']; ?>','<?php echo $row[$i]['country']; ?>','<?php echo $row[$i]['video']; ?>','<?php echo $row[$i]['id']; ?>')">
                                                    
                                                            <?php echo $row[$i]['name']; ?> (<?php echo $row[$i]['country']; ?>)
                                                    
                                                    </a>   
                                                    
                                        </li>
                      <?php      
                                } } 
                      ?>  
                                              </ul>
                                            
                                            </li>
                                            <li class="nivel1"><a href="#" class="nivel1">AFRICA</a>
                                          
                                              <ul id="cuatro" class="oculta">
                      <?php         
                                  for ($i=0; $i < count($row); $i++){ if ($row[$i]['id_continent'] == 4 &&  $row['valido'] <> "NO") {          
                      ?>
                                        <li>
                                                    <a href="#" onclick="portViews('<?php echo $row[$i]['coordenadasS']; ?>','<?php echo $row[$i]['coordenadasW']; ?>','<?php echo $row[$i]['name']; ?>','<?php echo $row[$i]['country']; ?>','<?php echo $row[$i]['video']; ?>','<?php echo $row[$i]['id']; ?>')">
                                                    
                                                            <?php echo $row[$i]['name']; ?> (<?php echo $row[$i]['country']; ?>)
                                                    
                                                    </a>   
                                                    
                                        </li>
                      <?php      
                                } } 
                      ?>  
                                              </ul>
                                            
                                            </li>
                                            <li class="nivel1"><a href="#" class="nivel1">OCEANIA</a>
                                            
                                              <ul id="cinco" class="oculta">
                                                <li>
                      <?php         
                                  for ($i=0; $i < count($row); $i++){ if ($row[$i]['id_continent'] == 5 &&  $row['valido'] <> "NO") {         
                      ?>
                                        <li>
                                                    <a href="#" onclick="portViews('<?php echo $row[$i]['coordenadasS']; ?>','<?php echo $row[$i]['coordenadasW']; ?>','<?php echo $row[$i]['name']; ?>','<?php echo $row[$i]['country']; ?>','<?php echo $row[$i]['video']; ?>','<?php echo $row[$i]['id']; ?>')">
                                                    
                                                            <?php echo $row[$i]['name']; ?> (<?php echo $row[$i]['country']; ?>)
                                                    
                                                    </a>   
                                                    
                                        </li>
                      <?php      
                                } } 
                      ?>  
                                                </li>
                                              
                                              </ul>
                                      
                                            </li>
                                </ul>
                              </div><!-- End div menup -->
                              </br></br></br> 
    </div><!-- End searchPortsItems1 -->




