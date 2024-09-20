<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ambulances</title>
    <!-- Vite directive for Tailwind CSS -->
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 font-oswald">
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold mb-6">Ambulances</h1>

    <!-- Button to Add Ambulance -->
    <a href="{{ route('ambulances.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold px-4 py-2 rounded transition duration-200 ease-in-out">
        Add Ambulance
    </a>

    <!-- Ambulance Table -->
    <div class="mt-6 overflow-x-auto">
        <table class="min-w-full bg-white border border-gray-200 rounded-lg">
            <thead>
                <tr class="bg-gray-200 text-left text-gray-700">
                    <th class="py-2 px-4 border-b border-gray-300">Vehicle Number</th>
                    <th class="py-2 px-4 border-b border-gray-300">Driver Name</th>
                    <th class="py-2 px-4 border-b border-gray-300">Contact Number</th>
                    <th class="py-2 px-4 border-b border-gray-300">Status</th>
                    <th class="py-2 px-4 border-b border-gray-300">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ambulances as $ambulance)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4 border-b border-gray-300">{{ $ambulance->vehicle_number }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">{{ $ambulance->driver_name }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">{{ $ambulance->contact_number }}</td>
                    <td class="py-2 px-4 border-b border-gray-300">
                        <span class="px-2 py-1 rounded-full {{ $ambulance->status == 'available' ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800' }}">
                            {{ ucfirst($ambulance->status) }}
                        </span>
                    </td>
                    <td class="py-3 px-4 border-b border-gray-300">
                        <a href="{{ route('ambulances.edit', $ambulance->id) }}" class="text-white px-3 py-[.5rem] rounded-md bg-green-500 hover:bg-green-700">
                            Edit
                        </a>
                        <form action="{{ route('ambulances.destroy', $ambulance->id) }}" method="POST" class="inline-block ml-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-white px-4 py-1 rounded-md bg-red-500 hover:bg-red-700" onclick="return confirm('Are you sure you want to delete this ambulance?')">
                                Delete
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Vite Scripts -->
@vite('resources/js/app.js')
</body>
</html>
