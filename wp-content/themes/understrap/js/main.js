var getMoviesBtn = document.getElementById("get-movies-btn");
var moviesContainer = document.getElementById("movies");
const moviesContainer = document.querySelector('.movies');
if(getMoviesBtn) {
    console.log('hello');
}
$(document).ready(() => {
    $('#searchForm').on('submit', (e) => {
        let searchText = $('#searchText').val();
        getMovies(searchText);
        e.preventDefault();
    });
});

function getMovies(searchText) {
    console.log('hello');
 fetch('http://www.omdbapi.com/?apikey=10cca065&s='+searchText)
 .then(response => response.json())
 .then(data => {
     data.Search.map( movie => {

         var title = movie.Title;
         var movieTitle = title.toLowerCase();

         if(movieTitle.includes("blue")) {
            var color = "bg-primary";
         }
         if(movieTitle.includes("red")) {
            var color = "bg-danger";
         }
         if(movieTitle.includes("yellow")) {
            var color = "bg-warning";
         }
         if(movieTitle.includes("green")) {
            var color = "bg-success";
         }

         const innerContent = 
         `
            <div class="card m-3" style="width: 18rem;">
            <img class="card-img-top" src='${movie.Poster}'/>
                <div class="card-body ${color}">
                    <h5 class="text-center">Title: ${movie.Title}</h5>
                    <p class="card-text">Year: ${movie.Year}</p>
                    <p class="card-text">imdbID: ${movie.imdbID}</p>
                </div>
            </div>
         `

         moviesContainer.innerHTML += innerContent;
     })
 })
}
