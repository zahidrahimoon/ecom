<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Bookings</title>

    <!-- Add Oswald Font -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Tailwind and Font Awesome -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* Apply Oswald font globally using Tailwind's config */
        body {
            font-family: 'Oswald', sans-serif;
        }

        .font-oswald {
            font-size: 16px; /* adjust the font size to your liking */
        }

        .font-oswald table {
            font-size: 14px; /* adjust the font size to your liking */
        }

        .font-oswald th, .font-oswald td {
            padding: 12px; /* adjust the padding to your liking */
        }

        .font-oswald th {
            font-weight: bold; /* make the table headers bold */
        }
    </style>
</head>

<body class="bg-gray-100">
    @include('components.header')
    @include('components.pagehero', ['title' => 'All Bookings'])

    <main>
        <article>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg font-oswald">
                <div class="container mx-auto mt-10 p-6 bg-white shadow-lg rounded-lg">
                    <h1 class="text-4xl font-semibold mb-8 text-center text-gray-900">All Bookings</h1>

                    @if(session('success'))
                    <div class="bg-green-500 text-white p-4 mb-6 rounded-lg text-center shadow-lg">
                        {{ session('success') }}
                    </div>
                    @endif

                    <div class="mb-6 flex justify-start">
                        <a href="{{ route('bookings.create') }}" class="bg-blue-500 font-playfair font-semibold text-4xl hover:bg-blue-600 text-white py-2 px-4 rounded-lg shadow-lg transition duration-200 text-base w-36 h-10 flex items-center justify-center">
                            <i class="fas fa-plus mr-2"></i>
                            Create
                        </a>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="w-full text-lg tracking-wide text-left rtl:text-right text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-4 font-bold">ID</th>
                                    <th scope="col" class="px-6 py-4 font-bold">Hospital Name</th>
                                    <th scope="col" class="px-6 py-4 font-bold">Hospital Address</th>
                                    <th scope="col" class="px-6 py-4 font-bold">Customer Mobile Number</th>
                                    <th scope="col" class="px-6 py-4 font-bold">Pickup Address</th>
                                    <th scope="col" class="px-6 py-4 font-bold">Type</th>
                                    <th scope="col" class="px-6 py-4 font-bold">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $booking)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <th scope="row" class="px-6 py-4 text-lg">{{ $booking->id }}</th>
                                    <td class="px-6 py-4 text-lg">{{ $booking->hospital_name }}</td>
                                    <td class="px-6 py-4 text-lg">{{ $booking->hospital_address }}</td>
                                    <td class="px-6 py-4 text-lg">{{ $booking->customer_mobile_number }}</td>
                                    <td class="px-6 py-4 text-lg">{{ $booking->pickup_address }}</td>
                                    <td class="px-6 py-4 text-lg">{{ $booking->type }}</td>
                                    <td class="px-6 py-4 text-lg text-right">
                                        <div class="flex space-x-2 justify-center">
                                            <a href="{{ route('bookings.edit', $booking) }}" class="bg-green-500 hover:bg-green-600 text-white py-1 px-3 rounded-lg shadow-lg text-sm flex items-center">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('bookings.destroy', $booking) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white py-1 px-3 rounded-lg shadow-lg text-sm flex items-center">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            @include('components.footer')
        </article>
    </main>
</body>

</html>
