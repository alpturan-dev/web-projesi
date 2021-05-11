<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <script src="js.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@100&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6992eaecbf.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: 'Roboto Mono', monospace;
        }

        .btn {
            padding: 8px 20px;
            border-radius: 0;
            overflow: hidden;
        }

        label {
            font-size: 1.1rem;
        }

        .btn:hover {
            background: transparent;
            box-shadow: 0 0 20px 10px rgba(51, 152, 219, 0.5);
            color: white;
        }


        .form-input-material {
            --input-default-border-color: white;
            --input-border-bottom-color: white;
        }


        .form-input-material input {
            color: black;
            font-weight: bolder;
        }

        .login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 5rem 4rem;
            background: rgba(0, 0, 0, 0.8);
            border-radius: 10px;
        }

        .login-form:hover {
            box-shadow: 0 0 30px 10px rgba(51, 152, 219, 0.5);
        }

        .login-form h1 {
            margin: 0 0 2.4rem 0;
        }

        .login-form .form-input-material {
            margin: 1.2rem 0;
        }

        .login-form .btn {
            width: 100%;
            margin: 1.8rem 0 0.9rem 0;
        }
    </style>
</head>

<body>
    <nav class="navbar bg-dark navbar-dark navbar-expand-md fixed-top mx-auto" style="opacity: 0.95"  onload="return giris()">
        <div class="container">
            <a href="index.html" class="navbar-brand mx-4"><i class="icon fab fa-blogger"></i></a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">

                <ul class="navbar-nav">
                    <li class="nav-item mx-auto my-auto">
                        <a href="index.html" class="a"><span class="span" title="Hakkında">&nbsp;Hakkında</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="ozgecmis.html" class="a"><i class="i fas fa-address-book"></i><span
                                class="span">&nbsp;Özgeçmiş</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="sehrim.html" class="a"><i class="i fas fa-city"></i><span
                                class="span">&nbsp;Şehrim</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="mirasimiz.html" class="a"><i class="i fas fa-heart"></i><span
                                class="span">&nbsp;Mirasımız</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="ilgialanlarim.html" class="a"><i class="i fas fa-thumbs-up"></i><span
                                class="span">&nbsp;İlgi
                                Alanlarım</span></a>
                    </li>
                    <li class="nav-item">
                        <a href="iletisim.html" class="a"><i class="i fas fa-paper-plane"></i><span
                                class="span">&nbsp;İletişim</span></a>
                    </li>
                    <li class="nav-item" style="border:0">
                        <a href="giris.html" class="a" style="font-weight: bolder;"><i
                                class="fas fa-sign-in-alt "></i><span class="span">&nbsp;Giriş</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <form class="login-form text-light bg-dark">
    <?php 
    if($_POST["email"]=="g201210003@sakarya.edu.tr" && $_POST["password"]=="g201210003"){
        echo "<span style='font-size:20px'>GİRİŞ BAŞARILI!</span>";
        echo "<br><p> <button class='btn btn-ghost bg-success fw-bold'> <a class='a' href='index.html'>Ana Sayfaya Dön!</a> </button></p> ";
    }else{
        echo "<span style='font-size:20px'>GİRİŞ BAŞARISIZ!</span>";
        echo "<br><p><button class='btn btn-ghost bg-danger fw-bold'> <a class='a' href='giris.html'>Giriş Sayfasına Dön!</a> </button></p> ";
    }
    ?>
    </form>
    
    <script src=" https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous">
        </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>
</body>

</html>