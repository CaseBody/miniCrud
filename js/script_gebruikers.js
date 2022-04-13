const select = document.querySelector("#naam");
const superuser = document.querySelector("#superuser");
const submit = document.querySelector("#submit");
const delete_button = document.querySelector("#delete");
const form = document.querySelector("form");
const status_text = document.querySelector("#status_text");

const naam_toevoegen = document.querySelector("#naam_toevoegen");
const password = document.querySelector("#password");
const superuser_toevoegen = document.querySelector("#superuser_toevoegen");
const status_text_toevoegen = document.querySelector("#status_text_toevoegen");
const form_toevoegen = document.querySelector("#form_toevoegen");
const submit_toevoegen = document.querySelector("#submit_toevoegen");

status_text.style = "display: none;";
status_text_toevoegen.style = "display: none;";

function loadData() {
	const id = select.value;
	$.ajax({
		type: "POST",
		url: "php/get_user.php",
		data: {
			id: id,
		},
		cache: false,
		success: (e) => {
			JSON.parse(e).forEach((obj) => {
				if (obj["super_user"] > 0) {
					superuser.checked = true;
				} else {
					superuser.checked = false;
				}
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

	super_user_value = 0;

	if (superuser.checked) {
		super_user_value = 1;
	}
	$.ajax({
		type: "POST",
		url: "php/bewerk_user.php",
		data: {
			id: select.value,
			super_user: super_user_value,
		},
		cache: false,
		success: (e) => {
			status_text.style = "color: green;";
			status_text.value = "Gebruiker is succesvol bijgewerkt.";
		},
		error: function (xhr, status, error) {
			console.error(xhr);
		},
	});

	return;
});
delete_button.addEventListener("click", (e) => {
	e.preventDefault();

	$.ajax({
		type: "POST",
		url: "php/delete_user.php",
		data: {
			id: select.value,
		},
		cache: false,
		success: (e) => {
			location.reload();
		},
		error: function (xhr, status, error) {
			console.error(xhr);
		},
	});

	return;
});

submit_toevoegen.addEventListener("click", (e) => {
	e.preventDefault();

	super_user_value = 0;

	if (superuser_toevoegen.checked) {
		super_user_value = 1;
	}
	$.ajax({
		type: "POST",
		url: "php/user_toevoegen.php",
		data: {
			username: naam_toevoegen.value,
			password: password.value,
			superuser: super_user_value,
		},
		cache: false,
		success: (e) => {
			status_text_toevoegen.style = "color: green;";
			status_text_toevoegen.innerHTML = "Gebruiker is succesvol toegevoegd.";
		},
		error: function (xhr, status, error) {
			console.error(xhr);
		},
	});

	return;
});
