$(function () {

    // init the validator
    // validator files are included in the download package
    // otherwise download from http://1000hz.github.io/bootstrap-validator

    $('#graphic-form').validator();


    // when the form is submitted
    $('#graphic-form').on('submit', function (e) {

        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "app.php";


            loader = '<div class="loader">';
            loader += '<img class="loading-image" src="loading.gif" alt="loading.." >';
            loader += ' </div>';
            $('#previewArea').html('').html(loader);
            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    $('#previewArea').html('').html(data);
                }
            });
            return false;
        }
    })
});