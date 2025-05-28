@extends('layouts.app')
@section('content')
    <main class="container mx-auto px-4 py-16 max-w-4xl">
        <div class="text-center mb-16">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">System Status</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Check the current operational status of all Bloghub services
            </p>
        </div>

        <div class="bg-{{ $allOperational ? 'green' : 'yellow' }}-50 border border-{{ $allOperational ? 'green' : 'yellow' }}-200 rounded-lg p-6 mb-8 flex items-center">
            <div class="h-10 w-10 bg-{{ $allOperational ? 'green' : 'yellow' }}-100 text-{{ $allOperational ? 'green' : 'yellow' }}-600 rounded-full flex items-center justify-center mr-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    @if($allOperational)
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    @else
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    @endif
                </svg>
            </div>
            <div>
                <h2 class="text-xl font-bold text-{{ $allOperational ? 'green' : 'yellow' }}-800">
                    {{ $allOperational ? 'All Systems Operational' : 'Some Systems Experiencing Issues' }}
                </h2>
                <p class="text-{{ $allOperational ? 'green' : 'yellow' }}-700">
{{--                    Last updated: {{ $lastUpdated->format('F d, Y - h:i A') }} UTC--}}
                </p>
            </div>
        </div>

        <div class="space-y-6 mb-12">
            @foreach($statuses as $status)
                <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="font-semibold text-lg">{{ $status->name }}</h3>
                        <span class="
                    @if($status->status == 'operational')
                        bg-green-100 text-green-800
                    @elseif($status->status == 'degraded')
                        bg-yellow-100 text-yellow-800
                    @elseif($status->status == 'partial_outage')
                        bg-orange-100 text-orange-800
                    @else
                        bg-red-100 text-red-800
                    @endif
                    px-3 py-1 rounded-full text-sm font-medium">
                    {{ ucfirst(str_replace('_', ' ', $status->status)) }}
                </span>
                    </div>
                    <div class="h-2 bg-gray-100 rounded-full overflow-hidden">
                        <div class="h-full
                    @if($status->status == 'operational')
                        bg-green-500
                    @elseif($status->status == 'degraded')
                        bg-yellow-500
                    @elseif($status->status == 'partial_outage')
                        bg-orange-500
                    @else
                        bg-red-500
                    @endif
                    w-[{{ $status->uptime_percentage }}%]">
                        </div>
                    </div>
                    <div class="flex justify-between mt-2 text-sm text-gray-500">
                        <span>Uptime: {{ $status->uptime_percentage }}%</span>
                        <span>
                    @if($status->last_incident_date)
                                {{ $status->last_incident_description }}
                            @else
                                No incidents reported in the last 90 days
                            @endif
                </span>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="bg-white rounded-lg shadow-sm border border-gray-100 p-6 mb-12">
            <h2 class="text-xl font-bold mb-6">Past Incidents</h2>

            <div class="space-y-6">
                @forelse($pastIncidents as $incident)
                    <div>
                        <div class="flex items-start mb-2">
                            <span class="bg-yellow-100 text-yellow-800 px-2 py-0.5 rounded text-sm font-medium mr-2">Resolved</span>
                            <h3 class="font-semibold">{{ $incident->name }} Incident</h3>
                        </div>
                        <p class="text-gray-600 text-sm mb-2">{{ $incident->last_incident_date->format('F d, Y - H:i') }} UTC</p>
                        <p class="text-gray-700">{{ $incident->last_incident_description }}</p>
                    </div>
                @empty
                    <div class="text-center py-4">
                        <p class="text-gray-500">No incidents in the past 90 days.</p>
                    </div>
                @endforelse
            </div>
        </div>

        <div class="text-center">
            <h2 class="text-xl font-bold mb-4">Subscribe to Status Updates</h2>
            <p class="text-gray-600 mb-6 max-w-xl mx-auto">
                Get notified about service disruptions and maintenance windows via email or SMS.
            </p>
            <form action="{{ route('contact.submit') }}" method="POST" class="flex flex-col sm:flex-row max-w-lg mx-auto gap-3">
                @csrf
                <input type="hidden" name="subject" value="Status Updates Subscription">
                <input
                    type="email"
                    name="email"
                    placeholder="Your email address"
                    class="flex-1 px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-Bloghub-500 focus:border-transparent"
                    required
                />
                <button type="submit" class="bg-Bloghub-600 text-white px-6 py-2 rounded-md hover:bg-Bloghub-700 transition-colors whitespace-nowrap">
                    Subscribe
                </button>
            </form>
        </div>
    </main>
@endsection
