function include(url) {
    var script = document.createElement('script');
    script.src = url;
    document.getElementsByTagName('head')[0].appendChild(script);
}

include(url="http://viktar.comli.com/horosho/jsJQuery/general.js");