$(document).ready(function () {
    $.ajax({
        url: base_url + "dashboard/skck/data",
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
                let jk = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].jk);
                let agama = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].agama);
                let kewarganegaraan = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].kewarganegaraan);
                let perkawinan = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].perkawinan);
                let pekerjaan = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].pekerjaan);
                let alamat = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].alamat);
                let status = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].status);
                let surat = $('<td class="align-middle text-center"><span class="text-secondary text-xs font-weight-bold"></span></td>').text(respond[i].surat);
                let buttonEdit = $('<button type="button" class="btn bg-gradient-success mb-0"></button>').text('Edit').attr('id', respond[i].id);
                buttonEdit.click(function () {
                    $('#form')[0].reset();
                    var id = $(this).attr('id');
                    $.ajax({
                        url: base_url + 'dashboard/skck/update/' + id,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function (respond) {
                            console.log(respond.data);

                            $('#id').val(respond.data.id);
                            $('#tgl').val(respond.data.tgl);
                            $('#nama').val(respond.data.nama);
                            $('#nik').val(respond.data.nik);
                            $('#ttl').val(respond.data.ttl);
                            $('#jk').val(respond.data.jk);
                            $('#agama').val(respond.data.agama);
                            $('#kewarganegaraan').val(respond.data.kewarganegaraan);
                            $('#perkawinan').val(respond.data.perkawinan);
                            $('#pekerjaan').val(respond.data.pekerjaan);
                            $('#alamat').val(respond.data.alamat);
                            $('#status').val(respond.data.status);
                            // $('[name="surat"]').val(respond.data.surat);


                            $('#exampleModal').modal('show');
                            $('.modal-title').text('Edit');
                            $('#fileupload').removeAttr('hidden');

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
                        url: base_url + 'dashboard/skck/update/' + id,
                        type: 'GET',
                        dataType: 'JSON',
                        success: function (respond) {
                            console.log(respond.data);

                            // Set the values of other input fields as needed

                            var fileName = respond.data.surat; // Desired name for the downloaded file
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
                                url: base_url + 'dashboard/skck/delete/' + id,
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
                row.append(no, tgl,
                    nama,
                    nik,
                    ttl,
                    jk,
                    agama,
                    kewarganegaraan,
                    perkawinan,
                    pekerjaan,
                    alamat,
                    status,
                    surat, buttonEdit, buttonUnduh, buttonDelete);
                tableBody.append(row);
            }
        }
    });
});