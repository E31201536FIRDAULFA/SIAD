function saveSpu() {
    const id = $("#idspu").val();
    const tgl = $("#tglspu").val();
    const nama = $("#namaspu").val();
    const nik = $("#nikspu").val();
    const no_kk = $("#no_kkspu").val();
    const jk = $("#jkspu").val();
    const ttl = $("#ttlspu").val();
    const alamat = $("#alamatspu").val();
    const nama_usaha = $("#nama_usahaspu").val();
    const jenis_usaha = $("#jenis_usahaspu").val();
    const alamat_usaha = $("#alamat_usahaspu").val();

    url = base_url + 'dashboard/SPU/';
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
            "alamat": alamat,
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