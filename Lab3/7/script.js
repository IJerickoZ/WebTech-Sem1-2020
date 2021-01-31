function changeBG() {
    let color = document.forms["myForm"]["code"].value;
    document.getElementById("aaa").style.background = color;
    document.getElementById("bbb").style.background = color;
    document.getElementById("ccc").style.background = color;
    return false;
}