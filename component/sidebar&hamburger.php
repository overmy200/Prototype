<div class="container-fluid">
    <div class="row">
        <nav class="navbar navbar-dark bg-danger">
            <button class="navbar-toggler ms-3" id="sidebar-btn">
                <span class="bi bi-list" id="hamburger"></span>
            </button>
            <div class="col-2 pic d-flex me-4">
                <img class="rounded-5 ms-auto" src="https://images.rawpixel.com/image_800/czNmcy1wcml2YXRlL3Jhd3BpeGVsX2ltYWdlcy93ZWJzaXRlX2NvbnRlbnQvbHIvdjkzNy1hZXctMTY1LWtsaGN3ZWNtLmpwZw.jpg">
            </div>
        </nav>
        <!-- Start basic nav -->
        <nav class="sidebar shadow-lg" id="sidebar">
            <div class="d-flex flex-column mt-4">
                <h4 class="text-center">Menu sidebar</h4>
                <hr>
                <ul class="navbar-nav">
                    <li class="nav-item"><a href="index.php" class="nav-link col-12 px-3"><i class="pe-1 bi bi-house"></i>Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link col-12 px-3"><i class="pe-1 bi bi-clipboard-data"></i>Dashboard</a></li>
                    <!-- Start only manager nav -->
                    <li class="nav-item"><a href="#" class="nav-link col-12 px-3"><i class="pe-1 bi bi-people"></i>Manage people</a></li>
                    <!-- End only manager nav -->
                    <li class="nav-item"><button class="btn col-12 text-start" data-bs-toggle="collapse" data-bs-target="#setting-dropdown"><i class="bi bi-gear pe-1"></i>Settings</button>
                        <div class="collapse" id="setting-dropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item change-theme"><button class="btn col-12 text-start"><i class="bi bi-emoji-sunglasses moon_sun pe-1"></i>Theme</button></li>
                                <li class="nav-item"><button class="btn col-12 text-start"><i class="bi bi-shield-shaded pe-1"></i>Protect</button></li>
                            </ul>
                    <li class="nav-item"><a href="#" class="nav-link col-12 px-3"><i class="pe-1 bi bi-info"></i>Info</a></li>
            </div>
            </li>
            </ul>
            <!-- End basic nav -->
            <div class="footer">
                <hr>
                <ul class="navbar-nav">
                    <div class="row d-flex justify-content-center">
                        <div class="col-5">
                            <li class="nav-item"><button class="btn col-12" data-bs-toggle="modal" data-bs-target="#loginModal"><i class="bi bi-box-arrow-right"></i>Login</button></li>
                        </div>
                        <div class="col-6">
                            <li class="nav-item"><a class="btn col-12" href="form_register.php"><i class="bi bi-clipboard2-plus"></i>Register</a></li>
                        </div>
                    </div>
                </ul>
            </div>
    </div>
    </nav>
</div>
</div>
<script src="script.js"></script>