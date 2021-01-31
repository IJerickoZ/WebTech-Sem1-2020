function random() {
    var num1 = String(parseInt(Math.random() * 999999));
    document.getElementById("reward1").innerHTML = "0".repeat(6 - num1.length) + num1;
    var num2 = String(parseInt(Math.random() * 99));
    document.getElementById("reward2").innerHTML = "0".repeat(2 - num2.length) + num2;
    var num3 = String(parseInt(Math.random() * 999)),
        num4 = String(parseInt(Math.random() * 999));
    document.getElementById("fontreward3").innerHTML = "0".repeat(3 - num3.length) + num3;
    document.getElementById("backreward3").innerHTML = "0".repeat(3 - num4.length) + num4;
}