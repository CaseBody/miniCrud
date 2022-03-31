const submit_button = document.querySelector(".submit");
const naam_input = document.querySelector("#naam");
const email_input = document.querySelector("#email");
const geboorte_input = document.querySelector("#geboorte");
const telefoon_input = document.querySelector("#telefoon");
const toelichting_input = document.querySelector("#toelichting");
const success_text = document.querySelector("#success_text");
const form = document.querySelector("form");

success_text.style.display = "none";

function sollicitatie_verzonden() {
	form.style.display = "none";
	success_text.style.display = "";
}

submit_button.addEventListener("click", (e) => {
	e.preventDefault();

	$.ajax({
		type: "POST",
		url: "submit_sollicitatie.php",
		data: {
			naam: naam_input.value,
			email: email_input.value,
			geboorte: geboorte_input.value,
			telefoon: telefoon_input.value,
			geboorte_datum: geboorte_input.value,
			toelichting: toelichting_input.value,
		},
		cache: false,
		success: sollicitatie_verzonden,
		error: function (xhr, status, error) {
			console.error(xhr);
		},
	});
});
