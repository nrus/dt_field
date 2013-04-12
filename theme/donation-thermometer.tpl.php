<?php


?>
<div class="ft-wrapper">
  <div class="ft-top">
  <div class="ft-top-wrapper">
    <div class="ft-top-left">
      <div class="ft-therm-graph" style="height:<?php print $percentage; ?>%;"></div> 
    </div>
  </div>
  
  <div class="ft-top-right">
    <div class="ft-top-message">
      
    </div>
    
    <div class="ft-goal-box">
      <div class="ft-target">
      <?php print $currency . $sum_targeted; ?>
        <div class="ft-legend">Our Target</div>
      </div>
      <div class="ft-raised">
      <?php print $currency . $sum_collected; ?>
        <div class="ft-legend">Raised so far</div>
      </div>
      
    </div>
  </div>
  </div>
  <div class="ft-bottom-left"></div>
  <div class="ft-bottom-right">

  </div>
  </div>
</div>
