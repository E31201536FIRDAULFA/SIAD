function saveSktm() {
    const tgl = $("#tglsktm").val();
    const nama_ayah = $("#nama_ayahsktm").val();
    const ttlayah = $("#ttlayahsktm").val();
    const alamatayah = $("#alamatayahsktm").val();
    const gaji = $("#gajisktm").val();
    const keperluan = $("#keperluansktm").val();

    url = base_url + 'dashboard/SKTM/';
    if (tgl.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'tgl harus diisi!'
        });
    } else if (nama_ayah.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama ayah harus diisi!'
        });
    } else if (ttlayah.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'ttl ayah harus diisi!'
        });
    } else if (alamatayah.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'alamat ayah harus diisi!'
        });
    } else if (gaji.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'gaji harus diisi!'
        });
    } else if (keperluan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'keperluan harus diisi!'
        });

    } else {
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                "tgl": tgl,
                "nama_ayah": nama_ayah,
                "ttlayah": ttlayah,
                "alamatayah": alamatayah,
                "gaji": gaji,
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