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
