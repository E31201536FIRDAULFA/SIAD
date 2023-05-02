function Ktpsubmit() {
    const id = $("#id").val();
    const tgl = $("#tglktp").val();
    const nama = $("#namaktp").val();
    const nik = $("#nikktp").val();
    const scankk = $("#scankk").val();
    const status = $("#statusktp").val();
    const keterangan = $("#keteranganktp").val();


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
    } else if (scankk.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'scankk harus diisi!'
        });
    } else if (status.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });
    } else if (keterangan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'surat harus diupload!'
        });
    } else {
        $.ajax({ //tembak data ke db
            url: url,
            type: 'POST',
            data: {
                "tgl": tgl,
                "nama": nama,
                "nik": nik,
                "scankk": scankk,
                "status": status,
                "keterangan": keterangan,
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