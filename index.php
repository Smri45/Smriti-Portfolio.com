<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Responsive Personal Portfolio Website </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title> Responsive Personal Portfolio Website </title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>


<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#Home" class="active">Home</a>
      <a href="#About ">About </a>
      <a href="#Skills">Skills</a>
      <a href="#Porjects">Porjects</a>
      <a href="#Contact">Contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="Home" id="Home">

   <div class="image" data-aos="fade-right">
      <img src="images/sm.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up"> Smriti kuamri Gupta</h3>
      <span data-aos="fade-up">Student at Galgotias University.</span>
      <p data-aos="fade-up">A computer science student passionate about programming and design.
         Good Listener as well as working on myslef for best outcome in the feild of technology.</p>
      <a data-aos="fade-up" href="#about" class="btn">about me</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up"> <font size="+0">My name is Smriti Kumari Gupta. I'm a B.tech student at Galgotias University in Computer Science Department,Greater noida. I was born and raised in Nepal. 
          i am optimist person and always crazy for new technology building techinque.</font></p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Smriti Kumari Gupta</h3>
         <h3 data-aos="zoom-in"> <span>email : </span> Shalu456gupt@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Greater noida, india </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> 9661635454 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 20 years </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skill" data-aos="fade-up">

      <h1 class="heading"> <span>skill</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Java</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Python</span> <span>30%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2017 - 2018 )</span>
               <h3>Schooling</h3>
               <p> <font size="-1">I have passed class 10th from Nepal with 87%.</font></p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2018 - 2020 )</span>
               <h3>Scholling</h3>
               <p><font size="-1">I have passed class 11th and 12th from Nepal with 76% and 73%.</font></p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020- 2024)</span>
               <h3>Bachelor</h3>
               <p><font size="-1"> Persuing 3rd year b.tech in galgotias university 
                  and got 8.05 cgp in 2nd year.</font></p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- Skills section starts  -->

<section class="Skills" id="Skills">

   <h1 class="heading" data-aos="fade-up"> <span>Skills</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
      
         <h3>HTML</h3>
        <p>I have the advance knowledge of html.</p>
      </div>

      <div class="box" data-aos="zoom-in">
      <img src="images/img-2.jpg" alt="">
         <h3>CSS</h3>
         <p>I have the advance knowledge on css styling and designing with css5.</p>
      </div>

      <div class="box" data-aos="zoom-in">
      <img src="images/download (1).png" alt="">
        
         <h3>Javascript</h3>
         <p>Good knowledge on javascript as many platfrom demand prior.</p>
      </div>

      <div class="box" data-aos="zoom-in">
      <img src="images/img-4.jpg" alt="">
        
         <h3>Python</h3>
         <p>Also have done the projects in python and have intermidiate level concept.</p>
      </div>

      <div class="box" data-aos="zoom-in">
      <img src="images/img-5.jpg" alt="">
         
         <h3>PHP</h3>
         <p>As it is must for responsive website design , i have learnt and done project with this concept at intermediate level.</p>
      </div>

      <div class="box" data-aos="zoom-in">
      <img src="images/img-6.jpg" alt="">
         
         <h3>Java language</h3>
         <p>The most foundation language with advance concept as well as data structure.</p>
      </div>

   </div>

</section>

<!-- Skills section ends -->
<!-- Projects section starts  -->

<section class="Projects" id="Projects">

   <h1 class="heading" data-aos="fade-up"> <span>Projects</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <h3>House price Prediction</h3>
         <span>( 2020-2021 )</span>
         <p>   I have worked on project for house price Prediction
               using machine learning, AI. Basically this project work on identification of
               price of house as per the demand and facilities available for customer.
               This system uses liner regression technique for time saving and effective result.
               According to the rate of market within short period of time.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <h3>Porfolio website</h3>
         <span>( 2021- 2022 )</span>
         <p>    I have currently worked on this concept of project
                as intersted in website development. This project aims to
                able to make own profolio website for recognization
                including skills,study,aims and totally based on the people indentity.
                An online portfolio is an online representation of work you have created, as well as your skills and experiences. 
                Creating own portfolio website allows to share and showcase work easily with the employers you'd like to work for</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <h3>Bitcoin Price Prediction</h3>
         <span>( 2021 - 2022 )</span>
         <p> And now before 2 months i have completed the project on this topic which deals with the cryptocurrency. 
             It predict the price of Bitcoin and determine the future growth which help in determiunation of marketing growth.
         </p>
      </div>


   </div>

</section>

<!-- Projects section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>Let's Connect!</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>9661635454</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>shalu456gupt@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Greater noida, india </p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Smriti Kumari Gupta</span> </div>




<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>