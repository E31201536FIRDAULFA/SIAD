function saveSktm() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const nsurat = $("#nsurat").val();
    const nik = $("#nik").val();
    const nama = $("#nama").val();
    const jk = $("#jk").val();
    const ttl = $("#ttl").val();
    const stswarga = $("#stswarga").val();
    const nama_ayah = $("#nama_ayah").val();
    const ttlayah = $("#ttlayah").val();
    const agama = $("#agama").val();
    const pekerjaan = $("#pekerjaan").val();
    const alamat_ayah = $("#alamat_ayah").val();
    const gaji = $("#gaji").val();
    const keperluan = $("#keperluan").val();
    const status = $("#status").val();
    const suratsktm = $("#suratsktm").val();

    if (id) {
        url = base_url + 'dashboard/SKTM/update/' + id;
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'tgl harus diisi!'
            });
        } else if (nik.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nik harus diisi!'
            });
        } else if (nama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
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
        } else if (stswarga.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'status warga harus diisi!'
            });
        } else if (nama_ayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama ayah harus diisi!'
            });
        } else if (ttlayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'ttl ayah harus diisi!'
            });
        } else if (agama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'agama harus diisi!'
            });
        } else if (pekerjaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (alamatayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat ayah harus diisi!'
            });
        } else if (gaji.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'gaji harus diisi!'
            });
        } else if (keperluan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'keperluan harus diisi!'
            });
        } else if (status.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (suratsktm.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'surat harus diupload!'
            });
        } else {
            $.ajax({
                url: url,
                type: 'POST',
                data: new FormData($('#form')[0]), // Use FormData to include file
                processData: false, // Prevent jQuery from automatically processing the data
                contentType: false, // Prevent jQuery from automatically setting the content type
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
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi error!',
                        text: 'Silahkan coba lagi.'
                    });
                }
            });
        }
    } else {
        url = base_url + 'dashboard/SKTM';
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'tgl harus diisi!'
            });
        } else if (nik.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nik harus diisi!'
            });
        } else if (nama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
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
        } else if (stswarga.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'status warga harus diisi!'
            });
        } else if (nama_ayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama ayah harus diisi!'
            });
        } else if (ttlayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'ttl ayah harus diisi!'
            });
        } else if (agama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'agama harus diisi!'
            });
        } else if (pekerjaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (alamatayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat ayah harus diisi!'
            });
        } else if (gaji.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'gaji harus diisi!'
            });
        } else if (keperluan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'keperluan harus diisi!'
            });
        } else if (status.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });

        } else {
            $.ajax({
                url: url,
                type: 'POST',
                data: new FormData($('#form')[0]), // Use FormData to include file
                processData: false, // Prevent jQuery from automatically processing the data
                contentType: false, // Prevent jQuery from automatically setting the content type
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
                    Swal.fire({
                        icon: 'error',
                        title: 'Terjadi error!',
                        text: 'Silahkan coba lagi.'
                    });
                }
            });
        }
    }
}