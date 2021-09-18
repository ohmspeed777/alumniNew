<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration System Login</title>

  <link rel="stylesheet" href="/css/edit_main.css">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
  <script script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.8/tailwind.min.css" ntegrity="sha512-sP93un/6HzFSfkHZ4jCTbf4XgiMldakhz+/ibX+8sk6fVvkWvoGhqfFeVlFoY6aEPakF6zI4XvVGF5+t/ahHQg==" rossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
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
      <a class="list-menu" href="/login">
        <p>ลงชื่อผู้เข้าใช้</p>
      </a>

      <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
        <li>
          <a class="dropdown-item" href="/login">My profile</a>
        </li>
        <li>
          <a class="dropdown-item" href="/login">Logout</a>
        </li>
      </ul>
    </div>
    </div>
  </nav>

  <div class="article">
    <section class="text-gray-500 body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="text-center mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">ยินดีต้องรับสู่หน้า Edit Data</h1>
          <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">ยินดีต้องรับเข้าสู่หน้า Edit Data หากต้องการแก้ไขข้อมูลสามารถแก้ไขได้โดยไปที่หน้าแก้ไข</p>
        </div>

        <div class="flex flex-wrap lg:w-1/2 md:w-2/3 mx-auto">
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="firstName">ชื่อ :&nbsp;</p>
              <p class="title-font font-medium" id="firstName" firstName="firstName"><?= $firstName ? $firstName : ''; ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="lastName">นามสกุล :&nbsp;</p>
              <p id="lastName" name="lastName" class="title-font font-medium"><?= $lastName ? $lastName : ''; ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="gender">เพศ :&nbsp;</p>
              <p id="gender" name="gender" class="title-font font-medium"><?= $gender == 1 ? 'ชาย' : 'หญิง'  ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="stu_id">รหัสนักศึกษา :&nbsp;</p>
              <p id="stu_id" name="stu_id" class="title-font font-medium"><?= $stu_id ? $stu_id : ''; ?></p>
            </div>
          </div>

          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="class">ชั้น :&nbsp;</p>
              <p id="class" name="class" class="title-font font-medium"><?= $class ? $class : ''; ?></p>
            </div>
          </div>

          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="avgGrade">เกรดเฉลี่ย :&nbsp;</p>
              <p id="avgGrade" name="avgGrade" class="title-font font-medium"><?= $avgGrade ? $avgGrade : ''; ?></p>
            </div>
          </div>

          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="major">สาขาวิชา :&nbsp;</p>
              <p id="major" name="major" class="title-font font-medium"><?= $major ? $major : ''; ?></p>
            </div>
          </div>

          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="faculty">คณะ :&nbsp;</p>
              <p id="faculty" name="faculty" class="title-font font-medium"><?= $faculty ? $faculty : ''; ?></p>
            </div>
          </div>

          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="inYear">ปีการศึกษาแรกเข้า :&nbsp;</p>
              <p id="inYear" name="inYear" class="title-font font-medium"><?= $inYear ? $inYear : ''; ?></p>
            </div>
          </div>

          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="outYear">ปีการศึกษาที่จบ :&nbsp;</p>
              <p id="outYear" name="outYear" class="title-font font-medium"><?= $outYear ? $outYear : ''; ?></p>
            </div>
          </div>

          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="province">จังหวัด :&nbsp;</p>
              <p id="province" name="province" class="title-font font-medium"><?= $province ? $province : ''; ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="email">Email :&nbsp;</p>
              <p id="email" name="email" class="title-font font-medium"><?= $email ? $email : ''; ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="facebook">Facebook :&nbsp;</p>
              <p id="facebook" name="facebook" class="title-font font-medium"><?= $facebook ? $facebook : ''; ?></p>
            </div>
          </div>
          <div class="p-2 sm:w-1/2 w-full">
            <div class="rounded flex h-full items-center">
              <p for="idLine">ID Line :&nbsp;</p>
              <p id="idLine" name="idLine" class="title-font font-medium"><?= $line ? $line : ''; ?></p>
            </div>
          </div>

          <a href="/editProfile"><button class="flex mx-auto mt-16 text-white bg-pink-500 border-0 py-2 px-28 focus:outline-none hover:bg-pink-600 rounded text-lg">แก้ไข</button></a>
        </div>
    </section>

  </div>
  <footer>
    <img src="/image/footer.png" class="d-block w-100" alt="footer.png">
  </footer>
</body>

</html>