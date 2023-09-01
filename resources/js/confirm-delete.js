const deleteForm = document.getElementById("delete-form");
const comicTitle = document.getElementById("comic-title").innerText;

deleteForm.addEventListener("submit", (e) => {
    e.preventDefault();
    const proceed = confirm(`Do you really wan to delete ${comicTitle}?`);

    if (proceed) deleteForm.submit();
});
