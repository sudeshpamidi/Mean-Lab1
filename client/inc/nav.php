<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
        <a class="navbar-brand mr-1" href="index.php">South Windsor Soccer Club</a>
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle">
          <i class="fas fa-bars"></i>
        </button>

        <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
            &nbsp;
            <!--place holder for search textbox-->
        </div>

        <!-- Navbar -->
        <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item mx-1">
                <a class="nav-link <?php if($subTitle =="Home") { echo "active"; } ?>" href="index.php">Home<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </nav>