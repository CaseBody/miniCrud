const search_bar = document.querySelector("#search_bar");
const table = document.querySelectorAll("#table_row");

search_bar.addEventListener("input", () => {
	table.forEach((element) => {
		if (search_bar.value == "") {
			element.style.display = "";
		} else {
			if (element.children[1].innerHTML.toLowerCase().includes(search_bar.value.toLowerCase())) {
				element.style.display = "";
			} else {
				element.style.display = "none";
			}
		}
	});
});
