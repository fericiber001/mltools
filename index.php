<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Moonton Rebind Tools</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css
" rel="stylesheet">
    <link rel="stylesheet" href="https://file.gifan.id/fonts/gFont.css
">
    <link rel="icon" href="https://play-lh.googleusercontent.com/jWN9pjF7atbqHYXAAfwvIjtzpGwTIVwX9etT0-9HiWjRjE1hInoEgJiWjwsiemu2rEb8
">
    <meta name="description" content="Manage your Mobile Legends account settings and preferences with ease. Send verification codes and confirm email changes directly through our user-friendly interface.">
    <meta name="author" content="G-Code | www.g-code.co.id">
    <style>
        body {
            font-family: 'Pacifico', cursive;
            font-family: 'Signika Negative', sans-serif;
        }
        
        .adminDash {
            color: black;
            font-weight: bold;
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css
">
</head>

<body class="">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="./">CloudServer</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Feature
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./">Rebind Tools</a></li>
            <li><a class="dropdown-item" href="checkAccInfo">Check Account Info</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="rules" style="color: red;">Rules</a>
        </li>
      </ul>
    </div>
  </div>
</nav>    <div class="container mt-5">
        <center>
            <img style="margin-top: -3rem" src="https://api.gifan.id/files/image-removebg-preview.png
" width="250px;">
            <p style="margin-top: -1rem;">[ ACCOUNT REBIND TOOLS ]<br/>
                Logged as: del981 | 114.124.247.71<br/>
                <a style="text-decoration: none;" href="https://t.me/+ccb0-h7qYNVlZTVl
"><i class="fa-brands fa-telegram"></i> Join Telegram Group</a>
                <br/>Expired: <span style='color: red;'>11-07-2024 10:09:09</span>                <br/>
                            </p>
        </center>
                
    <div class="card">
      <div class="card-header text-center bg-secondary" style="color: white;">
        [ STEP 1: Send Code by Email ]
      </div>
      <div class="card-body">
        <form action="" method="post" class="mt-1">
            <label for="lang" class="form-label">Pilih bahasa email</label>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="fa-solid fa-globe fa-fade"></i>
                    </span>
                <select name="lang" id="lang" class="form-select" required>
                    <option selected disabled>Pilih terlebih dahulu</option>
                    <option value="ar">Arab</option>
                    <option value="cn">China</option>
                    <option value="id">Indonesia</option>
                    <option value="ja">Jepang</option>
                    <option value="ru">Rusia</option>
                    <option value="tw">Taiwan</option>
                    <option value="vi">Vietnam</option>
                </select>
            </div>
            <label class="form-label">Masukkan email Moonton</label>
            <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa-solid fa-envelope fa-fade"></i>
                </span>
                <input type="email" id="email" name="email" class="form-control" placeholder="email@gmail.com" required>
            </div>
            
            <div class="mb-3 text-center">
                <div class="d-grid gap-2">
                    <button type="submit" name="action" value="sendCode" class="btn btn-primary">Kirim Kode</button>
                </div>
            </div>
        </form>
      </div>
    </div>


        
        <br/>
        <br/>
        
        <div class="card">
          <div class="text-center card-header bg-secondary" style="color: white;">
            [ STEP 2: Verify & Change Email ]
          </div>
          <div class="card-body">
        <form action="" method="post" class="mt-1">
            <label class="form-label">Masukkan email Moonton saat ini</label>
            <div class="input-group mb-3">
                <span class="input-group-text">
                    <i class="fa-solid fa-envelope fa-fade"></i>
                </span>
                <input type="email" id="email" name="email" class="form-control" placeholder="email@gmail.com" required>
            </div>
            <div class="mb-3">
                <label for="kode" class="form-label">Masukkan kode verifikasi</label>
                <input type="text" id="kode" name="kode" class="form-control" placeholder="XXXXXX" required>
            </div>
            <div class="mb-3 text-center">
                <div class="d-grid gap-2">
                    <button type="submit" name="action" value="confirmCode" class="btn btn-outline-primary">Lanjut</button>
                </div>
            </div>
        </form>
      </div>
</div>

        
        
        <div class="text-center mt-5 mb-1">
            Copyright © 2024. Made with <svg viewBox="0 0 1792 1792" preserveAspectRatio="xMidYMid meet" xmlns="http://www.w3.org/2000/svg
" style="height: 0.8rem;"><path d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26T145 952.5 77 855 23.5 734 0 596q0-220 127-344t351-124q62 0 126.5 21.5t120 58T820 276t76 68q36-36 76-68t95.5-68.5 120-58T1314 128q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z" fill="#e25555"></path></svg> by <a style="text-decoration: none; font-weight: bold;" href="https://www.g-code.co.id/
">G-Code</a>
        </div>
        
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js
"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js
"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js
" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js
" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="//file.gifan.id/fontawesome.js"></script>
</body>

</html>
