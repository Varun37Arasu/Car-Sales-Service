<!-- I have already typed all of this code, no need to make any changes, copy paste this code inside a new html file and start write the code from where i have 
indicated -->

<!DOCTYPE html>
<html>
  <head>
    <title>Insert ur title</title>
    <link
      href="node_modules/bootstrap/dist/css/bootstrap.min.css"
      type="text/css"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="stylepo.css"
      type="text/css"
    />

    <!-- Icons font CSS-->
    <link
      href="vendor/mdi-font/css/material-design-iconic-font.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/font-awesome-4.7/css/font-awesome.min.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Font special for pages-->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
      rel="stylesheet"
    />

    <!-- Vendor CSS-->
    <link
      href="vendor/select2/select2.min.css"
      rel="stylesheet"
      media="all"
    />
    <link
      href="vendor/datepicker/daterangepicker.css"
      rel="stylesheet"
      media="all"
    />
    <!-- Main CSS-->
    <link
      href="css/main.css"
      rel="stylesheet"
      media="all"
    />
  </head>

  <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.js"></script>
  <body
    style="background-color: rgb(247, 247, 247); margin: 0%"
  >
    <div class="container-fluid">
      <div class="row">
        <div class="col-1">
          <!-- //nav starts here -->
          <nav class="navbar bg-light" style="z-index: 1">
            <div
              class="container-fluid justify-content-start"
            >
              <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="offcanvas"
                data-bs-target="#offcanvasNavbar"
                aria-controls="offcanvasNavbar"
              >
                <span class="navbar-toggler-icon"></span>
              </button>
              <div
                class="offcanvas offcanvas-start"
                tabindex="-1"
                id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel"
              >
                <div class="offcanvas-header">
                  <h5
                    class="offcanvas-title"
                    id="offcanvasNavbarLabel"
                  >
                    Services
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="offcanvas"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="offcanvas-body">
                  <ul
                    class="navbar-nav justify-content-end flex-grow-4 pe-6"
                    style="
                      font-family: 'Segoe UI', Tahoma,
                        Geneva, Verdana, sans-serif;
                      font-size: larger;
                    "
                  >
                    <li class="nav-item">
                      <a
                        class="nav-link active"
                        aria-current="page"
                        href="layout.html"
                      >
                        Home
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        Models
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="Reg.html">
                        Servicing
                      </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="#">
                        Test Drive
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
          <!-- nav ends here -->
        </div>
        <div class="col-11" style="z-index: 0">
          <div class="container-fluid" id="logo">
            <div class="row" style="height: 20rem">
              <div class="col">
                <img
                  src="VASY-logos/VASY-logos.jpeg"
                  height="30%"
                  class="mx-auto fixed-top my-3"
                  style="border-radius: 20%"
                />
              </div>
            </div>
          </div>
          <!-- //logo ends here -->
        </div>
      </div>

      <!-- Okay, so, this is where you start typing your code, keep everything that is above intact, DO NOT make any changes in the code above. We are
    going for audi website's aesthetic, but of course, what ever is below is really your creativity. Do not try too hard and waste time on this. Keep it minimalistic.
    Complete this for now, we will start backend soon after ADA lab test-->
      <div class="text-center" style="position: relative">
        <div
          class="col bg-white py-4"
          style="
            margin-left: 17rem;
            margin-right: 17rem;
            border-radius: 2%;
          "
        >
          <form action="connectt.php" class="my-4" method="POST">
            <h2
              style="position: relative"
              class="display-6 p-2"
            >
              Register for Test Drive
            </h2>
            <div
              class="col-10"
              style="
                display: inline flex;
                flex-direction: column;
              "
            >
              <div
                class="input-container"
                style="justify-self: center"
              >
                <i class="fa fa-user icon"></i>
                <input
                  class="input--style-4"
                  type="text"
                  placeholder="Enter Full Name here"
                  name="usrnm"
                />
              </div>

              <div class="input-container">
                <i class="fa fa-envelope icon"></i>
                <input
                  class="input--style-4"
                  type="number"
                  placeholder="model"
                  name="model"
                />
              </div>

              <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input
                  class="input--style-4"
                  type="number"
                  placeholder="quantity"
                  name="quantity"
                />
              </div>

              <div class="input-container">
                <i class="fa fa-user icon"></i>
                <input
                  class="input--style-4"
                  type="text"
                  placeholder="Select city"
                  name="city"
                />
              </div>

              <div class="input-container">
                <i class="fa fa-key icon"></i>
                <input
                  class="input--style-4"
                  type="text"
                  placeholder="Select Dealer"
                  name="dealer"
                />
              </div>

              <button
                type="submit"
                class="btn btn-primary mx-auto"
              >
                Submit my info
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- End your code here. Below this, we will probably have a footer, we can do all of that later. -->
  </body>
</html>