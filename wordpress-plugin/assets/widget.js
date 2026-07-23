window.addEventListener("message", function(event) {

    if (event.origin !== "https://whenisthematch.com") {
        return;
    }

    if (event.data?.type !== "witm-widget-height") {
        return;
    }

    document
        .querySelectorAll(".witm-widget")
        .forEach(function(frame) {

            frame.style.height =
                event.data.height + "px";

        });

});