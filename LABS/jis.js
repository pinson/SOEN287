	var start = function (){
	var frm = document.getElementById("frm");
	frm.addEventListener("submit", function(e) {
		// e.preventDefault();
		var name = document.getElementById("name");
		var email= document.getElementById("email");
		var phone = document.getElementById("phone");
		var postalcode = document.getElementById("postalcode");
		var val = name.value;
		// code for checking that the info is valid
		/**
		*/
	var checknum = function(){
			var checknam =/[a-zA-Z]$/;
			
			if name.match(checknam){
			document.write("this is cool");
			document.createTextNode(name);
				}
			} 
		} 
	}, false);
window.addEventListener("load", start, false);