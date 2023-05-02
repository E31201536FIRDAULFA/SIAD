function saveGaji() {
    const id = $("#id").val();
    const tgl = $("#tglgaji").val();
    const nsurat = $("#nsuratgaji").val();
    const nama = $("#namagaji").val();
    const nik = $("#nikgaji").val();
    const ttl = $("#ttlgaji").val();
    const pekerjaan = $("#pekerjaangaji").val();
    const no_kip = $("#no_kipgaji").val();
    const no_kis = $("#no_kisgaji").val();
    const ket = $("#ketgaji").val();
    const status = $("#statusgaji").val();
    const Surat = $("#Suratgaji").val();

    url = base_url + 'dashboard/gaji/';
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
            text: 'Ttl harus diisi!'
        });
    } else if (pekerjaan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'pekerjaan harus diisi!'
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
    } else if (status.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });
    } else if (Surat.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Surat harus diupload!'
        });
    } else {
        $.ajax({ //tembak data ke db
            url: url,
            type: 'POST',
            data: {
                "tgl": tgl,
                "nsurat": nsurat,
                "nama": nama,
                "nik": nik,
                "ttl": ttl,
                "pekerjaan": pekerjaan,
                "no_kip": no_kip,
                "no_kis": no_kis,
                "ket": ket,
                "status": status,
                "Surat": Surat,
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