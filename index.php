<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v6.0.0/css/all.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
  </head>
  <body>
    <!--Main Navigation-->
  <?php include 'page_component/header.php'; ?>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
      <div class="container">
        <!--Section: Content-->
        <section>
          <div class="row">
            <div class="col-md-6 gx-5 mb-4">
              <div
                class="bg-image hover-overlay shadow-2-strong"
                data-mdb-ripple-init
                data-mdb-ripple-color="light"
              >
                <img
                  src="https://mdbootstrap.com/img/new/slides/031.jpg"
                  class="img-fluid"
                />
                <a href="#!">
                  <div
                    class="mask"
                    style="background-color: rgba(251, 251, 251, 0.15)"
                  ></div>
                </a>
              </div>
            </div>
<!-- About Us -->
            <?php include 'page_component/home_about_us.php'; ?>

        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
          <?php include 'page_component/home_portofolio.php'; ?>

        <!--Section: Content-->

        <hr class="my-5" />

      </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="bg-light text-lg-start">

      <!-- Copyright -->
      <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
        © 2020 Copyright:
        <a class="text-dark" href="#">Santoso Production</a>
      </div>
      <!-- Copyright -->
    </footer>
    <!--Footer-->
    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.umd.min.js"></script>
  </body>
</html>
