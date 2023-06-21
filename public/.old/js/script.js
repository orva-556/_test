// console.log('ok');
$(function () {

    $('.tombolTambahData').on('click', function() {
        // console.log('ok');
        $('#formModalLabel').html('Tambah Data Mahasiswa');
        // $('#formModalSubmit').html('Tambah Data');
        $('.modal-footer button[type=submit]').html('Tambah Data');

        $("#nama").val('');
        $("#stambuk").val('');
        $("#email").val('');
        $("#jurusan").val('');
    });

    $('.tombolUbahData').on('click', function() {
        // console.log('ok');
        $('#formModalLabel').html('Ubah Data Mahasiswa');
        // $('#formModalSubmit').html('Ubah');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-content form').attr('action', 'http://localhost/_mvc/public/mahasiswa/ubah');


        const stambuk = $(this).data('stambuk');
        // console.log(stambuk);

        $.ajax({
            url: 'http://localhost/_mvc/public/mahasiswa/getUbah',
            data: {stambuk : stambuk},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                // console.log(data);
                $('#nama').val(data.nama);
                $('#stambuk').val(data.stambuk);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            }
        });

    });

});
