<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />

  <link rel="stylesheet" href="/css/edit_main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

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
            <a class="dropdown-item" href="/login">My profile</a>
          </li>
          <li>
            <a class="dropdown-item" href="/login">Logout</a>
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
    <section class="text-gray-500 body-font">
      <div class="container px-5 py-10 mx-auto">
        <div class="text-center mb-20">
          <h1 class="sm:text-3xl text-2xl font-medium text-center title-font text-gray-900 mb-4">ยินดีต้องรับสู่หน้า Edit Prifile</h1>
          <p class="text-base leading-relaxed xl:w-2/4 lg:w-3/4 mx-auto">ยินดีต้องรับเข้าสู่หน้า Edit Profile หากต้องการแก้ไขข้อมูลสามารถแก้ไขได้โดยไปที่หน้าแก้ไข</p>
        </div>

        <div>
          <section class="text-gray-600 body-font">
            <div class="container mx-auto flex px-5 py-4 items-center justify-center flex-col img">
              <img id="preview" class="img-thumbnail img" class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="<?php echo '/image/users/' . $img ?>">
            </div>
          </section>
          <div class=" mt-3">
            <div id="msg"></div>
            <form method="post" id="image-form" action="/uploadImg" enctype="multipart/form-data">
              <input type="file" name="img" accept="image/*">
              <div class="input-group my-4 loadimg">
                <div class="input-group-append">
                  <button type="submit" class="browse bg-pink-500 text-white border-0 px-8 focus:outline-none hover:bg-pink-600 rounded text-lg">Upload...</button>
                </div>
              </div>
            </form>
          </div>
        </div>

        <section class="text-gray-600 body-font">
          <div class="container px-5 py-4 mx-auto">
            <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4 md:space-y-0 space-y-6">
              <div class="p-4 md:w-1/3 flex">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-4 flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <path d="M20 21v-2a4 4 0 00-4-4H8a4 4 0 00-4 4v2"></path>
                    <circle cx="12" cy="7" r="4"></circle>
                  </svg>
                </div>
                <div class="flex-grow pl-6">
                  <h2 class="text-gray-900 text-lg title-font font-medium mb-3"><u>ข้อมูลการศึกษา</u></h2>
                  <div class="flex">
                    <p class="flex">รหัสนักศึกษา :&nbsp;</p>
                    <input readonly type="text" name="studentID" value="<?= $aln_id ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">ชื่อ-นามสกุล :&nbsp;</p>
                    <input readonly type="text" name="name" value="<?= $firstName . ' ' . $lastName ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">ระดับการศึกษา :&nbsp;</p>
                    <input readonly type="text" name="educationLevel" value="<?= $education[$qualification - 1]['quali_name'] ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">ปีการศึกษาที่เข้า :&nbsp;</p>
                    <input readonly type="text" name="startStudying" value="<?= $inYear ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">ปีการศึกษาที่จบ :&nbsp;</p>
                    <input readonly type="text" name="endStudying" value="<?= $outYear ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">สาขาวิชา :&nbsp;</p>
                    <input readonly type="text" name="major" value="<?= $maj[$major - 1]['major_name'] ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">คณะ :&nbsp;</p>
                    <input readonly type="text" name="faculty" value="<?= $fac[$faculty - 1]['fac_name'] ?>">
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/3 flex">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-4 flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <path d="M22 12h-4l-3 9L9 3l-3 9H2"></path>
                  </svg>
                </div>
                <div class="flex-grow pl-6">
                  <h2 class="text-gray-900 text-lg title-font font-medium mb-3"><u>ข้อมูลการทำงาน</u></h2>
                  <div class="flex">
                    <p class="flex">สถานที่ทำงาน :&nbsp;</p>
                    <input readonly type="text" name="workplace" value="<?= $working['place'] ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">อาชีพ :&nbsp;</p>
                    <input readonly type="text" name="occupation" value="<?= $working['job'] ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">ตำแหน่ง :&nbsp;</p>
                    <input readonly type="text" name="position" value="<?= $working['position'] ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">ที่อยู่ :&nbsp;</p>
                    <input readonly type="text" name="address" value="<?= $working['address'] ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">อำเภอ :&nbsp;</p>
                    <input readonly type="text" name="district" value="<?= $working['district'] ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">จังหวัด :&nbsp;</p>
                    <input readonly type="text" name="province" value="<?= $working['province'] ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">รหัสไปรษณีย์ :&nbsp;</p>
                    <input readonly type="text" name="postcode" value="<?= $working['zipcode'] ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">เบอร์โทร :&nbsp;</p>
                    <input readonly type="text" name="telephone" value="<?= $working['tel'] ?>">
                  </div>
                </div>
              </div>
              <div class="p-4 md:w-1/3 flex">
                <div class="w-12 h-12 inline-flex items-center justify-center rounded-full bg-pink-100 text-pink-500 mb-4 flex-shrink-0">
                  <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-6 h-6" viewBox="0 0 24 24">
                    <circle cx="6" cy="6" r="3"></circle>
                    <circle cx="6" cy="18" r="3"></circle>
                    <path d="M20 4L8.12 15.88M14.47 14.48L20 20M8.12 8.12L12 12"></path>
                  </svg>
                </div>
                <div class="flex-grow pl-6">
                  <h2 class="text-gray-900 text-lg title-font font-medium mb-3"><u>ช่องทางการติดต่อ</u></h2>
                  <div class="flex">
                    <p class="flex">Facebook :&nbsp;</p>
                    <input readonly type="text" name="facebook" value="<?= $facebook ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">ID Line :&nbsp;</p>
                    <input readonly type="text" name="idLine" value="<?= $line ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">Twitter :&nbsp;</p>
                    <input readonly type="text" name="twitter" value="<?= $twitter ?>">
                  </div>
                  <div class="flex mt-2">
                    <p class="flex">Email :&nbsp;</p>
                    <input readonly type="text" name="email" value="<?= $email ?>">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <div class="flex justify-center button">
          <a href="/editProfile"><button class="inline-flex text-white bg-pink-500 border-0 py-2 px-28 focus:outline-none hover:bg-pink-600 rounded text-lg">แก้ไขข้อมูล</button></a>
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

  <script>
    $(document).on("click", ".browse", function() {
      var file = $(this).parents().find(".file");
      file.trigger("click");
    });
    $('input[type="file"]').change(function(e) {
      var fileName = e.target.files[0].name;
      $("#file").val(fileName);

      var reader = new FileReader();
      reader.onload = function(e) {
        // get loaded data and render thumbnail.
        document.getElementById("preview").src = e.target.result;
      };
      // read the image file as a data URL.
      reader.readAsDataURL(this.files[0]);
    });
  </script>
</body>

</html>