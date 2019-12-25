/*
var ship = document.getElementById('uno');
var button = document.getElementById('button1');
button.addEventListener("click", ft_click);

function ft_click()
{
	b.style.backgroundColor = "blue";
}
*/
/*
var b = document.querySelector("#button1");
document.querySelector("#button1").addEventListener("click", ft_add);

function ft_add()
{
	b.style.backgroundColor = "blue";
}*/



var b = document.querySelector("#button1");
var c = document.querySelector("#uno");
b.addEventListener("click", ft_click);

function ft_click()
{
	b.style.backgroundColor = "blue";
//	c.style.backgroundColor = "blue";
	c.style.backgroundSize = "100%";
	c.style.transform = "rotate(180deg)";
}
