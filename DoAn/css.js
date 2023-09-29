var ad = document.querySelector(".floating-ad");
var adContent = document.querySelector(".ad-content");
var closeBtn = document.querySelector(".close-btn");

closeBtn.addEventListener("click", function() {
    adContent.classList.add("fade-out");
    setTimeout(function() {
        ad.style.display = "none";
    }, 500); // hiệu ứng phai mờ trong 0,5 giây
});

setTimeout(function() {
    ad.style.display = "block";
}, 5000); // hiển thị quảng cáo sau 5 giây