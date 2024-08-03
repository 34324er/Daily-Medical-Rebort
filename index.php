
<?php
    $con = mysqli_connect("localhost", "root", "", "web_medical");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- style -->
    <link rel="stylesheet" href="../style/index.css">
    <!--favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!--icon-->
    <link rel="icon" href="../img/the icon.jpeg">
    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <title>Daily Medical Rebort</title>
</head>
<body>
    
    <!--page1 home -->
     <header id="home">
        <!--menu-->
        <div class="navbar">
            <nav>
            <!--logo -->
            <a href="home.html"><img src="../img/LogoKarwim.jpeg" alt="" class="logo"></a>
            
                <ul>
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#doctors">Doctors</a></li>
                    <li><a href="#blogs">Blogs</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="View_news.php">Our News</a></li>
                    <li><a href="../user/register.php">Log in | Sign up</a></li>

                </ul>
            </nav>
        </div>
        <!---->
        <div class="home-content">
             <div class="col">
                <small><img src="../img/section-img.png" alt=""> WE GIVE YOU THE BEST!</small>
                <h1>Est <span class="text-primary ">Medical </span>Report</h1>
                <p>Need Professional help? Our support staff will answer your questions. Visit us Now or an Appointment! </p>
                <a href="#contact" class="btn btn-primary">Get Appointment</a>
                <a href="#call" class="btn btn-secondary">Contact Now</a>

             </div>
        </div>
     </header>







     
    <!--page Abauot start-->
  <section id="about">
    <div class="container">
        <div class="title">
            <h2>We Offer Different Services To Improve Your Health</h2>
            <img src="../img/section-img.png" alt="">
            <p>We are a hospital committed to providing distinguished and comprehensive medical 
                care to patients, using the latest technologies and a specialized medical team</p>
        </div>
        <div class="row">
            <div class="col">
                <h3>Who We Are</h3>
                <hr>
                <p>We take health care personally at Medical hospital Because 
                    excllence in 
                    health care is about more than just medicine, technology,
                    tests and treatments.
                </p>
                <p>It is about reallty caring for people with dignity and That what we do we are dedicated to provding the best care to meet 
                   the needs of people for our community, for our patients -- for you </p>
                <div class="list">
                    <ul>
                        <li><i class="fa-solid fa-circle-play"></i>Medical examinations</li>
                        <li><i class="fa-solid fa-circle-play"></i>Medical consultations</li>
                        <li><i class="fa-solid fa-circle-play"></i>Surgery</li>
                    </ul>
                    <ul>
                        <li><i class="fa-solid fa-circle-play"></i>Emergency services</li>
                        <li><i class="fa-solid fa-circle-play"></i>Mental care</li>
                        <li><i class="fa-solid fa-circle-play"></i>Health Awareness</li>
                    </ul>
                </div>
            </div>
                <img src="../img/about-img.jpeg" alt="">
        </div>
    </div>
  </section>

  <!--info start-->
  <section id="info">
    <div class="container">
      <div class="row">

        <div class="col">
            <i class="fa-solid fa-house"></i>
            <div>
                <span>4662</span>
                <p>Hospital Rooms</p>
            </div>
        </div>

        <div class="col">
            <i class="fa-solid fa-user"></i>
            <div>
                <span>4480</span>
                <p>Specialist Doctors</p>
            </div>
        </div>

        <div class="col">
            <i class="fa-solid fa-face-smile"></i>  
            <div>        
                <span>32000</span>
                <p>Happy Patients</p>
            </div>
        </div>

        <div class="col">
            <i class="fa-solid fa-table-list"></i>
            <div>
                <span>30</span>
                <p>Years of Experience</p>
            </div>
        </div>
    </div>
  </div>
  </section>

  <!--help start-->
<section id="help">
    <div class="container">
        <div class="title">
            <h2>We Are Always Ready To Help You &amp; Your Family </h2>
            <img src="../img/section-img.png" alt="">
            <p>Our team is always at your service, providing the required assistance 
            and support, and do not hesitate to contact us for any inquiry or assistance you need.</p>
        </div> 
        <div class="row">
            <div class="col">
                <i class="fa-solid fa-truck-medical"></i>
                <h3>Emergency Help</h3>
                <p>Emergency Medical Service provides immediate and vital care to patients in medical emergencies</p>
            </div>
            <div class="col">
                <i class="fa-solid fa-heart-pulse"></i>
                <h3>Enriched pharmecy</h3>
                <p>The pharmacy provided basic services related to medications and treatments for patients within the hospital</p>
            </div>
            <div class="col">
                <i class="fa-solid fa-stethoscope"></i>
                <h3>Medical Treatemnt</h3>
                <p>In-hospital medical treatment includes medical care provided to patients</p>
            </div>
        </div>
    </div>
</section>
<!--call start-->
<section id="call">
    <div class="call-content">
        <h2>Do You Emergency Medical Care? Call @01210827036</h2>
        <p>It seems that this number mentioned above is intended for emergency contact or to book tests</p>
        <a href="#contact" class="btn btn-third">Get Appointment</a>
        <a href="chat.php" class="btn btn-forth">To chat <i class="fa-solid fa-arrow-right"></i></a>
    </div>
</section>

<!--services-->
<section id="services">
    <div class="container">
        <div class="title">
            <h2>We Offer Different Services To Improve Your Health</h2>
            <img src="../img/section-img.png" alt="">
            <p>We are here to improve your health with our various services</p>
        </div>
        <div class="row">
            <!--item 1-->
            <div class="item">
            <i class="fa-solid fa-rectangle-list"></i>
            <div>
                <h3>General Treatemnt</h3>
                <p>In our hospital, we provide general treatment services based on accurate
                 diagnosis and high medical experience</p>
            </div>
        </div>
        <!--item 2-->
        <div class="item">
            <i class="fa-solid fa-tooth"></i>
            <div>
                <h3>Teeth Whitening</h3>
                <p>Our teeth whitening service is provided with the latest technologies 
                and safe materials, to ensure a beautiful, bright smile</p>
            </div>
        </div>
         <!--item 3-->
        <div class="item">
            <i class="fa-solid fa-heart-pulse"></i>
            <div>
                <h3>Heart Surgery</h3>
                <p>We are committed to providing heart surgery services with the best medical practices and the latest technologies, with a specialized team</p>
            </div>
        </div>
         <!--item 4-->
        <div class="item">
            <i class="fa-solid fa-ear-listen"></i>
            <div>
                <h3>Ear Treatemnt</h3>
                <p>We provide specialized services in ear treatment using the latest medical technologies and under the supervision of a distinguished team of specialized doctors</p>
            </div>
        </div>
        <!--item 5-->
        <div class="item">
            <i class="fa-solid fa-eye"></i>
            <div>
                <h3>Vision Problems</h3>
                <p>We provide specialized vision therapy services using the latest technologies and precise surgical procedures, to ensure effective and safe vision improvement and vision restoration fugiat cumque.</p>
            </div>
        </div>
        <!--item 6-->
        <div class="item">
            <i class="fa-solid fa-droplet"></i>
            <div>
                <h3>Blood Transfusion</h3>
                <p>We provide blood transfusion services with the highest standards of quality and safety, through a specialized team equipped with the latest technologies, to ensure effective and direct care is provided to every patient who needs this vital service</p>
            </div>
        </div>
        </div> 
    </div>
</section>

<!--price list-->
<section id="price-list">
<div class="container">
        <div class="title">
           <h2>We Provide You The Best Treatment In Resonable Price</h2>
           <img src="../img/section-img.png" alt="">
           <p>We are committed to providing the best treatment services at affordable prices, while maintaining the quality of medical care and providing comfort and comprehensive care to all our patients</p>
        </div>
        <div class="row">
         <!--col 1-->
        
          <div class="col">
          <div class="price_details">
            <i class="fa-solid fa-scissors fa-shake"></i>
            <h3>Plastic Surgery</h3>
            <p>$199 <span>/ Visit</span></p>
        </div>
        <ul>
            <li>Facial plastic surgery<i class="fa-solid fa-circle-check"></i></li>
            <li>Body plastic surgery<i class="fa-solid fa-circle-check"></i></li>
            <li>Hair plastic surgery<i class="fa-solid fa-circle-xmark"></i></li>
            <li>Breast plastic surgery<i class="fa-solid fa-circle-xmark"></i></li>
            <li>Eye plastic surgery<i class="fa-solid fa-circle-xmark"></i></li>
        </ul>
        <a href="#contact" class="btn btn-primary">Book Now</a>
    </div>
 
    <!--col 2-->
    <div class="col">
        <div class="price_details">
            <i class="fa-solid fa-tooth fa-bounce"></i>
            <h3>Teeth Whitening</h3>
            <p>$299 <span>/ Visit</span></p>
        </div>
        <ul>
            <li>Laser teeth whitening<i class="fa-solid fa-circle-check"></i></li>
            <li>Teeth whitening with gel<i class="fa-solid fa-circle-check"></i></li>
            <li>Whitening using chemicals<i class="fa-solid fa-circle-check"></i></li>
            <li>Ultraviolet bleaching<i class="fa-solid fa-circle-xmark"></i></li>
            <li>Whitening with custom molds<i class="fa-solid fa-circle-xmark"></i></li>
        </ul>
        <a href="#contact" class="btn btn-primary">Book Now</a>
    </div>

       <!--col 3-->
       <div class="col">
        <div class="price_details">
            <i class="fa-solid fa-heart-pulse fa-beat-fade"></i>
            <h3>Heart Surgery</h3>
            <p>$399 <span>/ Visit</span></p>
        </div>
        <ul>
            <li>Coronary arteries<i class="fa-solid fa-circle-check"></i></li>
            <li>Cardiac valve replacement<i class="fa-solid fa-circle-check"></i></li>
            <li>Installation of cardiac aids<i class="fa-solid fa-circle-check"></i></li>
            <li>Correction of heart defects<i class="fa-solid fa-circle-check"></i></li>
            <li>Heart transplantation<i class="fa-solid fa-circle-check"></i></li>
        </ul>
        <a href="#contact" class="btn btn-primary">Book Now</a>
    </div>
 
</div>
</section>

<!--Brand-->
<section id="brand">
    <div class="container">
        <div class="row">
            <img src="../img/brand-1.png" alt="">
            <img src="../img/brand-2.png" alt="">
            <img src="../img/brand-3.png" alt="">
            <img src="../img/brand-4.png" alt="">
        </div>
    </div>
</section>

<section id="doctors">
    <div class="container">
        <div class="title">
            <h2>Meet Our Experience Doctors</h2>
            <img src="../img/section-img.png" alt="">
            <p>The hospital has a team of specialized and experienced doctors in various medical specialties</p>
         </div>
         <div class="menu-items">
            <div class="menu-items-left">
              <div class="menu-item">
               <a href=""> <img src="../img/dr view1.jpeg" alt=""></a>
                <div class="">
                  <h3>Dr.Zeyad </h3>
                  <p> Surgery</p>
                </div>
              </div>
      
              <div class="menu-item">
                <img src="../img/dr view 2.jpeg" alt="">
                <div class="">
                  <h3>Dr.Ahmed </h3>
                  <p>Emergency</p>
                </div>
              </div>
      
              <div class="menu-item">
                <img src="../img/dr view3.jpeg" alt="">
                <div class="">
                  <h3>Dr.Yasser</h3>
                  <p>Pediatrics</p>
                </div>
              </div>
      
              <div class="menu-item">
                <img src="../img/dr view4.jpeg" alt="">
                <div class="">
                  <h3>Dr.Hamed </h3>
                  <p>Obstetrics</p>
                </div>
              </div>
      
              <div class="menu-item">
                <img src="../img/dr view5.jpeg" alt="">
                <div class="">
                  <h3>Dr.Ibrahim </h3>
                  <p> Internal</p>
                </div>
              </div>
      
              <div class="menu-item">
                <img src="../img/dr view8.jpeg" alt="">
                <div class="">
                  <h3>Dr.Mariam </h3>
                  <p>Neurology</p>
                </div>
              </div>
          </div>


          
    <div class="menu-items-right">
        <div class="menu-item">
          <img src="../img/dr view15.jpeg" alt="">
          <div class="">
            <h3>Dr.Marian </h3>
            <p>Otolaryngology</p>
          </div>
        </div>
  
        <div class="menu-item">
          <img src="../img/dr view26.jpeg" alt="">
          <div class="">
            <h3>Dr.Metwaly </h3>
            <p>Dermatology</p>
          </div>
        </div>
  
        <div class="menu-item">
          <img src="../img/dr view19.jpeg" alt="">
          <div class="">
            <h3>Dr.Kazem </h3>
            <p>Cardiology</p>
          </div>
        </div>
  
        <div class="menu-item">
          <img src="../img/dr view22.jpeg" alt="">
          <div class="">
            <h3>Dr. Mina </h3>
            <p>Orthopedics</p>
          </div>
        </div>
  
        <div class="menu-item">
          <img src="../img/dr view23.jpeg" alt="">
          <div class="">
            <h3>Dr. Kerolos </h3>
            <p>Dentistry</p>
          </div>
        </div>
  
        <div class="menu-item">
            <img src="../img/dr view24.jpeg" alt="">
            <div class="">
            <h3>Dr.Moheb </h3>
            <p>Anesthesiology</p>
          </div>
        </div>
      </div>
    </div>
    <form action="View_Doctors_users.php" method="post">
    <button class="btn" name="explore_full_menu">EXPLORE FULL MENU</button>
    </form>

    <?php
     if(isset($_post['explore_full_menu'])){
         header('location: View_Doctors_users.php');
     }
    ?>

  </div>  
    </section>
         </div>
    </div>
</section>

<!--Blog-->


<section id="blogs">
    <div class="container">
        <div class="title">
            <h2>Keep Up With Our Most Recent Medical News</h2>
            <img src="../img/section-img.png" alt="">
            <p>On the hospital's website, we are keen to keep pace with the latest medical 
                developments and discoveries, as we provide renewed content that includes the 
                latest health research and guidance, to ensure the provision of comprehensive 
                and innovative health care to our patients and visitors.</p>
         </div>
         <div class="row">

            <div class="col">
                <img src="../img/blog-1.jpeg" alt="">
                <div class="col-content">
                    <p class="date">22 Aug, 2023</p>
                    <h3>We have annonced our new product </h3>
                    <p>Certainly, we are honored to announce the launch of our new product on the hospital’s website, which aims to improve patients’ experience and provide distinguished medical services with the latest </p>
                </div>
            </div>


            <div class="col">
                <img src="../img/blog-2.jpeg" alt="">
                <div class="col-content">
                    <p class="date">22 Aug, 2023</p>
                    <h3>To five Ways for solving teeth proplems </h3>
                    <p>Dental problems can be solved by providing five main services on the hospital site, such as fillings, regular cleanings, jaw and dental surgery services, installation of bridges and crowns, and gum treatment and surgery.</p>
                </div>
            </div>
    
            <div class="col">
                <img src="../img/blog-3.jpg" alt="">
                <div class="col-content">
                    <p class="date">30 jan, 2024</p>
                    <h3> We provide highly business solutions </h3>
                    <p>At the hospital site, we provide innovative and advanced business solutions, which contribute to improving patient experience and facilitating administrative and medical processes to achieve the best health outcomes.</p>
                </div>
            </div>
         </div>
    </div>
</section>

<!--contact-->
<section id="contact">
  <div class="container">
    <div class="title">
        <h2>We Are Always Ready To Help You Book An Appointment</h2>
        <img src="../img/section-img.png" alt="">
        <p>We are always ready to help you book an appointment through the hospital website, to ensure that your medical needs are met easily and effectively.</p>
     </div>
     <div class="row">
        <form action="index.php" method="post">
            <div class="form-control">
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
            </div>

            <div class="form-control">
                <input type="number" name="phone" placeholder="Phone" required>
                <select name="department">
                    <option value="Department" selected>Department</option>
                    <option value="Internal Medicine">Dental</option>
                    <option value="Pediatrics">Pediatrics</option>
                    <option value="Surgery">Surgery</option>
                    <option value="Obstetrics and Gynecology">Obstetrics and Gynecology</option>
                    <option value="Anesthesiology">Anesthesiology</option>
                    <option value="Radiology">Intensive Care</option>
                    <option value="Pathology">Pathology</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Neurology">Neurology</option>
                    <option value="Ophthalmology">Ophthalmology</option>
                    <option value="Orthopedics">Orthopedics</option>
                    <option value="Otolaryngology (ENT)">Otolaryngology (ENT)</option>
                    <option value="Urology">Urology</option>
                    <option value="Emergency Medicine">Emergency Medicine</option>
                    <option value="Family Medicine">Family Medicine</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Oncology">Oncology</option>
                    <option value="Gastroenterology">Gastroenterology</option>
                    <option value="Nephrology">Nephrology</option>
                    <option value="Lap">Lap</option>
                </select>
            </div>

            
     <div class="form-control">
        <select name="doctor">
            <option value="Doctor" selected>Doctor</option>
            <option value="Zyad Ali">Zeyad Ali</option>
            <option value="Mazen Osama">Mazen Osama</option>
            <option value="Marian Nabeil">Marian Nabeil</option>
            <option value="Ahmed Ali">Ahmed Ali</option>
            <option value="Metwaly Hamed">Metwaly Hamed</option>
            <option value="Yasser Hasan">Yasser Hasan</option>
            <option value="Kazem Ahmed">Kazem Ahmed</option>
            <option value="Amr Abd Elbaky">Amr Abd Elbaky</option>
            <option value="Hamed Ibrahim">Hamed Ibrahim</option>
            <option value="Kerolos Yuosry">Kerolos Yuosry</option>
            <option value="mariam Hana">mariam Hana</option>
            <option value="Moheb Mokhtar">Moheb Mokhtar</option>
            <option value="Ahmed Hasan">Ahmed Hasan</option>
            <option value="Abanoub Hana">Abanoub Hana</option>
            <option value="Mohamad Ahmed">Mohamad Ahmed</option>
            <option value="Marya Kamal">Marya Kamal</option>
            <option value="Anton Nabil">Anton Nabil</option>
            <option value="Said Mostafa">Said Mostafa</option>
            <option value="Fares Ahmed">Fares Ahmed</option>
            <option value="Kamel Said">Kamel Said</option>
            <option value="Sara Ahmed">Sara Ahmed</option>
            <option value="Yousef Hasan">Yousef Hasan</option>
            <option value="Magdy Ghatas">Magdy Ghatas</option>
        </select>
        <input type="date" name="date" placeholder="Date" required>
    </div>
    <textarea name="message" cols="30" rows="10" placeholder="Write Your message Here..."></textarea>
    <button type="submit" class="btn btn-primary" name="book"> Book An Appointment </button>

        </form>
    <img src="../img/contact.jpg" alt="">
     </div>
  </div>
</section>


    <section id="data">
          <h2></h2>
          <center>
            <img src="../img/dataaaaa.jpeg" alt="" width="1200" height="500">

          </center>
    </section>
<!--footer-->
    <section id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <!--col 1-->
                <div class="col-1">
                    <h2>About Us</h2>
                    <hr>
                    <p>We at the hospital provide specialized medical services with the latest technologies and qualified medical teams, committed to providing comprehensive and effective care for patients in a safe and comfortable environment</p>
                    <div class="social">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-vimeo-v"></i></a>
                        <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
                    </div>
                </div>

                <!--col 2-->
                <div class="col-2">
                    <h2>Quick Links</h2>
                    <hr>
                    <ul>
                    <li><a href="#home"><i class="fa-solid fa-caret-right"></i>Home</a></li>
                    <li><a href="#about"><i class="fa-solid fa-caret-right"></i>About</a></li>
                    <li><a href="#services"><i class="fa-solid fa-caret-right"></i>Services</a></li>
                    <li><a href="#doctors"><i class="fa-solid fa-caret-right"></i>Doctors</a></li>
                    <li><a href="#blogs"><i class="fa-solid fa-caret-right"></i>Blogs</a></li>
                    <li><a href="#contact"><i class="fa-solid fa-caret-right"></i>Contact</a></li>
                    </ul>
                </div>
                <!--col 3-->
                <div class="col-3">
                    <h2>Open Hours</h2>
                    <hr>
                    <p>These are the hours and days available to you</p>
                    <ul>
                        <li>Monday - Thursday 8:00 - 20:00</li>
                        <li>Saturday 9:00 - 18:00</li>
                        <li>Friday  9:00 - 15:00</li>
                    </ul>
                </div>

                <!--col 4-->
                <div class="col-4">
                    <h2>Newsletter</h2>
                    <hr>
                    <p>Subscribe to the newsletter on the hospital's website to receive the latest medical and health updates and news directly to your email.</p>

                    <form action="">
                        <input type="email" name="email" placeholder="Email Address">
                        <button type="submit"><i class="fa-solid fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; All Rights Reserved 2024 | Made by <a href="The_team.html">Team 27 Daily Medical Rebort</a></p>
        <a href="#home" class="scroll"><i class="fa-solid fa-arrow-up"></i></a>
    </div>
</section>
</body> 
</html>

<?php
  if(isset($_POST['book'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $department = $_POST['department'];
    $doctors = $_POST['doctor'];
    $date = $_POST['date'];
    $message = $_POST['message'];

    $insert = "insert into book_an_appoitment(name , email , phone , department , doctor , date , message)
      values(' $name','$email','$phone','$department','$doctors','$date','$message')";

    $run = mysqli_query($con,$insert);
  }

?>