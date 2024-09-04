<?php require('admin/db_connection.php') ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DhanMitra MicroFinance Services - New Small Business Loans in India</title>
    <meta name="description" content="DhanMitra Microfinance Services provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc">
    <link href="modules/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="modules/fontawesome.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
</head>

<body>
    <!-- Header Section start -->
    <?php include 'navbar.php'   ?>
    <!-- Header Section end -->

    <!-- banner section start -->
    <div id="carouselExample" class=" carousel slide">

        <?php
        $page = 'carrer'; // This is the page name to filter by
        $selectQuery = "SELECT * FROM `banners` WHERE `page` = '$page'";
        $run = mysqli_query($conn, $selectQuery);
        if ($run) {
            if (mysqli_num_rows($run) > 0) {
                $row = mysqli_fetch_assoc($run);
        ?>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img height="600" src="admin/<?php echo $row['banner_img_1']; ?>" class="d-block w-100 img-fluid" style="height: 550px;" />
                    </div>
                </div>

            <?php
            } else {
            ?>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img height="600" src="images/career.gif" class="d-block w-100 img-fluid" style="height: 550px;" />
                    </div>
                </div>

        <?php
            }
        } ?>
        
    </div>
    <!-- banner section end -->

    <!-- Text Slider Start -->
    <marquee class="p-2">DhanMitra MicrofinanceServices provides microfinance and MSME loans, machinery loans, small business loans in India, business financing etc.</marquee>
    <!-- Text Slider End -->

    <!-- Current Opening Section Start -->
    <div id="current-opening" style="background-color: rgb(250, 228, 201);" class="mb-5 py-5">
        <div class="container">
            <h1 class="fs-1 fw-bolder">CURRENT OPENINGS</h1>
            <div class="row m-2 py-4  justify-content-center">
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color: rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2">Chartered Accountant</h5>
                    <a href="co_one.php" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color: rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2">Credit and Market Risk – Sr. Manager</h5>
                    <a href="co_two.php" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color:rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2">Branch Manager – Business Operations</h5>
                    <p>
                        <span class="d-block" style="font-size: 12px;"> 5-10 Years </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> Haryana </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> Gurgaon/Gurugram </span></span>
                    </p>
                    <a href="co_three.php" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color:rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2">RO/SRO/ABM – Business Operations</h5>
                    <p>
                        <span class="d-block" style="font-size: 12px;"> Fresher </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> PAN India </span></span>
                        <span class="d-block" style="font-size: 12px;"> RO/SRO/ABM</span></span>
                    </p>
                    <a href="co_four.php" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color:rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2">Sr. Exe/AM/DM – Treasury Finance</h5>
                    <p>
                        <span class="d-block" style="font-size: 12px;"> 5-10 Years </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> Haryana </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> Gurgaon/Gurugram </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> Sr. Exe/AM/DM </span></span>
                    </p>
                    <a href="co_five.php" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color:rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2">AM/DM – Content Developer</h5>
                    <p>
                        <span class="d-block" style="font-size: 12px;"> 2-5 Years </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> Haryana </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> Gurgaon/Gurugram </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> AM/DM – Content Developer </span></span>
                    </p>
                    <a href="" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color:rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2">Manager – Reconciliation</h5>
                    <p>
                        <span class="d-block" style="font-size: 12px;"> 5-7 Years </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> Haryana </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> Gurgaon/Gurugram </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> Manager – Reconciliation </span></span>
                    </p>
                    <a href="" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color:rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2" style=" word-wrap: break-word">Sr .Exe – Trainer (Vadodara/Raipur/Chennai/Madurai/Muzafarpur)</h5>
                    <p>
                        <span class="d-block" style="font-size: 12px;"> 2-5 Years </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> Haryana </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> Gurgaon/Gurugram </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> LEarning Development </span></span>
                    </p>
                    <a href="" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color:rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2">Assistant Manager / Deputy Manager Content Creator</h5>
                    <p>
                        <span class="d-block" style="font-size: 12px;"> 2-5 Years </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> Haryana </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> Gurgaon/Gurugram </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> LEarning Development </span></span>
                    </p>
                    <a href="" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color:rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2">Sr .Exe – Trainer (Patiala)</h5>
                    <p>
                        <span class="d-block" style="font-size: 12px;"> 2-5 Years </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> Haryana </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> Gurgaon/Gurugram </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> LEarning Development </span></span>
                    </p>
                    <a href="" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color:rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2">Manager – Reconciliation</h5>
                    <p>
                        <span class="d-block" style="font-size: 12px;"> 2-5 Years </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> Haryana </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> Gurgaon/Gurugram </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> LEarning Development </span></span>
                    </p>
                    <a href="" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 shadow-lg mx-2 mb-4 p-4" style="background-color:rgb(250, 243, 233); border-radius: 5px; width: 400px; height: 220px;">
                    <h5 class="mb-2">Assistant Manager/Deputy manager – Treasury</h5>
                    <p>
                        <span class="d-block" style="font-size: 12px;"> 2-5 Years </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-dot"></i> Haryana </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> Gurgaon/Gurugram </span></span>
                        <span class="d-block" style="font-size: 12px;"><i class="fa-solid fa-location-arrow"></i> LEarning Development </span></span>
                    </p>
                    <a href="" class="text-decoration-none fs-6 mt-4" style="color: #c85103; font-weight: 500;">More Details... <i class="fa-solid fa-arrow-right-long fa-beat-fade"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Current Opening Section End -->

    <!-- Learning & Development  Section Start -->
    <div id="learning_development" class=" my-5">
        <div class="container-fluid ">
            <h1 class="mb-4 text-center fw-bolder">LEARNING DEVELOPMENT</h1>
            <div class="container">
                <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam facilis modi adipisci dolor at facere numquam! Consectetur eaque, explicabo reprehenderit facilis voluptates at voluptate recusandae nihil soluta ipsum necessitatibus ea quisquam doloribus in molestiae similique officia natus tenetur eveniet. Quia provident placeat quis explicabo optio est ducimus consequuntur ipsam suscipit!</p>
            </div>
            <div class="row 	align-items-center d-flex justify-content-center ">

                <body>
                    <div class="wrapper">
                        <div class="track">
                            <div class="logo">
                                <img src="https://www.verywellmind.com/thmb/DwWmNJsIYim0EGHvB_rW5Ps7DHU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/143071484-56a793c53df78cf772974e1e.jpg" />
                            </div>
                            <div class="logo">
                                <img src="https://www.verywellmind.com/thmb/FuxU5MF9jKoJG49isDB3BTCF2Ps=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/143071367-56a793605f9b58b7d0ebd6c8.jpg" />
                            </div>
                            <div class="logo">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAaCYFexyq9ij0OY1YSh4MYuimpPZpg5gR9Uf2j17NvNjxEk0MAPojrL0R1OkbtKR9qSk&usqp=CAU" />
                            </div>
                            <div class="logo">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSjxgD9S57H_PuhJFkGuQXPlrCmnulqq_6IaToUl6LsizxkCWc1LMGZCNrvyacQLxkTm0&usqp=CAU" />
                            </div>
                            <div class="logo">
                                <img src="https://www.verywellmind.com/thmb/DwWmNJsIYim0EGHvB_rW5Ps7DHU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/143071484-56a793c53df78cf772974e1e.jpg" />
                            </div>
                            <div class="logo">
                                <img src="https://img.freepik.com/free-photo/friends-learning-study-group_23-2149257210.jpg?size=626&ext=jpg&ga=GA1.1.1395991368.1711497600&semt=ais" />
                            </div>
                            <div class="logo">
                                <img src="https://www.verywellmind.com/thmb/DwWmNJsIYim0EGHvB_rW5Ps7DHU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/143071484-56a793c53df78cf772974e1e.jpg" />
                            </div>
                            <div class="logo">
                                <img src="https://www.verywellmind.com/thmb/FuxU5MF9jKoJG49isDB3BTCF2Ps=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/143071367-56a793605f9b58b7d0ebd6c8.jpg" />
                            </div>
                            <div class="logo">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRAaCYFexyq9ij0OY1YSh4MYuimpPZpg5gR9Uf2j17NvNjxEk0MAPojrL0R1OkbtKR9qSk&usqp=CAU" />
                            </div>
                            <div class="logo">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTSjxgD9S57H_PuhJFkGuQXPlrCmnulqq_6IaToUl6LsizxkCWc1LMGZCNrvyacQLxkTm0&usqp=CAU" />
                            </div>
                            <div class="logo">
                                <img src="https://www.verywellmind.com/thmb/DwWmNJsIYim0EGHvB_rW5Ps7DHU=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/143071484-56a793c53df78cf772974e1e.jpg" />
                            </div>
                            <div class="logo">
                                <img src="https://img.freepik.com/free-photo/friends-learning-study-group_23-2149257210.jpg?size=626&ext=jpg&ga=GA1.1.1395991368.1711497600&semt=ais" />
                            </div>

                        </div>
                    </div>
                </body>
            </div>
        </div>
    </div>
    <!-- Learning & Development  Section End -->

    <!-- Rewards and recoginition  Section Start -->
    <!-- <div class="container mb-5" id="employee-rewards">
      <h1 class="fs-1 fw-bolder mt-5 mb-3 text-center" >EMPLOYEE REWARDS & RECOGNITION</h1>
           <div class="employee-gallery">
            <div class="row justify-content-center">
              <div class="card employee-card py-3 mb-2 mx-2 shadow-lg" style="width: 18rem;">
                <img src="images/employee-reward-1.png" class="card employee-card-img-top" alt="...">
               </div>
              <div class="card employee-card py-3 mb-2 mx-2 shadow-lg" style="width: 18rem;">
                <img src="https://media.istockphoto.com/id/1448167415/photo/smiling-indian-businessman-in-suit-and-glasses-with-laptop-near-office-building.webp?b=1&s=170667a&w=0&k=20&c=kQ-sWPkU5XP8sG1-MIrGnTe9SkLQBjGvVsa2X8uVHfc=" class="card employee-card-img-top" alt="...">
               </div>
              <div class="card employee-card py-3 mb-2 mx-2 shadow-lg" style="width: 18rem;">
                <img src="https://media.istockphoto.com/id/1448167415/photo/smiling-indian-businessman-in-suit-and-glasses-with-laptop-near-office-building.webp?b=1&s=170667a&w=0&k=20&c=kQ-sWPkU5XP8sG1-MIrGnTe9SkLQBjGvVsa2X8uVHfc=" class="card employee-card-img-top" alt="...">
               </div>
              <div class="card employee-card py-3 mb-2 mx-2 shadow-lg" style="width: 18rem;">
                <img src="https://media.istockphoto.com/id/1448167415/photo/smiling-indian-businessman-in-suit-and-glasses-with-laptop-near-office-building.webp?b=1&s=170667a&w=0&k=20&c=kQ-sWPkU5XP8sG1-MIrGnTe9SkLQBjGvVsa2X8uVHfc=" class="card employee-card-img-top" alt="...">
               </div>
              <div class="card employee-card py-3 mb-2 mx-2 shadow-lg" style="width: 18rem;">
                <img src="https://media.istockphoto.com/id/1448167415/photo/smiling-indian-businessman-in-suit-and-glasses-with-laptop-near-office-building.webp?b=1&s=170667a&w=0&k=20&c=kQ-sWPkU5XP8sG1-MIrGnTe9SkLQBjGvVsa2X8uVHfc=" class="card employee-card-img-top" alt="...">
               </div>
              <div class="card employee-card py-3 mb-2 mx-2 shadow-lg" style="width: 18rem;">
                <img src="https://media.istockphoto.com/id/1448167415/photo/smiling-indian-businessman-in-suit-and-glasses-with-laptop-near-office-building.webp?b=1&s=170667a&w=0&k=20&c=kQ-sWPkU5XP8sG1-MIrGnTe9SkLQBjGvVsa2X8uVHfc=" class="card employee-card-img-top" alt="...">
               </div>
              <div class="card employee-card py-3 mb-2 mx-2 shadow-lg" style="width: 18rem;">
                <img src="https://media.istockphoto.com/id/1448167415/photo/smiling-indian-businessman-in-suit-and-glasses-with-laptop-near-office-building.webp?b=1&s=170667a&w=0&k=20&c=kQ-sWPkU5XP8sG1-MIrGnTe9SkLQBjGvVsa2X8uVHfc=" class="card employee-card-img-top" alt="...">
               </div>
              <div class="card employee-card py-3 mb-2 mx-2 shadow-lg" style="width: 18rem;">
                <img src="https://media.istockphoto.com/id/1448167415/photo/smiling-indian-businessman-in-suit-and-glasses-with-laptop-near-office-building.webp?b=1&s=170667a&w=0&k=20&c=kQ-sWPkU5XP8sG1-MIrGnTe9SkLQBjGvVsa2X8uVHfc=" class="card employee-card-img-top" alt="...">
               </div>
            </div>
           </div>
   </div> -->
    <!-- Rewards and recoginition  Section End -->

    <!-- Employee Speak  Section Start -->
    <div id="employee_speak" class="my-5 py-5" style="background-color: rgb(250, 228, 201);">
        <div class="container-fluid">
            <h1 class="text-center fw-bolder" style="text-shadow: rgb(237, 124, 84) 1px 0 10px; font-size: 50px;">OUR EMPLOYEE SPEAKS</h1>
            <div class="row">
                <section class="reviews">
                    <div>
                        <div class="reviews-row row-first">
                            <div class="reviews-card">
                                <img class="card-img" src="https://temalcode-agency-portfolio.netlify.app/images/review1.png" alt="">

                                <div class="card-text">
                                    <div class="card-title">
                                        <p>“Rewarding Experience and Professional Growth”</p>
                                    </div>
                                    <div class="card-para">
                                        <p>Working at DhanMitra Microfinance has been a rewarding experience. The company's mission to empower small businesses resonates with me, and the team is dedicated and supportive</p>
                                        <p>The opportunities for growth and learning are abundant, and I appreciate the emphasis on professional development."</p>
                                    </div>
                                </div>
                            </div>

                            <div class="reviews-card">
                                <img class="card-img" src="https://temalcode-agency-portfolio.netlify.app/images/review2.png" alt="">

                                <div class="card-text">
                                    <div class="card-title">
                                        <p>“Collaborative Environment and Transparent Leadership”</p>
                                    </div>
                                    <div class="card-para">
                                        <p> DhanMitra Microfinance values its employees and offers a collaborative work environment. The leadership is transparent</p>
                                        <p>and the company truly cares about its clients and their success. It's a fulfilling place to work with a strong sense of purpose</p>
                                    </div>
                                </div>
                            </div>

                            <div class="reviews-card">
                                <img class="card-img" src="https://temalcode-agency-portfolio.netlify.app/images/review3.png" alt="">

                                <div class="card-text">
                                    <div class="card-title">
                                        <p>“Fantastic Journey with Great Training”</p>
                                    </div>
                                    <div class="card-para">
                                        <p>I've been with DhanMitra Microfinance for over two years, and it's been a fantastic journey. The company invests in its employees and provides excellent training programs. </p>
                                        <p>The culture is inclusive, and there's a real sense of community and teamwork.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="reviews-row row-second">
                            <div class="reviews-card">
                                <div class="card-img">
                                    <img src="https://temalcode-agency-portfolio.netlify.app/images/review1.png" alt="">
                                </div>
                                <div class="card-text">
                                    <div class="card-title">
                                        <p>“Enriching Experience with Balanced Work”</p>
                                    </div>
                                    <div class="card-para">
                                        <p>Working at Dhan Microfinance has been an enriching experience. The company prioritizes both employee and client satisfaction, creating a balanced and positive work environment.</p>
                                        <p>The support from management and colleagues is unparalleled</p>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-card">
                                <div class="card-img">
                                    <img src="https://temalcode-agency-portfolio.netlify.app/images/review4.png" alt="">
                                </div>
                                <div class="card-text">
                                    <div class="card-title">
                                        <p>“Meaningful Work and Growth Opportunities”</p>
                                    </div>
                                    <div class="card-para">
                                        <p>DhanMitra Microfinance is a great place to work if you're passionate about making a difference. The work is meaningful, and the company offers a lot of growth opportunities.</p>
                                        <p>The team is friendly and always willing to help, making it a pleasant workplace</p>
                                    </div>
                                </div>
                            </div>
                            <div class="reviews-card">
                                <div class="card-img">
                                    <img src="https://temalcode-agency-portfolio.netlify.app/images/review5.png" alt="">
                                </div>
                                <div class="card-text">
                                    <div class="card-title">
                                        <p>“Valued and Appreciated with Benefits”</p>
                                    </div>
                                    <div class="card-para">
                                        <p>At DhanMitra Microfinance, I feel valued and appreciated. The company's commitment to social impact aligns with my values, and I enjoy being part of a team that makes a positive difference. </p>
                                        <p>The work-life balance is good, and the benefits are competitive.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- Employee Speak  Section End -->

    <!--  Activities  Section Start -->
    <div id="activities">
        <div class="container">
            <h1 class="fw-bolder text-center" style="text-shadow: rgb(237, 124, 84) 1px 0 10px; font-size: 50px;">ACTIVITIES</h1>
            <p class="text-center">At DhanMitra Microfinance, we empower small businesses and individuals through a range of activities. We provide micro-loans and flexible credit services to those without access to traditional banking, fostering growth and sustainability. Our financial literacy workshops educate clients on budgeting and financial management. We offer business development support, including mentoring and market analysis, to help refine strategies. Our structured savings programs encourage financial discipline. We leverage technology for digital finance solutions, ensuring accessibility and efficiency. Community outreach, impact measurement, and strategic partnerships enhance our reach and effectiveness, creating a supportive ecosystem for our clients.</p>
            <main class="activity-gallery gallery__content--flow">
                <figure>
                    <img class="activity-img" src="https://assets.entrepreneur.com/content/3x2/2000/20160523072414-shutterstock-128200295.jpeg" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>
                <figure>
                    <img class="activity-img" src="https://www.telegraph.co.uk/content/dam/business/spark/NatWest-women-in-business/women-business-meeting.jpg?imwidth=680" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>
                <figure>
                    <img class="activity-img" src="https://www.shutterstock.com/image-photo/attractive-african-young-confident-businesswoman-600nw-1712082700.jpg" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>
                <figure>
                    <img class="activity-img" src="https://cdn.create.vista.com/api/media/small/230921500/stock-photo-smiling-businesswoman-looking-camera-multicultural-colleagues-office" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>
                <figure>
                    <img class="activity-img" src="https://assets.entrepreneur.com/content/3x2/2000/20160523072414-shutterstock-128200295.jpeg" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>
                <figure>
                    <img class="activity-img" src="https://www.telegraph.co.uk/content/dam/business/spark/NatWest-women-in-business/women-business-meeting.jpg?imwidth=680" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>
                <figure>
                    <img class="activity-img" src="https://www.shutterstock.com/image-photo/attractive-african-young-confident-businesswoman-600nw-1712082700.jpg" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>
                <figure>
                    <img class="activity-img" src="https://cdn.create.vista.com/api/media/small/230921500/stock-photo-smiling-businesswoman-looking-camera-multicultural-colleagues-office" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>
                <figure>
                    <img class="activity-img" src="https://assets.entrepreneur.com/content/3x2/2000/20160523072414-shutterstock-128200295.jpeg" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>
                <figure>
                    <img class="activity-img" src="https://www.telegraph.co.uk/content/dam/business/spark/NatWest-women-in-business/women-business-meeting.jpg?imwidth=680" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>
                <figure>
                    <img class="activity-img" src="https://www.shutterstock.com/image-photo/attractive-african-young-confident-businesswoman-600nw-1712082700.jpg" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>
                <figure>
                    <img class="activity-img" src="https://cdn.create.vista.com/api/media/small/230921500/stock-photo-smiling-businesswoman-looking-camera-multicultural-colleagues-office" alt="A light brown, long-haired chihuahua sitting next to three rubber duckies. " title="Photo by Giacomo Lucarini for Unsplash">
                    <figcaption class="header__caption" role="presentation">
                        <h1 class="title title--primary">Dog: Miss Sunshine</h1>
                        <h2 class="title title--secondary">6 years old</h2>
                    </figcaption>
                </figure>

            </main>
        </div>

    </div>
    <!-- Activites  Section End -->

    <!-- Footer Section Start -->
    <?php include 'footer.php' ?>
    <!-- Footer Section  End -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</body>

</html>