gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.matchMedia({
  // Desktop and tablet
  "(min-width: 768px)": function () {
    // 1. p-concept animation
    gsap
      .timeline({
        scrollTrigger: {
          trigger: ".p-concept",
          start: "top top",
          end: "+=100%",
          scrub: 1.5,
          pin: true,
          anticipatePin: 1,
        },
      })
      .to(
        ".p-concept__paragraph",
        {
          x: "-6vw",
          scale: 0.7,
          ease: "none",
        },
        0
      )
      .to(
        ".p-concept__img",
        {
          x: "6vw",
          scale: 0.7,
          ease: "none",
        },
        0
      );
      

    // 2. js-facility-wrapper animation
    gsap
      .timeline({
        scrollTrigger: {
          trigger: ".js-facility-wrapper",
          start: "top top",
          end: "+=100%",
          scrub: 1.5,
          pin: true,
          anticipatePin: 1,
        },
      })
      .to(
        ".p-facility-intro__img",
        {
          x: "-6vw",
          scale: 0.7,
          ease: "none",
        },
        0
      )
      .to(
        ".p-facility-intro__paragraph",
        {
          x: "6vw",
          scale: 0.7,
          ease: "none",
        },
        0
      );

    //3. Gallery animation
    gsap
      .timeline({
        scrollTrigger: {
          trigger: ".p-facility-intro__gallery",
          start: "top top",
          end: "+=100%",
          scrub: 1.5,
          pin: true,
          anticipatePin: 1,
        },
      })
      .to(
        ".p-facility-intro__img--shop",
        {
          x: "-6vw",
          scale: 0.7,
          ease: "none",
        },
        0
      )
      .to(
        ".p-facility-intro__img--appearance",
        {
          x: "6vw",
          scale: 0.7,
          ease: "none",
        },
        0
      )
      .to(
        ".p-facility-intro__img--flag",
        {
          x: "-6vw",
          scale: 0.7,
          ease: "none",
        },
        0
      );
  },
});