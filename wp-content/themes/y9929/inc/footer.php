<footer class="footer">
    <div class="container">
        <div class="flex-layout between linerTop endx">
            <div class="col-1">
                <?php 
                    //$url_home = (get_home_url()); 
                    
                    $dataFooter = get_field("sg_footer","option"); 
                    
                    if($dataFooter['logos'] && count($dataFooter['logos']) > 0 )
                    {
                        //if( count($dataFooter['logos']) == 1)
                        //{
                            //echo $dataFooter['logos'][0]['image']['url'];    
                        ?>
                            <a href="<?php echo $dataFooter['logos'][0]['url']; ?>" target="_new">
                                <img src="<?php echo $dataFooter['logos'][0]['image']['url']; ?>" class="img-fluid main-logo">
                            </a>
                        <?php
                       // }
                        if( count($dataFooter['logos']) > 1)
                        {
                            ?>
                                <div>
                                    <ul>
                                        <?php 
                                            $num = 1;
                                            foreach($dataFooter['logos'] as $logo)
                                            {
                                               if($num != 1)
                                               {
                                                ?>
                                                    <li>
                                                        <a href="<?php echo $logo['url']; ?>" target="_new">
                                                            <img src="<?php echo $logo['image']['url']; ?>" class="img-fluid main-logo">
                                                        </a>
                                                    </li>
                                                <?php
                                               } 
                                               $num++;
                                            }
                                        ?>
                                    </ul>
                                </div>
                            <?php
                        }
                        
                        ?>
                        
                        <?php
                    }
                    
                    
                ?>
                

            </div>
            <div class="col-2">
                <div class="info">
                    <?php  if($dataFooter['information']['heading']){ ?>
                        <h3><?php echo $dataFooter['information']['heading']; ?></h3>
                    <?php } ?>

                    <?php  if($dataFooter['information']['sub_heading']){ ?>
                        <h4><?php echo $dataFooter['information']['sub_heading']; ?></h4>
                    <?php } ?>

                    <?php  if($dataFooter['information']['description']){ ?>
                        <?php echo $dataFooter['information']['description']; ?>
                    <?php } ?>
                </div>
            </div>
            
            
        </div>




      
    </div>
</footer>