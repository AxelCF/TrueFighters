window.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("#filter-form");
    const searchSelect = document.querySelector("#search_select");
    const searchInput = document.querySelector("#search_input");
    const searchSubmit = document.querySelector("#search_submit");
    searchSubmit.addEventListener("click", (e) => {
        e.preventDefault();
        if (searchSelect.value) {
            window.location.href = `/articles?search=title:${searchInput.value}&searchFields=title:like&sortedBy=${searchSelect.value}`;
        } else {
            window.location.href = `/articles?search=title:${searchInput.value}&searchFields=title:like;`;
        }
    });
});
