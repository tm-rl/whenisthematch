window.addEventListener("message", function(event) {

    if (event.origin !== "https://whenisthematch.com") {
        return;
    }

    if (event.data?.type !== "witm-widget-height") {
        return;
    }

    document
        .querySelectorAll("iframe.witm-widget")
        .forEach(function(frame) {
            if (frame.contentWindow === event.source) {
                frame.style.height = event.data.height + "px";
            }
        });

});