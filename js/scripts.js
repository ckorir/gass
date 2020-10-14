function delay(n) {
    n = n || 2000;
    return new Promise((done) => {
        setTimeout(() => {
            done();
        }, n);
    });
}

function pageTransition() {
    var tl = gsap.timeline();
    tl.to(".loading-screen", {
        duration: 1.5,
        width: "100%",
        left: "0%",
        ease: "Expo.easeInOut",
    });

    tl.to(".loading-screen", {
        duration: 1.5,
        width: "100%",
        left: "100%",
        ease: "Expo.easeInOut",
        delay: 0.1,
    });
    tl.set(".loading-screen", { left: "-100%" });
}

function contentAnimation() {
    var tl = gsap.timeline();
    tl.from(".animate-this", { duration: 1, y: 30, opacity: 0, stagger: 0.4, delay: 0.2 });
}

$(function () {
    barba.init({
        sync: true,

        transitions: [
            {
                async leave(data) {
                    const done = this.async();

                    pageTransition();
                    await delay(1000);
                    done();
                },

                async enter(data) {
                    contentAnimation();
                },

                async once(data) {
                    contentAnimation();
                },
            },
        ],
    });
});

function confirm(){
    var name = document.getElementById("name").value;
    var number = document.getElementById("number").value;
    var amount = document.getElementById("amount").value;
    var product = document.getElementsByName("prod").value;
    
    if(name === '' || number === '' || amount === ''){
        swal({
            title: "Error",
            text: "You haven't filled all fields!",
            icon: "warning",
          });
    }
    
    else{
        swal({
            icon: "success",
            title: "Order Confirmed",
            text: "You will be contacted shortly"
          });
    }


}