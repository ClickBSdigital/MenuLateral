<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resoonsive Sidebar with Submenus</title>
    <link rel="stylesheet" href="assets/css/menu-lateral.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <header class="header">
        <div class="header-container">
            <img src="https://u.cubeupload.com/Leo21/perfil1.jpg" alt="" class="header-img">

            <a href="#" class="header-logo">ULTRACODE</a>

            <div class="header-search">
                <input type="search" placeholder="Search" class="header-input">
                <i class="bx bx-search header-icon"></i>
            </div>

            <div class="header-toggle">
                <i class="bx bx-menu" id="header-toggle"></i>
            </div>
        </div>
    </header>

    <div class="nav" id="navbar">
        <nav class="nav-container">
            <div>
                <a href="#" class="nav-link nav-logo">
                    <i class="bx bxs-disc nav-icon"></i>
                    <span class="nav-logo-name">ULTRACODE</span>
                </a>

                <div class="nav-list">
                    <div class="nav-items">
                        <h3 class="nav-subtitle">Profile</h3>

                        <a href="#" class="nav-link active">
                            <i class="bx bx-home nav-icon"></i>
                            <span class="nav-name">Home</span>
                        </a>

                        <div class="nav-dropdown">
                            <a href="#" class="nav-link">
                                <i class="bx bx-user nav-icon"></i>
                                <span class="nav-name">Profile</span>
                                <i class="bx bx-chevron-down nav-icon nav-dropdown-icon"></i>
                            </a>

                            <div class="nav-dropdown-collapse">
                                <div class="nav-dropdown-content">
                                    <a href="#" class="nav-dropdown-item">Passwords</a>
                                    <a href="#" class="nav-dropdown-item">Mail</a>
                                    <a href="#" class="nav-dropdown-item">Accounts</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="nav-link">
                            <i class="bx bx-message-rounded nav-icon"></i>
                            <span class="nav-name">Messages</span>
                        </a>
                    </div>

                    <div class="nav-items">
                        <h3 class="nav-subtitle">Menu</h3>

                        <div class="nav-dropdown">
                            <a href="#" class="nav-link">
                                <i class="bx bx-bell nav-icon"></i>
                                <span class="nav-name">Notifications</span>
                                <i class="bx bx-chevron-down nav-icon nav-dropdown-icon"></i>
                            </a>

                            <div class="nav-dropdown-collapse">
                                <div class="nav-dropdown-content">
                                    <a href="#" class="nav-dropdown-item">Blocked</a>
                                    <a href="#" class="nav-dropdown-item">Silenced</a>
                                    <a href="#" class="nav-dropdown-item">Publish</a>
                                    <a href="#" class="nav-dropdown-item">Program</a>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="nav-link">
                            <i class="bx bx-compass nav-icon"></i>
                            <span class="nav-name">Explore</span>
                        </a>

                        <a href="#" class="nav-link">
                            <i class="bx bx-bookmark nav-icon"></i>
                            <span class="nav-name">Saved</span>
                        </a>
                    </div>
                </div>
            </div>

            <a href="#" class="nav-link nav-logout">
                <i class="bx bx-log-out nav-icon"></i>
                <span class="nav-name">Logout</span>
            </a>
        </nav>
    </div>

    <main>
        <section>
            
        </section>
    </main>


    <script src="assets/js/menu-lateral.js"></script>
</body>
</html>