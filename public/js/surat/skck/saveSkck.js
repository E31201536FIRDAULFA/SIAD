function saveSkck() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const nsurat = $("#nsurat").val();
    const nama = $("#nama").val();
    const nik = $("#nik").val();
    const ttl = $("#ttl").val();
    const jk = $("#jk").val();
    const agama = $("#agama").val();
    const kewarganegaraan = $("#kewarganegaraan").val();
    const perkawinan = $("#perkawinan").val();
    const pekerjaan = $("#pekerjaan").val();
    const alamat = $("#alamat").val();
    const status = $("#status").val();
    const surat = $("#surat").val();

    if (id) {
        url = base_url + 'dashboard/skck/update/' + id;
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'tgl harus diisi!'
            });
        } else if (nsurat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'No Surat harus diisi!'
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
        } else if (jk.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'jk harus diisi!'
            });
        } else if (agama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'agama harus diisi!'
            });
        } else if (kewarganegaraan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'kewarganegaraan harus diisi!'
            });
        } else if (perkawinan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'perkawinan harus diisi!'
            });
        } else if (pekerjaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'pekerjaan harus diisi!'
            });
        } else if (alamat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat harus diisi!'
            });
        } else if (status.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (surat.length == "") {
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
        url = base_url + 'dashboard/skck';
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'tgl harus diisi!'
            });
        } else if (nsurat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'No Surat harus diisi!'
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
        } else if (jk.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'jk harus diisi!'
            });
        } else if (agama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'agama harus diisi!'
            });
        } else if (kewarganegaraan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'kewarganegaraan harus diisi!'
            });
        } else if (perkawinan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'perkawinan harus diisi!'
            });
        } else if (pekerjaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'pekerjaan harus diisi!'
            });
        } else if (alamat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat harus diisi!'
            });
        } else if (status.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (surat.length == "") {
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