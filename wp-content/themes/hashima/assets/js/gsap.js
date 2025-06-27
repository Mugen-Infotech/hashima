gsap.registerPlugin(ScrollTrigger);

// ScrollTrigger.matchMedia({
//   // Desktop and tablet
//   "(min-width: 768px)": function () {
//     // 1. p-concept animation
//     gsap
//       .timeline({
//         scrollTrigger: {
//           trigger: ".p-concept",
//           start: "top top",
//           end: "+=100%",
//           scrub: 1.5,
//           pin: true,
//           anticipatePin: 1,
//         },
//       })
//       .to(
//         ".p-concept__paragraph",
//         {
//           x: "-6vw",
//           scale: 0.7,
//           ease: "none",
//         },
//         0
//       )
//       .to(
//         ".p-concept__img",
//         {
//           x: "6vw",
//           scale: 0.7,
//           ease: "none",
//         },
//         0
//       );
      

//     // 2. js-facility-wrapper animation
//     gsap
//       .timeline({
//         scrollTrigger: {
//           trigger: ".js-facility-wrapper",
//           start: "top top",
//           end: "+=100%",
//           scrub: 1.5,
//           pin: true,
//           anticipatePin: 1,
//         },
//       })
//       .to(
//         ".p-facility-intro__img",
//         {
//           x: "-6vw",
//           scale: 0.7,
//           ease: "none",
//         },
//         0
//       )
//       .to(
//         ".p-facility-intro__paragraph",
//         {
//           x: "6vw",
//           scale: 0.7,
//           ease: "none",
//         },
//         0
//       );

//     //3. Gallery animation
//     gsap
//       .timeline({
//         scrollTrigger: {
//           trigger: ".p-facility-intro__gallery",
//           start: "top top",
//           end: "+=100%",
//           scrub: 1.5,
//           pin: true,
//           anticipatePin: 1,
//         },
//       })
//       .to(
//         ".p-facility-intro__img--shop",
//         {
//           x: "-6vw",
//           scale: 0.7,
//           ease: "none",
//         },
//         0
//       )
//       .to(
//         ".p-facility-intro__img--appearance",
//         {
//           x: "6vw",
//           scale: 0.7,
//           ease: "none",
//         },
//         0
//       )
//       .to(
//         ".p-facility-intro__img--flag",
//         {
//           x: "-6vw",
//           scale: 0.7,
//           ease: "none",
//         },
//         0
//       );
//   },
// });

document.addEventListener('DOMContentLoaded', function() {
  gsap.registerPlugin(ScrollTrigger);
  
  gsap.from('.p-concept__paragraph span', {
    y: 50,
    opacity: 0,
    duration: 0.8,
    stagger: 0.1,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: '.p-concept',
      start: 'top 80%',
      toggleActions: 'play none none none'
    }
  });

  gsap.to('.p-concept__img', {
    yPercent: -15,
    ease: "none",
    scrollTrigger: {
      trigger: '.p-concept',
      start: "top bottom",
      end: "bottom top",
      scrub: 1
    }
  });

  gsap.from('.p-facility-intro__paragraph span', {
    y: 30,
    opacity: 0,
    duration: 0.6,
    stagger: 0.05,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: '.p-facility-intro__paragraph',
      start: 'top 80%',
      toggleActions: 'play none none none'
    }
  });

  gsap.to('.p-facility-intro__img--signboard', {
    yPercent: -10,
    ease: "none",
    scrollTrigger: {
      trigger: '.p-facility-intro',
      start: "top bottom",
      end: "bottom top",
      scrub: 1
    }
  });

  gsap.to('.p-facility-intro__img--chair', {
    yPercent: 15,
    ease: "none",
    scrollTrigger: {
      trigger: '.p-facility-intro',
      start: "top bottom",
      end: "bottom top",
      scrub: 1
    }
  });

  gsap.from('.p-facility-intro__gallery img', {
    y: 50,
    opacity: 0,
    duration: 0.8,
    stagger: 0.2,
    ease: 'power2.out',
    scrollTrigger: {
      trigger: '.p-facility-intro__gallery',
      start: 'top 80%',
      toggleActions: 'play none none none'
    }
  });

  gsap.to('.p-facility-intro__img--flag', {
    yPercent: 15,
    ease: "none",
    scrollTrigger: {
      trigger: '.p-facility-intro__gallery',
      start: "top bottom",
      end: "bottom top",
      scrub: 1
    }
  });
  
  gsap.to('.p-facility-intro__img--appearance', {
    yPercent: -10,
    ease: "none",
    scrollTrigger: {
      trigger: '.p-facility-intro__gallery',
      start: "top bottom",
      end: "bottom top",
      scrub: 1
    }
  });

  gsap.to('.p-facility-intro__img--shop', {
    yPercent: 15,
    ease: "none",
    scrollTrigger: {
      trigger: '.p-facility-intro__gallery',
      start: "top bottom",
      end: "bottom top",
      scrub: 1
    }
  });

});