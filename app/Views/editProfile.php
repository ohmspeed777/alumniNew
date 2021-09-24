<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="/css/register.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.8/tailwind.min.css" ntegrity="sha512-sP93un/6HzFSfkHZ4jCTbf4XgiMldakhz+/ibX+8sk6fVvkWvoGhqfFeVlFoY6aEPakF6zI4XvVGF5+t/ahHQg==" rossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <!-- Navbar -->
  <?php if (session()->get('isLogin')) { ?>
    <nav class="header navbar navbar-expand-lg bg-pink-500">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img class="logo" src="/image/logo.png" height="15" alt="" loading="lazy" />
          </a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="list-menu" href="/index">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="list-menu" href="/search" style="margin-left: 2rem;">ค้นหาข้อมูลศิษย์เก่า</a>
            </li>
          </ul>
        </div>
        <!-- Avatar -->
        <a class="fas nav-link" href="#" id="navbarDropdown" role="button" data-mdb-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-user"></i>
        </a>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="/profile">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  <?php } else { ?>
    <nav class="header navbar navbar-expand-lg">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-brand mt-2 mt-lg-0" href="#">
            <img class="logo" src="/image/logo.png" height="15" alt="" loading="lazy" />
          </a>
          <!-- Left links -->
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="list-menu" href="/index">หน้าแรก</a>
            </li>
            <li class="nav-item">
              <a class="list-menu" href="/login" style="margin-left: 2rem;">ค้นหาข้อมูลศิษย์เก่า</a>
            </li>
          </ul>
        </div>
        <a class="list-menu" href="/login">
          <p>ลงชื่อผู้เข้าใช้</p>
        </a>

        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
          <li>
            <a class="dropdown-item" href="/profile">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="/logout">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  <?php } ?>

  <div class="article">
    <section class="text-gray-500 body-font relative">
      <div class="container px-5 py-10 mx-auto">
        <div class="flex flex-col text-center w-full mb-12">
          <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">แก้ไขข้อมูล</h1>

        </div>
        <div class="lg:w-1/2 md:w-2/3 mx-auto">

          <?php
          if (isset($validation)) {
          ?>
            <div class="alert flex flex-row items-center bg-red-200 p-3 rounded border-b-2 border-red-300">
              <div class="alert-icon flex items-center bg-red-100 border-2 border-red-500 justify-center h-10 w-10 flex-shrink-0 rounded-full">
                <span class="text-red-500">
                  <svg fill="currentColor" viewBox="0 0 20 20" class="h-6 w-6">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                  </svg>
                </span>
              </div>
              <div class="alert-content ml-4">
                <div class="alert-title font-semibold text-lg text-red-800">
                  Invalid input
                </div>
                <div class="alert-description text-sm text-red-600">
                  <?= $validation->listErrors(); ?>
                </div>
              </div>
            </div>
          <?php
          }
          ?>

          <form action="/editProfile" method="POST">
            <div class="flex flex-wrap -m-20">
              <div class="p-2 w-1/2">
                <div class="relative">
                  <p><strong><u>ข้อมูลการศึกษา</u></strong></p>
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="firstName" class="leading-7 text-sm text-gray-600">ชื่อ</label>
                  <input required value="<?= $firstName ?>" type="text" id="firstName" name="firstName" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">

                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="lastName" class="leading-7 text-sm text-gray-600">นามสกุล</label>

                  <input required type="text" value="<?= $lastName ?>" id="lastName" name="lastName" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>

              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="aln_id" class="leading-7 text-sm text-gray-600">รหัสนักศึกษา</label>
                  <input required type="text" value="<?= $aln_id ?>" id="aln_id" name="aln_id" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="qualification" class="leading-7 text-sm text-gray-600">ระดับการศึกษา</label> <br>
                  <select name="qualification" class="form-select leading-7 text-sm text-gray-600" aria-label="Default select example">
                    <option value="1" selected>ปริญญาตรี</option>
                    <option value="2">ปริญญาโท</option>
                    <option value="3">ปริญญาเอก</option>
                  </select>
                </div>
              </div>


              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="inYear" class="leading-7 text-sm text-gray-600">ปีการศึกษาที่เข้า</label>
                  <input required type="text" value="<?= $inYear ?>" id="inYear" name="inYear" maxlength="9" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>

              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="outYear" class="leading-7 text-sm text-gray-600">ปีการศึกษาที่จบ</label>
                  <input required type="text" id="outYear" value="<?= $outYear ?>" name="outYear" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>

              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="major" class="leading-7 text-sm text-gray-600">สาขาวิชา</label> <br>
                  <select name="major" id="major" class="form-select leading-7 text-sm text-gray-600" aria-label="Default select example">
                    <option selected value="1">วิศวกรรมซอฟต์แวร์</option>
                    <option value="2">วิทยาการคอมพิวเตอร์</option>
                    <option value="3">สารธารณสุขศาสตร์</option>
                  </select>
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="faculty" class="leading-7 text-sm text-gray-600">คณะ</label> <br>
                  <select id="faculty" name="faculty" class="form-select leading-7 text-sm text-gray-600" aria-label="Default select example">
                    <option selected value="1">คณะวิทยาศาสตร์และเทคโนโลยีสารสนเทศ</option>
                    <option value="2">คณะครุศาสตร์</option>
                    <option value="3">คณะมนุษย์ศาสตร์และสังคมศาสตร์</option>
                    <option value="4">คณะวิทยาาการจัดการ</option>
                    <option value="5">คณะพยาบาลศาสตร์</option>
                  </select>
                </div>
              </div>

              <div class="p-2 w-1/2" style="margin-top: 3rem;">
                <div class="relative">
                  <p><strong><u>ข้อมูลการทำงาน</u></strong></p>
                </div>
              </div>
              <div class="p-2 w-1/2" style="margin-top: 3rem;">
                <div class="relative">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="place" class="leading-7 text-sm text-gray-600">สถานที่ทำงาน</label>
                  <input required type="text" value="<?= $working['place'] ?>" id="place" name="place" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="position" class="leading-7 text-sm text-gray-600">ตำแหน่ง</label>
                  <input required type="text" value="<?= $working['position'] ?>" id="position" name="position" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="job" class="leading-7 text-sm text-gray-600">อาชีพ</label>
                  <input required type="text" id="job" value="<?= $working['job'] ?>" name="job" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>

              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="address" class="leading-7 text-sm text-gray-600">ที่อยู่</label>
                  <input required type="text" id="address" value="<?= $working['address'] ?>" name="address" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="district" class="leading-7 text-sm text-gray-600">อำเภอ</label>
                  <input required type="text" id="district" name="district" value="<?= $working['district'] ?>" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="province" class="leading-7 text-sm text-gray-600">จังหวัด</label>
                  <input required type="text" id="province" name="province" value="<?= $working['province'] ?>" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="zipcode" class="leading-7 text-sm text-gray-600">รหัสไปรษณีย์</label>
                  <input required type="text" id="zipcode" value="<?= $working['zipcode'] ?>" name="zipcode" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="tel" class="leading-7 text-sm text-gray-600">เบอร์โทร</label>
                  <input required type="text" id="tel" name="tel" value="<?= $working['tel'] ?>" maxlength="10" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>

              <div class="p-2 w-1/2" style="margin-top: 3rem;">
                <div class="relative">
                  <p><strong><u>ข้อมูลช่องทางติดต่อ</u></strong></p>
                </div>
              </div>
              <div class="p-2 w-1/2" style="margin-top: 3rem;">
                <div class="relative">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="facebook" class="leading-7 text-sm text-gray-600">Facebook</label>
                  <input required type="text" id="facebook" value="<?= $facebook ?>" name="facebook" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="line" class="leading-7 text-sm text-gray-600">ID Line</label>
                  <input type="text" id="line" name="line" value="<?= $line ?>" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>

              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="twitter" class="leading-7 text-sm text-gray-600">Twitter</label>
                  <input type="text" id="twitter" name="twitter" value="<?= $twitter ?>" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>
              <div class="p-2 w-1/2">
                <div class="relative">
                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                  <input type="text" id="email" name="email" value="<?= $email ?>" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
              </div>


              <div class="p-2 w-full m-5">
                <button class="flex mx-auto text-white bg-pink-500 border-0 py-2 px-28 focus:outline-none hover:bg-pink-600 rounded text-lg" onclick=successAlert()>Edit Profile</button>
              </div>
          </form>
        </div>
      </div>
  </div>
  </section>

  </div>
  <footer class="page-footer font-small">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> Registration System</a>
    </div>
  </footer>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
</body>

</html>