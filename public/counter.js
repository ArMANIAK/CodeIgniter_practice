window.onload = () => {
    const counter = document.querySelector('p.counter');
    const uri = window.location.pathname.split('/');
    const [target,,id] = uri.splice(-3);
    const request = new XMLHttpRequest();
    const url = window.location.origin + '/index.php/' + target + '/' + 'viewsIncrement/' + id;
    request.open('GET', url);
    console.log(url);
    request.addEventListener('readystatechange', () => {
        if ((request.readyState==4) && (request.status==200)) {
            counter.innerText = 'Views: ' + (parseInt(counter.innerText.split(' ')[1]) + 1);
        }
    })
    request.send();
}