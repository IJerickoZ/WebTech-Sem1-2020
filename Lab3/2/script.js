function validateForm() {
    let iD = document.forms["myForm"]["idCard"].value;
    let patt = /\d{13}/g
    if (patt.test(iD) == false) {
        alert("ID ใส่ได้เฉพาะตัวเลขเท่านั้น และต้องมี 13 หลัก");
        return false;
    }
    let Title = document.forms["myForm"]["title"].value;
    if (Title == "000") {
        alert("กรุณาเลือกคำนำหน้าชื่อก่อนส่งข้อมูล")
        return false;
    }
    let patt2 = /[a-z,ก-๙]/g
    let subdis = document.forms["myForm"]["Sub-District"].value;
    let dis = document.forms["myForm"]["District"].value;
    if (patt2.test(subdis) == false) {
        alert("กรุณาใส่ตำบลให้ถูกต้อง\n ***ตัวอักษรเท่านั้น***")
        return false;
    }
    if (patt2.test(dis) == false) {
        alert("กรุณาใส่อำเภอให้ถูกต้อง\n ***ตัวอักษรเท่านั้น***")
        return false;
    }
    let Provide = document.forms["myForm"]["provide"].value;
    if (Provide == "000") {
        alert("กรุณาเลือกจังหวัดก่อนส่งข้อมูล")
        return false;
    }
    let post = document.forms["myForm"]["postoffice"].value;
    let patt3 = /\d{5}/g
    if (patt3.test(post) == false) {
        alert("รหัสไปรษณีย์ใส่ได้เฉพาะตัวเลขเท่านั้น และต้องมี 5 หลัก");
        return false;
    }
    let num = document.forms["myForm"]["phonenum"].value;
    let patt4 = /\d{9}/g
    if (patt4.test(num) == false) {
        alert("เบอร์โทรศัพท์ใส่ได้เฉพาะตัวเลขเท่านั้น และต้องมี 9-10 หลัก");
        return false;
    }
}