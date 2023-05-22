function Ktpsubmit() {
    const id = $("#id").val();
    const tgl = $("#tglktp").val();
    const nama = $("#namaktp").val();
    const nik = $("#nikktp").val();
    const keperluan = $("#keperluan").val();




    url = base_url + 'dashboard/KTP/';
    if (tgl.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'tgl harus diisi!'
        });
    } else if (nama.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });
    } else if (nik.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nik harus diisi!'
        });
    } else if (keperluan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'keperluan harus diisi!'
        });


    } else {
        $.ajax({ //tembak data ke db
            url: url,
            type: 'POST',
            data: {
                "tgl": tgl,
                "nama": nama,
                "nik": nik,
                "keperluan": keperluan,


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

