function saveGaji() {
    const id = $("#idgaji").val();
    const tgl = $("#tglgaji").val();
    const nama = $("#namagaji").val();
    const nik = $("#nikgaji").val();
    const no_kk = $("#no_kkgaji").val();
    const ttl = $("#ttlgaji").val();
    const pekerjaan = $("#pekerjaangaji").val();
    const no_kip = $("#no_kipgaji").val();
    const no_kis = $("#no_kisgaji").val();
    const ket = $("#ketgaji").val();


    url = base_url + 'dashboard/gaji/';
    $.ajax({ //tembak data ke db
        url: url,
        type: 'POST',
        data: {
            "id": id,
            "tgl": tgl,
            "nik": nik,
            "no_kk": no_kk,
            "nama": nama,
            "ttl": ttl,
            "pekerjaan": pekerjaan,
            "no_kip": no_kip,
            "no_kis": no_kis,
            "ket": ket,
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