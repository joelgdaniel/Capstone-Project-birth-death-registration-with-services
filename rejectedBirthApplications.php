<!DOCTYPE html>
<html lang="en">

<!-- Header -->

<head>
    <?php include "includes/header.php" ?>
    <title>Birth Certificate Application</title>
</head>

<body class="sb-nav-fixed bg-boback">

    <!-- Navbar -->
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <?php include "includes/navbar.php" ?>
    </nav>

    <div id="layoutSidenav">

        <!-- Sidebar -->
        <?php include "includes/sidebar.php" ?>

        <!-- Main Content Wrapper -->
        <div id="layoutSidenav_content">

            <!-- Main Content -->
            <main>
                <div class="container-fluid px-4">
                    <h3 class="mt-4">Rejected Birth Appllications</h3>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Birth Certificates
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Full Name</th>
                                        <th>Father's Name</th>
                                        <th>Mother's Name</th>
                                        <th>Gender</th>
                                        <th>Date Of Birth</th>
                                        <th>Documents</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </main>

            <!-- Footer -->
            <footer class="py-4 bg-light mt-auto  bg-boback">
                <?php include "includes/footer.php" ?>
            </footer>
        </div>
    </div>

    <!-- Scripts -->
    <?php include "includes/scripts.php" ?>
</body>

</html>