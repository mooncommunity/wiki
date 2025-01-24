<nav id="mainNavbar" class="navbar navbar-expand-lg">
    <div class="container-fluid">
        <div class="navbar-brand">
            <a class="navbar-brand" href="<?= $baseUrl; ?>/">
                <img src="<?= $baseUrl; ?>/assets/image/favicon.ico" height="32" width="32">
                MoonGaming™ Rehber
            </a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto" id="topMenu">
            </ul>
        </div>
        <button class="btn btn-outline-secondary rounded-button" id="searchButton">
            <i class="fas fa-search"></i> Ara...
        </button>
    </div>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav id="leftSidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
            <div class="position-sticky">
                <ul class="nav flex-column" id="leftMenu"></ul>
            </div>
        </nav>