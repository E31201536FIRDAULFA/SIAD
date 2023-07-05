function saverab() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const bidang = $("#bidang").val();
    const pelaksana = $("#pelaksana").val();
    const anggaran = $("#anggaran").val();


    if (id) {
        url = base_url + 'dashboard/rab/update/' + id;
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (bidang.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'bidang harus diisi!'
            });
        } else if (pelaksana.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'pelaksana harus diisi!'
            });
        } else if (anggaran.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Anggaran harus diisi!'
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
        url = base_url + 'dashboard/rab';
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (bidang.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'bidang harus diisi!'
            });
        } else if (pelaksana.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'pelaksana harus diisi!'
            });
        } else if (anggaran.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Anggaran harus diisi!'
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