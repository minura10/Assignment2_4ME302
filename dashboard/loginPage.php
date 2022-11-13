<?php
$pageId = 7;
$activePage = 'work';

// load config file
require_once("../config.php");

// setup database connection
require_once(BACKEND_PATH . "./db.php");
$conn = connectDatabase($db);

// render header and navigation
require_once(TEMPLATES_PATH . "/header.php");
require_once(TEMPLATES_PATH . "/navigation.php");
?>

<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Sign in
            <?php
            if (isset($_GET["type"])) {
              echo ("as " . $_GET["type"]);
            }
            ?>
          </h5>
          <form class="form-signin">
            <?php
            if (!isset($_GET["type"]) || $_GET["type"] == "patient") {
            ?>
              <a href="http://localhost/Assignment2/dashboard/google.php">
                <button class="btn btn-lg btn-google btn-block text-uppercase" type="button"><i class="fa fa-google"></i> Sign in with Google</button>
              </a>
            <?php
            }

            if (!isset($_GET["type"]) || $_GET["type"] == "physician") {
            ?>
              <a href="http://localhost/Assignment2/dashboard/facebook.php">
                <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="button"><i class="fa fa-facebook"></i> Sign in with Facebook</button>
              </a>
            <?php
            }

            if (!isset($_GET["type"]) || $_GET["type"] == "researcher") {
            ?>
              <a href="http://localhost/Assignment2/dashboard/github.php">
                <button class="btn btn-lg btn-twitter btn-block text-uppercase" type="button"><i class="fa fa-github"></i> Sign in with GitHub</button>
              </a>
            <?php
            }
            ?>
          </form>
        </div>
      </div>
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
?>