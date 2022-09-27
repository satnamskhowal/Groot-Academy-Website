<?php include 'includes/header.php'; ?>






<!--old Courses section starts-->

x`

<div class="rs-services style4 modify1 gray-color pt-40 md-pb-40 sm-pb-70">
    <div class="container">
        <div class="sec-title2 text-center mb-45">
            <span class="sub-text" style="display:none;">Our Latest courses</span>
            <h3 class="title">
                Top Populer Courses
            </h3>
        </div>
        <div class="row">
            <div class="col-lg-4 mb-20">
                <a href="course_Front_End_Development_React_JS.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/1.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">Front End Development (React JS)</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mb-20">
                <a href="course_Front_End_Development_Angular_JS.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/2.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">Front End Development (Angular JS)</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 mb-20">
                <a href="course_Full_Stack_Development.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/3.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">Full Stack Development</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="course_Back_End_Development_with_Java.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/4.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">Back End Development with Java</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="course_Back_End_Development_With_PHP.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/5.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">Back End Development With PHP </h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="course_Back_End_Development_with_Node_JS.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/6.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">Back End Development with Node JS</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="course_Advance_Java.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/6.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">Advance Java</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="course_Data_Structure_and_algorithms.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/6.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">Data Structure and algorithms</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="course_CC++.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/6.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">C/C++</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="course_Spring_Boot.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/6.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">Spring Boot</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="course_Spring_MVC.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/6.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">Spring MVC</h3>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4">
                <a href="course_Spring_Framework.php">
                    <div class="services-item">
                        <div class="services-icon">
                            <img src="assets/images/services/style5/6.png" alt="">
                        </div>
                        <div class="services-content">
                            <h3 class="title">Spring Framework</h3>
                        </div>
                    </div>
                </a>
            </div>

        </div>
    </div>
</div>
<!--old Courses section ends-->



<script>
    // var acc1 = document.getElementsByClassName("contentAcc");
    var acc = document.getElementsByTagName("h2");
    var i;
    
    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            
            var arrow = this.firstElementChild;
            console.log(panel);
            
            // console.log(arrow)
            if (panel.style.display === "block") {
                panel.style.display = "none";
                arrow.style.transform = "rotate(180deg)";
                
            } else {
                panel.style.display = "block";
                arrow.style.transform = "rotate(0deg)";
               
            }
        });
    }
</script>



<?php include 'includes/footer.php'; ?>