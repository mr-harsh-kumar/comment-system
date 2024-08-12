document.addEventListener("DOMContentLoaded", function() {
  
    gsap.to("#notes", {
        x: 780,
        scale: 1.4,
        duration: 3,
        scrollTrigger: {
            scrub: 5,
            start: "top 50%",
            end: "bottom 65%",
            trigger: "#notes",
            scroller: "body",
            // markers: true,
        }
    });

    gsap.to("#projects", {
        x: 730,
        scale: 1.4,
        duration: 3,
        scrollTrigger: {
            scrub: 5,
            start: "top 50%",
            end: "bottom 65%",
            trigger: "#projects",
            scroller: "body",
            // markers: true,
        }
    });

    gsap.to("#imp-ques", {
        x: 550,
        scale: 1.4,
        duration: 3,
        scrollTrigger: {
            scrub: 5,
            start: "top 50%",
            end: "bottom 65%",
            trigger: "#imp-ques",
            scroller: "body",
            // markers: true,
        }
    });


    gsap.to(".intro",{
        repeat:-1,opacity:0,yoyo:true,duration:2
    });
});
