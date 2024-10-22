let navbar = document.getElementById("navbar");
let responsivenav = document.getElementById("responsive_nav");
let menuBtn = document.getElementById("menu-btn");
// let toggleBtn = document.getElementById("toggle-btn");
// let toggleStateBtn = document.getElementById("toggle-state-btn");
// let login = document.getElementById("login");
// let Signup = document.getElementById("signup");
// let textChange = document.getElementById("text-change");
// let welcomeBack = document.getElementById("welcome-back");
// let thanksBack = document.getElementById("thanks-back");




// toggleStateBtn.addEventListener("click", () => {
//     if (Signup.classList.contains("hidden")) {
//       Signup.classList.remove("hidden");
//       Signup.classList.add("block");
//       login.classList.add("hidden");
//       login.classList.remove("block");
//       thanksBack.classList.remove("hidden");
//       thanksBack.classList.add("block");
//       welcomeBack.classList.add("hidden");
//       welcomeBack.classList.remove("block");
//       textChange.innerText = "Already";
//     } else {
//       Signup.classList.remove("block");
//       Signup.classList.add("hidden");
//       login.classList.add("block");
//       login.classList.remove("hidden");
//       thanksBack.classList.remove("block");
//       thanksBack.classList.add("hidden");
//       welcomeBack.classList.add("block");
//       welcomeBack.classList.remove("hidden");
//       textChange.innerText = "Don't";
//     }
//   });
  
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