    const btnLike = document.getElementById('like-btn')
    const dataVinyl = document.getElementById('like-btn').getAttribute('data-vinyl-id')
    if (btnLike) {
        btnLike.addEventListener('click', () => {
            likeVinyl(dataVinyl) })
    }

    function likeVinyl(vinylId) {

    fetch(`/laboiteavinyles/vinyles/details/like?id=${vinylId}`)
        .then(response => response.json())
        .then(() => {
            btnLike.classList.toggle("fa-solid");
            const likesNumber = document.getElementById("likes-nbr");
            const newCount = parseInt(likesNumber.getAttribute("value"))+1;
            document.getElementById("likes-nbr").innerHTML=newCount;
        })
        .catch(error => console.error(error))
}
