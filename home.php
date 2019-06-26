
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="home-style.css">
<script src="Plugin/bootstrap.min.js"></script>
<script src="Plugin/jquery-3.3.1.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body background="Plugin/Img/Abstract-back.jpg">

    <div class="row">
        <div class="col-sm-2 admin-sidebar">
            <div class="nav flex-column nav-pills text-center text-uppercase admin-nav" id="sidebar-admin" role="tablist" aria-orientation="vertical">
                <a class="nav-link active show admin-nav-item admin-sidebar-item"  data-toggle="pill" href="#admin-communicate" role="tab" aria-controls="admin-communicate" aria-selected="true">Communicate</a>
                <a class="nav-link admin-nav-item admin-sidebar-item" data-toggle="pill" href="#admin-requests" role="tab" aria-controls="admin-requests" aria-selected="false">Requests</a>
                <a class="nav-link admin-nav-item admin-sidebar-item" data-toggle="pill" href="#admin-users" role="tab" aria-controls="admin-users" aria-selected="false">Users</a>
                <a class="nav-link admin-nav-item admin-sidebar-item" data-toggle="pill" href="#admin-groups" role="tab" aria-controls="admin-groups" aria-selected="false">Groups</a>
                <a class="nav-link admin-nav-item admin-sidebar-item" data-toggle="pill" href="#admin-analytics" role="tab" aria-controls="admin-analytics" aria-selected="false">Analytics</a>
                <a class="nav-link admin-nav-item admin-sidebar-item" data-toggle="pill" href="#admin-messages" role="tab" aria-controls="admin-messages" aria-selected="false">Messages</a>
                <a class="nav-link admin-nav-item admin-sidebar-item" data-toggle="pill" href="#admin-sessions" role="tab" aria-controls="admin-sessions" aria-selected="false">Sessions</a>
                <a class="nav-link admin-nav-item admin-sidebar-item" data-toggle="pill" href="#admin-testimonials" role="tab" aria-controls="admin-testimonials" aria-selected="false">Testimonials</a>
                <a class="nav-link admin-nav-item admin-sidebar-item" data-toggle="pill" href="#A-changelog" role="tab" aria-controls="admin-changelog" aria-selected="false">Changelog</a>
            </div>
        </div>
        <div class="col-sm-6 admin-tabs">
            <ul class="nav nav-tabs admin-nav text-uppercase" role="tablist">
                <li class="nav-item">
                    <a class="nav-link admin-nav-item active" data-toggle="tab" href="#admin-communicate" role="tab" aria-controls="admin-communicate" aria-selected="true">Communicate</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-requests" role="tab" aria-controls="admin-requests" aria-selected="false">Requests</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-users" role="tab" aria-controls="admin-users" aria-selected="false">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-groups" role="tab" aria-controls="admin-groups" aria-selected="false">Groups</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-analytics" role="tab" aria-controls="admin-analytics" aria-selected="false">Analytics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-messages" role="tab" aria-controls="admin-messages" aria-selected="false">Messages</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-sessions" role="tab" aria-controls="admin-sessions" aria-selected="false">Sessions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link admin-nav-item" data-toggle="tab" href="#admin-testimonials" role="tab" aria-controls="admin-testimonials" aria-selected="false">Testimonials</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link admin-nav-item" data-toggle="tab" href="#A-changelog" role="tab" aria-controls="admin-changelog" aria-selected="false">Changelog</a>
                </li>
            </ul>
        </div>
        </div>

<!--    contents of navbar-->

        <div class="row">
        <div class="col-sm-8 ml-auto mr-3">
            <div class="tab-content">
                <div class="tab-pane fade active show" id="admin-communicate" role="tabpanel" aria-labelledby="admin-communicate-tab">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <h4><a class="nav-link admin-header-block">Admin Portal - Communicate</a></h4>
                        </li>
                    </ul>
                    <nav class="navbar">
                        <form class="form-inline col-sm-12">
                            <div class="col-sm-3">
                                <select class="custom-select">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="First Name" aria-label="first" style="width: 100%;"></div>
                            <div class="col-sm-3"><input class="form-control mr-sm-2" type="search" placeholder="Last Name" aria-label="last" style="width: 100%;"></div>
                            <div class="col-sm-3">
                                <ul class="nav nav-pills nav-fill">
                                    <li class="nav-item">
                                        <a class="nav-link admin-filter-button text-uppercase" href="#">Filter</a>
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </nav>
                    <p>Communicate</p>
                </div>
                <div class="tab-pane fade" id="admin-requests" role="tabpanel" aria-labelledby="admin-requests-tab">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <h4><a class="nav-link admin-header-block">Admin Portal - Requests (ACTIVE TODO)</a></h4>
                        </li>
                    </ul>
                    <p>Requests</p>
                </div>
                <div class="tab-pane fade" id="admin-users" role="tabpanel" aria-labelledby="admin-users-tab">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <h4><a class="nav-link admin-header-block">Admin Portal - Users (TOTAL TODO)</a></h4>
                        </li>
                    </ul>
                    <div class="container mt-4 mb-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="card text-center admin-user-card">
                                    <div class="card-header">Account Type</div>
                                    <div class="card-block p-3">
                                        <h4 class="card-title">Name</h4>
                                        <p class="card-text">Information</p>
                                        <a href="#" class="btn btn-primary rounded-0 mb-2">Enable / Disabled</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center admin-user-card">
                                    <div class="card-header">Account Type</div>
                                    <div class="card-block p-3">
                                        <h4 class="card-title">Name</h4>
                                        <p class="card-text">Information</p>
                                        <a href="#" class="btn btn-primary rounded-0 mb-2">Enable / Disabled</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center admin-user-card">
                                    <div class="card-header">Account Type</div>
                                    <div class="card-block p-3">
                                        <h4 class="card-title">Name</h4>
                                        <p class="card-text">Information</p>
                                        <a href="#" class="btn btn-primary rounded-0 mb-2">Enable / Disabled</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center admin-user-card">
                                    <div class="card-header">Account Type</div>
                                    <div class="card-block p-3">
                                        <h4 class="card-title">Name</h4>
                                        <p class="card-text">Information</p>
                                        <a href="#" class="btn btn-primary rounded-0 mb-2">Enable / Disabled</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card text-center admin-user-card">
                                    <div class="card-header">Account Type</div>
                                    <div class="card-block p-3">
                                        <h4 class="card-title">Name</h4>
                                        <p class="card-text">Information</p>
                                        <a href="#" class="btn btn-primary rounded-0 mb-2">Enable / Disabled</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card -->
                </div>
                <div class="tab-pane fade" id="admin-groups" role="tabpanel" aria-labelledby="admin-groups-tab">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <h4><a class="nav-link admin-header-block">Admin Portal - Groups (TOTAL TODO)</a></h4>
                        </li>
                    </ul>
                    <p>Groups</p>
                </div>
                <div class="tab-pane fade" id="admin-analytics" role="tabpanel" aria-labelledby="admin-analytics-tab">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <h4><a class="nav-link admin-header-block">Admin Portal - Analytics</a></h4>
                        </li>
                    </ul>
                    <p>Analytics</p>
                </div>
                <div class="tab-pane fade" id="admin-messages" role="tabpanel" aria-labelledby="admin-messages-tab">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <h4><a class="nav-link admin-header-block">Admin Portal - Messages (TOTAL TODO)</a></h4>
                        </li>
                    </ul>
                    <p>Messages</p>
                </div>
                <div class="tab-pane fade" id="admin-sessions" role="tabpanel" aria-labelledby="admin-sessions-tab">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <h4><a class="nav-link admin-header-block">Admin Portal - Sessions (TOTAL TODO)</a></h4>
                        </li>
                    </ul>
                    <p>Sessions</p>
                </div>
                <div class="tab-pane fade" id="admin-testimonials" role="tabpanel" aria-labelledby="admin-testimonials-tab">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <h4><a class="nav-link admin-header-block">Admin Portal - Sessions (TOTAL WRITTEN TODO)</a></h4>
                        </li>
                    </ul>
                    <p>Testimonials</p>
                </div>
                <div class="tab-pane fade" id="A-changelog" role="tabpanel" aria-labelledby="admin-changelog-tab">
                    <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <h4><a class="nav-link admin-header-block">Admin Portal - Changelog</a></h4>
                        </li>
                    </ul>
                    <p>Changelog</p>
                </div>
            </div>
        </div>
    </div>

</body>
</html>