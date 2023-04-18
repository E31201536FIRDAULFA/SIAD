function saveKK() {
    const id = $("#id").val();
    const tgl = $("#tgl1").val();
    const nama = $("#nama").val();
    const nik = $("#nik").val();
    const scankk = $("#scankk").val();
    const status = $("#status").val();
    const keterangan = $("#keterangan").val();
    console.log(tgl)

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

    } else if (nik.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nik harus diisi!'

        });
    } else if (scanktp.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Scan KK harus diisi!'
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
            data: $('#form1').serialize(),
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

