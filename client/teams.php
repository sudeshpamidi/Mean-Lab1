<!doctype html>
<html lang="en">

<?php $subTitle = "Teams";
 include("inc/head.php"); ?>

<body id="page-top">

    <?php include("inc/nav.php"); ?>

    <div id="wrapper">
        <!-- Sidebar -->
        <?php include("inc/sidebar.php"); ?>

        <div id="content-wrapper">
            <div class="container-fluid">
                <h1>Teams</h1>
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Teams</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>

                <div class="form-group row">
                    <label for="leagues" class="col-sm-2 offset-sm-3 col-form-label text-right"><i class="fas fa-futbol"></i>&nbsp;Leagues: </label>
                    <div class="col-sm-3">
                        <div class="input-group">
                            <select class="custom-select form-control" id="leagues" name="leagues">                                                
                                <option value="all">All</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <a class="btn btn-primary" id="add" href="team.html" role="button" title="Add Team" data-toggle="tooltip">
                            <i class="fa fa-plus fa-lg" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>

                <!-- Teams table -->
                <div class="card mb-3">
                    <div class="card-header">
                        <h2 class="h3 font-weight-bold">Teams</h2>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="tableTeams">
                                <thead>
                                </thead>
                                <tbody>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
                </div>
            </div>
            <!-- /.container-fluid -->

            <!-- Sticky Footer -->
            <footer class="sticky-footer">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © Your Website 2019</span>
                    </div>
                </div>
            </footer>

        </div>
        <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Modal -->
    <div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Teams</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to delete the team?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="btnConfirm">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Modal -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./scripts/teams.js"></script>
    <script src="./scripts/sidebar.js"></script>

</body>

</html>