<!DOCTYPE html>
<html>

<head>
  <title>Contact</title>
<?php include "includes/_head.php" ; ?>
</head>

<body>
  <div class="map">
    
    <iframe width="100%" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Auckland,+New+Zealand&amp;aq=0&amp;oq=auc&amp;sll=37.0625,-95.677068&amp;sspn=46.946584,74.53125&amp;ie=UTF8&amp;hq=&amp;hnear=Auckland,+New+Zealand&amp;ll=-36.84846,174.763332&amp;spn=0.046635,0.072784&amp;t=m&amp;z=14&amp;output=embed&iwloc=near"></iframe>
  </div>

  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span3">
        <?PHP include "includes/_sidebarMenu.php" ; ?>
      </div>
      <div class="span9">
        <div class="row-fluid"> 
          <?PHP include "includes/_contact.php" ; ?>
      </div> <!-- / main content -->
    </div><!-- /row Fluid -->
  </div> <!-- /contaner -->
  <a href="#" class="pull-right hidden-desktop">back to top &#8593;</a>
</div>

  <?PHP include "includes/_footer.php" ; ?>

  <?PHP include "includes/_scripts.php" ; ?>
</body>
</html>