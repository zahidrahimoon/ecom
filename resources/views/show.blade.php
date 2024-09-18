<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Management</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        main {
            height: 70vh;
        }

        .half-height {
            height: 60vh;
        }
        .image-container img {
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900">

    @include('components.header')
    @include('components.pagehero', ['title' => 'Profile Page'])

    <main class="max-w-8xl ml-[100px] flex items-center space-x-8">
        <!-- Profile Image -->
        <div class="w-[60%] mr-10 half-height flex items-center justify-center bg-gray-200 rounded-lg shadow-lg overflow-hidden">
            <div class="w-full h-full flex items-center justify-center">
                <img src="https://media.gettyimages.com/id/949336276/vector/businessman-profile-icon-on-money-and-cryptocurrency-background.jpg?s=612x612&w=0&k=20&c=l9bWLk4VG4ybVWXeUa6jhSF3QnpGWcF4Hlo-Sq8erms=" alt="Profile Image" class="object-cover w-full h-full">
            </div>
        </div>

        <!-- Profile Form -->
        <div class="w-[20%] half-height bg-white p-10 rounded-lg shadow-lg dark:bg-gray-800 flex flex-col justify-between">
            <div>
                <h2 class="text-3xl font-oswald text-rich-black-fogra-29 mb-6">Profile Information</h2>

                <form action="{{ route('profile.update') }}" method="POST" class="space-y-6">
                    @csrf
                    @method('POST')

                    <div class="flex flex-col space-y-2">
                        <label for="name" class="text-lg font-medium text-gray-700 dark:text-gray-300">Name</label>
                        <div class="flex items-center border border-gray-300 rounded-md shadow-sm">
                            <i class="fas fa-user px-4 text-gray-500"></i>
                            <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}"
                                class="w-full py-3 px-4 text-lg focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 rounded-md"
                                required>
                        </div>
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col space-y-2">
                        <label for="email" class="text-lg font-medium text-gray-700 dark:text-gray-300">Email</label>
                        <div class="flex items-center border border-gray-300 rounded-md shadow-sm">
                            <i class="fas fa-envelope px-4 text-gray-500"></i>
                            <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}"
                                class="w-full py-3 px-4 text-lg focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 rounded-md"
                                required>
                        </div>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button type="submit" class="inline-flex items-center px-8 py-4 bg-verdigris text-white text-xl font-rubik rounded-md shadow-lg hover:bg-ming focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-save mr-2"></i> Save Changes
                    </button>
                </form>
            </div>

            <div class="mt-12">
                <h2 class="text-3xl font-oswald text-rich-black-fogra-29 mb-6">Change Password</h2>

                <form action="{{ route('profile.updatePassword') }}" method="POST" class="space-y-6">
                    @csrf
                    @method('POST')

                    <div class="flex flex-col space-y-2">
                        <label for="current_password" class="text-lg font-medium text-gray-700 dark:text-gray-300">Current Password</label>
                        <div class="flex items-center border border-gray-300 rounded-md shadow-sm">
                            <i class="fas fa-lock px-4 text-gray-500"></i>
                            <input type="password" name="current_password" id="current_password"
                                class="w-full py-3 px-4 text-lg focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 rounded-md"
                                required>
                        </div>
                        @error('current_password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col space-y-2">
                        <label for="new_password" class="text-lg font-medium text-gray-700 dark:text-gray-300">New Password</label>
                        <div class="flex items-center border border-gray-300 rounded-md shadow-sm">
                            <i class="fas fa-lock px-4 text-gray-500"></i>
                            <input type="password" name="new_password" id="new_password"
                                class="w-full py-3 px-4 text-lg focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 rounded-md"
                                required>
                        </div>
                        @error('new_password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="flex flex-col space-y-2">
                        <label for="new_password_confirmation" class="text-lg font-medium text-gray-700 dark:text-gray-300">Confirm New Password</label>
                        <div class="flex items-center border border-gray-300 rounded-md shadow-sm">
                            <i class="fas fa-lock px-4 text-gray-500"></i>
                            <input type="password" name="new_password_confirmation" id="new_password_confirmation"
                                class="w-full py-3 px-4 text-lg focus:border-indigo-500 focus:ring focus:ring-indigo-500 focus:ring-opacity-50 rounded-md"
                                required>
                        </div>
                    </div>

                    <button type="submit" class="inline-flex items-center px-8 py-4 bg-verdigris text-white text-xl font-rubik rounded-md shadow-lg hover:bg-ming focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-key mr-2"></i> Change Password
                    </button>
                </form>
            </div>
        </div>
    </main>

    @include('components.footer')

</body>
</html>
