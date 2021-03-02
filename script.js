const button = document.querySelector('#submit');

button.addEventListener('click', () => {
    const form = new FormData(document.querySelector('#profileData'));
    const url = '/zadanie_1/files/upload.php'
    const request = new Request(url, {
        method: 'POST',
        body: form
    });


    fetch(request)
        .then(response => response.json())
        .then(data => { console.log(data); })
});
//window.location.href=window.location.href;