@extends('layouts.app')

@section('title', 'Contact Us | Leo Club of University of Vavuniya')

@section('meta')
    <meta name="description" content="Get in touch with the Leo Club of University of Vavuniya. Contact our key officers or reach us via email.">
@endsection

@section('content')
<section class="py-12  text-gray-800">
    <div class="container mx-auto px-4">
        <h1 class="text-3xl font-bold mb-6 text-center">Contact Us</h1>

        <div class="grid md:grid-cols-2 gap-8">
            <!-- Address & Email -->
            <div>
                <h2 class="text-xl font-semibold mb-2">Address</h2>
                <p class="mb-4 leading-relaxed">
              Leo Club of University of Vavuniya<br>
Pampaimadu<br>
Vavuniya<br>
Sri Lanka
                </p>

                <h2 class="text-xl font-semibold mb-2">Official Email</h2>
                <p><a href="mailto:leoclubuov@vau.ac.lk" class="text-yellow-700 hover:underline">leoclubuov@vau.ac.lk</a></p>
            </div>

            <!-- Key Officers -->
            <div>
                <h2 class="text-xl font-semibold mb-4">Key Officers</h2>

                @php
                    $officers = [
                        [
                            'name' => 'Leo Shashini Anuththara',
                            'title' => 'President',
                            'email' => 'mirinchigeshashini@gmail.com',
                            'phone' => '0716302585',
                            'image' => 'members/leo-logo-bg-none(1).png',
                        ],
                        [
                            'name' => 'Leo Idusara Rusith',
                            'title' => 'Vice President',
                            'email' => 'indusararusith@gmail.com',
                            'phone' => '0776254179',
                            'image' => 'members/leo-logo-bg-none(3).png',
                        ],
                        [
                            'name' => 'Leo Hirusha Jayasundara',
                            'title' => 'Secretary',
                            'email' => 'hirushajayasundara03@gmail.com',
                            'phone' => '0760675755',
                            'image' => 'members/5.png',
                        ],
                        [
                            'name' => 'Leo Sivabavan',
                            'title' => 'Treasurer',
                            'email' => 'bavan021015@gmail.com',
                            'phone' => '0768848601',
                            'image' => 'members/10.png',
                        ],
                    ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                    @foreach ($officers as $officer)
                        <div class="flex items-center space-x-4 bg-gray-50 p-4 rounded-lg shadow-sm hover:shadow-md transition">
                            <img src="{{ asset('storage/' . $officer['image']) }}"
                                 alt="{{ $officer['name'] }}"
                                 class="w-20 h-20 sm:w-24 sm:h-24 rounded-full object-cover border border-yellow-500">
                            <div class="space-y-1 text-sm sm:text-base">
                                <p class="font-semibold text-gray-800">{{ $officer['title'] }}</p>
                                <p class="text-gray-700">{{ $officer['name'] }}</p>
                                <p><a href="mailto:{{ $officer['email'] }}" class="text-yellow-700 hover:underline">{{ $officer['email'] }}</a></p>
                                <p><a href="tel:{{ $officer['phone'] }}" class="hover:underline">{{ $officer['phone'] }}</a></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
