<br> <br>
<nav id="right-sidebar" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky">
        <ul class="nav flex-column" id="right-menu"></ul>
    </div>
</nav>
</div>
</div>

<div id="mobileBookmarks">
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 id="offcanvasRightLabel">Başlıklar</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav flex-column" id="offcanvas-right-menu"></ul>
        </div>
    </div>

    <button class="btn btn-primary position-fixed bottom-0 end-0 m-3" id="toggle-offcanvas"
            aria-label="Toggle Content Menu">
        <i class="fa-solid fa-bookmark"></i>
    </button>
</div>

<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="searchModalLabel"><i class="fas fa-search"></i> Ara...</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="position-relative">
                    <input type="text" class="form-control pe-5 rounded-button" id="searchInput"
                           placeholder="Aramak istediğini buraya yaz...">
                    <i class="text-danger fa-solid fa-delete-left position-absolute top-50 translate-middle-y"
                       id="clearSearch" style="display: none; cursor: pointer; right: 30px;"></i>
                </div>

                <ul class="list-group mt-3" id="searchResults"></ul>
            </div>
        </div>
    </div>
</div>
</body>
<noscript>
    <style>
        nav, main {
            display: none;
        }
    </style>
    <div class="modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
         style="display: block; background: rgba(0,0,0,0.5);">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="border: 1px solid red;">
                <div class="modal-header">
                    <h5 class="modal-title text-warning-emphasis"><i class="fa-brands fa-js"></i> JavaScript Gerekli
                    </h5>
                </div>
                <div class="modal-body text-primary-emphasis">
                    <p><i class="fa-solid fa-circle-exclamation"></i> Bu sayfanın düzgün çalışabilmesi için lütfen
                        JavaScript'i etkinleştirin.</p>
                </div>
                <div class="modal-footer">
                    <a href="https://support.google.com/adsense/answer/12654?hl=tr" type="button"
                       class="btn btn-outline-success"><i class="fa-brands fa-chrome"></i> Google Chrome JavaScript
                        Etkinleştirme</a>
                </div>
            </div>
        </div>
    </div>
</noscript>
</html>
