function saveApbd() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const penyelenggara = $("#penyelenggara").val();
    const jenis = $("#jenis").val();
    const anggaran = $("#anggaran").val();
    const sumberdana = $("#sumberdana").val();
    const tgl_pembahasan = $("#tgl_pembahasan").val();

    if (id) {
        url = base_url + 'dashboard/apbd/update/' + id;
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (penyelenggara.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Penyelenggara harus diisi!'
            });
        } else if (jenis.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Jenis harus diisi!'
            });
        } else if (anggaran.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Anggaran harus diisi!'
            });
        } else if (sumberdana.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Sumber Dana harus diisi!'
            });
        } else if (tgl_pembahasan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Tanggal Pembahasan harus diisi!'
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
        url = base_url + 'dashboard/apbd';
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'tgl harus diisi!'
            });
        } else if (penyelenggara.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'penyelenggara harus diisi!'
            });
        } else if (jenis.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'jenis harus diisi!'
            });
        } else if (anggaran.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'anggaran harus diisi!'
            });
        } else if (sumberdana.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'sumberdana harus diisi!'
            });
        } else if (tgl_pembahasan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'tgl_pembahasan.harus diisi!'
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