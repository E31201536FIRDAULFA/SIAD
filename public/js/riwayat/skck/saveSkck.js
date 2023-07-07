function saveSkck() {
    const id = $("#idskck").val();
    const tgl = $("#tglskck").val();
    const nik = $("#nikskck").val();
    const no_kk = $("#no_kkskck").val();
    const nama = $("#namaskck").val();
    const ttl = $("#ttlskck").val();
    const jk = $("#jk_skck").val();
    const agama = $("#agamaskck").val();
    const kewarganegaraan = $("#kewarganegaraanskck").val();
    const kawin = $("#kawinskck").val();
    const pekerjaan = $("#pekerjaanskck").val();
    const alamat = $("#alamatskck").val();



    url = base_url + 'dashboard/skck/';
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
            "jk": jk,
            "agama": agama,
            "kewarganegaraan": kewarganegaraan,
            "kawin": kawin,
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