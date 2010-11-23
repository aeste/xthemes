<div class="hline row"></div>
<div id="footer" class="row">
   <div id="lfoot" class="column grid_3">
   <div id="addr" class="">
   <b>AESTE WORKS (M) SB</b><br/>
   6-3-6 Queens Avenue<br/>
   Jalan Bayam, Cheras<br/>
   55100 Kuala Lumpur, Malaysia<br/>
   info&#64;aeste.my<br/>
   </div>
   </div><!--lfoot-->
<div id="rfoot" class="column grid_9">
   <div class="row">
   <div class="column grid_9">
    <ul class="nav">
    <li><a href="http://www.aeste.my/careers">Careers</a></li>
    <li><a href="http://www.aeste.my/donate">Contribute</a></li>
    <li><a href="http://www.aeste.my/contactus">Contact Us</a></li>
    </ul>
   </div>
   <div class="row">
   <div id="copyright" class="column grid_9">
   <p>Copyright &copy; 2000-<?=date('Y')?> Aeste Works (M) Sdn Bhd.<br/>All Rights Reserved.</p>
      <?php if(!empty($footer_message) || !empty($footer_block)): ?>
          <?php print $footer_message; ?>
          <?php print $footer_block; ?>
      <?php endif; ?>
   </div>
   </div>
  </div>
</div><!--rfoot-->

  </div>
<div class="wline row"></div>
  </div><!-- #wrapper .hfeed -->
  <?php wp_footer() ?>
  </body>
  </html>