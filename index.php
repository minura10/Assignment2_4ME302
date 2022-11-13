<?php
    $pageId = 7;
    $activePage = 'home';

    // load config file
    require_once("./config.php");

    // setup database connection
    require_once(BACKEND_PATH . "/db.php");
    $conn = connectDatabase($db);
    
    // render header and navigation
    require_once(TEMPLATES_PATH . "/header.php");
    require_once(TEMPLATES_PATH . "/navigation.php");
?>

<!-- Image-based header  -->
<header class="full-width-block parallax d-flex align-items-center" style="background-image: url('resources/images/design/work-header.jpg'); background-position: top;"
    data-paroller-factor="0.3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="text-white text-uppercase">Unstoppable</h1>
                <p class="text-white text-uppercase">For a greener future and a healthier life</p>
            </div>
        </div>
    </div>
</header>

<section class="text-block parallax" id="work">
    <div class="container">
        <p class="lead">Live your life with a prism reflecting rays of hope. Keep your life in the present moment by balancing the past and future. And strive to give others support by sharing your courage, compassion, knowledge, and love.” Frank C. Church</p>
        
    </div>
</section>


<?php require_once(TEMPLATES_PATH . "/work.php"); ?>

<?php
    // // render donation block
    // require_once(TEMPLATES_PATH . "/donate.php");
    
    // render footer
    require_once(TEMPLATES_PATH . "/footer.php");

    // close database connection
    closeConection($conn);
?>
