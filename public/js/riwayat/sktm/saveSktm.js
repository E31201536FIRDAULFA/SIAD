function saveSktm() {
    const id = $("#id").val();
    const tgl = $("#tglsktm").val();
    const nik = $("#niksktm").val();
    const no_kk = $("#no_kksktm").val();
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

    url = base_url + 'dashboard/SKTM/';
    $.ajax({ //tembak data ke db
        url: url,
        type: 'POST',
        data: {
            "id": id,
            "tgl": tgl,
            "nik": nik,
            "no_kk": no_kk,
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