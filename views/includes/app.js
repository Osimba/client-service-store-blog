function clickFunc () {
	var x = document.querySelectorAll('.list');
	x.forEach(element => {
		if (element.style.display === 'block') {
			element.style.display = 'none';
		} else {
			element.style.display = 'block';
		}
	});
	
}

document.querySelector(".menu-toggle").addEventListener('click', clickFunc); 