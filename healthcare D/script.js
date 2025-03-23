const container = document.getElementById('container');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

// const container = document.getElementById('container');
// const registerBtn = document.getElementById('register');
// const loginBtn = document.getElementById('login');

// // Add this code to redirect to sign-in page
// loginBtn.addEventListener('click', () => {
//     window.location.href = "sign-in.html";  // Change "sign-in.html" to your actual sign-in page URL
// });

// registerBtn.addEventListener('click', () => {
//     container.classList.add("active");
// });
