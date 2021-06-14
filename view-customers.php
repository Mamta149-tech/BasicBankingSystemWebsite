<!doctype html>
<html lang="en">
    <head>
        <title>TSF Bank</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
        <script src="banking.js"></script>
        <style type="text/css">
          .bank-name
          {
            position: relative;
            animation: mymove 5s infinite;
          }
          @keyframes mymove 
          {
            0%{color: black;}
            33%{color: red;}
            66%{color: yellow;}
            100%{color: white;}
            from {left: 0vw;}
            to {left: 30vw;}
          }
          #home
          {
            color: white;
            border: none;
            background: none;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
          }
          #home:hover
          {
            background-color: #0cbaba;
            background-image: linear-gradient(315deg, #0cbaba 0%, #380036 74%);
          }
          #home:active 
          {
            background-color: #3e8e41;
            box-shadow: 0 1.2vw #666;
            transform: translateY(1vw);
          }
          #about-us
          {
            color: white;
            border: none;
            background: none;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
          }
          #about-us:hover
          {
            background-color: #0cbaba;
            background-image: linear-gradient(315deg, #0cbaba 0%, #380036 74%);
          }
          #about-us:active 
          {
            background-color: #3e8e41;
            box-shadow: 0 1.2vw #666;
            transform: translateY(1vw);
          }
          #view-transactions
          {
            margin-left: 1vw; 
            border: none;
            background: none;
            border-radius: 1vw;
            color: white; 
            font-size: 1.2vw; 
            font-weight: bold;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
          }
          #view-transactions:hover
          {
            background-color: #f7b42c;
            background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);
          }
          #View-transactions:active 
          {
            background-color: #3e8e41;
            box-shadow: 0 1.2vw #666;
            transform: translateY(1vw);
          }
          @keyframes spin3D 
          {
            from { transform: rotateY(0deg) }
            to { transform: rotateY(360deg) }
          }
          #phone
          {
            height: 40px;
            border: none;
            background: none;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
          }
          #phone:hover
          {
            border-bottom: 4px solid white;
          }
          #phone:active 
          {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
          }
          #email
          {
            color: black; 
            font-size: 18px;
            height: 40px;
            border: none;
            background: none;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
          }
          #email:hover
          {
            border-bottom: 4px solid white;
          }
          #email:active 
          {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
          }
          .customer-div
          {
            float: left; 
            margin-left: 1vw;
            margin-top: 5vw; 
            margin-bottom:5vw; 
            padding: 1vw; 
            border: 0.2vw solid white; 
            border-radius: 2vw;
            padding-top: 2vw;
          }
          .transact
          {
            padding: 1vw;
            font-size: 1.5vw; 
            font-weight: bold;
            border: none;
            background: none;
            border-radius: 2vw;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
          }
          .transact:hover
          {
            background-color: #f7b42c;
            background-image: linear-gradient(315deg, #f7b42c 0%, #fc575e 74%);

          }
          .transact:active 
          {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
          }
          .table-content
          {
            text-align: center;
            padding: 0.5vw;
            font-size: 1.5vw;
            color: white;
          }
          .table_caption
          {
            font-size: 3vw;
            font-weight: bold;
            text-decoration: underline;
            color: yellowgreen;
          }
        </style>
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light" style="background: linear-gradient(-45deg, #EE7752, #E73C7E, #23A6D5, #23D5AB);">
            <div class="container-fluid">
              <a class="navbar-brand bank-name" href="#" style="font-weight: bold; font-size: 3vw; margin-right: 50vw;">
                <span class="fa-stack fa-lg" style="font-size: 2vw;" class="bank-name">
                  <i class="fa fa-square-o fa-stack-2x"></i>
                  <i class="fa fa-bank fa-stack-1x"></i>
                </span>TSF Bank</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <button id="home" onclick="Home()">
                      <a class="nav-link active" aria-current="page" href="#" style="font-size: 2vw; font-weight: bold; color: white;">
                        <span class="fa-stack fa-lg" style="color: white; font-size: 1.5vw;">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-home fa-stack-1x"></i>
                        </span>
                        Home
                      </a>
                    </button>
                  </li>
                  <li>
                      <div style="width: 0.1vw; height: 95%; background-color: black;"></div>
                  </li>
                  <li class="nav-item">
                    <button id = "about-us" onclick="AboutUsPage()">
                      <a class="nav-link" href="#" style="font-size: 2vw; font-weight: bold; color: white;">
                        <span class="fa-stack fa-lg" style="color: white; font-size: 1.5vw;">
                          <i class="fa fa-square-o fa-stack-2x"></i>
                          <i class="fa fa-info fa-stack-1x"></i>
                        </span>
                        About Us
                      </a>
                    </button>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <div class="container-fluid" style="overflow: hidden; padding: 1vw; background-color: #d4418e; background-image: linear-gradient(315deg, #d4418e 0%, #0652c5 74%);">
            <!-- Content here -->
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner" style="height: 30vw;">
                <div class="carousel-item active">
                  <img src="images/cust1.jpg" class="d-block w-100" alt="..." style="height: 30vw">
                </div>
                <div class="carousel-item">
                  <img src="images/cust2.jpg" class="d-block w-100" alt="..." style=" height: 30vw;">
                </div>
                <div class="carousel-item">
                  <img src="images/cust3.jpg" class="d-block w-100" alt="..." style=" height: 30vw;">
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
            <div class = "customer-div">
              <center><p class="table_caption">Customers' Details</p></center>
                <?php
                    $link = mysqli_connect("localhost", "id17027056_mamta", "MyProject12@", "id17027056_tsfbank");
                    if(mysqli_connect_error())
                    {
                        die("Error in connecting to the database");
                    }
                    if($result = mysqli_query($link, 'SELECT * FROM customers'))
                    {
                        if(mysqli_num_rows($result) > 0)
                        {
                            echo '<table>';
                                echo '<tr style="margin-top: 20px;">';
                                    echo '<th class = "table-content">Id</th>';
                                    echo '<th class = "table-content">Name</th>';
                                    echo '<th class = "table-content">Address</th>';
                                    echo '<th class = "table-content">Phone no.</th>';
                                    echo '<th class = "table-content">Email</th>';
                                    echo '<th class = "table-content">Balance</th>';
                                    echo '<th class = "table-content"> </th>';
                                echo "</tr>";
                            while($row = mysqli_fetch_array($result))
                            {
                                echo "<tr>";
                                    echo '<th class = "table-content">', $row['0'], '</th>';
                                    echo '<th class = "table-content">', $row['1'], '</th>';
                                    echo '<th class = "table-content">', $row['2'], '</th>';
                                    echo '<th class = "table-content">', $row['3'], '</th>';
                                    echo '<th class = "table-content">', $row['4'], '</th>';
                                    echo '<th class = "table-content">', $row['5'], '</th>';
                                    ?>
                                    <th><button class="transact"><a style="color: white; text-decoration:none;" href="transfer-money.php?id= <?php echo $row['id']?>">Transfer Money</a></button></th>          
                                <?php
                                echo "</tr>";
                            }
                            echo "</table>";
                            mysqli_free_result($result);    
                        }
                        else
                        {
                            echo "No record found";
                        }
                    }
                    else
                    {
                        echo "ERROR ", mysqli_error($link);
                    }
                    mysqli_close($link);
                    ?>
                </div>
            <div style="float: right; margin-top: 5vw; padding: 2vw; border: 0.2vw solid white; border-radius: 20%; width: fit-content; margin-right: 1vw;">
              
              <p><img src="images/transaction.png" style="width: 10vw; height: 8vw; margin-left: 1.5vw; animation-name: spin3D; animation-duration: 3s; animation-iteration-count: infinite; animation-timing-function: linear;"></p>
              
              <button id = "view-transactions" onclick="ViewTransactions()">
                  <span class="fa-stack fa-lg" style="color: white; animation-name: spin3D; animation-duration: 3s; animation-iteration-count: infinite; animation-timing-function: linear;">
                      <i class="fa fa-square-o fa-stack-2x"></i>
                      <i class="fa fa-id-card fa-stack-1x"></i>
                  </span>
                  <span>View All Transactions</span>
              </button>
            </div>
        </div>
        <!-- Footer -->
        <footer class="bg-dark text-center text-white">
          <!-- Grid container -->
          <div class="container p-4">
            <!-- Section: Social media -->
            <section class="mb-4">
              <!-- Facebook -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/" role="button">
                <i class="fa fa-facebook"></i>
              </a>

              <!-- Twitter -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://twitter.com/" role="button">
                <i class="fa fa-twitter"></i>
              </a>

              <!-- Google -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://www.google.com/" role="button">
                <i class="fa fa-google"></i>
              </a>

              <!-- Instagram -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/" role="button">
                <i class="fa fa-instagram"></i>
              </a>

              <!-- Linkedin -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/" role="button">
                <i class="fa fa-linkedin"></i>
              </a>

              <!-- Github -->
              <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/" role="button">
                <i class="fa fa-github"></i>
              </a>
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links -->
            <section class="">
              <!--Grid row-->
              <div class="row">
                <!--Grid column-->
                <div class="col">
                  <h5 class="text-uppercase">TSF Bank</h5>

                  <ul class="list-unstyled mb-0">
                    <li><a href="aboutus.html" style="color: white; font-size: 1.5vw; text-decoration: none;">About Us</a></li>
                          <li><a href="contactus.php" style="color: white;; font-size: 1.5vw; text-decoration: none;">Contact Us</a></li>  
                          <li><a href="privacy.html" style="color: white;; font-size: 1.5vw; text-decoration: none;">Privacy Policy</a></li>      
                          <li><a href="disclaimer.html" style="color: white;; font-size: 1.5vw; text-decoration: none;">Disclaimer</a></li>   
                  </ul>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col">
                  
                    <span class="fa-stack fa-lg" style="color: white;">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <i class="fa fa-phone fa-stack-1x"></i>
                    </span>
                    <span style="color: white; font-size: 1.7vw; font-weight: bold;">Give us a ring</span><br>
                    <button id="phone"><a href="tel:1234567890" style="color: white; font-size: 1.5vw; text-decoration: none;">+911234567890</a></button><br><br>
                    <span class="fa-stack fa-lg" style="color: white;">
                        <i class="fa fa-square-o fa-stack-2x"></i>
                        <i class="fa fa-envelope fa-stack-1x"></i>
                    </span>
                    <span style="color: white; font-size: 1.7vw; font-weight: bold;">Mail us</span><br>
                    <button id = "email"><a href="mailto:tsf@bank.com" style="color: white; font-size: 1.5vw; text-decoration: none;">tsf@bank.com</a></button>
                
                </div>
                <!--Grid column-->

              </div>
              <!--Grid row-->
            </section>
            <!-- Section: Links -->
          </div>
          <!-- Grid container -->

          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2021 Copyright:
            <a class="text-white" href="https://tsf@bank.com/">tsf@bank.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
    </body>
</html>