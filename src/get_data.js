import { writeFile } from 'fs';
function fetchData() {
    const endpoint = 'https://fakestoreapi.com/products';
    const prom = fetch(endpoint);

    prom.then((response) => {
        return response.json();
    })
    .then((data) => {
        console.log(data);
        // file = fopen('./data.json');
        // fwrite(file, data);
        writeFile(file, './data.json');
    })
    .catch(errHandler);
}
fetchData();