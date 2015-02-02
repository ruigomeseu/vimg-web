$( document ).ready(function() {

    var image = $('#uploaded-image');
    var zoomedOut = false;
    var canZoom = false;

    image.load(function () {
        updatePhotoHeight();

        $(window).bind('resize', function () {
            updatePhotoHeight();
        });
    });

    image.click(function () {
        zoomedOut = !zoomedOut;

        if(zoomedOut && canZoom) {
            image.css('max-height', '');
            image.removeClass("zoomIn");
            image.addClass("zoomOut");
        } else {
            updatePhotoHeight();
        }
    });

    function updatePhotoHeight() {
        var windowHeight = $(window).height() - 100;

        image.css('max-height', windowHeight);

        var imageHeight = document.getElementById('uploaded-image').naturalHeight;

        if(imageHeight > windowHeight)
        {
            canZoom = true;
            image.removeClass("zoomOut");
            image.addClass("zoomIn")
        }

        console.log(imageHeight);
        console.log(windowHeight);
    }

});