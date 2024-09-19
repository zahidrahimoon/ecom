<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Booking</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @vite('/resources/css/app.css')
</head>
<style>
    .text-shadow-custom {
        text-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }
</style>

<body class="bg-gray-100">
    @include('components.header')
    @include('components.pagehero', ['title' => 'Get Appointemnt'])

    <main>
        <article>
            <!-- Booking Form Section -->
            <div class="container mx-auto mt-10">
                <h1 class="text-9xl font-extrabold text-gray-800 text-shadow-custom text-center pt-9 mb-[-100px]">Get Appointment</h1>
                <div class="flex flex-col-reverse md:flex-row justify-between items-center h-screen">
                    <!-- Form Section -->
                    <div class="w-full md:w-1/2 bg-white p-8 shadow-lg rounded-lg border-4 border-green-500"
                        style="height: 70vh;">


                        @if(session('success'))
                        <div class="bg-green-500 text-white p-4 mb-4 rounded-lg">
                            {{ session('success') }}
                        </div>
                        @endif

                        @if($errors->any())
                        <div class="bg-red-500 text-white p-4 mb-4 rounded-lg">
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif

                        <form action="{{ route('bookings.store') }}" method="POST">
                            @csrf
                            <!-- Hospital Name -->
                            <div class="mb-6">
                                <label class="block text-gray-700 font-medium mb-2">🏥 Hospital Name</label>
                                <input type="text" name="hospital_name"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                    placeholder="Enter hospital name" required>
                            </div>
                            <!-- Hospital Address -->
                            <div class="mb-6">
                                <label class="block text-gray-700 font-medium mb-2">📍 Hospital Address</label>
                                <input type="text" name="hospital_address"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                    placeholder="Enter hospital address" required>
                            </div>
                            <!-- Customer Mobile -->
                            <div class="mb-6">
                                <label class="block text-gray-700 font-medium mb-2">📞 Customer Mobile Number</label>
                                <input type="text" name="customer_mobile_number"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                    placeholder="Enter mobile number" required>
                            </div>
                            <!-- Pickup Address -->
                            <div class="mb-6">
                                <label class="block text-gray-700 font-medium mb-2">🚑 Pickup Address</label>
                                <input type="text" name="pickup_address"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                    placeholder="Enter pickup address" required>
                            </div>
                            <!-- Type of Service -->
                            <div class="mb-6">
                                <label class="block text-gray-700 font-medium mb-2">🛠️ Type of Service</label>
                                <select name="type"
                                    class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500"
                                    required>
                                    <option value="Emergency">Emergency</option>
                                    <option value="Non-Emergency">Non-Emergency</option>
                                </select>
                            </div>
                            <!-- Submit Button -->
                            <button type="submit"
                                class="w-full bg-green-600 text-white font-bold py-3 px-4 rounded-lg hover:bg-green-700 focus:outline-none focus:ring-4 focus:ring-green-500">
                                Submit Booking
                            </button>
                        </form>
                    </div>

                    <!-- Image Section (Hidden on Small Devices) -->
                    <div
                        class="hidden md:flex w-full md:w-1/2 justify-center items-center md:rounded-lg shadow-lg border-4 border-green-500"
                        style="height: 70vh;">
                        <img src="https://zaratheraphy.netlify.app/assets/images/book-img.svg" alt="Booking Illustration"
                            class="w-full h-full object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </article>
    </main>

    <!-- Footer Section -->
    @include('components.footer')

    <script src="https://kit.fontawesome.com/a076d05399.js"></script> <!-- Font Awesome for Icons -->
</body>

</html>
