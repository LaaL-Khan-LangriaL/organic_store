 //START WOW.JS

 new WOW().init();


// GLOBAL

var products=[];
var cartItems=[];
var cart_n=document.getElementById("cart_n");


// DIVS

var fruitDIV= document.getElementById("fruitDIV");
var juiceDIV= document.getElementById("juiceDIV");
var saladDIV= document.getElementById("saladDIV");

// INFORMATION

var FRUIT=[

	{name: 'Apple', Price:11},
	{name: 'Banana', Price:12},
	{name: 'Cherry', Price:13},
	{name: 'Strawberry',Price:14},
	{name: 'Kiwi',Price:15},
	{name: 'Orange',Price:16},
];


var JUICE=[

	{name: 'JUICE 1', Price:11},
	{name: 'JUICE 2', Price:12},
	{name: 'JUICE 3', Price:13},
	
];

var SALAD=[
	
	{name: 'SALAD 1', Price:22},
	{name: 'SALAD 2', Price:22},
	{name: 'SALAD 3', Price:33},

];


// HTML











// ANIMATION


function animation(){

	const toast= swal.mixin({
		toast:true,
		position:'top-end',
		showConfirmButton:false,
		timer:1000
	});

	toast({
		type:'success',
		title:'Added to cart',
	});
}



// CART FUNCTIONS

function cart(name,Price,url,con,btncart ){

	var item = {

		name:name,
		Price:Price,
		url:url
	}

	cartItems.push(item);
	let storage=JSON.parse(localStorage.getItem("cart"));
	if(storage==null){
		products.push(item);
		localStorage.setItem("cart",JSON.stringify(products));

	} else 

	{

		products=JSON.parse(localStorage.getItem("cart"));
		products.push(item);
		localStorage.setItem("cart",JSON.stringify(products));

	}

		product=JSON.parse(localStorage.getItem("cart"));
		cart_n.innerHTML=`[${products.length}]`;
		document.getElementById(btncart).style.display="none";
		animation();
}




function cart2(name,Price,url,con,btnbuy ){

	var item = {

		name:name,
		Price:Price,
		url:url
	}

	cartItems.push(item);
	let storage=JSON.parse(localStorage.getItem("cart"));
	if(storage==null){
		products.push(item);
		localStorage.setItem("cart",JSON.stringify(products));

	} else 

	{

		products=JSON.parse(localStorage.getItem("cart"));
		product.push(item);
		localStorage.setItem("cart",JSON.stringify(products));

	}

		product=JSON.parse(localStorage.getItem("cart"));
		cart_n.innerHTML=`[${products.length}]`;
		document.getElementById(btnbuy).style.display="none";
}


//RENDER

function render(){

	for (let index = 1; index <= 6; index++) {
		fruitDIV.innerHTML+=`${HTMLfruitproduct(index)}`;
	}

	for (let index = 1; index <= 3; index++) {
		juiceDIV.innerHTML+=`${HTMLjuiceproduct(index)}`;
		saladDIV.innerHTML+=`${HTMLsaladproduct(index)}`;
	}

	if(localStorage.getItem("cart")==null){

	}

	else {

			product=JSON.parse(localStorage.getItem("cart"));
		cart_n.innerHTML=`[${products.length}]`;

	}
}


//LOGIN

