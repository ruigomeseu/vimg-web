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

        var imageWidth = document.getElementById('uploaded-image').clientWidth;

        var divMaxWidth = $("#image-block").width();

        if((imageHeight > windowHeight) && imageWidth < divMaxWidth)
        {
            console.log('es here');
            canZoom = true;
            image.removeClass("zoomOut");
            image.addClass("zoomIn")
        } else {
            canZoom = false;
            image.removeClass("zoomIn");
            image.removeClass("zoomOut");
        }

        console.log(imageHeight);
        console.log(windowHeight);

        console.log(imageWidth);
        console.log(divMaxWidth);
    }

});