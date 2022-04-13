let categories = document.querySelector(".categories");
const items_container = document.querySelector(".items");
const kar_icon = document.querySelector("#winkel-kar");
const kar = document.querySelector("#winkel-mand");
const prijs_string = document.querySelector("#totaal_bedrag");

let shopping_kar_value = 0.0;

items_container.querySelectorAll("button").forEach((e) => {
	e.addEventListener("click", addKarClicked);
});

function provideDeleteOption() {
	const deleteOptions = document.querySelectorAll(".winkel-mand img");

	deleteOptions.forEach((deleteOption) => {
		deleteOption.addEventListener("click", () => {
			removeItem(deleteOption);
		});
	});
}

function loadItems(data) {
	let items = document.querySelectorAll(".item");

	Array.from(items).forEach((element) => {
		element.remove();
	});

	JSON.parse(data).forEach((obj) => {
		items_container.innerHTML +=
			`<div id="` +
			obj.ID +
			`" class="item">
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

	items_container.querySelectorAll("button").forEach((e) => {
		e.addEventListener("click", addKarClicked);
	});
}

function removeItem(deleteOption) {
	const target = deleteOption;

	$.ajax({
		type: "POST",
		url: "php/get_item.php",
		data: {
			id: target.parentElement.parentElement.id,
		},
		cache: false,
		success: (e) => {
			JSON.parse(e).forEach((obj) => {
				shopping_kar_value -= parseFloat(obj.prijs);
				prijs_string.innerHTML = "Totaal: € " + shopping_kar_value.toFixed(2);
			});
		},
		error: function (xhr, status, error) {
			console.error(xhr);
		},
	});

	target.parentElement.parentElement.remove();
}

function addKarClicked(e) {
	const item = e.target.parentElement.parentElement;

	$.ajax({
		type: "POST",
		url: "php/get_item.php",
		data: {
			id: item.id,
		},
		cache: false,
		success: (e) => {
			JSON.parse(e).forEach((obj) => {
				shopping_kar_value += parseFloat(obj.prijs);
				prijs_string.innerHTML = "Totaal: € " + shopping_kar_value.toFixed(2);

				kar.querySelector("ul").innerHTML +=
					`<li id="` +
					obj.ID +
					`">
				<p>` +
					obj.titel +
					`</p>
				<div class="right">
					<p>€ ` +
					obj.prijs +
					`</p>
					<img src="images/delete.png" alt="delete">
				</div>
				</li>		
				`;

				provideDeleteOption();
			});
		},
		error: function (xhr, status, error) {
			console.error(xhr);
		},
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

kar_icon.addEventListener("click", () => {
	if (parseInt(kar.style.right) > 0) {
		kar.style.right = "-400px";
	} else {
		kar.style.right = "5px";
	}
});

const items = categories.children[0].children;

Array.from(items).forEach((element) => {
	element.addEventListener("click", categorieClicked);
});
