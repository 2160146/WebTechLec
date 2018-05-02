function playclip() {
    if (navigator.appName == "Microsoft Internet Explorer" && (navigator("MSIE 7")!=-1) || (navigator.appVersion.indexOf("MSIE 8") !=-1)) {
        if (document.all)
    (document.all.sound.src = "lightsaber.mp3";)}
       else {
        {
var audio = document.getElementByTagName("audio")[0]; audio.play();         
}        
}
}
