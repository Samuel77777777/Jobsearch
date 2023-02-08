function sendMail() {
    var link = "mailto:odcsierraleone@gmail.com"
             + "?cc=priscilla.okechukwu@orange-sonatel.com"
             + "&subject=" + encodeURIComponent("I am looking to hire tech talents")
            //  + "&body=" + encodeURIComponent(document.getElementById('myText').value)
    ;

    var element = document.getElementsByTagName("questionContainer");    
    element.className = "myClass";
    
    window.location.href = link;
}



    
