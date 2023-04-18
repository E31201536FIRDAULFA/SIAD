function saveSpu() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const nsurat = $("#nsurat").val();
    const nama = $("#nama").val();
    const nik = $("#nik").val();
    const jk = $("#jk").val();
    const ttl = $("#ttl").val();
    const alamat = $("#alamat").val();
    const nama_usaha = $("#nama_usaha").val();
    const jenis_usaha = $("#jenis_usaha").val();
    const alamat_usaha = $("#alamat_usaha").val();
    const status = $("#status").val();
    const suratspu = $("#suratspu").val();

    if (id) {
        url = base_url + 'dashboard/SPU/update/' + id;
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
        } else if (alamat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat harus diisi!'
            });
        } else if (nama_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama Usaha harus diisi!'
            });
        } else if (jenis_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'jenis usaha harus diisi!'
            });
        } else if (alamat_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat usaha harus diisi!'
            });
        } else if (status.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (suratspu.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'surat harus diupload!'
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
        url = base_url + 'dashboard/SPU';
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
        } else if (alamat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat harus diisi!'
            });
        } else if (nama_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama Usaha harus diisi!'
            });
        } else if (jenis_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'jenis usaha harus diisi!'
            });
        } else if (alamat_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat usaha harus diisi!'
            });
        } else if (status.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (suratspu.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'surat harus diupload!'
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