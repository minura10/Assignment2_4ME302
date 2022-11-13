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

    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="d-flex flex-row"></div>
                <div class="row news-card p-3 bg-white">
                    <div class="col-md-4">
                        <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="https://i.imgur.com/ZKbpmaU.jpg"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="news-feed-text">
                            <h5>Green plants are going to extinct about 500 times</h5><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard<br></span>
                            <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                                <div class="d-flex creator-profile"><img class="rounded-circle" src="https://i.imgur.com/uSlStch.jpg" width="50" height="50">
                                    <div class="d-flex flex-column ml-2">
                                        <h6 class="username">Alexendor patriot</h6><span class="date">Jan 20,2020</span>
                                    </div>
                                </div><i class="fa fa-share share"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row news-card p-3 bg-white">
                    <div class="col-md-4">
                        <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="https://i.imgur.com/ZKbpmaU.jpg"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="news-feed-text">
                            <h5>Green plants are going to extinct about 500 times</h5><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard<br></span>
                            <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                                <div class="d-flex creator-profile"><img class="rounded-circle" src="https://i.imgur.com/uSlStch.jpg" width="50" height="50">
                                    <div class="d-flex flex-column ml-2">
                                        <h6 class="username">Alexendor patriot</h6><span class="date">Jan 20,2020</span>
                                    </div>
                                </div><i class="fa fa-share share"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row news-card p-3 bg-white">
                    <div class="col-md-4">
                        <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="https://i.imgur.com/ZKbpmaU.jpg"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="news-feed-text">
                            <h5>Green plants are going to extinct about 500 times</h5><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard<br></span>
                            <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                                <div class="d-flex creator-profile"><img class="rounded-circle" src="https://i.imgur.com/uSlStch.jpg" width="50" height="50">
                                    <div class="d-flex flex-column ml-2">
                                        <h6 class="username">Alexendor patriot</h6><span class="date">Jan 20,2020</span>
                                    </div>
                                </div><i class="fa fa-share share"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row news-card p-3 bg-white">
                    <div class="col-md-4">
                        <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="https://i.imgur.com/ZKbpmaU.jpg"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="news-feed-text">
                            <h5>Green plants are going to extinct about 500 times</h5><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard<br></span>
                            <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                                <div class="d-flex creator-profile"><img class="rounded-circle" src="https://i.imgur.com/uSlStch.jpg" width="50" height="50">
                                    <div class="d-flex flex-column ml-2">
                                        <h6 class="username">Alexendor patriot</h6><span class="date">Jan 20,2020</span>
                                    </div>
                                </div><i class="fa fa-share share"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row news-card p-3 bg-white">
                    <div class="col-md-4">
                        <div class="feed-image"><img class="news-feed-image rounded img-fluid img-responsive" src="https://i.imgur.com/ZKbpmaU.jpg"></div>
                    </div>
                    <div class="col-md-8">
                        <div class="news-feed-text">
                            <h5>Green plants are going to extinct about 500 times</h5><span>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard<br></span>
                            <div class="d-flex flex-row justify-content-between align-items-center mt-2">
                                <div class="d-flex creator-profile"><img class="rounded-circle" src="https://i.imgur.com/uSlStch.jpg" width="50" height="50">
                                    <div class="d-flex flex-column ml-2">
                                        <h6 class="username">Alexendor patriot</h6><span class="date">Jan 20,2020</span>
                                    </div>
                                </div><i class="fa fa-share share"></i>
                            </div>
                        </div>
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
}
?>