function saveSktm() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const nik = $("#nik").val();
    const no_kk = $("#no_kk").val();
    const nama = $("#nama").val();
    const jk = $("#jk").val();
    const ttl = $("#ttl").val();
    const stswarga = $("#stswarga").val();
    const nama_ayah = $("#nama_ayah").val();
    const ttlayah = $("#ttlayah").val();
    const agama = $("#agama").val();
    const pekerjaan = $("#pekerjaan").val();
    const alamatayah = $("#alamatayah").val();
    const gaji = $("#gaji").val();
    const keperluan = $("#keperluan").val();
    const status = $("#status").val();

    if (id) {
        url = base_url + 'dashboard/SKTM/update/' + id;
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (nik.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (no_kk.length == "") {
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
        } else if (ttl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'ttl harus diisi!'
            });
        } else if (stswarga.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'ttl harus diisi!'
            });
        } else if (ttlayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'ttlayah harus diisi!'
            });
        } else if (nama_ayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'nama_ayah harus diisi!'
            });
        } else if (agama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'agama harus diisi!'
            });
        } else if (pekerjaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'pekerjaan harus diisi!'
            });
        } else if (alamatayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamatayah harus diisi!'
            });
        } else if (gaji.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (keperluan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat harus diisi!'
            });
        } else if (status.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'status harus diisi!'
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
        url = base_url + 'dashboard/SKTM/addstatic/';
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (nik.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (no_kk.length == "") {
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
        } else if (ttl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'ttl harus diisi!'
            });
        } else if (stswarga.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'ttl harus diisi!'
            });
        } else if (ttlayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'ttlayah harus diisi!'
            });
        } else if (nama_ayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'nama_ayah harus diisi!'
            });
        } else if (agama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'agama harus diisi!'
            });
        } else if (pekerjaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'pekerjaan harus diisi!'
            });
        } else if (alamatayah.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamatayah harus diisi!'
            });
        } else if (gaji.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (keperluan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat harus diisi!'
            });
        } else if (status.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'status harus diisi!'
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

function addadm() {
    const id = $("#idsktm").val();
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
    const status = $("#statussktm").val();

    url = base_url + 'dashboard/SKTM/addadm';
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
            "status": status,
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

function upload() {
    const id = $("#id").val();
    $.ajax({
        url: base_url + 'dashboard/SKTM/upload/' + id,
        type: 'POST',
        data: new FormData($('#formupload')[0]), // Use FormData to include file
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
