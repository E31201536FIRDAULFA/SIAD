function saveSkck() {
    const id = $("#id").val();
    const tgl = $("#tglskck").val();
    const nama = $("#namaskck").val();
    const nik = $("#nikskck").val();
    const ttl = $("#ttlskck").val();
    const jk = $("#jkskck").val();
    const agama = $("#agamaskck").val();
    const kewarganegaraan = $("#kewarganegaraanskck").val();
    const perkawinan = $("#perkawinanskck").val();
    const pekerjaan = $("#pekerjaanskck").val();
    const alamat = $("#alamatskck").val();



    url = base_url + 'dashboard/skck/';
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
    } else if (ttl.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'ttl harus diisi!'
        });
    } else if (jk.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'jk harus diisi!'
        });
    } else if (agama.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'agama harus diisi!'
        });
    } else if (kewarganegaraan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'kewarganegaraan harus diisi!'
        });
    } else if (perkawinan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'perkawinan harus diisi!'
        });
    } else if (pekerjaan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'pekerjaan harus diisi!'
        });
    } else if (alamat.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'alamat harus diisi!'
        });
    } else {
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                "tgl": tgl,
                "nama": nama,
                "nik": nik,
                "ttl": ttl,
                "jk": jk,
                "agama": agama,
                "kewarganegaraan": kewarganegaraan,
                "perkawinan": perkawinan,
                "pekerjaan": pekerjaan,
                "alamat": alamat,

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
