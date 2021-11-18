<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วัคซีน COVID-19</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom.css">

<body>

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a href="/miniprojack/index.php" class="navbar-brand">วัคซีน COVID-19</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarToggler">
                <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="/miniprojack/index.php" class="nav-link active" aria-current="page">หน้าแรก</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">เกี่ยวกับ</a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <li><a class="dropdown-item" href="/miniprojack/from1.html">ข้อมูลวัคซีน</a></li>
                         <li><a class="dropdown-item" href="/miniprojack/from2.html">COVID-19</a></li>
                         <li><a class="dropdown-item" href="/miniprojack/from3.html">ผลข้างเคียงวัคซีน</a></li>
                         </ul>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">บริการ</a>
                         <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                         <li><a class="dropdown-item" href="./api.php">รายงาน COVID-19 รายวัน</a></li>
                         <li><a class="dropdown-item" href="./PHP_Searching-master">ค้าหาสถานที่ฉีดวัคซีน</a></li>
                         <li><a class="dropdown-item" href="./map.html">แผนที่แหล่งฉีดวัคซีน</a></li>
                         </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/miniprojack/from4.html" class="nav-link">ติดต่อ</a>
                    </li>
                    <li class="nav-item">
                        <a href="/miniprojack/login-admin/login.php" class="btn btn-outline-success">เข้าสู่ระบบแอดมิน</a></p>
                    </li>   
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header-->
    <header class="text-white text-center">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5">หาสถาที่จองวัคซีน</h1>
                </div>

                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <div class="text-center mx-auto">
                        <a href="../miniprojack/PHP_Searching-master/" class="btn btn-primary">ค้นหา</a></p>
                    </div>
                </div>
                </form>
            </div>
        </div>
        </div>
    </header>

    <!-- Features icons -->
    <section class="features-icons bg-light text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-3">

                        <div class="features-icons-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-eyedropper" viewBox="0 0 16 16">
                        <path d="M13.354.646a1.207 1.207 0 0 0-1.708 0L8.5 3.793l-.646-.647a.5.5 0 1 0-.708.708L8.293 5l-7.147 7.146A.5.5 0 0 0 1 12.5v1.793l-.854.853a.5.5 0 1 0 .708.707L1.707 15H3.5a.5.5 0 0 0 .354-.146L11 7.707l1.146 1.147a.5.5 0 0 0 .708-.708l-.647-.646 3.147-3.146a1.207 1.207 0 0 0 0-1.708l-2-2zM2 12.707l7-7L10.293 7l-7 7H2v-1.293z"/>
                        </svg>
                        </div>

                        <h3>ฉีดวัคซีน รู้เท่าทัน</h3>

                        <p class="lead mb-0">รู้ภัยจากไวรัส ฉีดครบโด้สเพึ่มโอกาศรอด</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-3">

                        <div class="features-icons-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                        <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                        <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                        </svg>
                        </div>

                        <h3>ตรวจเช็ตสุขภาพ อยู่เสมอ</h3>

                        <p class="lead mb-0">เพื่อป้องกัน ช่วยลดโอกาสติดเชื้อไวรัส</p>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-3">

                        <div class="features-icons-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                        <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                        <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
                        </svg>
                        </div>

                        <h3>ปรึกษาแพทย์ ตลอด 24 ชั่วโมง</h3>

                        <p class="lead mb-0">เพื่อความสบายใจ แกประชาชนเพื่อสอบภาม</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- image Showcase -->
    <section class="showcase">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/02.jpg')">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>วัคซีนมีกี่ชนิด</h2>
                    <p class="lead mb-0">วัคซีนป้องกันไวรัส COVID-19 นั้นมีมากมายหลายตัวแต่เราไม่สามารถรู้เลยว่าแต่ละตัวนั้น
                        เป็นยังไง ผลิตมายังไง หรือมีผลอะไรกับตัวเราบ้างดังนั้น บทความนี้จะมาสรุปชนิดของวัคซีนชนิดต่างๆ
                        -><a href= "/miniprojack/from1.html">อ่านต่อ..</a> 
                    </p>
                </div>
            </div>

            <div class="row g-0">
                <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/03.jpg')"></div>
                <div class="col-lg-6 my-auto showcase-text">
                    <h2>เรื่องเกี่ยวกับไวรัส</h2>
                    <p class="lead mb-0">ไวรัส COVID-19 นั้นนับจากที่กำเนินขึ้นมาก็ทำให้ทั้งบ้างเมือง เศรษฐกิจ สังคม
                        ต้องหยุดไป ดังนั้นบทความนี้จะบอกถึงรายละเอียดของไวรัส COVID-19 ทั้งจุดกำเนิน การแพร่ระบาดและ
                        อาการของโรค -><a href= "/miniprojack/from2.html">อ่านต่อ..</a> 
                    </p>
                </div>
            </div>

            <div class="row g-0">
                <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/04.jpg')">
                </div>
                <div class="col-lg-6 order-lg-1 my-auto showcase-text">
                    <h2>ผลที่ตามมาหลังฉีด</h2>
                    <p class="lead mb-0">หลังจากฉีดวัคซีนนั้น ก็จะมีผลกระทบต่างๆ ตามมาซึ่งแบ่งแยกไปตามอายุ ตัววัคซีน และสถาพร่างกาย
                        ของบุคลนั้นๆ ที่ฉีดเข้าไป บทความนี้จึงจะบอกถึงรายระเอียดถึงผลกระทบของการฉีดวัคซีนต่างๆ -><a href= "/miniprojack/from3.html">อ่านต่อ..</a> 
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
        <div class="container">
            <h2 class="mb-5">คำแนะนำโดยหมอชำนานการ</h2>

            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonials-item mx-auto mb-5 mb-lg-0">
                        <img src="img/05.jpg" class="img-fluid rounded-circle mb-3" alt="">
                        <h5>หมอแบล็กแจ็ก</h5>
                        <p class="font-weight-light mb-0">"ไม่ว่าจะเจอโรคอะไร ผมก็จะรักษาหายแต่ต้องแลกอย่างเท่าเทียม"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonials-item mx-auto mb-5 mb-lg-0">
                        <img src="img/06.jpg" class="img-fluid rounded-circle mb-3" alt="">
                        <h5>หมอปลา</h5>
                        <p class="font-weight-light mb-0">"ผมไม่เคยกลัวอะไร เพราะผลไม่เชื่อพวกอิฐปูนทำลายทึ้งหมด"</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonials-item mx-auto mb-5 mb-lg-0">
                        <img src="img/10.jpg" class="img-fluid rounded-circle mb-3" alt="">
                        <h5>หมอแพนด้า</h5>
                        <p class="font-weight-light mb-0">"นอนน้อยเพราะ คอยบ่นเตือนคนไข้ "</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="call-to-action text-white text-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">อย่าที่จะกลัว เพื่อตัวคุณเอง</h2>
          </div>

          <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
            <form action="">
              <div class="row">
              <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <div class="text-center mx-auto">
                        <a href="../miniprojack/PHP_Searching-master/" class="btn btn-primary">จองเลย</a></p>
                    </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>  

    <!-- Footer -->
    <footer class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-muted">&copy; MilerDev 2020. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/bootstrap.min.js"></script>
</body>
</html>


 