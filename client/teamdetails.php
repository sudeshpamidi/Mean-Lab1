<!doctype html>
<html lang="en">

<?php $subTitle = "Home";
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
                    <li class="breadcrumb-item active">Team Info</li>
                </ol>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="card" id="teamCard">
                            <div class="card-header">
                                <h2>Team Details</h2>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="card" id="managerCard">
                            <div class="card-header">
                                <h2>Manager</h2>
                            </div>
                            <div class="card-body">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mt-3" id="cardPlayers">
                    <div class="card-header">
                        <h3>Players
                            <a class="btn btn-primary" id="add" href="#" role="button" title="Add Player">
                                <i class="fas fa-user-plus fa-lg"></i>
                            </a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
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
                    <h5 class="modal-title" id="myModalLabel">Player</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
    <!-- End of myModal -->

    <!-- Logout Modal-->
    <div class="modal" id="playerModal" tabindex="-1" role="dialog" aria-labelledby="playerModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="playerModalLabel">Add Player to Team</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">
                    <form class="mb-2" id="frmPlayer" action="#" method="GET">
                        <div class="form-group row" id="playeridrow">
                            <label for="memberid" class="col-sm-4 offset-sm-1 col-form-label">Player ID:<span class="red">&nbsp;*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" placeholder="Player ID" id="memberid" name="memberid" aria-label="Member Id" required data-role="validate" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="playername" class="col-sm-4 offset-sm-1 col-form-label">Player Name<span class="red">&nbsp;*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" title="Player Name" placeholder="Player Name" id="playername" name="membername" maxlength="30" aria-label="Team Name" required data-role="validate" data-content="Player Name is required. The Team Name must be a series of alpha-numeric characters only.">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="contactname" class="col-sm-4 offset-sm-1 col-form-label">Contact Name<span class="red">&nbsp;*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group mb-1">
                                    <input type="text" class="form-control" title="Contact Name" placeholder="Contact Name" id="contactname" name="contactname" maxlength="30" aria-label="Contact Name" required data-role="validate" data-content="Team Name is required. The Team Name must be a series of alpha-numeric characters only.">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="phone" class="col-sm-4 offset-sm-1 col-form-label">Phone:<span class="red">&nbsp;*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="text" class="form-control mb-1" title="Phone" maxlength="15" placeholder="Phone" pattern="^[1-9]\d{2}-\d{3}-\d{4}$" id="phone" name="phone" aria-label="Phone" required data-content="Player's Phone is required.Phone should be in XXX-XXX-XXXX format."
                                        data-role="validate">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 offset-sm-1 col-form-label">Email:</label>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Player Email" title="Player Email" id="email" name="email" maxlength="30" aria-label="Email" required data-content="An email address is required. The value should be a valid email." data-role="validate">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="gendermale" class="col-sm-4 offset-sm-1 col-form-label">Gender: <span class="red">&nbsp;*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group mt-1">
                                    <div class="form-check form-check-inline">
                                        <div class="custom-control custom-radio mr-3">
                                            <input class="custom-control-input" type="radio" id="gendermale" name="gender" value="Male" checked>
                                            <label class="custom-control-label" for="gendermale">Male</label>
                                        </div>
                                        <div class="custom-control custom-radio mr-3">
                                            <input class="custom-control-input" type="radio" id="genderfemale" name="gender" value="Female">
                                            <label class="custom-control-label" for="genderfemale">Female</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="age" class="col-sm-4 offset-sm-1 col-form-label">Age: <span class="red">&nbsp;*</span></label>
                            <div class="col-sm-6">
                                <div class="input-group mb-1">
                                    <select class="custom-select form-control" id="age" name="age">
                                    </select>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <p class="small text-muted mr-5"><span class="red">*</span> are required fields</p>
                    <button type="button" class="btn btn-secondary" id="btnCacel" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" id="btnSave">Save</button>
                </div>
            </div>
        </div>
    </div>

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
    <!-- <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" crossorigin="anonymous"></script> -->

    <script src="scripts/teamdetails.js"></script>
    <script src="scripts/sidebar.js"></script>
    <script src="scripts/validation.js"></script>
</body>

</html>