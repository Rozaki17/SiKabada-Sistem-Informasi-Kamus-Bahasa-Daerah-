// NAVBAR

const navbar = document.getElementsByTagName("nav")[0];
window.addEventListener("scroll", function () {
    console.log(this.window.scrollY);
    if (window.scrollY > 1) {
        navbar.classList.replace("bg-transparent", "nav-color");
    } else if (window.scrollY <= 0) {
        navbar.classList.replace("nav-color", "bg-transparent");
    }
});

// END NAVBAR

// JQUERY LOADMORE

$(document).ready(function () {
    $(".artikel-card").slice(0, 6).show();
    $("#nocontent").hide();
    $("#sembunyikan").hide();

    $("#loadmore").on("click", function (e) {
        e.preventDefault();
        $(".artikel-card:hidden").slice(0, 3).slideDown();
        if ($(".artikel-card:hidden").length == 0) {
            $("#loadmore").hide();
            $("#nocontent").show();
            $("#sembunyikan").show();
        }
    });

    $("#sembunyikan").click(function () {
        $("#sembunyikan").hide();
        $("#loadmore").show();
        $("#nocontent").hide();
        $(".artikel-card").slice(0, 6).hide();
    });
});

// END JQUERY LOADMORE

// ALERT

// ALERT WARNING

function myAlertWarning() {
    swal("Mohon Maaf", "Anda Harus Daftar/Masuk Terlebih Dahulu", "warning");
}

// ALERT MASUK

function myAlertMasuk() {
    swal("Berhasil Masuk", "Selamat Datang Kembali di Sikabada.", "success");
}

// ALERT DAFTAR

function myAlertDaftar() {
    swal("Berhasil Daftar", "Selamat Datang di Sikabada.", "success");
}

// ALERT PERTANYAAN

function myAlertPertanyaan() {
    swal("Berhasil", "Pertanyaan Berhasil Terkirim", "success");
}
// ALERT Kritik/Saran

function myAlertKritikSaran() {
    swal("Berhasil", "Kritik/Saran Berhasil Terkirim", "success");
}

// ALERT Kontak Pesan

function myAlertPesan() {
    swal("Berhasil", "Pesan Berhasil Terkirim", "success");
}

// ALERT Kosa Kata

function myAlertKosakata() {
    swal("Berhasil", "Kosakata Berhasil Ditambahkan", "success");
}

// ALERT Artikel

function myAlertArtikel() {
    swal("Berhasil", "Tulisan Artikel Anda Berhasil Terkirim", "success");
}

// ALERT Event

function myAlertEvent() {
    swal("Berhasil", "Tulisan Event Anda Berhasil Terkirim", "success");
}

// END ALERT
