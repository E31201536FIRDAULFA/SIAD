$(document).ready(function () {
    $.ajax({
        url: base_url + "dashboard/gaji/data",
        type: "GET",
        dataType: "json",
        success: function (respond) {
            let tableBody = $('#table tbody');
            let number = 1;
            for (let i = 0; i < respond.length; i++) {
                let row = $('<tr></tr>');
                let no = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(number++);
                let tgl = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].tgl);
                let nama = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].nama);
                let nik = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].nik);
                let ttl = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].ttl);
                let pekerjaan = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].pekerjaan);
                let no_kip = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].no_kip);
                let no_kis = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].no_kis);
                let ket = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].ket);
                let status = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].status);
                let Surat = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].Surat);
                let buttonUpload = $('<button type="button" class="btn bg-gradient-info mb-0"></button>').text('Upload Surat').attr('id', respond[i].id);
                buttonUpload.click(function () {
                    $('#formupload')[0].reset();
                    var id = $(this).attr('id');
                    $.ajax({
                        url: base_url + 'dashboard/gaji/upload/' + id,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function (respond) {
                            console.log(respond.data);



                            $('#id').val(respond.data.id);
                            $('#upload').modal('show');
                            $('.modal-title').text('Upload');

                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);
                            swal.fire({
                                icon: 'error',
                                title: errorThrown,
                                text: 'Error get data from ajax.'
                            })
                        }
                    });
                });

                let buttonLihat = $('<button type="button" class="btn bg-gradient-info mb-0"></button>').text('Upload Surat').attr('id', respond[i].id);
                buttonUpload.click(function () {
                    $('#formupload')[0].reset();
                    var id = $(this).attr('id');
                    $.ajax({
                        url: base_url + 'dashboard/gaji/lihat/' + id,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function (respond) {
                            console.log(respond.data);



                            $('#id').val(respond.data.id);
                            $('#upload').modal('show');
                            $('.modal-title').text('Upload');

                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);
                            swal.fire({
                                icon: 'error',
                                title: errorThrown,
                                text: 'Error get data from ajax.'
                            })
                        }
                    });
                });

                let buttonEdit = $('<button type="button" class="btn bg-gradient-warning mb-0"></button>').text('Edit').attr('id', respond[i].id);
                buttonEdit.click(function () {
                    $('#form')[0].reset();
                    var id = $(this).attr('id');
                    $.ajax({
                        url: base_url + 'dashboard/gaji/update/' + id,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function (respond) {
                            console.log(respond.data);

                            $('#id').val(respond.data.id);
                            $('#tgl').val(respond.data.tgl);
                            $('#nama').val(respond.data.nama);
                            $('#nik').val(respond.data.nik);
                            $('#ttl').val(respond.data.ttl);
                            $('#pekerjaan').val(respond.data.pekerjaan);
                            $('#no_kip').val(respond.data.no_kip);
                            $('#no_kis').val(respond.data.no_kis);
                            $('#ket').val(respond.data.ket);
                            $('#status').val(respond.data.status);


                            $('#exampleModal').modal('show');
                            $('.modal-title').text('Edit');
                            $('#statusgaji').removeAttr('hidden');

                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);
                            swal.fire({
                                icon: 'error',
                                title: errorThrown,
                                text: 'Error get data from ajax.'
                            })
                        }
                    });
                });

                let buttonUnduh = $('<button type="button" class="btn bg-gradient-success mb-0"></button>').text('Unduh').attr('id', respond[i].id);
                buttonUnduh.click(function () {

                    var id = $(this).attr('id');
                    $.ajax({
                        url: base_url + 'dashboard/gaji/update/' + id,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function (respond) {
                            console.log(respond.data);

                            // Set the values of other input fields as needed

                            var fileName = respond.data.Surat; // Desired name for the downloaded file
                            var fileUrl = base_url + 'uploads/' + fileName; // URL of the file to be downloaded

                            var downloadLink = document.createElement('a');
                            downloadLink.setAttribute('href', fileUrl);
                            downloadLink.setAttribute('download', fileName);
                            downloadLink.style.display = 'none';
                            document.body.appendChild(downloadLink);
                            downloadLink.click();
                            document.body.removeChild(downloadLink);

                            // Additional code for showing the modal, etc.
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            console.log(jqXHR);
                            swal.fire({
                                icon: 'error',
                                title: errorThrown,
                                text: 'Error getting data from AJAX.'
                            });
                        }
                    });
                });

                let buttonCetak = $('<button>').attr({
                    'type': 'button',
                    'class': 'btn bg-gradient-success mb-0',
                    'id': respond[i].id
                }).text('Cetak');

                buttonCetak.on('click', function () {
                    var id = $(this).attr('id');
                    var redirectUrl = base_url + 'dashboard/pdf/pdfgaji/' + id; // Change the URL to the desired destination

                    window.location.href = redirectUrl; // Redirect to the desired link
                });

                let buttonDelete = $('<button type="button" class="btn bg-gradient-danger mb-0"></button>').text('Delete').attr('id', respond[i].id);
                buttonDelete.click(function () {
                    var id = $(this).attr('id');
                    Swal.fire({
                        title: 'Anda yakin?',
                        text: 'Aksi ini tidak dapat dipulihkan!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Ya, Hapus!'
                    }).then(function (respond) {
                        if (respond.value) {
                            var base_url = 'http://localhost:8080/';
                            $.ajax({
                                url: base_url + 'dashboard/gaji/delete/' + id,
                                type: 'GET',
                                dataType: 'JSON',
                                success: function (respond) {
                                    swal.fire({
                                        position: 'top-end',
                                        icon: 'success',
                                        title: 'Surat berhasil dihapus!',
                                        showConfirmButton: false,
                                        timer: 2000
                                    })
                                        .then(function () {
                                            location.reload();
                                        });
                                },
                                error: function (xhr, ajaxOptions, thrownError) {
                                    swal.fire(thrownError, "Ada yang salah! coba lagi beberapa saat.", "error");
                                }
                            });
                        };
                    });
                    var modal = document.getElementById('exampleModal');
                    modal.addEventListener('hidden.bs.modal', function (event) {
                        location.reload();
                    })
                });
                row.append(no,
                    tgl,
                    nama,
                    nik,
                    ttl,
                    pekerjaan,
                    no_kip,
                    no_kis,
                    ket,
                    status,
                    Surat, buttonCetak, buttonUpload, buttonUnduh, buttonEdit, buttonDelete);
                tableBody.append(row);
            }
        }
    });
});