function saveKehilangan() {
    const id = $("#id").val();
    const tgl = $("#tglkehilangan").val();
    const nama = $("#namakehilangan").val();
    const jk = $("#jkkehilangan").val();
    const nik = $("#nikkehilangan").val();
    const pekerjaan = $("#pekerjaankehilangan").val();
    const alamat = $("#alamatkehilangan").val();
    const keperluan = $("#keperluankehilangan").val();
    const ket = $("#ketkehilangan").val();
    const status = $("#statuskehilangan").val();
    const suratkehilangan = $("#suratkehilangan").val();


    url = base_url + 'dashboard/kehilangan/';
    if (tgl.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });


    } else if (nama.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });
    } else if (jk.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });
    } else if (nik.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });
    } else if (pekerjaan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });
    } else if (alamat.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });
    } else if (keperluan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });
    } else if (ket.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'Nama harus diisi!'
        });

    } else {
        $.ajax({ //tembak data ke db
            url: url,
            type: 'POST',
            data: {
                "tgl": tgl,
                "nama": nama,
                "nik": nik,
                "jk": jk,
                "pekerjaan": pekerjaan,
                "alamat": alamat,
                "keperluan": keperluan,
                "ket": ket,
                "status": status,
                "suratkehilangan": suratkehilangan,
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