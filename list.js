document.addEventListener("DOMContentLoaded", () => {
    fetch('https://rickandmortyapi.com/api/character')
        .then(response => response.json())
        .then(data => {
            var itemList = document.getElementById("my-list");
            var template = document.getElementById("list-template");

            data.results.forEach((character, index) => {
                var total = index + 1;
                var clone = template.content.cloneNode(true);

                clone.querySelector("[data-id='number']").textContent = `${total}`;
                clone.querySelector("[data-id='title']").textContent = character.name;
                clone.querySelector("[data-id='content']").textContent = `Status: ${character.status}, Species: ${character.species}`;
                clone.querySelector("[data-id='image']").src = character.image;

                itemList.appendChild(clone);
            });
        })
        .catch(error => console.error('Error fetching data:', error));
});
