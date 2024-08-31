<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Laravel DaisyUI with Coffee Theme</title>
</head>
<style>
    /* Fullscreen Hero Section */
    #hero {
        position: relative;
        height: 100vh;
        overflow: hidden;
    }

    /* Scroll Down Indicator */
    .scroll-indicator {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        cursor: pointer;
    }
</style>

<body class="bg-background text-primary-foreground min-h-screen">
    <header class="flex flex-col items-center justify-center h-screen bg-gradient-to-br from-secondary to-primary-foreground text-center text-primary-foreground">
        <h1 class="text-6xl font-extrabold mb-4">Welcome to Coffee House</h1>
        <p class="text-xl mb-8">Start your day with a perfect cup of coffee</p>
        <!-- Order Now Button triggers the modal -->
        <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="bg-secondary text-secondary-foreground py-3 px-8 rounded-full shadow-xl hover:bg-secondary/80 transition-transform transform hover:scale-105">Order Now</button>
        <div class="scroll-indicator text-primary-foreground">
            <svg class="w-8 h-8 animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
        </div>
    </header>

    <section class="container mx-auto py-16">
        <h2 class="text-4xl font-bold text-center mb-12">Our Menu</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            <div class="bg-card p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow transform hover:scale-105">
                <img src="https://placehold.co/300x200" alt="Espresso" class="mb-4 rounded-lg" />
                <h3 class="text-2xl font-bold mb-3">Espresso</h3>
                <p class="text-base text-muted-foreground mb-4">A strong black coffee</p>
                <span class="text-primary font-semibold text-lg">$3.99</span>
            </div>

            <div class="bg-card p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow transform hover:scale-105">
                <img src="https://placehold.co/300x200" alt="Latte" class="mb-4 rounded-lg" />
                <h3 class="text-2xl font-bold mb-3">Latte</h3>
                <p class="text-base text-muted-foreground mb-4">Espresso with steamed milk</p>
                <span class="text-primary font-semibold text-lg">$4.99</span>
            </div>

            <div class="bg-card p-6 rounded-xl shadow-lg hover:shadow-2xl transition-shadow transform hover:scale-105">
                <img src="https://www.lasabbq.com/cdn/shop/products/espresso.jpg?v=1660633495" alt="Cappuccino" class="mb-4 rounded-lg" />
                <h3 class="text-2xl font-bold mb-3">Cappuccino</h3>
                <p class="text-base text-muted-foreground mb-4">Espresso with frothy milk</p>
                <span class="text-primary font-semibold text-lg">$5.99</span>
            </div>
        </div>
    </section>

    <!-- Contact Us Section -->
    <section class="bg-primary-foreground text-primary py-16">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-bold mb-6">Contact Us</h2>
            <p class="text-xl mb-8">Have any questions or feedback? Reach out to us!</p>
            <button class="bg-secondary text-secondary-foreground py-3 px-8 rounded-full shadow-xl hover:bg-secondary/80 transition-transform transform hover:scale-105">Contact</button>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-primary-foreground text-primary text-center py-6">
        <p class="text-lg">&copy; 2023 Coffee House. All rights reserved.</p>
    </footer>

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed inset-0 z-50 flex justify-center items-center w-full h-full">
        <div class="relative p-4 w-full max-w-md">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow-lg dark:bg-primary-foreground">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b border-gray-300 rounded-t dark:border-secondary">
                    <h3 class="text-2xl font-bold text-primary dark:text-white">
                        Sign in to our platform
                    </h3>
                    <button type="button" class="text-secondary bg-transparent hover:bg-secondary/80 hover:text-secondary-foreground rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="authentication-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-6">
                    <form class="space-y-4" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-primary dark:text-white">Your email</label>
                            <input type="email" name="email" id="email" class="bg-secondary-foreground border border-primary text-primary text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5" placeholder="name@company.com" required />
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-primary dark:text-white">Your password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-secondary-foreground border border-primary text-primary text-sm rounded-lg focus:ring-secondary focus:border-secondary block w-full p-2.5" required />
                        </div>
                        <div class="flex justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-primary rounded bg-secondary-foreground focus:ring-3 focus:ring-secondary" required />
                                </div>
                                <label for="remember" class="ms-2 text-sm font-medium text-primary dark:text-white">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-secondary hover:underline dark:text-secondary">Lost Password?</a>
                        </div>
                        <button type="submit" class="w-full text-primary-foreground bg-primary hover:bg-primary/80 focus:ring-4 focus:outline-none focus:ring-primary-foreground font-medium rounded-lg text-sm px-5 py-2.5 text-center">Login to your account</button>
                        <div class="text-sm font-medium text-primary dark:text-white">
                            Not registered? <a href="#" class="text-secondary hover:underline dark:text-secondary">Create account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.querySelector('.scroll-indicator').addEventListener('click', function () {
            document.querySelector('section').scrollIntoView({ behavior: 'smooth' });
        });

        // JavaScript to toggle modal display
        document.querySelectorAll('[data-modal-toggle]').forEach(button => {
            button.addEventListener('click', () => {
                const modal = document.getElementById(button.getAttribute('data-modal-target'));
                modal.classList.toggle('hidden');
            });
        });

        document.querySelectorAll('[data-modal-hide]').forEach(button => {
            button.addEventListener('click', () => {
                const modal = button.closest('.fixed');
                modal.classList.add('hidden');
            });
        });
    </script>
</body>

</html>
