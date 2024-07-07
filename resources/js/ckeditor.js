import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.ckeditor').forEach(function (element) {
        ClassicEditor
            .create(element)
            .catch(error => {
                console.error(error);
            });
    });
});

// jalankan juga perintah ini
// npm install @ckeditor/ckeditor5-build-classic --save
// dan jalankan juga npm run dev untuk teraplikasi