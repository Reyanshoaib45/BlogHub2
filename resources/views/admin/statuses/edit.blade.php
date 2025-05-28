@extends('layouts.app')
@section('content')
    <div class="container mx-auto px-4 py-8 max-w-3xl">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold text-gray-800">Edit System Status</h1>
            <a href="{{ route('admin.statuses.index') }}" class="bg-gray-500 hover:bg-gray-600 text-white font-semibold py-2 px-4 rounded">
                Back to Statuses
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('admin.statuses.update', $status->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Service Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $status->name) }}"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('name') border-red-500 @enderror" required>
                    @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="description" class="block text-gray-700 text-sm font-bold mb-2">Description</label>
                    <textarea name="description" id="description" rows="2"
                              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('description') border-red-500 @enderror">{{ old('description', $status->description) }}</textarea>
                    @error('description')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="status" class="block text-gray-700 text-sm font-bold mb-2">Current Status</label>
                    <select name="status" id="status"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('status') border-red-500 @enderror" required>
                        <option value="operational" {{ old('status', $status->status) == 'operational' ? 'selected' : '' }}>Operational</option>
                        <option value="degraded" {{ old('status', $status->status) == 'degraded' ? 'selected' : '' }}>Degraded Performance</option>
                        <option value="partial_outage" {{ old('status', $status->status) == 'partial_outage' ? 'selected' : '' }}>Partial Outage</option>
                        <option value="major_outage" {{ old('status', $status->status) == 'major_outage' ? 'selected' : '' }}>Major Outage</option>
                    </select>
                    @error('status')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="uptime_percentage" class="block text-gray-700 text-sm font-bold mb-2">Uptime Percentage</label>
                    <input type="number" name="uptime_percentage" id="uptime_percentage" step="0.01" min="0" max="100" value="{{ old('uptime_percentage', $status->uptime_percentage) }}"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('uptime_percentage') border-red-500 @enderror" required>
                    @error('uptime_percentage')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="last_incident_date" class="block text-gray-700 text-sm font-bold mb-2">Last Incident Date (optional)</label>
                    <input type="datetime-local" name="last_incident_date" id="last_incident_date"
                           value="{{ old('last_incident_date', $status->last_incident_date ? $status->last_incident_date->format('Y-m-d\TH:i') : '') }}"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('last_incident_date') border-red-500 @enderror">
                    @error('last_incident_date')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="last_incident_description" class="block text-gray-700 text-sm font-bold mb-2">Last Incident Description (optional)</label>
                    <textarea name="last_incident_description" id="last_incident_description" rows="3"
                              class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('last_incident_description') border-red-500 @enderror">{{ old('last_incident_description', $status->last_incident_description) }}</textarea>
                    @error('last_incident_description')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label for="order" class="block text-gray-700 text-sm font-bold mb-2">Display Order</label>
                    <input type="number" name="order" id="order" min="0" value="{{ old('order', $status->order) }}"
                           class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline @error('order') border-red-500 @enderror" required>
                    @error('order')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-end">
                    <button type="submit" class="bg-Bloghub-600 hover:bg-Bloghub-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update Status
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
