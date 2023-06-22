function saveGaji() {
    const tgl = $("#tglgaji").val();
    const no_kip = $("#no_kipgaji").val();
    const no_kis = $("#no_kisgaji").val();
    const ket = $("#ketgaji").val();

    url = base_url + 'dashboard/gaji/';
    if (tgl.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'tgl harus diisi!'
        });
    } else if (no_kip.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'No KIP harus diisi!'
        });
    } else if (no_kis.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'No KIS harus diisi!'
        });
    } else if (ket.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Keterangan usaha harus diisi!'
        });

    } else {
        $.ajax({ //tembak data ke db
            url: url,
            type: 'POST',
            data: {
                "tgl": tgl,
                "no_kip": no_kip,
                "no_kis": no_kis,
                "ket": ket,

            },
            dataType: "JSON",
            success: function (respond) {
                if (respond.status == true) {
                    Swal.fire({
                        icon: respond.icon,
                        title: respond.title,
                        text: respond.text,
                        timer: 3000,
                        showCancelButton: false,
                        showConfirmButton: false
                    }).then(function () {
                        location.reload();
                    });
                } else if (respond.status == false) {
                    Swal.fire({
                        icon: respond.icon,
                        title: respond.title,
                        text: respond.text,
                    });
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                swal.fire({
                    icon: 'error',
                    title: 'Terjadi error!',
                    text: 'Silahkan coba lagi.'
                })
            }
        });
    }
}