let categories = document.querySelector(".categories");
const items_container = document.querySelector(".items");

function loadItems(data) {
	let items = document.querySelectorAll(".item");

	Array.from(items).forEach((element) => {
		element.remove();
	});

	JSON.parse(data).forEach((obj) => {
		items_container.innerHTML +=
			`<div class="item">
		<p class="titel">` +
			obj.titel +
			`</p>
		<img src="` +
			obj.image_link +
			`" alt="" />
		<div class="bottom">
		    <p class="prijs">€ ` +
			obj.prijs +
			`</p>
		    <button type="button">Bestel</button>
		</div>
		</div>`;
	});
}

function categorieClicked(e) {
	let categorie = e.target;

	Array.from(categories.children[0].children).forEach((element) => {
		element = element.children[0];

		if (element == categorie) {
			element.classList.add("selected_catagorie");
		} else {
			element.classList.remove("selected_catagorie");
		}
	});

	categorie = categorie.innerHTML;

	$.ajax({
		type: "POST",
		url: "php/get_catagorie.php",
		data: {
			categorie: categorie,
		},
		cache: false,
		success: loadItems,
		error: function (xhr, status, error) {
			console.error(xhr);
		},
	});
}

const items = categories.children[0].children;

Array.from(items).forEach((element) => {
	element.addEventListener("click", categorieClicked);
});
