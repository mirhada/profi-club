var navMain = document.querySelector('.main-nav');
var navToggle = navMain.querySelector('.main-nav-toggle');
		
	navMain.classList.remove('main-nav-nojs');
	navToggle.addEventListener('click', function() {
		if (navMain.classList.contains('main-nav-closed')) {
			navMain.classList.remove('main-nav-closed');
			navMain.classList.add('main-nav-opened');
		} else {
			navMain.classList.add('main-nav-closed');
			navMain.classList.remove('main-nav-opened');
		}
	});


let btn = document.querySelector('.see-more');
let blocks = document.querySelectorAll('.works-item');
let width = window.innerWidth 
|| document.documentElement.clientWidth
|| document.body.clientWidth;

let count = 0;

let addClass = function (count, step) {		
	for (let i = step ; i <= step*count + step - 1 && i < blocks.length; i++ ) { 
			blocks[i].classList.add("selected");		
		}
}

let removeClass = function(){					
	for (let i = 0; i < blocks.length; i++ ) {
			blocks[i].classList.remove("selected");
		}
		count = 0;
}

let GetStepFromWidth = function (width)
{
	if(width < 768)
		return 2;
	else if(width >= 768 && width < 1200)
		return 4;
	else return 8;
}

let showMore = function() { 
	let lastSelected = blocks[blocks.length - 1].classList.contains("selected");	
		count++;		
	if (!lastSelected) {
		let step = GetStepFromWidth(width);	
		addClass(count,step);			
	} 
	else 
	  removeClass();
}

btn.addEventListener('click', showMore);

let tabs = document.querySelectorAll('.tabs input[name=tab-control]');
let tabsRadio = document.querySelectorAll('.tabs input[name=tab-control-radio]');

let showPrice = function () {
  for (let i = 0; i < tabs.length; i++ ) {
		if (tabs[i].checked = true) {
		  tabsRadio[i*3].checked = true;
		} 
	}
}
//tabs.addEventListener('click', showPrice);
tabs.forEach(function(tab) {
  tab.addEventListener('click', function () {
	  for (let i = 1; i < 7; i++ ) {
		  if (tab.id == "tab" + i) {
		  	tabsRadio[3*i - 2].checked = true;
		  }
		}
	});
});
