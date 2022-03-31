const select = document.querySelector("#naam");
const afbeelding = document.querySelector("#afbeelding");
const prijs = document.querySelector("#prijs");
const categorie = document.querySelector("#categorie");
const submit = document.querySelector("#submit");
const delete_button = document.querySelector("#delete");
const form = document.querySelector("form");

function loadData() {
	const id = select.value;
	$.ajax({
		type: "POST",
		url: "get_item.php",
		data: {
			id: id,
		},
		cache: false,
		success: (e) => {
			JSON.parse(e).forEach((obj) => {
				afbeelding.value = obj["image_link"];
				prijs.value = obj["prijs"];
				categorie.value = obj["categorie"];
			});
		},
		error: function (xhr, status, error) {
			console.error(xhr);
		},
	});
}

loadData();

select.addEventListener("change", loadData);
submit.addEventListener("click", (e) => {
	e.preventDefault();

	if (isNaN(prijs.value) || isNaN(parseFloat(prijs.value))) {
		prijs.value = "";
		prijs.placeholder = "Moet een nummer zijn. Example: 10.5";
	} else {
		$.ajax({
			type: "POST",
			url: "bewerk_item.php",
			data: {
				id: select.value,
				prijs: prijs.value,
				afbeelding: afbeelding.value,
				categorie: categorie.value,
			},
			cache: false,
			success: (e) => {
				window.location.reload();
			},
			error: function (xhr, status, error) {
				console.error(xhr);
			},
		});
	}

	return;
});
