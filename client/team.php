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
                <h1>Team</h1>
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="teams.html">Teams</a>
                    </li>
                    <li class="breadcrumb-item active">Team</li>
                </ol>

                <!-- Icon Cards-->
                <div class="row" id="iconCards">
                    <div class="col-sm-10 offset-sm-1">
                        <div class="card ">
                            <div class="card-header">
                                <h2>Add Team</h2>
                            </div>
                            <div class="card-body">
                                <form class="mb-2" id="frmTeam" action="#" method="GET">
                                    <div class="form-group row" id="teamidrow">
                                        <label for="teamid" class="col-sm-2 offset-sm-3 col-form-label">Team ID:<span class="red">&nbsp;*</span></label>
                                        <div class="col-sm-4">
                                            <div class="input-group mb-1">
                                                <input type="text" class="form-control" placeholder="Team ID" id="teamid" name="teamid" aria-label="Team Id" required data-role="validate" readonly>
                                                <input type="hidden" id="minageofmember" value="10000">
                                                <input type="hidden" id="maxageofmember" value="-1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="teamname" class="col-sm-3 offset-sm-2 col-form-label">Team Name:<span class="red">&nbsp;*</span></label>
                                        <div class="col-sm-5">
                                            <div class="input-group mb-1">
                                                <input type="text" class="form-control" title="Team Name" placeholder="Team Name" maxlength="30" id="teamname" name="teamname" aria-label="Team Name" required data-role="validate" data-content="Team Name is required. The Team Name must be a series of alpha-numeric characters only.">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="league" class="col-sm-3 offset-sm-2 col-form-label">League: <span class="red">&nbsp;*</span></label>
                                        <div class="col-sm-5">
                                            <div class="input-group mb-1">
                                                <select class="custom-select form-control" id="league" name="leaguecode">                                                
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="managername" class="col-sm-3 offset-sm-2 col-form-label">Manager Name:<span class="red">&nbsp;*</span></label>
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <input type="text" class="form-control mb-1" title="Manager Name" maxlength="30" placeholder="Manager Name" id="managername" name="managername" aria-label="Manager Name" required data-content="Manager Name is required. The name must be a series of alpha-numeric characters only."
                                                    data-role="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="managerphone" class="col-sm-3 offset-sm-2 col-form-label">Manager Phone:<span class="red">&nbsp;*</span></label>
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <input type="text" class="form-control mb-1" title="Manager Phone" maxlength="15" pattern="^[1-9]\d{2}-\d{3}-\d{4}$" placeholder="Manager Phone" id="managerphone" name="managerphone" aria-label="Manager Phone" required data-content="Manager Phone is required. Phone should be in XXX-XXX-XXXX format."
                                                    data-role="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="manageremail" class="col-sm-3 offset-sm-2 col-form-label">Manager Email:</label>
                                        <div class="col-sm-5">
                                            <div class="input-group">
                                                <input type="email" class="form-control" placeholder="Manager Email" title="Manager Email" id="manageremail" name="manageremail" aria-label="Email" required data-content="An email address is required." data-role="validate">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="minage" class="col-sm-3 offset-sm-2 col-form-label">Min. Age: <span class="red">&nbsp;*</span></label>
                                        <div class="col-sm-5">
                                            <div class="input-group mb-1">
                                                <select class="custom-select form-control" id="minage" name="minmemberage">
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="maxage" class="col-sm-3 offset-sm-2 col-form-label">Max. Age: <span class="red">&nbsp;*</span></label>
                                        <div class="col-sm-5">
                                            <div class="input-group mb-1">
                                                <select class="custom-select form-control" id="maxage" name="maxmemberage">                                                
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="gendermale" class="col-sm-3 offset-sm-2 col-form-label">Gender: <span class="red">&nbsp;*</span></label>
                                        <div class="col-sm-5">
                                            <div class="input-group mt-1">
                                                <div class="form-check form-check-inline">
                                                    <div class="custom-control custom-radio mr-3">
                                                        <input class="custom-control-input" type="radio" id="gendermale" name="teamgender" value="Male" checked>
                                                        <label class="custom-control-label" for="gendermale">Male</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mr-3">
                                                        <input class="custom-control-input" type="radio" id="genderfemale" name="teamgender" value="Female">
                                                        <label class="custom-control-label" for="genderfemale">Female</label>
                                                    </div>
                                                    <div class="custom-control custom-radio mr-3">
                                                        <input class="custom-control-input" type="radio" id="genderany" name="teamgender" value="Any">
                                                        <label class="custom-control-label" for="genderany">Any</label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="maxnum" class="col-sm-3 offset-sm-2 col-form-label">Max Team Members: <span class="red">&nbsp;*</span></label>
                                        <div class="col-sm-5">
                                            <div class="input-group mb-1">
                                                <select class="custom-select form-control" id="maxnum" name="maxteammembers">                                                
                                                    </select>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center">
                                    <div class="col-sm-8 offset-sm-2">
                                        <button class="btn text-white btn-primary" id="save" data-role="trigger-validation">Add Team</button>
                                        <a class="btn btn-primary" id="cancel" href="teams.html" role="button">Cancel</a>
                                        <button class="btn text-white btn-primary" type="reset" id="reset">Reset</button>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
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

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Modal -->
        <div class="modal" id="teamModal" tabindex="-1" role="dialog" aria-labelledby="teamModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="teamModalLabel">Team</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
                    </div>
                    <div class="modal-body">
                        <p>Team has been successfully saved.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="modalOk" class="btn btn-secondary">Ok</button>
                        <!-- data-dismiss="modal" -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Modal -->
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="scripts/team.js"></script>
    <script src="./scripts/validation.js"></script>
    <script src="./scripts/sidebar.js"></script>

</body>

</html>