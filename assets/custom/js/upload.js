function showPreview(objFileInput) {
    if (objFileInput.files[0]) {
        var fileReader = new FileReader();
        fileReader.onload = function (e) {
        $("#targetLayer").html('<img src="' + e.target.result + '" width="200px" height="200px" class="upload-preview" />');
    $("#targetLayer").css('opacity','0.7');
    $(".icon-choose-image").css('opacity','0.5');
}
fileReader.readAsDataURL(objFileInput.files[0]);
}
}

$(document).ready(function (e) {
    $("#uploadForm").on('submit', (function (e) {
        e.preventDefault();
        $.ajax({
            url: "upload.php",
            type: "POST",
            data: new FormData(this),
            beforeSend: function () { $("#body-overlay").show(); },
            contentType: false,
            processData: false,
            success: function (data) {
                $("#targetLayer").html(data);
                $("#targetLayer").css('opacity', '1');
                setInterval(function () { $("#body-overlay").hide(); }, 500);
            },
            error: function () {
            }
        });
    }));
});