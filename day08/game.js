
var b = document.querySelector("#button1");
var f = document.querySelector("#f");
var l = document.querySelector("#turnl");
var a = document.querySelector("#adv");
var r = document.querySelector("#turnr");
var ship = document.querySelector("#uno");
var s = document.querySelector("#f");
l.addEventListener("click", ft_click_l);
a.addEventListener("click", ft_click_a);
r.addEventListener("click", ft_click_r);
var rot = 90;
f.style.opacity= "0";

function ft_click_l()
{
	rot -= 90;
	if (rot == 360)
		rot = 0;
	ship.style.transform = "rotate(" + rot + "deg)";
	f.style.transform = "rotate(" + rot + "deg)";
}

function ft_click_a()
{
	ship.style.opacity= "0";
	f.style.opacity= "100";
	b.style.backgroundColor = "blue";
}

function ft_click_r()
{
	rot += 90;
	if (rot == 0)
		rot = 360;
	ship.style.transform = "rotate(" + rot + "deg)";
	f.style.transform = "rotate(" + rot + "deg)";
}
