<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Gestionaire des contacts</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

    <!-- Material Design Bootstrap -->
    <link href="assets/css/mdb.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <style rel="stylesheet">
        main {
            padding-top: 3rem;
            padding-bottom: 2rem;
        }

        .extra-margins {
            margin-top: 1rem;
            margin-bottom: 2.5rem;
        }
    </style>

</head>

<body>


<header>

    <!--Navbar-->
    <nav class="navbar navbar-dark primary-color-dark">

        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>

        <div class="container">

            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <!--Navbar Brand-->
                <a class="navbar-brand" href="../../../../../material-design-for-bootstrap/index.html" target="_blank">MDB</a>
                <!--Links-->
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                </ul>
            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
    <!--/.Navbar-->

</header>

<main>
    <div class="container">
        <div class="container-fluid">
            <table class="table table-hover">
                <thead class="thead-inverse">
                <tr>
                    <th>#</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Abby</td>
                    <td>Barrett</td>
                    <td>@abbeme</td>
                    <td>
                        <a class="blue-text"><i class="fa fa-user"></i></a>
                        <a class="teal-text"><i class="fa fa-pencil"></i></a>
                        <a class="red-text"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Danny</td>
                    <td>Collins</td>
                    <td>@dennis</td>
                    <td>
                        <a class="blue-text"><i class="fa fa-user"></i></a>
                        <a class="teal-text"><i class="fa fa-pencil"></i></a>
                        <a class="red-text"><i class="fa fa-times"></i></a>
                    </td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Clara</td>
                    <td>Ericson</td>
                    <td>@claris</td>
                    <td>
                        <a class="blue-text"><i class="fa fa-user"></i></a>
                        <a class="teal-text"><i class="fa fa-pencil"></i></a>
                        <a class="red-text"><i class="fa fa-times"></i></a>
                    </td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</main>

<!--Footer-->
<footer class="page-footer center-on-small-only primary-color-dark">
        <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © <?php echo date('Y') ?> Copyright : <a href="http://about.me/ljoboy" target="_blank"> Glody </a>

        </div>
    </div>
    <!--/.Copyright-->

</footer>
<!--/.Footer-->

    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="assets/js/tether.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="assets/js/mdb.js"></script>

</body>

</html>
