function saveSpu() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const nama = $("#nama").val();
    const nik = $("#nik").val();
    const no_kk = $("#no_kk").val();
    const jk = $("#jk").val();
    const ttl = $("#ttl").val();
    const alamat = $("#alamat").val();
    const nama_usaha = $("#nama_usaha").val();
    const jenis_usaha = $("#jenis_usaha").val();
    const alamat_usaha = $("#alamat_usaha").val();
    const status = $("#status").val();

    if (id) {
        url = base_url + 'dashboard/SPU/update/' + id;
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
        } else if (alamat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat harus diisi!'
            });
        } else if (nama_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'nama_usaha harus diisi!'
            });
        } else if (jenis_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'jenis_usaha harus diisi!'
            });
        } else if (alamat_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat_usaha harus diisi!'
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
        url = base_url + 'dashboard/SPU/addstatic/';
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
        } else if (alamat.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat harus diisi!'
            });
        } else if (nama_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'nama_usaha harus diisi!'
            });
        } else if (jenis_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'jenis_usaha harus diisi!'
            });
        } else if (alamat_usaha.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'alamat_usaha harus diisi!'
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
    const status = $("#statusspu").val();

    url = base_url + 'dashboard/SPU/addadm';
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
        url: base_url + 'dashboard/SPU/upload/' + id,
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
