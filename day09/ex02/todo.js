
var list = document.querySelector("#ft_list");
document.querySelector('button').addEventListener("click", ft_add);

function ft_add()
{
	var task = prompt("Please enter the task", '');
	if (task !== '')
	{
		var new_div = document.createElement("div");
		new_div.innerHTML = task;
		new_div.addEventListener("click", ft_del);
		list.insertBefore(new_div, list.firstChild);
	}
}

function ft_del()
{
	if (confirm("Do you want to remove this task?"))
		this.parentElement.removeChild(this);
}
