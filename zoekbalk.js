function searchBooks() {
    var input, filter, xhr;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            displayBooks(JSON.parse(this.responseText));
        }
    };
    xhr.open("GET", "zoekbalk.php?q=" + filter, true);
    xhr.send();
}

function displayBooks(books) {
    var searchResultsDiv = document.getElementById("searchResults");
    searchResultsDiv.innerHTML = ""; // Clear previous search results
    if (books.length === 0) {
        searchResultsDiv.innerHTML = "No results found.";
    } else {
        for (var i = 0; i < books.length; i++) {
            var book = books[i];
            var title = book.title;
            var div = document.createElement("div");
            div.textContent = title;
            searchResultsDiv.appendChild(div);
        }
    }
}
