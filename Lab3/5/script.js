function chart() {
    // document.getElementById("st1").style = "width: 60%;"
    let j = 30;
    for (let i = 1; i <= 5; i++) {
        document.getElementById("st" + i).style = "width:" + j + "%";
        j += 10;
    }
}