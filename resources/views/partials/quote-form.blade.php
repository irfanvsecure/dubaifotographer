{{-- Short quote request form used on the location pages. $location = preselected emirate --}}
@php
    $services = ['Service Type', 'Corporate Event', 'Real Estate', 'Product', 'Wedding', 'Family', 'Female Photographer', 'Drone', 'Restaurant / Food', 'School', 'Other'];
    $places = ['Dubai', 'Abu Dhabi', 'Sharjah', 'Ajman', 'Ras Al Khaimah', 'Fujairah', 'Umm Al Quwain', 'Al Ain'];
    // the page's own emirate is listed first
    $places = array_merge([$location], array_values(array_diff($places, [$location])));
@endphp
<form class="booking-form quote-form" method="post" action="%%BASE%%/booking-request" data-ajax aria-label="Location Quote - {{ $location }}">
    @csrf
    <input type="hidden" name="form_name" value="Location Quote - {{ $location }}">

    <div class="field">
        <label class="screen-reader-text" for="quote-name">Name</label>
        <input id="quote-name" type="text" name="name" placeholder="Name">
    </div>
    <div class="field">
        <label class="screen-reader-text" for="quote-email">Email</label>
        <input id="quote-email" type="email" name="email" placeholder="Email">
    </div>
    <div class="field">
        <label class="screen-reader-text" for="quote-phone">Phone</label>
        <input id="quote-phone" type="tel" name="phone" placeholder="Phone / WhatsApp">
    </div>
    <div class="field select">
        <label class="screen-reader-text" for="quote-service">Service</label>
        <select id="quote-service" name="service">
            @foreach ($services as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>
    <div class="field">
        <label class="screen-reader-text" for="quote-date">Date</label>
        <input id="quote-date" type="date" name="date">
    </div>
    <div class="field select">
        <label class="screen-reader-text" for="quote-location">Location</label>
        <select id="quote-location" name="location">
            @foreach ($places as $option)
                <option value="{{ $option }}">{{ $option }}</option>
            @endforeach
        </select>
    </div>
    <div class="field field-full">
        <label class="screen-reader-text" for="quote-message">Message</label>
        <textarea id="quote-message" name="message" placeholder="Tell us about your shoot"></textarea>
    </div>
    <div class="field field-full">
        <button type="submit">Request My Quote</button>
    </div>
</form>
