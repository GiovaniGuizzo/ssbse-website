﻿var keyStr = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';
	 	
function smae_decode(m){ document.location.href='mailto:' + decode64(m).replace("&","%26"); }
 
function decode64(input) {
	
	var output = '';
	var chr1, chr2, chr3 = '';
	var enc1, enc2, enc3, enc4 = '';
	var i = 0;
	  
	input = input.replace(/[^A-Za-z0-9\+\/\=]/g, '');
	  
	do {
		enc1 = keyStr.indexOf(input.charAt(i++));
		enc2 = keyStr.indexOf(input.charAt(i++));
		enc3 = keyStr.indexOf(input.charAt(i++));
		enc4 = keyStr.indexOf(input.charAt(i++));
		  
		chr1 = (enc1 << 2) | (enc2 >> 4);
		chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
		chr3 = ((enc3 & 3) << 6) | enc4;
		  
		output = output + String.fromCharCode(chr1);
		  
		if (enc3 != 64) {
		
			output = output + String.fromCharCode(chr2);
		}
		if (enc4 != 64) {
		
			output = output + String.fromCharCode(chr3);
		}
		  
		chr1 = chr2 = chr3 = '';
		enc1 = enc2 = enc3 = enc4 = '';
  
	} while (i < input.length);
      
	return unescape(output);
}