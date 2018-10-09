function photo(event){
	var big = document.getElementById('big');
	var imag1 = document.getElementById('s1');
	imag1.onclick = function(e){
		big.src = imag1.src;
	}
	var imag2 = document.getElementById('s2');
	imag2.onclick = function(e){
		big.src = imag2.src;
	}
	var imag3 = document.getElementById('s3');
	imag3.onclick = function(e){
		big.src = imag3.src;
	}
	var imag4 = document.getElementById('s4');
	imag4.onclick = function(e){
		big.src = imag4.src;
	}
	var imag5 = document.getElementById('s5');
	imag5.onclick = function(e){
		big.src = imag5.src;
	}
}


