
var y0x0 = document.querySelector("#y0x0");
var y0x1 = document.querySelector("#y0x1");
var y0x2 = document.querySelector("#y0x2");
var y0x3 = document.querySelector("#y0x3");
var y0x4 = document.querySelector("#y0x4");
var y0x5 = document.querySelector("#y0x5");
var y1x0 = document.querySelector("#y1x0");
var y1x1 = document.querySelector("#y1x1");
var y1x2 = document.querySelector("#y1x2");
var y1x3 = document.querySelector("#y1x3");
var y1x4 = document.querySelector("#y1x4");
var y1x5 = document.querySelector("#y1x5");
var y2x0 = document.querySelector("#y2x0");
var y2x1 = document.querySelector("#y2x1");
var y2x2 = document.querySelector("#y2x2");
var y2x3 = document.querySelector("#y2x3");
var y2x4 = document.querySelector("#y2x4");
var y2x5 = document.querySelector("#y2x5");
var y3x0 = document.querySelector("#y3x0");
var y3x1 = document.querySelector("#y3x1");
var y3x2 = document.querySelector("#y3x2");
var y3x3 = document.querySelector("#y3x3");
var y3x4 = document.querySelector("#y3x4");
var y3x5 = document.querySelector("#y3x5");

y0x0.style.opacity= "1";
y0x1.style.opacity= "0";
y0x2.style.opacity= "0";
y0x3.style.opacity= "0";
y0x4.style.opacity= "0";
y0x5.style.opacity= "0";
y1x0.style.opacity= "0";
y1x1.style.opacity= "0";
y1x2.style.opacity= "0";
y1x3.style.opacity= "0";
y1x4.style.opacity= "0";
y1x5.style.opacity= "0";
y2x0.style.opacity= "0";
y2x1.style.opacity= "0";
y2x2.style.opacity= "0";
y2x3.style.opacity= "0";
y2x4.style.opacity= "0";
y2x5.style.opacity= "0";
y3x0.style.opacity= "0";
y3x1.style.opacity= "0";
y3x2.style.opacity= "0";
y3x3.style.opacity= "0";
y3x4.style.opacity= "0";
y3x5.style.opacity= "1";

var b = document.querySelector("#button");
var l = document.querySelector("#turnl");
var a = document.querySelector("#adv");
var r = document.querySelector("#turnr");

l.addEventListener("click", ft_click_l);
a.addEventListener("click", ft_click_a);
r.addEventListener("click", ft_click_r);
b.addEventListener("click", ft_click_b);

var rot = 90;
var x = 0;
var y = 0;
var dir = 0;

function ft_restore_id()
{
	y0x0.id= "y0x0";
	y0x1.id= "y0x1";
	y0x2.id= "y0x2";
	y0x3.id= "y0x3";
	y0x4.id= "y0x4";
	y0x5.id= "y0x5";
	y1x0.id= "y1x0";
	y1x1.id= "y1x1";
	y1x2.id= "y1x2";
	y1x3.id= "y1x3";
	y1x4.id= "y1x4";
	y1x5.id= "y1x5";
	y2x0.id= "y2x0";
	y2x1.id= "y2x1";
	y2x2.id= "y2x2";
	y2x3.id= "y2x3";
	y2x4.id= "y2x4";
	y2x5.id= "y2x5";
	y3x0.id= "y3x0";
	y3x1.id= "y3x1";
	y3x2.id= "y3x2";
	y3x3.id= "y3x3";
	y3x4.id= "y3x4";
	y3x5.id= "y3x5";
}

function ft_click_b()
{
	if ((y == 0 && x == 1 && dir == 2) ||
		(y == 1 && x == 0 && dir == 3)) 
	{	
		y0x0.id= "boom";
		y0x0.style.opacity= "1";
	}
	if ((y == 0 && x == 0 && dir == 0) ||
		(y == 0 && x == 2 && dir == 2) ||
		(y == 1 && x == 1 && dir == 3)) 
	{	
		y0x1.id= "boom";
		y0x1.style.opacity= "1";
	}
	if ((y == 0 && x == 1 && dir == 0) ||
		(y == 0 && x == 3 && dir == 2) ||
		(y == 1 && x == 2 && dir == 3)) 
	{	
		y0x2.id= "boom";
		y0x2.style.opacity= "1";
	}
	if ((y == 0 && x == 2 && dir == 0) ||
		(y == 0 && x == 4 && dir == 2) ||
		(y == 1 && x == 3 && dir == 3)) 
	{	
		y0x3.id= "boom";
		y0x3.style.opacity= "1";
	}
	if ((y == 0 && x == 3 && dir == 0) ||
		(y == 0 && x == 5 && dir == 2) ||
		(y == 1 && x == 4 && dir == 3)) 
	{	
		y0x4.id= "boom";
		y0x4.style.opacity= "1";
	}
	if ((y == 0 && x == 4 && dir == 0) ||
		(y == 1 && x == 5 && dir == 3)) 
	{	
		y0x5.id= "boom";
		y0x5.style.opacity= "1";
	}
	if ((y == 1 && x == 1 && dir == 2) ||
		(y == 2 && x == 0 && dir == 3) ||
		(y == 0 && x == 0 && dir == 1))
	{	
		y1x0.id= "boom";
		y1x0.style.opacity= "1";
	}
	if ((y == 1 && x == 0 && dir == 0) ||
		(y == 1 && x == 2 && dir == 2) ||
		(y == 2 && x == 1 && dir == 3) || 
		(y == 0 && x == 1 && dir == 1))
	{	
		y1x1.id= "boom";
		y1x1.style.opacity= "1";
	}
	if ((y == 1 && x == 1 && dir == 0) ||
		(y == 1 && x == 3 && dir == 2) ||
		(y == 2 && x == 2 && dir == 3) ||
		(y == 0 && x == 2 && dir == 1))
	{	
		y1x2.id= "boom";
		y1x2.style.opacity= "1";
	}
	if ((y == 1 && x == 2 && dir == 0) ||
		(y == 1 && x == 4 && dir == 2) ||
		(y == 2 && x == 3 && dir == 3) || 
		(y == 0 && x == 3 && dir == 1))
	{	
		y1x3.id= "boom";
		y1x3.style.opacity= "1";
	}
	if ((y == 1 && x == 3 && dir == 0) ||
		(y == 1 && x == 5 && dir == 2) ||
		(y == 2 && x == 4 && dir == 3) || 
		(y == 0 && x == 4 && dir == 1))
	{	
		y1x4.id= "boom";
		y1x4.style.opacity= "1";
	}
	if ((y == 1 && x == 4 && dir == 0) ||
		(y == 2 && x == 5 && dir == 3) || 
		(y == 0 && x == 5 && dir == 1))
	{	
		y1x5.id= "boom";
		y1x5.style.opacity= "1";
	}
	if ((y == 2 && x == 1 && dir == 2) ||
		(y == 3 && x == 0 && dir == 3) ||
		(y == 1 && x == 0 && dir == 1))
	{	
		y2x0.id= "boom";
		y2x0.style.opacity= "1";
	}
	if ((y == 2 && x == 0 && dir == 0) ||
		(y == 2 && x == 2 && dir == 2) ||
		(y == 3 && x == 1 && dir == 3) || 
		(y == 1 && x == 1 && dir == 1))
	{	
		y2x1.id= "boom";
		y2x1.style.opacity= "1";
	}
	if ((y == 2 && x == 1 && dir == 0) ||
		(y == 2 && x == 3 && dir == 2) ||
		(y == 3 && x == 2 && dir == 3) ||
		(y == 1 && x == 2 && dir == 1))
	{	
		y2x2.id= "boom";
		y2x2.style.opacity= "1";
	}
	if ((y == 2 && x == 2 && dir == 0) ||
		(y == 2 && x == 4 && dir == 2) ||
		(y == 3 && x == 3 && dir == 3) || 
		(y == 1 && x == 3 && dir == 1))
	{	
		y2x3.id= "boom";
		y2x3.style.opacity= "1";
	}
	if ((y == 2 && x == 3 && dir == 0) ||
		(y == 2 && x == 5 && dir == 2) ||
		(y == 3 && x == 4 && dir == 3) || 
		(y == 1 && x == 4 && dir == 1))
	{	
		y2x4.id= "boom";
		y2x4.style.opacity= "1";
	}
	if ((y == 2 && x == 4 && dir == 0) ||
		(y == 3 && x == 5 && dir == 3) || 
		(y == 1 && x == 5 && dir == 1))
	{	
		y2x5.id= "boom";
		y2x5.style.opacity= "1";
	}
	if ((y == 3 && x == 1 && dir == 2) ||
		(y == 2 && x == 0 && dir == 1))
	{	
		y3x0.id= "boom";
		y3x0.style.opacity= "1";
	}
	if ((y == 3 && x == 0 && dir == 0) ||
		(y == 3 && x == 2 && dir == 2) ||
		(y == 2 && x == 1 && dir == 1))
	{	
		y3x1.id= "boom";
		y3x1.style.opacity= "1";
	}
	if ((y == 3 && x == 1 && dir == 0) ||
		(y == 3 && x == 3 && dir == 2) ||
		(y == 2 && x == 2 && dir == 1))
	{	
		y3x2.id= "boom";
		y3x2.style.opacity= "1";
	}
	if ((y == 3 && x == 2 && dir == 0) ||
		(y == 3 && x == 4 && dir == 2) ||
		(y == 2 && x == 3 && dir == 1))
	{	
		y3x3.id= "boom";
		y3x3.style.opacity= "1";
	}
	if ((y == 3 && x == 3 && dir == 0) ||
		(y == 3 && x == 5 && dir == 2) ||
		(y == 2 && x == 4 && dir == 1))
	{	
		y3x4.id= "boom";
		y3x4.style.opacity= "1";
	}
	if ((y == 3 && x == 4 && dir == 0) ||
		(y == 2 && x == 5 && dir == 1))
	{	
		y3x5.id= "boom";
		y3x5.style.opacity= "1";
		if (y == 3)
		{
			y3x4.id= "boom";
			y3x4.style.opacity= "1";
		}
		if (y == 2)
		{
			y2x5.id= "boom";
			y2x5.style.opacity= "1";
		}
		ft_game_over();
	}
}

function ft_game_over()
{
	alert("\"He's only harming himself who's bent upon harming another\"\n― Hesiod");
	l.removeEventListener("click", ft_click_l);
	a.removeEventListener("click", ft_click_a);
	r.removeEventListener("click", ft_click_r);
	b.removeEventListener("click", ft_click_b);
	b.style.backgroundColor= "blue";
	b.addEventListener("click", ft_click_reload);

}

function ft_click_reload()
{
	location.href = "game.html";

}

function ft_click_l()
{
	ft_restore_id();
	ft_clear_all();
	rot -= 90;
	dir -= 1;
	if (dir == -1)
		dir = 3;
	if (rot == 360)
		rot = 0;
	ft_rotate();
	ft_show_ship();
}

function ft_click_r()
{
	ft_restore_id();
	ft_clear_all();
	rot += 90;
	dir += 1;
	if (dir == 4)
		dir = 0;
	if (rot == 0)
		rot = 360;
	ft_rotate();
	ft_show_ship();
}

function ft_click_a()
{
	ft_restore_id();
	ft_clear_all();
	if (dir == 0)
	{
		x += 1;
		if (x > 5)
			x = 5;
		if (ft_overlap())
			x -= 1;
	}
	if (dir == 1)
	{
		y += 1;
		if (y > 3)
			y = 3;
		if (ft_overlap())
			y -= 1;
	}
	if (dir == 2)
	{
		x -= 1;
		if (x < 0)
			x = 0;
	}
	if (dir == 3)
	{
		y -= 1;
		if (y < 0)
			y = 0;
	}
	ft_show_ship();
}

function ft_overlap()
{
	if (y == 3 && x == 5)
		return 1;
	else
		return 0;
}

function ft_clear_all()
{
	y0x0.style.opacity= "0";
	y0x1.style.opacity= "0";
	y0x2.style.opacity= "0";
	y0x3.style.opacity= "0";
	y0x4.style.opacity= "0";
	y0x5.style.opacity= "0";
	y1x0.style.opacity= "0";
	y1x1.style.opacity= "0";
	y1x2.style.opacity= "0";
	y1x3.style.opacity= "0";
	y1x4.style.opacity= "0";
	y1x5.style.opacity= "0";
	y2x0.style.opacity= "0";
	y2x1.style.opacity= "0";
	y2x2.style.opacity= "0";
	y2x3.style.opacity= "0";
	y2x4.style.opacity= "0";
	y2x5.style.opacity= "0";
	y3x0.style.opacity= "0";
	y3x1.style.opacity= "0";
	y3x2.style.opacity= "0";
	y3x3.style.opacity= "0";
	y3x4.style.opacity= "0";
/*	y3x5.style.opacity= "0";*/
}

function ft_show_ship()
{
	if (y == 0 && x == 0)
		y0x0.style.opacity= "1";
	if (y == 0 && x == 1)
		y0x1.style.opacity= "1";
	if (y == 0 && x == 2)
		y0x2.style.opacity= "1";
	if (y == 0 && x == 3)
		y0x3.style.opacity= "1";
	if (y == 0 && x == 4)
		y0x4.style.opacity= "1";
	if (y == 0 && x == 5)
		y0x5.style.opacity= "1";
	if (y == 1 && x == 0)
		y1x0.style.opacity= "1";
	if (y == 1 && x == 1)
		y1x1.style.opacity= "1";
	if (y == 1 && x == 2)
		y1x2.style.opacity= "1";
	if (y == 1 && x == 3)
		y1x3.style.opacity= "1";
	if (y == 1 && x == 4)
		y1x4.style.opacity= "1";
	if (y == 1 && x == 5)
		y1x5.style.opacity= "1";
	if (y == 2 && x == 0)
		y2x0.style.opacity= "1";
	if (y == 2 && x == 1)
		y2x1.style.opacity= "1";
	if (y == 2 && x == 2)
		y2x2.style.opacity= "1";
	if (y == 2 && x == 3)
		y2x3.style.opacity= "1";
	if (y == 2 && x == 4)
		y2x4.style.opacity= "1";
	if (y == 2 && x == 5)
		y2x5.style.opacity= "1";
	if (y == 3 && x == 0)
		y3x0.style.opacity= "1";
	if (y == 3 && x == 1)
		y3x1.style.opacity= "1";
	if (y == 3 && x == 2)
		y3x2.style.opacity= "1";
	if (y == 3 && x == 3)
		y3x3.style.opacity= "1";
	if (y == 3 && x == 4)
		y3x4.style.opacity= "1";
/*	if (y == 3 && x == 5)
		y3x5.style.opacity= "1";*/
}

function	ft_rotate()
{
	y0x0.style.transform = "rotate(" + rot + "deg)";
	y0x1.style.transform = "rotate(" + rot + "deg)";
	y0x2.style.transform = "rotate(" + rot + "deg)";
	y0x3.style.transform = "rotate(" + rot + "deg)";
	y0x4.style.transform = "rotate(" + rot + "deg)";
	y0x5.style.transform = "rotate(" + rot + "deg)";
	y1x0.style.transform = "rotate(" + rot + "deg)";
	y1x1.style.transform = "rotate(" + rot + "deg)";
	y1x2.style.transform = "rotate(" + rot + "deg)";
	y1x3.style.transform = "rotate(" + rot + "deg)";
	y1x4.style.transform = "rotate(" + rot + "deg)";
	y1x5.style.transform = "rotate(" + rot + "deg)";
	y2x0.style.transform = "rotate(" + rot + "deg)";
	y2x1.style.transform = "rotate(" + rot + "deg)";
	y2x2.style.transform = "rotate(" + rot + "deg)";
	y2x3.style.transform = "rotate(" + rot + "deg)";
	y2x4.style.transform = "rotate(" + rot + "deg)";
	y2x5.style.transform = "rotate(" + rot + "deg)";
	y3x0.style.transform = "rotate(" + rot + "deg)";
	y3x1.style.transform = "rotate(" + rot + "deg)";
	y3x2.style.transform = "rotate(" + rot + "deg)";
	y3x3.style.transform = "rotate(" + rot + "deg)";
	y3x4.style.transform = "rotate(" + rot + "deg)";
/*	y3x5.style.transform = "rotate(" + rot + "deg)";*/
}
