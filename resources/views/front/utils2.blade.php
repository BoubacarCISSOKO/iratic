<style>

    .reveal {
        position: relative;
        transform: translateY(150px);
        opacity: 0;
        transition: 2s all ease;
    }

    .reveal.active {
        transform: translateY(0);
        opacity: 1;
    }

    @keyframes fade-right {
        0% {
            transform: translateX(100px);
            opacity: 0;
        }
        100% {
            transform: translateX(0);
            opacity: 1;
        }
    }

</style>
<script>
    let section = document.querySelectorAll("section");

    function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible) {
        reveals[i].classList.add("active");
        } else {
        reveals[i].classList.remove("active");
        }
    }
    }

    window.addEventListener("scroll", reveal);

    // To check the scroll position on page load
    reveal();

</script>