function saveSkck() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const nik = $("#nik").val();
    const no_kk = $("#no_kk").val();
    const nama = $("#nama").val();
    const jk = $("#jk").val();
    const ttl = $("#ttl").val();
    const agama = $("#agama").val();
    const kewarganegaraan = $("#kewarganegaraan").val();
    const kawin = $("#kawin").val();
    const pekerjaan = $("#pekerjaan").val();
    const alamat = $("#alamat").val();
    const status = $("#status").val();

    if (id) {
        url = base_url + 'dashboard/skck/update/' + id;
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
        } else if (agama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'agama harus diisi!'
            });
        } else if (kewarganegaraan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Kewarganegaraan harus diisi!'
            });
        } else if (kawin.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'kawin harus diisi!'
            });
        } else if (pekerjaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (alamat.length == "") {
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
        url = base_url + 'dashboard/skck/addstatic/';
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Tanggal harus diisi!'
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
        } else if (agama.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'agama harus diisi!'
            });
        } else if (kewarganegaraan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Kewarganegaraan harus diisi!'
            });
        } else if (kawin.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'kawin harus diisi!'
            });
        } else if (pekerjaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (alamat.length == "") {
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
    const status = $("#statusskck").val();


    url = base_url + 'dashboard/skck/addadm';
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
        url: base_url + 'dashboard/skck/upload/' + id,
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
