function validateForm() {
    let id = document.forms["myForm"]["idCard"].value;
    let name = document.forms["myForm"]["FirstName"].value;
    let lname = document.forms["myForm"]["LastName"].value;
    let subDistrict = document.forms["myForm"]["Sub-District"].value;
    let district = document.forms["myForm"]["District"].value;
    let postid = document.forms["myForm"]["postID"].value;
    let phone = document.forms["myForm"]["phoneNum"].value;
    let numcheck = /^[0-9]{13}/;
    let numcheck2 = /^[0-9]/;
    let phonenumcheck = /^[0-9]{9}/;
    let charcheck = /[a-zA-Zก-๙]/;
    if (numcheck.test(id) == false) {
        alert("ID Error\n ใส่ตัวเลข 13 หลัก")
        return false;
    }
    if (numcheck2.test(postid) == false) {
        alert("postID Error\n ใส่ตัวเลข 5 หลัก")
        return false;
    }
    if (phonenumcheck.test(phone) == false) {
        alert("phone Error\n ใส่ตัวเลข 9-10 หลัก")
        return false;
    }
    if (charcheck.test(name) == false) {
        alert("name Error\n ตัวอักษรเท่านั้น")
        return false;
    }
    if (charcheck.test(lname) == false) {
        alert("Lastname Error\n ตัวอักษรเท่านั้น")
        return false;
    }
    if (charcheck.test(subDistrict) == false) {
        alert("Sub Error\n ตัวอักษรอย่างน้อย 2 ตัวเท่านั้น")
        return false;
    }
    if (charcheck.test(district) == false) {
        alert("Dis Error\n ตัวอักษรเท่านั้น")
        return false;
    }

    let Title = document.forms["myForm"]["title"].value;
    if (Title == "000") {
        alert("กรุณาเลือกคำนำหน้าชื่อก่อนส่งข้อมูล")
        return false;
    }
    let provide = document.forms["myForm"]["Provide"].value;
    if (provide == "000") {
        alert("กรุณาเลือกจังหวัดก่อนส่งข้อมูล")
        return false;
    }
}