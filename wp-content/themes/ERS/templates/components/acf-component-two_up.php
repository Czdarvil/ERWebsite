<?php
/**
 * Tow up (two column) content
 */
 ?>

 <div class="two-up">
   <div class="container">
     <div class="row">
       <div class="col-sm-6 left-content">
         <?php the_sub_field('left_content'); ?>
       </div>
       <div class="col-sm-6 right-content">
         <?php the_sub_field('right_content'); ?>
       </div>
     </div>
   </div>
 </div>
