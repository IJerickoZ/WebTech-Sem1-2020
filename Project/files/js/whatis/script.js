var timeline = new TimelineMax({});
var timeline1 = new TimelineMax({});
var timeline2 = new TimelineMax({});
var timeline3 = new TimelineMax({});

timeline.to(".all", 1, {
    opacity: 1
});
timeline1.to(".first-sec-box", 1, {
    opacity: 1
});
timeline2.to(".first-sec-circle", 1, {
    height: "920px",
    width: "920px"
});

timeline3.to(".top-img", 1, {
    opacity: 1,
    left: "63.5rem"
});
var number1 = 0

let gsapBgWave = gsap.timeline().from(".bg-wave", {
    repeat: -1,
    opacity: 1,
    scale: 0,
    duration: 5,
    stagger: {
        each: 0.6,
        opacity: 0,
        from: "center",
        yoyo: true,
    },

    ease: Power1.easeOut,
})

// read more read less
function go_lefttop(n) {


    switch (number1 + n) {
        case 0:
            var wid = "25%";
            break;
        case 1:
            var wid = "50%";
            document.getElementById("ic1").style.opacity = '1'
            document.getElementById('warpper-box').style = 'left:-30rem; transition-duration: 1s;'
            number1 = number1 + n;
            break;
        case 2:
            var wid = "75%";
            document.getElementById('warpper-box').style = 'left:-100rem; transition-duration: 1s;'
            number1 = number1 + n;
            break;
        case 3:
            var wid = "100%";
            document.getElementById("left1").style.opacity = "0.2"
            document.getElementById('warpper-box').style = 'left:-170rem; transition-duration: 1s;'
            number1 = number1 + n;
            break;
    }
    gsap.to(".first-nav", 0.5, {
        width: wid
    });

}

function go_righttop(n) {
    switch (number1 + n) {
        case 0:
            var wid = "25%";
            document.getElementById("ic1").style = 'opacity: 0.2'
            document.getElementById('warpper-box').style = 'left:40rem; transition-duration: 1s;'
            document.getElementById('right1')
            number1 = number1 + n;
            break;
        case 1:
            document.getElementById('warpper-box').style = 'left:-30rem; transition-duration: 1s;'
            var wid = "50%";
            number1 = number1 + n;
            break;
        case 2:
            var wid = "75%";
            document.getElementById('warpper-box').style = 'left:-100rem; transition-duration: 1s;'
            number1 = number1 + n;
            break;
        case 3:
            var wid = "100%";
            number1 = number1 + n;
            break;
    }
    gsap.to(".first-nav", 0.5, {
        width: wid
    });


}
number2 = 0
number3 = 0

function go_left1(n) {
    switch (number2 + n) {
        case 0:
            var wid = "85%";
            break;
        case 1:
            var wid = "100%";
            document.getElementById('wapper-card').style = 'left:-10rem; transition-duration: 1s;'
            number2 = number2 + n;
            break;
    }
    gsap.to(".sec-nav", 0.5, {
        width: wid
    });

}

function go_right1(n) {
    switch (number2 + n) {
        case 0:
            var wid = "85%";
            document.getElementById('wapper-card').style = 'left:22.5rem; transition-duration: 1s;'

            number2 = number2 + n;
            break;
        case 1:
            var wid = "100%";
            number2 = number2 + n;
            break;
    }
    gsap.to(".sec-nav", 0.5, {
        width: wid
    });
}

function go_left2(n) {


    switch (number3 + n) {
        case 0:
            var wid = "85%";
            break;
        case 1:
            var wid = "100%";
            document.getElementById('warpper-card1').style = 'left:-10rem; transition-duration: 1s;'
            number3 = number3 + n;
            break;
    }
    gsap.to(".thir-nav", 0.5, {
        width: wid
    });

}

function go_right2(n) {
    switch (number3 + n) {
        case 0:
            var wid = "85%";
            document.getElementById('warpper-card1').style = 'left:22.5rem; transition-duration: 1s;'
            number3 = number3 + n;
            break;
        case 1:
            var wid = "100%";
            number3 = number3 + n;
            break;
    }
    gsap.to(".thir-nav", 0.5, {
        width: wid
    });

}
var controller = new ScrollMagic.Controller();

var tweenSecur = gsap.to("#secur", {
    x: -1200
});
var tweenWellbe = gsap.to("#wellbe", {
    x: -1200
});
var tweenMovetech = gsap.to("#tech-move", {
    y: 900
        // transformOrigin: "center center"
});
var tweenFirstBoxScale = gsap.to("#first-box", {
    width: "80.5%"
})
var tweenWheel = gsap.to("#wheel", {
    x: "55%",
    width: "65%",
    y: 40
})


animate("#secur", 1000, tweenSecur);
animate("#wellbe", 1000, tweenWellbe);
animate(".trigger", 1000, tweenMovetech);
animate("#first-box", 1500, tweenFirstBoxScale);
animate("#wheel", 1000, tweenWheel);

function animate(tag, dur, tween) {
    var sceen1 = new ScrollMagic.Scene({
            triggerElement: tag,
            duration: dur,
        })
        .setTween(tween)
        .addTo(controller)
}







document.getElementById("bot-box").style = 'position:relative;height:730px;width:1260px;transition-duration: 1s; left:0rem; top:-2rem';
document.getElementById("warp-text-2").style = 'position: relative; top:0px;transition-duration: 1s;';
document.getElementById("eiei1").style = 'position: relative;left:50rem;transition-duration: 1s;'

function res() {
    document.getElementById("bot-box").style = 'position:relative; height:850px; width:120%; transition-duration: 1s; left:-25rem;';
    document.getElementById("warp-text-2").style = 'position: relative; top:-120px;transition-duration: 1s;';
    document.getElementById("eiei1").style = 'position: relative;left:75rem;transition-duration: 1s;';
    document.getElementById("last-but").style = "color:#3ddc84;transition-duration: 0.5s;";
}

function res1() {
    document.getElementById("bot-box").style = 'position:relative;height:730px;width:1260px;transition-duration: 1s; left:0rem;';
    document.getElementById("warp-text-2").style = 'position: relative; top:0px;transition-duration: 1s;';
    document.getElementById("eiei1").style = 'position: relative;left:50rem;transition-duration: 1s;'
    document.getElementById("last-but").style = "color:white;transition-duration: 0.5s;";

}

function more(id1, id2) {
    document.getElementById(id1).style = "opacity:0; transition-duration: 0.25s;"
    document.getElementById(id2).style = "opacity:1; transition-duration: 0.25s;  top:-21rem"
}

function less(id1, id2) {
    document.getElementById(id1).style = "opacity:1; transition-duration: 0.25s;"
    document.getElementById(id2).style = "opacity:0; transition-duration: 0.25s;top:-18rem"

}

function moveabit(id) {
    if (id == "am") {
        document.getElementById(id).style = "transform: translate(10px, -10px); transition-duration: 0.25s"
    } else {
        document.getElementById(id).style = "transform: translateX(10px); transition-duration: 0.25s"
    }
}

function outabit(id) {
    if (id == "am") {
        document.getElementById(id).style = "transform: translateX(0px, 0px); transition-duration: 0.25s"
    } else {
        document.getElementById(id).style = "transform: translateX(0px); transition-duration: 0.25s"
    }
}