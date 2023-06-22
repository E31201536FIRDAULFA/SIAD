function saveSpu() {
    const tgl = $("#tglspu").val();
    const nama_usaha = $("#nama_usahaspu").val();
    const jenis_usaha = $("#jenis_usahaspu").val();
    const alamat_usaha = $("#alamat_usahaspu").val();

    url = base_url + 'dashboard/SPU/';
    if (tgl.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'tgl harus diisi!'
        });
    } else if (nama_usaha.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama Usaha harus diisi!'
        });
    } else if (jenis_usaha.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'jenis usaha harus diisi!'
        });
    } else if (alamat_usaha.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'alamat usaha harus diisi!'
        });


    } else {
        $.ajax({ //tembak data ke db
            url: url,
            type: 'POST',
            data: {
                "tgl": tgl,
                "nama_usaha": nama_usaha,
                "jenis_usaha": jenis_usaha,
                "alamat_usaha": alamat_usaha,


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