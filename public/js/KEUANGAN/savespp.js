function savespp() {
    const id = $("#id").val();
    const tgl = $("#tgl").val();
    const uraian = $("#uraian").val();
    const anggaran = $("#anggaran").val();
    const pencairan = $("#pencairan").val();
    const permintaan = $("#permintaan").val();
    const jml = $("#jml").val();
    const sisa = $("#sisa").val();



    if (id) {
        url = base_url + 'dashboard/spp/update/' + id;
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (uraian.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'uraian harus diisi!'
            });
        } else if (anggaran.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'anggaran harus diisi!'
            });
        } else if (pencairan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'pencairan harus diisi!'
            });
        } else if (permintaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'permintaan harus diisi!'
            });
        } else if (jml.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'jml harus diisi!'
            });
        } else if (sisa.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'sisa harus diisi!'
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
        url = base_url + 'dashboard/spp';
        if (tgl.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'Nama harus diisi!'
            });
        } else if (uraian.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'uraian harus diisi!'
            });
        } else if (anggaran.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'anggaran harus diisi!'
            });
        } else if (pencairan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'pencairan harus diisi!'
            });
        } else if (permintaan.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'permintaan harus diisi!'
            });
        } else if (jml.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'jml harus diisi!'
            });
        } else if (sisa.length == "") {
            Swal.fire({
                title: 'Oops...',
                text: 'sisa harus diisi!'
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