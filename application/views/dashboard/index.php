<!-- Navbar -->
<header class="bg-white shadow-md py-4">
    <div class="container mx-auto px-6 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-blue-600">
            <a href="<?= base_url() ?>">Tryout</a>
        </h1>
        <nav>
            <ul class="flex space-x-6">
                <li><a href="<?= base_url() ?>" class="text-gray-700 hover:text-blue-600">Home</a></li>
                <li><a href="#features" class="text-gray-700 hover:text-blue-600">Features</a></li>
                <li><a href="#pricing" class="text-gray-700 hover:text-blue-600">Pricing</a></li>
                <li><a href="#contact" class="text-gray-700 hover:text-blue-600">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section class="bg-blue-600 text-white py-20">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-4">Ace Your Exams with Our Tryout Platform</h2>
        <p class="mb-6">Prepare for your exams with comprehensive mock tests, expert materials, and real-time results.</p>
        <a href="#signup" class="bg-white text-blue-600 py-3 px-6 rounded-md text-lg font-semibold hover:bg-gray-200">Get Started</a>
    </div>
</section>

<!-- Features Section -->
<section id="features" class="py-20 bg-gray-100">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-8">Our Features</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/100" alt="Feature 1" class="mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Comprehensive Tests</h3>
                <p class="text-gray-600">Access a wide variety of tests to prepare for your exams.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/100" alt="Feature 2" class="mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Real-Time Results</h3>
                <p class="text-gray-600">Get instant feedback on your performance with detailed reports.</p>
            </div>
            <div class="bg-white p-8 rounded-lg shadow-md">
                <img src="https://via.placeholder.com/100" alt="Feature 3" class="mx-auto mb-4">
                <h3 class="text-xl font-semibold mb-2">Expert Materials</h3>
                <p class="text-gray-600">Study with resources created by experts in their fields.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section id="pricing" class="py-20 bg-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-8">Pricing Plans</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-gray-100 p-8 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Basic</h3>
                <p class="text-gray-600 mb-4">$10 / month</p>
                <ul class="text-left mb-6">
                    <li class="mb-2">✔ Access to 50 tests</li>
                    <li class="mb-2">✔ Real-time results</li>
                    <li class="mb-2">✔ Basic materials</li>
                </ul>
                <a href="#" class="bg-blue-600 text-white py-2 px-6 rounded-md hover:bg-blue-700">Choose Plan</a>
            </div>
            <div class="bg-blue-600 text-white p-8 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Standard</h3>
                <p class="mb-4">$20 / month</p>
                <ul class="text-left mb-6">
                    <li class="mb-2">✔ Access to 100 tests</li>
                    <li class="mb-2">✔ Real-time results</li>
                    <li class="mb-2">✔ Expert materials</li>
                </ul>
                <a href="#" class="bg-white text-blue-600 py-2 px-6 rounded-md hover:bg-gray-200">Choose Plan</a>
            </div>
            <div class="bg-gray-100 p-8 rounded-lg shadow-md">
                <h3 class="text-xl font-semibold mb-2">Premium</h3>
                <p class="text-gray-600 mb-4">$30 / month</p>
                <ul class="text-left mb-6">
                    <li class="mb-2">✔ Unlimited tests</li>
                    <li class="mb-2">✔ Real-time results</li>
                    <li class="mb-2">✔ Premium materials</li>
                </ul>
                <a href="#" class="bg-blue-600 text-white py-2 px-6 rounded-md hover:bg-blue-700">Choose Plan</a>
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="py-20 bg-blue-600 text-white">
    <div class="container mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-8">Get In Touch</h2>
        <p class="mb-6">Have questions? We're here to help!</p>
        <a href="mailto:info@tryout.com" class="bg-white text-blue-600 py-3 px-6 rounded-md text-lg font-semibold hover:bg-gray-200">Contact Us</a>
    </div>
</section>

<!-- Footer -->
<footer class="bg-gray-800 text-gray-400 py-4 text-center">
    <p>&copy; 2024 Tryout Platform. All rights reserved.</p>
</footer>
