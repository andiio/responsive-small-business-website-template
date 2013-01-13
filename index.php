<!DOCTYPE html>
<html>

<head>
  <title>Home Page</title>
<?php include "includes/_head.php" ; ?>
</head>

<body>
<?php include "includes/_slider.php" ; ?>
  <div class="container-fluid">
    <div class="row-fluid">
      <div class="span3">
        <?PHP include "includes/_sidebarMenu.php" ; ?>
      </div>
      <div class="span9">
        <div class="row-fluid"> 
          <?PHP include "includes/_welcome.php" ; ?>
      </div> <!-- / main content -->
    </div><!-- /row Fluid -->
  </div> <!-- /contaner -->
  <a href="#" class="pull-right hidden-desktop">back to top &#8593;</a>
</div>

<?PHP include "includes/_footer.php" ; ?>

  <?PHP include "includes/_scripts.php" ; ?>
</body>
</html>