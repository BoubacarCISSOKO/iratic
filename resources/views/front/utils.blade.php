
<style>
        .reveal {
        position: relative;
        opacity: 1;
        }

        .reveal.active {
        opacity: 1;
        }
    
        .active.fade-left {
            animation: fade-left 1s ease-in;
        }
        .active.fade-right {
            animation: fade-right 1s ease-in;
        }
        .active.fade-top {
            animation: fade-top 1s ease-in;
        }

        @keyframes fade-left {
            0% {
                transform: translateX(-100px);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes fade-top {
            0% {
                transform: translateX(-100px);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
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
</script>