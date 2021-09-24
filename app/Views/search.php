<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="/css/search.css">
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
            <a class="dropdown-item" href="/login">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="/login">Logout</a>
          </li>
        </ul>
      </div>
      </div>
    </nav>
  <?php } ?>


  <section class="article text-gray-600 body-font">
    <div class="text-center mt-5">
      <section class="text-gray-600 body-font">
        <div class="container mx-auto flex flex-col px-5 py-2 justify-center items-center">
          <div class="w-full md:w-2/3 flex flex-col mb-16 items-center text-center">
            <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">ค้นหาข้อมูลศิษย์เก่า</h1>
            <!-- <form action="/search" method="POST">
              <p class="mb-8 leading-relaxed">ยินดีต้องรับเข้าสู่หน้าค้าหาข้อมูลศิษย์เก่า หาต้องการค้นหาข้อมูลศิษย์เก่าคนใด สามารถกรอกแบบฟอร์มจากนั้นค้นหาได้เลย จากหน้านี้</p>
              <div class="flex w-full justify-center items-end">
                <div class="relative ">
                  <select class="form-select leading-7 text-sm text-gray-600" aria-label="Default select example" id="searchTopic" name="searchTopic">
                    <option selected>รหัสนักศึกษา</option>
                    <option value="0">คณะ</option>
                    <option value="1">สาขา</option>
                    <option value="2">ปีการศึกษา</option>
                    <option value="3">จังหวัด</option>
                  </select>
                </div>
                <div class="relative mr-4 lg:w-full xl:w-1/2 w-2/4 md:w-full text-left ml-4">
                  <input placeholder="กรอกข้อมูลตามหัวข้อที่เลือก" type="text" id="inputData" name="inputData" class="w-full bg-gray-100 bg-opacity-50 rounded focus:ring-2 focus:ring-indigo-200 focus:bg-transparent border border-gray-300 focus:border-indigo-500 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <button class="inline-flex text-white bg-pink-500 border-0 py-2 px-6 focus:outline-none hover:bg-pink-600 rounded text-lg">ค้นหา</button>
              </div>
            </form> -->
          </div>
        </div>
      </section>
    </div>

    <section class="text-gray-600 body-font">
      <div class="container px-5 py-2 mx-auto">
        <div class="lg:w-2/3 w-full mx-auto overflow-auto">
          <table class="table-auto w-full text-left whitespace-no-wrap" id="student-list">
            <thead>
              <tr>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-pink-500">รหัสนักศึกษา</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-pink-500">ชื่อ-นามสกุล</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-pink-500">สาขาวิชา</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-pink-500">ปีการศึกษา</th>
                <th class="px-4 py-3 title-font tracking-wider font-medium text-white text-sm bg-pink-500">จังหวัด</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user) : ?>
                <tr>
                  <td class="px-4 py-3"><a href="/viewProfile/<?php echo $user['aln_id']; ?>" class="seData"><?= $user['aln_id'] ?></a></td>
                  <td class="px-4 py-3"><a href="/viewProfile/<?php echo $user['aln_id']; ?>" class="seData"><?php echo $user['firstName'] . " " . $user['lastName'] ?></a></td>
                  <td class="px-4 py-3"><a href="/viewProfile/<?php echo $user['aln_id']; ?>" class="seData"><?php echo $major[$user['major'] - 1]['major_name']; ?></a></td>
                  <td class="px-4 py-3"><a href="/viewProfile/<?php echo $user['aln_id']; ?>" class="seData"><?= $user['inYear'] ?></a></td>
                  <td class="px-4 py-3"><a href="/viewProfile/<?php echo $user['aln_id']; ?>" class="seData"><?= $user['province'] ?></a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </section>


  <footer class="page-footer font-small bg-pink-500">
    <div class="footer-copyright text-center py-3">© 2020 Copyright:
      <a href="https://mdbootstrap.com/"> Registration System</a>
    </div>
  </footer>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#student-list').DataTable();
    });
  </script>
</body>

</html>