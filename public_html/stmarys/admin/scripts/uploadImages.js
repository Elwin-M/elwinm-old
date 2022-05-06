// var fileobj;

// function upload_file(e) {
//     e.preventDefault();
//     ajax_file_upload(e.dataTransfer.files);
// }

// function file_explorer() {
//     document.getElementById('selectfile').click();
//     document.getElementById('selectfile').onchange = function() {
//         files = document.getElementById('selectfile').files;
//         ajax_file_upload(files);
//     };
// }

// function ajax_file_upload(file_obj) {
//     if (file_obj != undefined) {
//         var form_data = new FormData();
//         form_data.append('file', file_obj);
//         var xhttp = new XMLHttpRequest();
//         xhttp.open("POST", "./uploadImages.php", true);
//         xhttp.onload = function(event) {
//             oOutput = document.querySelector('.img-content');
//             if (xhttp.status == 200) {
//                 // oOutput.innerHTML = "<img src='" + this.responseText + "' alt='The Image'>";
//                 oOutput.innerHTML = "<br><p class='error success' style='text-align:center;'>Image has been successfully uploaded</p>";
//             } else {
//                 oOutput.innerHTML = "<br><p class='error' Error " + xhttp.status + " occurred when trying to upload your file.</p>";
//             }
//         }

//         xhttp.send(form_data);
//     }
// }

// function ajax_file_upload(files_obj) {
//     if (files_obj != undefined) {
//         var form_data = new FormData();
//         for (i = 0; i < files_obj.length; i++) {
//             form_data.append('file[]', files_obj[i]);
//         }
//         var xhttp = new XMLHttpRequest();
//         xhttp.open("POST", "./uploadImages.php", true);
//         xhttp.onload = function(event) {
//             oOutput = document.querySelector('.img-content');
//             if (xhttp.status == 200) {
//                 //alert(this.responseText);
//                 oOutput.innerHTML = "<br><p class='error success' style='text-align:center;'>Image(s) has been successfully uploaded</p>";
//             } else {
//                 alert("Error " + xhttp.status + " occurred when trying to upload your file.");
//                 oOutput.innerHTML = "<br><p class='error' Error " + xhttp.status + " occurred when trying to upload your file(s).</p>";
//             }
//         }

//         xhttp.send(form_data);
//     }
// }

$(document).ready(function() {
    $("html").on("dragover", function(e) {
        e.preventDefault();
        e.stopPropagation();
    });

    $("html").on("drop", function(e) {
        e.preventDefault();
        e.stopPropagation();
    });

    $('#drop_file_area').on('dragover', function() {
        $(this).addClass('drag_over');
        return false;
    });

    $('#drop_file_area').on('dragleave', function() {
        $(this).removeClass('drag_over');
        return false;
    });

    $('#drop_file_area').on('drop', function(e) {
        e.preventDefault();
        $(this).removeClass('drag_over');
        var formData = new FormData();
        var files = e.originalEvent.dataTransfer.files;
        for (var i = 0; i < files.length; i++) {
            formData.append('file[]', files[i]);
        }
        uploadFormData(formData);
    });

    function uploadFormData(form_data) {
        $.ajax({
            url: "./uploadImages.php",
            method: "POST",
            data: form_data,
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                $('#uploaded_file').append(data);
            }
        });
    }
});