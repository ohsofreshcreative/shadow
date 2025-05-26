import.meta.glob([
  '../images/**',
  '../fonts/**',
]);

import './menubar.js';
import './footer-accordion.js';
import './swiper.js';

/*--- GSAP ---*/

import gsap from 'gsap';
import ScrollTrigger from 'gsap/ScrollTrigger';

gsap.registerPlugin(ScrollTrigger);

/*--- SWIPER ---*/

import Swiper from 'swiper';
import 'swiper/css'; // podstawowe style

// Dodatkowe moduły (opcjonalnie)
import { Navigation, Pagination } from 'swiper/modules';

Swiper.use([Navigation, Pagination]);

/*--- ALPINE ---*/

import Alpine from 'alpinejs'

window.Alpine = Alpine
Alpine.start()

/*--- GSAP ---*/

document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    // Pobieramy wszystkie sekcje ACF
    gsap.utils.toArray("[data-gsap-anim='section']").forEach(section => {
    

		// Następnie animujemy elementy wewnętrzne sekcji z resetowanym opóźnieniem
        let elements2 = section.querySelectorAll("[data-gsap-element='img']");
        elements2.forEach((img) => {
            gsap.from(img, {
                opacity: 0,
                y: 50,
                filter: "blur(15px)",
                duration: 1,
                ease: "power2.out",
                delay: 0, // Resetujemy delay dla każdego nowego bloku
                scrollTrigger: {
                    trigger: img,
                    start: "top 90%", // Elementy animują się indywidualnie, gdy 10% jest widoczne
                    toggleActions: "play none none none",
                    once: true,
                }
            });
        });

        // Następnie animujemy elementy wewnętrzne sekcji z resetowanym opóźnieniem
        let elements = section.querySelectorAll("[data-gsap-element]:not([data-gsap-element='img'])");
        elements.forEach((element, index) => {
            gsap.from(element, {
                opacity: 0,
                y: 50,
                filter: "blur(15px)",
                duration: 1,
                ease: "power2.out",
                delay: index * 0.1, // Resetujemy delay dla każdego nowego bloku
                scrollTrigger: {
                    trigger: element,
                    start: "top 90%", // Elementy animują się indywidualnie, gdy 10% jest widoczne
                    toggleActions: "play none none none",
                    once: true,
                }
            });
        });
    });
});

/*--- SWIPER ---*/

document.addEventListener('DOMContentLoaded', () => {
  const swipers = document.querySelectorAll('.swiper');

  if (swipers.length > 0) {
    swipers.forEach(container => {
      new Swiper(container, {
        slidesPerView: 1,
        spaceBetween: 30,
        loop: true,
        pagination: {
          el: container.querySelector('.swiper-pagination'),
          clickable: true,
        },
        navigation: {
          nextEl: container.querySelector('.swiper-button-next'),
          prevEl: container.querySelector('.swiper-button-prev'),
        },
      });
    });
  }
});
