const select = document.querySelector("#naam");
const afbeelding = document.querySelector("#afbeelding");
const prijs = document.querySelector("#prijs");
const categorie = document.querySelector("#categorie");
const submit = document.querySelector("#submit");
const delete_button = document.querySelector("#delete");
const form = document.querySelector("form");
const status_text = document.querySelector("#status_text");

status_text.style = "display: none;";

submit.addEventListener("click", (e) => {
	e.preventDefault();

	if (isNaN(prijs.value) || isNaN(parseFloat(prijs.value))) {
		prijs.value = "";
		prijs.placeholder = "Moet een nummer zijn. Example: 10.5";
	} else {
		$.ajax({
			type: "POST",
			url: "php/item_toevoegen.php",
			data: {
				titel: select.value,
				prijs: prijs.value,
				afbeelding: afbeelding.value,
				categorie: categorie.value,
			},
			cache: false,
			success: (e) => {
				select.value = "";
				afbeelding.value = "";
				prijs.value = "";
				categorie.value = "";
				status_text.style = "color: green;";
				status_text.innerHTML = "Item is toegevoegd aan de database.";
			},
			error: function (xhr, status, error) {
				console.error(xhr);
			},
		});
	}

	return;
});
