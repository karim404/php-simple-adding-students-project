<?php
    if(session_status() == PHP_SESSION_NONE) session_start();
    require_once "inc/header.php";
    require_once "handelers/doctors/Handeladddoctor.php";
//    if(isset($_SESSION['auth'])){
//                echo "<pre>";
//        print_r($_SESSION['auth']);
//        die;
//    }
?>

<body>
    <div class="page-wrapper">
        <?php require_once "inc/nav.php";?>
        <div class="container-fluid bg-blue text-white pt-3">
            <div class="container pb-5">
                <div class="row gap-2">
                    <div class="col-sm order-sm-2">
                        <img src="assets/images/banner.jpg" class="img-fluid banner-img banner-img" alt="banner-image"
                            height="200">
                    </div>
                    <div class="col-sm order-sm-1">
                        <h1 class="h1">Have a Medical Question?</h1>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa nesciunt repellendus itaque,
                            laborum
                            saepe
                            enim maxime, delectus, dicta cumque error cupiditate nobis officia quam perferendis
                            consequatur
                            cum
                            iure
                            quod facere.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <h2 class="h1 fw-bold text-center my-4">majors</h2>
            <div class="d-flex flex-wrap gap-4 justify-content-center">
                <?php  require_once "majors/Handeladdmajor.php";

                $insertmajor = new Handeladdmajor;

                $rows = $insertmajor->selectMajorFromSql();

                foreach($rows as $row){ ?>
                <div class="card p-2" style="width: 18rem;">
                    <img src="<?=$row['image']?>" class="card-img-top rounded-circle card-image-circle"
                         alt="major">
                    <div class="card-body d-flex flex-column gap-1 justify-content-center">
                        <h4 class="card-title fw-bold text-center"><?= $row['name'] ?></h4>
                        <a href="./doctors/BrowseDoctor.php?id=<?= $row['id']?>" class="btn btn-outline-primary card-button">Browse Doctors</a>


                    </div>
                </div>
                <?php } ?>


            </div>
            <h2 class="h1 fw-bold text-center my-4">doctors</h2>
            <?php
            $doctor = new Handeladddoctor();
//            $doctor->path  = 'assets/images/doctor-image/'.$doctor->image_name;

            $rows = $doctor->selectDoctorFromSqlwithfilter();

            ?>
            <section class="splide home__slider__doctors mb-5">
                <div class="splide__track ">
                    <ul class="splide__list">
                        <?php
                        foreach ($rows as $row):
                        $major_id = $row["majors_id"];
                        $query = "SELECT `name` FROM `majors` WHERE `id` = '$major_id'";
                        $sql = $doctor->conn->query($query);
                        $major = $sql->fetch(PDO::FETCH_ASSOC);
                        //                    echo"<pre>";
                        //                    print_r($r);
                        //                    die;

                        ?>
                        <li class="splide__slide">
                            <div class="card p-2" style="width: 18rem;">
                                <img src="<?=$row['image']?>" class="card-img-top rounded-circle card-image-circle"
                                     alt="major">
                                <div class="card-body d-flex flex-column gap-1 justify-content-center">
                                    <h4 class="card-title fw-bold text-center"><?=$row['name']?></h4>
                                    <h6 class="card-title fw-bold text-center">Major Of <?=$major['name']?></h6>
                                    <a href="doctors/doctor.php?id=<?=$row['id'] ;?>"  class="btn btn-outline-primary card-button">Book an appointment</a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach;?>

                    </ul>
                </div>
            </section>
        </div>
        <div class="banner container d-block d-lg-grid d-md-block d-sm-block">
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="info">
                <div class="info__details">
                    <img src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/medical-care-icon.svg"
                        alt="" width="50" height="50">
                    <h4 class="title m-0">
                        everything you need is found at VCare.
                    </h4>
                    <p class="content">
                        search for a doctor and book an appointment in a hospital, clinic, home visit or even by phone,
                        you
                        can also order medicine or book a surgery.
                    </p>
                </div>
            </div>
            <div class="bottom--left bottom--content bg-blue text-white">
                <h4 class="title">download the application now</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus facere eveniet in id, quod
                    explicabo minus ut, sint possimus, fuga voluptas. Eius molestias eveniet labore ullam magnam sequi
                    possimus quaerat!</p>
                <div class="app-group">
                    <div class="app"><img
                            src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/google-play-logo.svg"
                            alt="">Google Play</div>
                    <div class="app"><img
                            src="https://d1aovdz1i2nnak.cloudfront.net/vezeeta-web-reactjs/55619/_next/static/images/apple-logo.svg"
                            alt="">App Store</div>
                </div>
            </div>
            <div class="bottom--right bg-blue text-white">
                <img src="assets/images/banner.jpg" class="img-fluid banner-img">
            </div>
        </div>
    </div>


    <?php require_once "inc/footer.php";?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.1/js/bootstrap.min.js"
        integrity="sha512-fHY2UiQlipUq0dEabSM4s+phmn+bcxSYzXP4vAXItBvBHU7zAM/mkhCZjtBEIJexhOMzZbgFlPLuErlJF2b+0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/scripts/home.js"></script>
</body>

</html>