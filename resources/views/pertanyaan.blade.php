<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Kritik/Saran</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

        <!-- LOGO TITLE -->
        <link rel="icon" href="img/LOGO.svg" type="image/x-icon" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />

        <!-- FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;500;600;700&display=swap" rel="stylesheet" />

        <!-- CSS -->
        <link rel="stylesheet" href="style/style.css" />

        <!-- JS SWEET ALERT -->
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    </head>
    <body>
        <div class="pertanyaan-container p-5">
            <div class="row pertanyaan-kembali">
                <div class="col-6" style="color: #16fcd2; font-weight: 700">
                    <h3>Pertanyaan</h3>
                </div>
                <div class="col-6 d-flex align-items-center justify-content-end">
                    <div class="logokembali d-flex align-items-center">
                        <div class="logo flex-shrink-0">
                            <a href="index-login.html">
                                <img src="img/Back Arrow.svg" alt="logo" style="width: 28px" />
                            </a>
                        </div>
                        <div class="tulisan flex-grow-1 ms-1">
                            <a href="/event-detail">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row form-pertanyaan">
                <form action="" method="">
                    <div class="form-floating mt-4 mb-4">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" />
                        <label for="floatingInput">Nama</label>
                    </div>
                    <div class="form-floating mb-4">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 180px"></textarea>
                        <label for="floatingTextarea">Pertanyaan</label>
                    </div>
                    <div class="tombol-pertanyaan">
                        <button onclick="myAlertPertanyaan()" type="submit" class="pertanyaan" name="">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="JS/script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    </body>
</html>
