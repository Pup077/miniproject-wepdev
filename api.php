<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>วัคซีน COVID-19</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/custom4.css">

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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">เกี่ยวกับ</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="/miniprojack/from1.html">ข้อมูลวัคซีน</a></li>
                            <li><a class="dropdown-item" href="/miniprojack/from2.html">COVID-19</a></li>
                            <li><a class="dropdown-item" href="/miniprojack/from3.html">ผลข้างเคียงวัคซีน</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">บริการ</a>
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
                        <a href="/miniprojack/login-admin/login.php"
                            class="btn btn-outline-success">เข้าสู่ระบบแอดมิน</a></p>
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
                    <h3 style="font-size:550%; color:#ffd901f8;">รายงาน COVID-19 รายวัน</h3>
                </div>
            </div>
            </form>
        </div>
        </div>
        </div>
    </header>
    <br>

    <!--api-->
    <div class="container">

        <div class="row justify-content-start">
            <div class="col-4">
                <h5 id="goe"></h5>
                <p>ข้อมูลจาก : กรมควบคุมโลก กระทรวงสาธารณสุข</p><span >   </span>
            </div>
        </div><br>

        <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <h3><span> ผู้ติดเชื้อรายใหม่</span></h3>
            </div><span >   </span>
            <div class="card-body">
                <h5 id="myList" class="card-title"></h5>
                <p class="card-text"></p> 
            </div>
        </div>

        <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <h3>ผู้เสียชีวิตรายใหม่</h3>
            </div>
            <div class="card-body">
                <h5 id="goout" class="card-title"></h5>
                <p class="card-text"></p>
            </div>
        </div>

        <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <div class="card-header">
                <h3>รักษาหาย</h3>
            </div>
            <div class="card-body">
                <h5 id="goin" class="card-title"></h5>
                <p class="card-text"></p>
            </div>
        </div>


        <script>

            function showData(data) {
                let myList = document.querySelector('#myList');
                data.forEach(val => {
                    let myEl = document.createElement('li1');
                    myEl.innerText = `จำนวน: ${val.new_case} สะสม : ${val.total_case}`;
                    myList.appendChild(myEl);
                })
            }

            fetch('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all')
                .then(response => response.json())
                .then(data => showData(data));

            function showData1(data) {
                let goout = document.querySelector('#goout');
                data.forEach(val => {
                    let myEl = document.createElement('li1');
                    myEl.innerText = `จำนวน : ${val.new_death} สะสม : ${val.total_death}`;
                    goout.appendChild(myEl);
                })
            }

            fetch('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all')
                .then(response => response.json())
                .then(data => showData1(data));

            function showData2(data) {
                let goin = document.querySelector('#goin');
                data.forEach(val => {
                    let myEl = document.createElement('li1');
                    myEl.innerText = `หาย : ${val.new_recovered} สะสม : ${val.total_recovered}`;
                    goin.appendChild(myEl);
                })
            }

            fetch('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all')
                .then(response => response.json())
                .then(data => showData2(data));

            function showData3(data) {
                let goe = document.querySelector('#goe');
                data.forEach(val => {
                    let myEl = document.createElement('li1');
                    myEl.innerText = `อัพเดทวันที่ : ${val.update_date}`;
                    goe.appendChild(myEl);
                })
            }

            fetch('https://covid19.ddc.moph.go.th/api/Cases/today-cases-all')
                .then(response => response.json())
                .then(data => showData3(data));

        </script>


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