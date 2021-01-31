let first = 2,
    img = ['1', '2', '4', '3'];

function swap() {
    for (let i = 1; i < 5; i++) {
        document.getElementById('img' + (i)).src = "http://10.0.15.12/lab3/images/" + img[(first + i) % 4] + ".png";
    }
    if (first - 1 < 0) {
        first = (4 + first - 1) % 4;
    } else {
        first = (first - 1) % 4;
    }
}