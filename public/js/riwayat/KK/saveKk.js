function saveKk() {
    const tgl = $("#tglKK").val();
    const nama = $("#namaKK").val();
    const nik = $("#nikKK").val();
    const scanktp = $("#scanktpKK").val();
    const status = $("#statusKK").val();
    const keterangan = $("#keteranganKK").val();

    url = base_url + 'dashboard/KK';
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
    } else if (scanktp.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Scan KK harus diisi!'
        });
    } else if (nik.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nik harus diisi!'

        });
    } else if (status.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Status Surat harus diisi!'
        });
    } else if (keterangan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Keterangan harus diisi!'
        });
    } else {
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                "tgl": tgl,
                "nama": nama,
                "nik": nik,
                "scanktp": scanktp,
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

