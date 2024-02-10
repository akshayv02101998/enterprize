<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="link.css">
    <title>Nitin Enterprises</title>
    <style>

    </style>
</head>

<body>
    <header>
        <?php include 'connection.php'; ?>
     

        <div class="box">
            <p style="margin-top:0px; margin-bottom:0px;">
                NITIN ENTERPRISES </p>
        </div>
        <div class="box1" >
            <p style="margin-top:0px; margin-bottom:0px;"> Kalos [KĀYˈ-los]: The highest form of beauty and handsomeness with purity of heart and life; moral, nob
                <span>Call us at : 1234567890</span></p>

        </div>
        <div class="menu_block ">

            <div class="logo">
                <img src="img/logo.jpg" alt="Nitin Enterprises logo" height="30px">
                NITIN ENTERPRISES
            </div>
            <div class="menu">
                <ul>
                   
                    <li><a href="index.php">Home</a></li>
                    <!-- <li><a href="">Contact</a></li> -->
                    <!-- <li><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal1">Login</a></li>
                    <li><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">sign up</a></li> -->
            </div>

    </header>
    <div class="container">
        <h1>The Kalos Medical Spa Team</h1>
        <h3 class="second">Meet Our Fort Worth Medical Professionals</h3>
        <h5>
            Absolutely amazing office! I cannot say enough great things about them! The two procedures I had done I am
            sooo happy with the results…the whole staff actually listens to you and makes sure you are completely taken
            care of. Go there you will not regret it!—T.D. Actual Patient
        </h5>
        <p>The Kalos Medical Spa Team
            Meet Our Fort Worth Medical Professionals
            Absolutely amazing office! I cannot say enough great things about them! The two procedures I had done I am
            sooo happy with the results…the whole staff actually listens to you and makes sure you are completely taken
            care of. Go there you will not regret it!—T.D. Actual Patient

            Kalos is not your average medical spa. Our on-site supervising physician, Dr. Emily Kirby, is a
            board-certified plastic surgeon who works closely with our highly trained team of medical professionals. Our
            specialists have a passion for helping patients reveal their natural radiance and a reputation for exceeding
            expectations. We believe you deserve the very best in every aspect of your care, and we work hard to provide
            an exceptional spa experience.</p>

        <h4>Our patients tell us time and time again that Dr. Kirby and her team are the only ones they would ever come
            to for their aesthetic treatments. Our Fort Worth med spa is proud to have a loyal following, because it
            means we are doing things right for those who matter most—you!</h4>
        <span>
            <div class="contact">
                <h1>Contact us</h1>
                <form action="">
                    <label>Your Name*</label><br>
                    <input type="text" name="name" class=""><br>
                    <label>Email*</label><br>
                    <input type="email" name="email"><br>
                    <label>Procedure of Interest*</label><br>
                    <select name="select" id="">
                        <option value="">Choice</option>
                    </select><br>
                    <label>Tell us more*</label><br>
                    <textarea name="" id="" cols="30" rows="5"></textarea><br>
                    <button class="btn"><b>Send</b></button>
                </form>
            </div>
        </span>
    </div>

    <div class="team">
        <div class="pic">
            <!-- <h1 >MEET OUR TEAM :</h1> -->
            <?php  
    $select="Select * from `team` ";
    $query=mysqli_query($conn,$select);
    while($row=mysqli_fetch_array($query)){
        ?>
            <div class="card1 ">
                <img class="img" src=" <?php echo $row['pic']; ?>" alt="Card image cap" width="">
                <div class="body">
                    <h5 class="title"><?php echo $row['name'];?></h5>
                    <p class="text">hey! <br> Greeting of the day <br>
                        Welcome in my beautician product Website </p>

                </div>
            </div>
            <?php   }
    ?>
        </div>
        <div class="last">
            <ul>
                <li> <a href="">SKIN CARE PRODUCTS</a></li>
                <li> <a href="">SKIN MAKEUP PRODUCTS</a> </li>
                <li><a href="contact.php">ABOUT</a> </li>
                <li><a href="">SHOP</a></li>
            </ul>
            <ul>
                <li><a href="">LOCATION</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="">SPECIALS</a></li>
                <li><a href="">GIFT CARDS</a></li>
            </ul>
            <h1 class="nitin">NITIN INTERPRISES</h1>
            <p>THE MEDICAL SPA AT KIRBY PLASTIC SURGERY</p>
            <h2>Call us at: 1234567890</h2>

        </div>
        <hr>
        <div class="end">
            <p>© Kalos Medical Spa at Kirby Plastic Surgery, 2018-2024</p>
            <div class="div"><span><a href="https://www.facebook.com/NitinCosmetics" data-toggle="tooltip"
                        data-placement="top" title="Facebook!"><img src="img/fdark.png" alt="" width="20px"></a> <a
                        href="https://www.instagram.com/nitincosmetics?igsh=MXNndTQ3bHRoZjVsMA==" data-toggle="tooltip"
                        data-placement="top" title="Instragram!"><img src="img/idark.png" alt="" width="30px"></a> <a
                        href="https://youtube.com/@NitinBundela123?si=QF-gzfABIMDUelD=" data-toggle="tooltip"
                        data-placement="top" title="youtube!"><img src="img/ydark.png" alt="" width="30px"></a></span>
            </div>
        </div>
    </div>
</body>

</html>