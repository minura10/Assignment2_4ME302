<?php
$pageId = 7;
$activePage = 'work';

// load config file
require_once("../config.php");

session_start();

if (empty($_GET['state']) || ($_GET['state'] !== $_SESSION['oauth2state'])) {
  unset($_SESSION['oauth2state']);
  exit("Invalid state.");
} else {
  // setup database connection
  require_once(BACKEND_PATH . "./db.php");
  $conn = connectDatabase($db);

  // render header and navigation
  require_once(TEMPLATES_PATH . "/header.php");
  require_once(TEMPLATES_PATH . "/navigation.php");
?>

  <div class="container">
    <div class="row">
      <div class="col-sm">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PEQYayiMBh4" allowfullscreen ></iframe>
      </div>
      <div class="col-sm">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/xV0DLdvmqeU" allowfullscreen></iframe>
      </div>
      <div class="col-sm">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8P3M6CR0O4s" allowfullscreen></iframe>
      </div>

      <div class="col-sm">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/XWiKKfEDcyo" allowfullscreen></iframe>
      </div>

      <div class="col-sm">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/ZaVDs5DPnsA" allowfullscreen></iframe>
      </div>

      <div class="col-sm">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/F4PxppoQmHs" allowfullscreen></iframe>
      </div>

      <div class="col-sm">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/EcbonZR6lFE" allowfullscreen></iframe>
      </div>

      <div class="col-sm">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/a01Gb7OR8sY" allowfullscreen></iframe>
      </div>

      <div class="col-sm">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/78ubEwgZL20" allowfullscreen></iframe>
      </div>
    </div>
  </div>



<?php
  // // render donation block
  // require_once(TEMPLATES_PATH . "/donate.php");

  // render footer
  require_once(TEMPLATES_PATH . "/footer.php");

  // close database connection
  closeConection($conn);
}
?>