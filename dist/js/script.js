let navbar = document.getElementById("navbar");
let responsivenav = document.getElementById("responsive_nav");
let menuBtn = document.getElementById("menu-btn");
let navBar = document.getElementById("navbar");
let toggleBtn = document.getElementById("toggle-btn");
let storedCount = localStorage.getItem("Count");

// Select all like buttons and all like count elements
let likeBtns = document.querySelectorAll(".like-btn");
let likeCounts = document.querySelectorAll(".like-populate");

// Loop through all like buttons and attach the event listener to each one
likeBtns.forEach((likeBtn, index) => {
  let likeCount = likeCounts[index]; // Get the corresponding like count for this button
  let storedCount = localStorage.getItem(`Count_${index}`);

  // If a count is stored, populate it
  if (storedCount) {
    likeCount.innerText = storedCount;
  }

  likeBtn.addEventListener("click", () => {
    let currentCount = parseInt(likeCount.innerText);
    if (currentCount === 0) {
      currentCount++;
      console.log("added your like");
    } else {
      currentCount = 0;
    }

    // Update the like count display
    likeCount.innerText = currentCount;

    // Store the updated count in localStorage, unique for each button
    localStorage.setItem(`Count_${index}`, currentCount);
  });
});

menuBtn.addEventListener("click", () => {
  if (responsivenav.classList.contains("inactive")) {
    responsivenav.classList.remove("inactive");
    responsivenav.classList.add("active");
    console.log("mobile navbar opened");
  } else {
    responsivenav.classList.remove("active");
    responsivenav.classList.add("inactive");
  }
});

var swiper = new Swiper(".mySwiper", {
  // loop: true,
  grabCursor: true,
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1.8,
      spaceBetween: 10,
    },
    400: {
      slidesPerView: 2.2,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 3.2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 1.8,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 3.5,
      spaceBetween: 10,
    },
  },
});

var swiper = new Swiper(".mySwiper-2", {
  loop: true,
  grabCursor: true,
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  scrollbar: {
    el: '.swiper-scrollbar',
  },
  breakpoints: {
    320: {
      slidesPerView: 1.8,
      spaceBetween: 10,
    },
    405: {
      slidesPerView: 2.1,
      spaceBetween: 10,
    },
    560: {
      slidesPerView: 2.8,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 3.2,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 3.8,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 6.1,
      spaceBetween: 20,
    },
  },
});

var swiper = new Swiper(".mySwiper-3", {
  // loop: true,
  grabCursor: true,
  slidesPerView: 1,
  spaceBetween: 10,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  breakpoints: {
    320: {
      slidesPerView: 1.2,
      spaceBetween: 10,
    },
    405: {
      slidesPerView: 1.3,
      spaceBetween: 10,
    },
    560: {
      slidesPerView: 2.2,
      spaceBetween: 10,
    },
    640: {
      slidesPerView: 2.3,
      spaceBetween: 10,
    },
    768: {
      slidesPerView: 2.5,
      spaceBetween: 10,
    },
    1024: {
      slidesPerView: 3.2,
      spaceBetween: 20,
    },
  },
});
