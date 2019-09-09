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
                <h1>Leagues</h1>
                <!-- Breadcrumbs-->
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="#">Leagues</a>
                    </li>
                    <li class="breadcrumb-item active">Overview</li>
                </ol>

                <!-- Icon Cards-->
                <div class="row" id="iconCards">
                    <div class="col-sm-9">
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
            <i class="fas fa-angle-up"></i>hello
        </a>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" crossorigin="anonymous"></script> -->

    <script src="./scripts/leagues.js"></script>
    <script src="./scripts/sidebar.js"></script>

</body>

</html>