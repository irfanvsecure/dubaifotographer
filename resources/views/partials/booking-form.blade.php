{{-- Booking request form. Options: $withLocation (default true), $class (extra form classes) --}}
@php
    $withLocation = $withLocation ?? true;
    $services = ['Service Type', 'Wedding', 'Engagement', 'Couple', 'Proposal', 'Family', 'Maternity', 'Birthday', 'Event', 'Corporate', 'Headshots', 'Fashion', 'Product', 'Food', 'Real Estate', 'Interior', 'Drone', 'Videography', 'Social Media'];
    $emirates = ['Dubai', 'Abu Dhabi', 'Sharjah', 'Ajman', 'Ras Al Khaimah', 'Fujairah', 'Umm Al Quwain'];
    $packages = ['Select photography Package', 'Basic Package', 'Premium Package', 'Corporate Package'];
@endphp
<form class="booking-form {{ $class ?? '' }}" method="post" action="%%BASE%%/booking-request" data-ajax aria-label="Book Your Studio Session">
    @csrf
    <input type="hidden" name="form_name" value="Book Your Studio Session">

    <div class="field">
        <label class="screen-reader-text" for="booking-name">Name</label>
        <input id="booking-name" type="text" name="name" placeholder="Name">
    </div>
    <div class="field">
        <label class="screen-reader-text" for="booking-email">Email</label>
        <input id="booking-email" type="email" name="email" placeholder="Email">
    </div>
    <div class="field">
        <label class="screen-reader-text" for="booking-phone">Phone Number</label>
        <input id="booking-phone" type="tel" name="phone" placeholder="Phone Number">
    </div>
    <div class="field">
        <label class="screen-reader-text" for="booking-address">Address</label>
        <input id="booking-address" type="text" name="address" placeholder="Address">
    </div>
    <div class="field select">
        <label class="screen-reader-text" for="booking-service">Service Type</label>
        <select id="booking-service" name="service">
            @foreach ($services as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>
    <div class="field">
        <label class="screen-reader-text" for="booking-date">Date</label>
        <input id="booking-date" type="date" name="date">
    </div>
    <div class="field">
        <label class="screen-reader-text" for="booking-time">Time</label>
        <input id="booking-time" type="time" name="time">
    </div>
    <div class="field select">
        <label class="screen-reader-text" for="booking-setting">Indoor</label>
        <select id="booking-setting" name="setting">
            <option value="Indoor">Indoor</option>
            <option value="Outdoor">Outdoor</option>
        </select>
    </div>
    @if ($withLocation)
        <div class="field field-full select">
            <label class="screen-reader-text" for="booking-location">Select location</label>
            <select id="booking-location" name="location">
                @foreach ($emirates as $option)
                    <option value="{{ $option }}">{{ $option }}</option>
                @endforeach
            </select>
        </div>
    @endif
    <div class="field field-full select">
        <label class="screen-reader-text" for="booking-package">Select photography Package</label>
        <select id="booking-package" name="package">
            @foreach ($packages as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>
    <div class="field field-full">
        <button type="submit">Submit Now</button>
    </div>
</form>
