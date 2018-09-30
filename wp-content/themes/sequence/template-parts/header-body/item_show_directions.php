<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>
	
                  <?php
                   $headerCustomer_list__item = ot_get_option('headerCustomer_list__item');
                   ?>   


                    <div class="headerBodyIcon">     
                      <?php 
                            foreach ($headerCustomer_list__item as $headerCustum) :
                            $headerCustomer_img = $headerCustum['headerCustomer_img'] ? $headerCustum['headerCustomer_img'] : ''; 
                            $headeCustomer_name = $headerCustum['headeCustomer_name'] ? $headerCustum['headeCustomer_name'] : ''; 
                         ?>
                           <div class="headerBodyIcon_item">
                              <div class="headerBodyIcon_circle">
                                 <img src="<?php echo $headerCustomer_img;?>" alt="">
                              </div>
                              <span><?php echo $headeCustomer_name; ?></span>
                           </div>
                            <hr>
                         <?php 
                         endforeach;
                         ?>
                   </div>
