function saveKehilangan() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const nik = $("#nik").val();
    const no_kk = $("#no_kk").val();
    const nama = $("#nama").val();
    const jk = $("#jk").val();
    const pekerjaan = $("#pekerjaan").val();
    const alamat = $("#alamat").val();
    const keperluan = $("#keperluan").val();
    const ket = $("#ket").val();


    url = base_url + 'dashboard/kehilangan/';
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
            "pekerjaan": pekerjaan,
            "alamat": alamat,
            "keperluan": keperluan,
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