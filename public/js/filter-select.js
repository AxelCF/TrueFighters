window.addEventListener("DOMContentLoaded", () => {
    const form = document.querySelector("#filter-form");
    const searchSelect = document.querySelector("#search_select");
    const searchInput = document.querySelector("#search_input");
    const searchSubmit = document.querySelector("#search_submit");
    // Admin post

    const searchSelectPost = document.querySelector("#search_select_post");
    const searchInputPost = document.querySelector("#search_input_post");
    const searchSubmitPost = document.querySelector("#search_submit_post");

    if (searchSubmit) {
        searchSubmit.addEventListener("click", (e) => {
            e.preventDefault();
            if (searchSelect.value) {
                window.location.href = `/articles?search=title:${searchInput.value}&searchFields=title:like&orderBy=posts.created_at&sortedBy=${searchSelect.value}`;
            } else {
                window.location.href = `/articles?search=title:${searchInput.value}&searchFields=title:like;`;
            }
        });
    } else if (searchSubmitPost) {
        searchSubmitPost.addEventListener("click", (e) => {
            e.preventDefault();
            if (searchSelectPost.value) {
                window.location.href = `/admin/posts?search=title:${searchInputPost.value}&searchFields=title:like&orderBy=posts.created_at&sortedBy=${searchSelectPost.value}`;
            } else {
                window.location.href = `/admin/posts?search=title:${searchInputPost.value}&searchFields=title:like;`;
            }
        });
    }
});
