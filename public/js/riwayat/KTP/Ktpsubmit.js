function Ktpsubmit() {
    const tgl = $("#tgl").val();
    const keperluan = $("#keperluan").val();
    const kk = $("#kk").val();


    url = base_url + 'dashboard/KTP/';
    if (tgl.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'tgl harus diisi!'
        });
    } else if (keperluan.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'keperluan harus diisi!'
        });
    } else if (kk.length == "") {
        Swal.fire({
            title: 'Oops...',
            text: 'keperluan harus diisi!'
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

