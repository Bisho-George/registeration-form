let actors = [];
let flag = true;

function getActor(birthdate) {
  const xhr = new XMLHttpRequest();
  if (birthdate == "") return;
  let date = new Date(birthdate);
  let day = date.getDate();
  let month = date.getMonth() + 1;

  /*function sleep(ms) {
    return new Promise((resolve) => setTimeout(resolve, ms));
  }*/

  xhr.addEventListener("readystatechange", function () {
    if (this.readyState === this.DONE) {
      if (this.status === 200) {
        actors = JSON.parse(xhr.response);
        let actorList = document.querySelector("#actor-names");
        actorList.innerHTML = "";
        if (flag) {
          for (let index = 0; index < actors.length; index++) {
            let nm = actors[index].substr(6, 9);
            setTimeout(() => {
              getActorName(nm);
            }, index * 1000);
          }
          flag = false;
        } else {
          flag = true;
        }
      } else {
        console.error("Failed to get actors", xhr.status, xhr.statusText);
      }
    }
  });

  xhr.addEventListener("error", function () {
    console.error("Failed to get actors");
  });

  xhr.open(
    "GET",
    "https://online-movie-database.p.rapidapi.com/actors/list-born-today?month=" +
      month +
      "&day=" +
      day
  );
  xhr.setRequestHeader("X-RapidAPI-Key", "b9f028031bmshe5011abb8a0531dp1b7c59jsne7370f7fcf49");
  xhr.setRequestHeader("X-RapidAPI-Host", "online-movie-database.p.rapidapi.com");

  xhr.send();
}

function getActorName(nm) {
  const data = null;

  const xhr = new XMLHttpRequest();
  xhr.addEventListener("readystatechange", function () {
    let actorNames = [];

    if (this.readyState === this.DONE) {
      let obj = JSON.parse(xhr.response);
      for (let key in obj) {
        if (key === "name") {
          actorNames.push(obj[key]);
        }
      }
      let actorList = document.querySelector("#actor-names");
      let fragment = document.createDocumentFragment();
      for (let actor of actorNames) {
        let actorName = document.createElement("li");
        let text = document.createTextNode(actor);
        actorName.appendChild(text);
        fragment.appendChild(actorName);
      }
      actorList.appendChild(fragment);
    }
  });

  xhr.open(
    "GET",
    "https://online-movie-database.p.rapidapi.com/actors/get-bio?nconst=" + nm
  );
  xhr.setRequestHeader("X-RapidAPI-Key", "b9f028031bmshe5011abb8a0531dp1b7c59jsne7370f7fcf49");
  xhr.setRequestHeader("X-RapidAPI-Host", "online-movie-database.p.rapidapi.com");

  xhr.send();
}

