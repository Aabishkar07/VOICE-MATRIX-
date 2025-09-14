<script src="https://cdn.tailwindcss.com"></script>


<script>
    tailwind.config = {
        theme: {
            extend: {

                colors: {
                    primary: '#023047',
                    oldprimary: '#f3ab23',
                    secondary: '#3939ac',
                }
            },
            screens: {
                'xs': '320px',
                'sm': '640px',
                'md': '768px',
                'lg': '1024px',
                'xl': '1280px',
                '2xl': '1536px',
                '1299px': '1299px',
            },
        }
    }
</script>

<style>
    ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    ::-webkit-scrollbar-thumb {
        background-color: #555454;
        border-radius: 3px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background-color: #555454;
    }

    ::-webkit-scrollbar-track {
        background-color: #e2dddf;
    }
</style>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const divs = document.querySelectorAll(".fade-up");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        // Delay each element for a staggered effect
                        setTimeout(() => {
                            entry.target.classList.add("active");
                        }, 100); // Adjust delay as needed (100ms in this case)
                    }
                });
            }, {
                threshold: 0.2
            } // Trigger when 20% of the element is visible
        );

        divs.forEach((div) => observer.observe(div));
    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const elements = document.querySelectorAll(".slide-in-left");

        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                    }
                });
            }, {
                threshold: 0.1
            } // Trigger when 10% of the element is visible
        );

        elements.forEach((element) => observer.observe(element));
    });
</script>
