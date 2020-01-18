<?php
  $root = $_SERVER ["DOCUMENT_ROOT"];
  $title = "#";
  $description = "#";
  include $root .'/includes/header.php';
  include $root .'/includes/breadcrumbs.php';
?>

<div class="primary-container">
  <div class="primary-text">
    <h1><b>Heading</b></h1>
    <h2><b>Subheading</b></h2>
    <p>Lorem ipsum dolor sit amt, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proient, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
</div>

<?php
  include $root .'/includes/social.php';
  include $root .'/includes/form-contact.php';
  include $root .'/includes/footer.php';
?>
