<!-- resources/views/ambulances/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Ambulance</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-6">Edit Ambulance</h1>

    <!-- Check for validation errors -->
    @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-4 rounded mb-6">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Edit Ambulance Form -->
    <form action="{{ route('ambulances.update', $ambulance->id) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')

        <!-- Vehicle Number -->
        <div class="mb-4">
            <label for="vehicle_number" class="block text-gray-700 font-bold mb-2">Vehicle Number</label>
            <input type="text" id="vehicle_number" name="vehicle_number" value="{{ old('vehicle_number', $ambulance->vehicle_number) }}"
                   class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Driver Name -->
        <div class="mb-4">
            <label for="driver_name" class="block text-gray-700 font-bold mb-2">Driver Name</label>
            <input type="text" id="driver_name" name="driver_name" value="{{ old('driver_name', $ambulance->driver_name) }}"
                   class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Contact Number -->
        <div class="mb-4">
            <label for="contact_number" class="block text-gray-700 font-bold mb-2">Contact Number</label>
            <input type="text" id="contact_number" name="contact_number" value="{{ old('contact_number', $ambulance->contact_number) }}"
                   class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
        </div>

        <!-- Status -->
        <div class="mb-4">
            <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
            <select id="status" name="status" class="w-full p-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                <option value="available" {{ $ambulance->status == 'available' ? 'selected' : '' }}>Available</option>
                <option value="busy" {{ $ambulance->status == 'busy' ? 'selected' : '' }}>Busy</option>
            </select>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-end">
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 transition duration-200 ease-in-out">
                Update Ambulance
            </button>
        </div>
    </form>
</div>

<!-- Vite Scripts -->
@vite('resources/js/app.js')
</body>
</html>
