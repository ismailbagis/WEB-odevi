async function showData() {
  let response = await fetch(
    "https://api.nasa.gov/planetary/apod?api_key=mJkN2FrHOPUiiTwlkTwFGVVSBcHuYhwC30gkPG1D",
    {
      method: "GET",
      url: "https://api.nasa.gov/planetary/apod?api_key=mJkN2FrHOPUiiTwlkTwFGVVSBcHuYhwC30gkPG1D",
    }
  );
  var data = await response.json();
const apibox =document.querySelector(".apibox");
const apititle =document.querySelector(".api-title");
const apidate =document.querySelector(".api-date");
const apidescription =document.querySelector(".api-description");


apibox.innerHTML=`
<img src="${data.url}" alt="" />
`
apititle.innerHTML=`
${data.title}
`
apidate.innerHTML=`
${data.date}
`
apidescription.innerHTML=`
${data.explanation}

`

 console.log(data);
}

showData();