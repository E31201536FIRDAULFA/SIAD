function saveKTP() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const nik = $("#nik").val();
    const no_kk = $("#no_kk").val();
    const nama = $("#nama").val();
    const keperluan = $("#keperluan").val();
    const keterangan = $("#keterangan").val();



    if (id) {
        url = base_url + 'dashboard/KTP/update/' + id;
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
        } else if (keperluan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'keperluan harus diisi!'
            });
        } else if (keterangan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'keterangan harus diisi!'
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
        url = base_url + 'dashboard/KTP/addstatic/';
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
        } else if (keperluan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'keperluan harus diisi!'
            });
        } else if (keterangan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'keterangan harus diisi!'
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
    const id = $("#idktp").val();
    const tgl = $("#tglktp").val();
    const nik = $("#nikktp").val();
    const no_kk = $("#no_kkktp").val();
    const nama = $("#namaktp").val();
    const keperluan = $("#keperluanktp").val();
    const keterangan = $("#keteranganktp").val();

    url = base_url + 'dashboard/KTP/addadm/';
    $.ajax({ //tembak data ke db
        url: url,
        type: 'POST',
        data: {
            "id": id,
            "tgl": tgl,
            "nik": nik,
            "no_kk": no_kk,
            "nama": nama,
            "keperluan": keperluan,
            "keterangan": keterangan,
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
        url: base_url + 'dashboard/KTP/upload/' + id,
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
