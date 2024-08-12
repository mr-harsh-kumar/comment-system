
document.addEventListener("DOMContentLoaded", function() {
    // GSAP animation

    t0=gsap.timeline();
    t0.from("#main-heading", {y:-400, duration:3, scale:2.5,flip:60});
    t0.to("#main-heading", {y:100, duration:1,opacity:0, flip:60});
    t0.to("#main-heading", {y:-10, duration:1,opacity:1, flip:60});

    gsap.from(".mynav", { x:-1000,delay:1, duration:3,opacity:0});
    t1=gsap.timeline();
    t1.from( "#nav4",{opacity:0,x:-200, duration:1.5 });
    t1.from( "#nav3",{opacity:0,x:-200, duration:1.5});  
    t1.from( "#nav2",{opacity:0,x:-200, duration:1.5});  
    t1.from( "#nav1",{opacity:0,x:-200, duration:1.5});  
    
    gsap.to("#left-content1", {opacity:20,scale:1.7,duration:2});
    // gsap.to({})
    gsap.from("#adjust", { duration: 1.4, opacity: 0, y: -50, stagger: 0.3, ease: "power2.out",scale:1.5 });
    gsap.from("#adjust1",{duration: 1.4, opacity: 0,scale:0.5, y:100})
    gsap.to("#img2", {scale:1.5,duration:2});

    // gsap.from(".bn5", {y:-100,duration:1.5});
    gsap.from("#enroll-btn",{x:100,duration:1.5,repeat:-1,yoyo:true, ease: "linear"});
    gsap.from(".bn30", {x:100,duration:1.5,repeat:-1,yoyo:true, ease: "linear"});
  
    gsap.to("#content1",{scale:1.5,duration:2,delay:0.2 ,x:600,y:100,scrollTrigger: {
        trigger: "#content1",
        scroller: "body",
        // markers: true ,
        start: "top 50%",
        end: "bottom 30%",
        scrub: 5, }
            }); 

    gsap.to("#myhead",{
        x:500,delay:0.2,scrollTrigger:{
            trigger:"#myhead",
            scroller:"body",
            scrub: 5,
            start: "top 50%",
            end: "bottom 40%",
            // markers: true ,
        }
    });




    gsap.to("#mycontent",{
        x:350,delay:0.2,scrollTrigger:{
            trigger:"#mycontent",
            scroller:"body",
            scrub: 5,
            start: "top 50%",
            end: "bottom 40%",
            // markers: true ,
        }
    });



    gsap.to(".course-image",{
        scale:0.9,scrollTrigger:{ 
        scrub: 5,
        start: "top 50%",
        end: "bottom 40%",
        trigger:".course-image",
        scroller:"body",
        // markers: true,
    }
        
    
    })

    gsap.to("#about-content",{
        x:-580,duration:3,scrollTrigger:{ 
            scrub: 5,
            start: "top 50%",
            end: "bottom 40%",
            trigger:"#about-content",
            scroller:"body",
            // markers: true,
        }
    })
    gsap.to("#left-image1",{
        x:980,duration:3,scrollTrigger:{ 
            scrub: 5,
            start: "top 50%",
            end: "bottom 40%",
            trigger:"#left-image1",
            scroller:"body",
            // markers: true,
        }
    })
    gsap.to("#left-image2",{
        x:980,duration:3,scrollTrigger:{ 
            scrub: 5,
            start: "top 50%",
            end: "bottom 40%",
            trigger:"#left-image2",
            scroller:"body",
            // markers: true,
        }
    })
    // t2=gsap.timeline();
    
    gsap.to("#explore-course1",{
        x:680,y:20,scale:1.3,duration:3,scrollTrigger:{ 
            scrub: 5,
            start: "top 40%",
            end: "bottom 40%",
            trigger:"#explore-course1",
            scroller:"body",
            // markers: true,
        }
    })

    gsap.to(".course-box",{
        x:-900,repeat:-1,yoyo:true,duration:9
    })

    

    t2=gsap.timeline();
    t2.from("#about-founder",{
        y:250,opacity:0,duration:2.5,scrollTrigger:{ 
            scrub: 5,
            start: "top 70%",
            end: "top 40%",
            trigger:"#about-founder",
            scroller:"body",
            // markers: true,
        }
    });


    t2.from("#slogan",{
        x:-50,opacity:0,duration:1.9,scrollTrigger:{ 
            scrub: 5,
            start: "top 65%",
            end: "bottom 40%",
            trigger:"#slogan",
            scroller:"body",
            // markers: true,
        }
    });


    t2.from("#name",{
        scale:1.2,x:-50,opacity:0,duration:1.9,scrollTrigger:{ 
            scrub: 5,
            start: "top 55%",
            end: "top 90%",
            trigger:"#name",
            scroller:"body",
            // markers: true,
        }
    });




     gsap.from("#start-line",{
        opacity:0,duration:1.5,scrollTrigger:{ 
            scrub: 5,
            start: "top 40%",
            end: "bottom 40%",
            trigger:"#start-line",
            scroller:"body",
            // markers: true,
        }
    });


     gsap.from(".people",{
        y:-40,opacity:0,duration:1.5,scrollTrigger:{ 
            scrub: 5,
            start: "top 50%",
            end: "bottom 40%",
            trigger:".people",
            scroller:"body",
            ease:"back",
            // markers: true,
        }
    });

    gsap.from("#text",{
            scale:-0.8,opacity:0,duration:1.5,scrollTrigger:{ 
            scrub: 5,
            start: "top 40%",
            end: "bottom 40%",
            trigger:"#text",
            scroller:"body",
            // markers: true,
        }
    });


     gsap.from("#interview-image2",{
        y:-400,opacity:0,duration:5.5,scrollTrigger:{ 
            scrub: 5,
            start: "top 50%",
            end: "bottom 40%",
            trigger:"#interview-image2",
            scroller:"body",
            ease:"back",
            // markers: true,
        }
    });


    
     gsap.from("#interview-image1",{
        y:400,opacity:0,duration:5.5,scrollTrigger:{ 
            scrub: 5,
            start: "top 50%",
            end: "bottom 40%",
            trigger:"#interview-image1",
            scroller:"body",
            ease:"back",
            // markers: true,
        }
    });


     gsap.to("#view-all",{
            scale:1.5,x:550,yoyo:true,duration:4.5,scrollTrigger:{ 
            scrub: 5,
            start: "top 40%",
            end: "bottom 40%",
            trigger:"#view-all",
            scroller:"body",
            // markers: true,
        }
    });


    gsap.to("#review-head", {
        x: 400,
        scale: 1.04,
        duration: 2,
        scrollTrigger: {
            scrub: 5,
            start: "top 55%",
            end: "top 90%",
            trigger: "#review-head",
            scroller: "body",
            ease: "back",
            // markers: true,
        }
    });
    

      gsap.from("#footer-last",{
            opacity:0,duration:7, scrollTrigger: {
            start: "top 95%",
            end: "top 80%",
            // markers: true,
        }
    });


    t3=gsap.timeline(repeat=-1);
    t3.to("#textContainer",{
        y:-20
    })


      // Get the span element
    //   const textContainer = document.getElementById('textContainer');

    //   Define the replacement text array
    //   const replacementText = ['1','ONE'];
  
    //   // Use GSAP to animate the text replacement
    //   gsap.to(textContainer, {
    //     repeat: -1, // Infinite loop
    //     yoyo: true, // Reverse the animation for a smooth loop
    //     color:"#00ffd5",
    //     duration: 1.7, // Animation duration in seconds
    //     onStart: () => {
    //       // Replace "one" with "1"
    //       textContainer.textContent = replacementText[0];
    //     },
    //     onRepeat: () => {
    //       // Toggle between "one" and "1" on each repeat
    //       textContainer.textContent = (textContainer.textContent === replacementText[0]) ? replacementText[1] : replacementText[0];
    //     }
    //   });

    
    const replacementText = ['1', 'ONE'];

    // Use GSAP to animate the text replacement
    gsap.to(textContainer, {
      repeat: -1, // Infinite loop
      yoyo: true, // Reverse the animation for a smooth loop
      color: "#00ffd5",
      duration: 1.7, // Animation duration in seconds
      x: "100%", // Slide in from left to right
      onStart: () => {
        // Check the initial content before replacing
        if (textContainer.textContent.trim() === "one") {
          textContainer.textContent = replacementText[0];
        }
      },
      onRepeat: () => {
        // Toggle between "one" and "1" on each repeat
        textContainer.textContent = (textContainer.textContent === replacementText[0]) ? replacementText[1] : replacementText[0];
      }
    });
    




}); 

  

