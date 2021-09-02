    //code view
    document.addEventListener('DOMContentLoaded', (event) => {
        document.querySelectorAll('pre code').forEach((el) => {
            hljs.highlightElement(el);
        });
    });
    //code tab menu
    const tabBtn1 = document.querySelectorAll(".view-title ul li");
    const tabCont1 = document.querySelectorAll(".view-cont > div");

    tabBtn1.forEach((element, index) => {
        element.addEventListener("click", function () {
            tabBtn1.forEach(el => {
                el.classList.remove("active");
            })
            element.classList.add("active");

            tabCont1.forEach(el => {
                el.style.display = "none";
            })

            tabCont1[index].style.display = "block";
        })
    })

    //Modal
    document.querySelector(".info button").addEventListener("click", function () {
        document.querySelector("#modal").classList.add("show");
        document.querySelector("#modal").classList.remove("hide");
    });
    document.querySelector(".modal-cont button").addEventListener("click", function () {
        document.querySelector("#modal").classList.add("hide");
    });

