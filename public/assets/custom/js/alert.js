if ($(".alert").length) {
    window.setTimeout(function () {
        $(".alert").fadeTo(300, 0).slideUp(500, function () {
            $(this).remove();
        });
    }, 4000);
}