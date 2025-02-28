

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bootstrap 5 Side Bar Navigation</title>
    <!-- bootstrap 5 css -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
      crossorigin="anonymous"
    />
    <!-- BOX ICONS CSS-->
    <link
      href="https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css"
      rel="stylesheet"
    />
    <!-- custom css -->
    <link rel="stylesheet" href="style.css" />
</head>



  <body>
    <!-- Side-Nav -->
    <div
      class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column"
      id="sidebar"
    >
      <ul class="nav flex-column text-white w-100">
        <a href="#" class="nav-link h3 text-white my-2">
          Responsive </br>SideBar Nav
        </a>
        <li href="tbdokter.php" class="nav-link">
          <i class="bx bxs-dashboard"></i>
          <a href="tbdokter.php" class="mx-2" style="color:white; text-decoration:none;">Table Dokter</a>
        </li>
        <li href="tbpasien.php" class="nav-link">
          <i class="bx bxs-dashboard"></i>
          <a href="tbpasien.php" class="mx-2" style="color:white; text-decoration:none;">Table Pasien</a>
        </li>
        <li href="tbpoli.php" class="nav-link">
          <i class="bx bxs-dashboard"></i>
          <a href="tbpoli.php" class="mx-2" style="color:white; text-decoration:none;">Table Poli</a>
        </li>
        <li href="tbrekammedis.php" class="nav-link">
          <i class="bx bxs-dashboard"></i>
          <a href="tbobat.php" class="mx-2" style="color:white; text-decoration:none;">Table Obat</a>
        </li>
        <li href="tbrekammedis.php" class="nav-link">
          <i class="bx bxs-dashboard"></i>
          <a href="tbrekammedis.php" class="mx-2" style="color:white; text-decoration:none;">Table Rekam Medis</a>
        </li>
        <li href="#" class="nav-link">
          <i class="bx bx-user-check"></i>
          <span class="mx-2">Profile</span>
        </li>
        <li href="#" class="nav-link">
          <i class="bx bx-conversation"></i>
          <span class="mx-2">Contact</span>
        </li>
      </ul>

      <span href="#" class="nav-link h4 w-100 mb-5">
        <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
        <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
        <a href=""><i class="bx bxl-facebook text-white"></i></a>
      </span>
    </div>

    <!-- Main Wrapper -->
    <div class="p-1 my-container active-cont">
      <!-- Top Nav -->
      <nav class="navbar top-navbar navbar-light bg-light px-5" style="margin:15px">
        <a class="btn border-0" id="menu-btn" ><i class="bx bx-menu"></i></a>
      </nav>
      <!--End Top Nav -->
      <h3 class="text-dark p-3">Data Rumah Sakit
      </h3>
      <p class="px-3"></p>
    </div>

    <!-- bootstrap js -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
      crossorigin="anonymous"
    ></script>
    <!-- custom js -->
    <script>
      var menu_btn = document.querySelector("#menu-btn");
      var sidebar = document.querySelector("#sidebar");
      var container = document.querySelector(".my-container");
      menu_btn.addEventListener("click", () => {
        sidebar.classList.toggle("active-nav");
        container.classList.toggle("active-cont");
      });
    </script>
  </body>
</html>
