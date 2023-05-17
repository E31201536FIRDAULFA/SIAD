function saveGaji() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const nsurat = $("#nsurat").val();
    const nama = $("#nama").val();
    const nik = $("#nik").val();
    const ttl = $("#ttl").val();
    const pekerjaan = $("#pekerjaan").val();
    const no_kip = $("#no_kip").val();
    const no_kis = $("#no_kis").val();
    const ket = $("#ket").val();
    const status = $("#status").val();
    const Surat = $("#Surat").val();

    if (id) {
        url = base_url + 'dashboard/gaji/update/' + id;
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'tgl harus diisi!'
            });
        } else if (nsurat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nsurat harus diisi!'
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
        } else if (pekerjaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'pekerjaan harus diisi!'
            });
        } else if (no_kip.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'No kip harus diisi!'
            });
        } else if (no_kis.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'No kis harus diisi!'
            });
        } else if (ket.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (status.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (Surat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else {
            $.ajax({ //tembak data ke db
                url: url,
                type: 'POST',
                data: $('#form').serialize(),
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
    } else {
        url = base_url + 'dashboard/gaji';
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'tgl harus diisi!'
            });
        } else if (nsurat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nsurat harus diisi!'
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
        } else if (pekerjaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'pekerjaan harus diisi!'
            });
        } else if (no_kip.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'No kip harus diisi!'
            });
        } else if (no_kis.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'No kis harus diisi!'
            });
        } else if (ket.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (status.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (Surat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else {
            $.ajax({
                url: url,
                type: 'POST',
                data: $('#form').serialize(),
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
}