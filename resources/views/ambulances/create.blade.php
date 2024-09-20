<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
<div class="container mx-auto p-8">
    <h1 class="text-3xl font-bold">{{ isset($ambulance) ? 'Edit' : 'Add' }} Ambulance</h1>
    <form action="{{ isset($ambulance) ? route('ambulances.update', $ambulance->id) : route('ambulances.store') }}" method="POST">
        @csrf
        @if(isset($ambulance))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="vehicle_number" class="block text-sm font-medium">Vehicle Number</label>
            <input type="text" name="vehicle_number" class="mt-1 block w-full" value="{{ old('vehicle_number', $ambulance->vehicle_number ?? '') }}" required>
        </div>

        <div class="mb-4">
            <label for="driver_name" class="block text-sm font-medium">Driver Name</label>
            <input type="text" name="driver_name" class="mt-1 block w-full" value="{{ old('driver_name', $ambulance->driver_name ?? '') }}" required>
        </div>

        <div class="mb-4">
            <label for="contact_number" class="block text-sm font-medium">Contact Number</label>
            <input type="text" name="contact_number" class="mt-1 block w-full" value="{{ old('contact_number', $ambulance->contact_number ?? '') }}" required>
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium">Status</label>
            <select name="status" class="mt-1 block w-full">
                <option value="available" {{ isset($ambulance) && $ambulance->status == 'available' ? 'selected' : '' }}>Available</option>
                <option value="busy" {{ isset($ambulance) && $ambulance->status == 'busy' ? 'selected' : '' }}>Busy</option>
            </select>
        </div>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">{{ isset($ambulance) ? 'Update' : 'Add' }} Ambulance</button>
    </form>
</div>
@vite('resources/js/app.js')
</body>
</html>
