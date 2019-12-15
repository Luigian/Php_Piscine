
var list = document.querySelector("#ft_list");
document.querySelector('button').addEventListener("click", ft_add);

var c = document.cookie;
if (c)
	getCookie(c);

function ft_add()
{
	var task = prompt("Please enter the task", '');
	if (task !== null)
		ft_putask(task)
}	

function ft_putask(task)
{
	var new_div = document.createElement("div");
	new_div.innerHTML = task;
	new_div.addEventListener("click", ft_del);
	new_div.setAttribute("id", task);
	list.insertBefore(new_div, list.firstChild);
	document.cookie = task + "=" + task;
}

function ft_del()
{
	if (confirm("Do you want to remove this task?"))
	{
		this.parentElement.removeChild(this);
		document.cookie = this.id + "=" + this.id + "; expires=Thu, 18 Dec 2013 12:00:00 UTC";
	}
}

function getCookie(cname)
{
	var ca = cname.split(';');
	for(var i = 0; i < ca.length; i++)
	{
		var nam = ca[i].split('=');
		var new_div = document.createElement("div");
		ft_putask(nam[0])
	}
}
