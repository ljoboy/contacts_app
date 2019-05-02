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
                <a class="navbar-brand" href="" target="_blank">Gestionnaire des contacts</a>
                <!--Links-->
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
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
            <div class="pull-right">
                <button class="btn btn-action btn-blue-grey" data-toggle="modal" data-target="#myModal">Ajouter un
                    contact
                </button>
            </div>
            <table class="table table-hover">
                <thead class="thead-inverse">
                <tr>
                    <th>N°</th>
                    <th>Nom</th>
                    <th>Postnom</th>
                    <th>Prenom</th>
                    <th>Numero</th>
                    <th>Email</th>
                    <th>Description</th>
                    <th>genre</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $contacts = getContacts();
                $c = 1;
                foreach ($contacts as $contact) :
                    ?>
                    <tr>
                        <th scope="row"><?php echo $c ?></th>
                        <td><?php echo strtoupper($contact['nom']) ?></td>
                        <td><?php echo strtoupper($contact['postnom']) ?></td>
                        <td><?php echo ucwords($contact['prenom'] )?></td>
                        <td><?php echo $contact['numero'] ?></td>
                        <td><?php echo $contact['email'] ?></td>
                        <td><?php echo ucfirst($contact['genre']) ?></td>
                        <td><?php echo ucfirst($contact['description']) ?></td>
                        <td>
                            <a class="teal-text"><i class="fa fa-pencil"></i></a>
                            <a href="index.php?supprimer=<?php echo $c ?>" class="red-text"><i class="fa fa-times"></i></a>
                        </td>
                    </tr>
                <?php
                $c++;
                endforeach;
                ?>
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
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="index.php" method="post">
            <!--Content-->
            <div class="modal-content">
                <!--Header-->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Ajouter un nouveau contact</h4>
                </div>
                <!--Body-->
                <div class="modal-body">
                    <div class="md-form">
                        <input name="nom" type="text" id="form1" class="form-control" required>
                        <label for="form1" class="">Nom</label>
                    </div>
                    <div class="md-form">
                        <input name="postnom" type="text" id="form1" class="form-control" required>
                        <label for="form1" class="">Postnom</label>
                    </div>
                    <div class="md-form">
                        <input name="prenom" type="text" id="form1" class="form-control" required>
                        <label for="form1" class="">Prenom</label>
                    </div>
                    <div class="md-form">
                        <input name="numero" type="text" id="form1" class="form-control" required>
                        <label for="form1" class="">Telephone</label>
                    </div>
                    <div class="md-form">
                        <input name="email" type="email" id="form1" class="form-control" required>
                        <label for="form1" class="">email</label>
                    </div>
                    <div class="md-form">
                        <input name="description" type="text" id="form1" class="form-control" required>
                        <label for="form1" class="">Descripton</label>
                    </div>
                    <div class="form-inline">
                        <fieldset class="form-group">
                            <input value="m" name="genre" type="radio" id="radio11" checked="checked">
                            <label for="radio11">Masculin</label>
                        </fieldset>

                        <fieldset class="form-group">
                            <input name="genre" type="radio" value="f" id="radio21">
                            <label for="radio21">Feminin</label>
                        </fieldset>
                    </div>
                </div>
                <!--Footer-->
                <div class="modal-footer">
                    <input type="reset" class="btn btn-danger" data-dismiss="modal" value="fermer"/>
                    <input name="ajouter" type="submit" class="btn btn-primary" value="Enregistrer"/>
                </div>
            </div>
            <!--/.Content-->
        </form>
    </div>
</div>
<!-- /.Live preview-->
<!-- SCRIPTS -->

<!-- JQuery -->
<script type="text/javascript" src="assets/js/jquery-3.1.1.min.js"></script>

<!-- Bootstrap tooltips -->
<script type="text/javascript" src="assets/js/tether.min.js"></script>

<!-- MDB core JavaScript -->
<script type="text/javascript" src="assets/js/mdb.js"></script>
<script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
    })
</script>

</body>

</html>
