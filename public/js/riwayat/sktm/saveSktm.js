function saveSktm() {
    const id = $("#id").val();
    const tgl = $("#tglsktm").val();
    const nsurat = $("#nsuratsktm").val();
    const nik = $("#niksktm").val();
    const nama = $("#namasktm").val();
    const jk = $("#jksktm").val();
    const ttl = $("#ttlsktm").val();
    const stswarga = $("#stswargasktm").val();
    const nama_ayah = $("#nama_ayahsktm").val();
    const ttlayah = $("#ttlayahsktm").val();
    const agama = $("#agamasktm").val();
    const pekerjaan = $("#pekerjaansktm").val();
    const alamatayah = $("#alamatayahsktm").val();
    const gaji = $("#gajisktm").val();
    const keperluan = $("#keperluansktm").val();
    const status = $("#statussktm").val();
    const suratsktm = $("#suratsktm").val();


    url = base_url + 'dashboard/SKTM/';
    if (tgl.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'tgl harus diisi!'
        });
    } else if (nsurat.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nomor harus diisi!'
        });
    } else if (nik.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nik harus diisi!'
        });
    } else if (nama.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });
    } else if (jk.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'jk harus diisi!'
        });

    } else if (ttl.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Ttl harus diisi!'
        });
    } else if (stswarga.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'status warga harus diisi!'
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
    } else if (agama.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'agama harus diisi!'
        });
    } else if (pekerjaan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
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
    } else if (status.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });
    } else if (suratsktm.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'surat harus diupload!'
        });
    } else {
        $.ajax({
            url: url,
            type: 'POST',
            data: {
                "tgl": tgl,
                "nsurat": nsurat,
                "nik": nik,
                "nama": nama,
                "jk": jk,
                "ttl": ttl,
                "stswarga": stswarga,
                "nama_ayah": nama_ayah,
                "ttlayah": ttlayah,
                "agama": agama,
                "pekerjaan": pekerjaan,
                "alamatayah": alamatayah,
                "gaji": gaji,
                "keperluan": keperluan,
                "status": status,
                "suratsktm": suratsktm,
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