//const data = null;

var actors=[];
function getActor(birthdate){
const xhr = new XMLHttpRequest();
//xhr.withCredentials = true;
if(birthdate == "")
return;
var date = new Date(birthdate);
var day = date.getDate();
var month = date.getMonth() + 1; // Add 1 because getMonth() returns a zero-based index

function sleep(ms) {
	return new Promise(resolve => setTimeout(resolve, ms));
  }

xhr.addEventListener("readystatechange", function () {
	if (this.readyState === this.DONE) {
        actors = JSON.parse(xhr.response); //name/nm19489/
		//console.log(actors[0]);
		for (let index = 0; index < actors.length; index++) {
			let nm = actors[index].substr(6, 9); // /name/nm156494/
			console.log(nm);
        	setTimeout(() => {
          		getActorName(nm);
        	}, index * 1000); // delay 1 second for each actor
		}
	}
});
xhr.open("GET", "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month="+month+"&day="+day);
xhr.setRequestHeader("X-RapidAPI-Key", "b9f028031bmshe5011abb8a0531dp1b7c59jsne7370f7fcf49");
xhr.setRequestHeader("X-RapidAPI-Host", "online-movie-database.p.rapidapi.com");


xhr.send();
}
function getActorName(nm)
{
	const data = null;

	const xhr = new XMLHttpRequest();
	//xhr.withCredentials = true;

	xhr.addEventListener("readystatechange", function () {
		var actorNames = [];

		if (this.readyState === this.DONE) {
			let obj = JSON.parse(xhr.response);
			for (let key in obj) {
				if (key === "name") {
					actorNames.push(obj[key]);
				  	console.log(obj[key]);
				}
		}
		document.getElementById("actorNames").innerHTML = actorNames;

	}});
	
	xhr.open("GET", "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst="+nm);
	xhr.setRequestHeader("X-RapidAPI-Key", "b9f028031bmshe5011abb8a0531dp1b7c59jsne7370f7fcf49");
	xhr.setRequestHeader("X-RapidAPI-Host", "online-movie-database.p.rapidapi.com");

	xhr.send();
}
