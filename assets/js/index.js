



document.addEventListener("DOMContentLoaded", (event) => {

	/* burger toggle */

	let headerNav = document.querySelector('#HeaderNav');
	let menuBurger = document.querySelector('.menu-burger');


	document.getElementById('Burger').addEventListener('click', function(e) {
		headerNav.classList.toggle('active');
		menuBurger.classList.toggle('active');
	})

	/* footer nav toggle */

	let footerNavPagesToggler = document.querySelector('#FooterNavPagesToggler');
	let footerNavPages = document.querySelector('#FooterNavPages');
	let footerNavCategoriesToggler = document.querySelector('#FooterNavCategoriesToggler');
	let footerNavCategories = document.querySelector('#FooterNavCategories');


	if (window.innerWidth > 767) {
		footerNavCategories.classList.add('active');
	}

	footerNavPagesToggler.addEventListener('click', function(e) {
		footerNavPagesToggler.classList.toggle('active');
		footerNavPages.classList.toggle('active');
	})
	footerNavCategoriesToggler.addEventListener('click', function(e) {
		if (window.innerWidth <= 1152) {
			footerNavCategoriesToggler.classList.toggle('active');
			footerNavCategories.classList.toggle('active');		
		}

	})




	/* remove .active class for header nav elements if screen gets wider */

	function headerNavResize() {
		if (window.innerWidth > 1152 && headerNav.classList.contains('active') && menuBurger.classList.contains('active'))   {
			headerNav.classList.remove('active')
			menuBurger.classList.remove('active');
		}
	}
	
	function footerNavResize() {
		if (window.innerWidth > 767)  {
			footerNavCategories.classList.add('active');
		}		
		if (window.innerWidth <= 767 && !footerNavCategoriesToggler.classList.contains('active'))  {
			console.log('work')
			footerNavCategories.classList.remove('active');
		}		
	}


	headerNavResize()

	window.addEventListener('resize', headerNavResize);
	window.addEventListener('resize', footerNavResize);

})

