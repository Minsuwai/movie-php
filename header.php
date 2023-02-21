<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <!-- css -->
  <link rel="stylesheet" href="css/style.css" />

  <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">


</head>

<body>

  <header>
    <div class="logo">
      <a href="#">Local <span>Theatre</span></a>
      <!-- <a href="" class="header_logo">Project</a> -->
    </div>
    <nav class="nav" id="nav_menu">
      <i class="fa-solid fa-xmark" id="header_close"></i>

      <ul class="nav_list">
        <li class="nav_item"><a href="index.php" class="nav_link">Home</a></li>
        <li class="nav_item"><a href="scene.php" class="nav_link">Scene</a></li>
        <li class="nav_item"><a href="" class="nav_link">Contact</a></li>
        <li class="nav_item"><a href="" class="nav_link">Signin <i class="fa-solid fa-right-to-bracket"></i></a></li>
        <!-- <li class="nav_item"><input type="text" name="search" id="" placeholder="Finding..." class="navbar_form_search"> -->
        
        </li>
      </ul>
    </nav>
    <i class="fa-solid fa-bars" id="header_toggle"></i>
  </header>

  <script>
    const navMenu = document.getElementById('nav_menu'), toggleMenu = document.getElementById('header_toggle'),
      closeMenu = document.getElementById('header_close')

    toggleMenu.addEventListener('click', () => {
      navMenu.classList.toggle('show')
    })

    closeMenu.addEventListener('click', () => {
      navMenu.classList.remove('show')
    })
  </script>
</body>

</html>