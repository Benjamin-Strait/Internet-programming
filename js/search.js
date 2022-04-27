"use strict";

function searchOrders(id)
{
	let date = id.value;

	if (date.length>=1)
	{
		const xhttp = new XMLHttpRequest();
		let url = "showSales.php?date="+date;
		xhttp.onload = function(){
			document.getElementById("orders").innerHTML = this.responseText;
		}
		xhttp.open("GET", url, true);
		xhttp.send();
	}
}

