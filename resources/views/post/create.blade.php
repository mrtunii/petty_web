@extends('shared.layout')

@section('content')

            <!--************************************
                Main Start
        *************************************-->
        <main id="tg-main" class="tg-main tg-haslayout">
            <div class="container">
                <div class="row">
                    <div id="tg-content" class="tg-content">
                        <div class="tg-loginsignup">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-lg-offset-3 col-md-offset-3 col-sm-offset-3">
                                <div class="tg-logingarea">
                                    <h2 class="roboto">განცხადების დამატება</h2>
                                    <form class="tg-formtheme tg-formloging" method="post" action="/submit" enctype="multipart/form-data">
                                        {!! csrf_field() !!}
                                        @if($errors->any())
                                        <div class="alert alert-danger">
                                            <h4 class="roboto">{{ $errors->first() }}</h4>
                                        </div>
                                        @endif
                                        <fieldset>
                                            <div class="form-group">
                                                <input type="text" name="title" class="form-control roboto"  placeholder="სათაური">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="pet_name" class="form-control roboto"  placeholder="თქვენი დაკარგული მეგობრის სახელი">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" name="lost_date" id="datetime" class="form-control roboto"  placeholder="დაკარგვის თარიღი">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="autocomplete" name="lost_address" class="form-control roboto" placeholder="დაკარგვის ადგილი">
                                                <input type="hidden" name="long" id="long">
                                                <input type="hidden" name="lat" id="lat">
                                            </div>
                                            <div class="form-group">
                                                <span class="roboto">აირჩიეთ სურათები</span>
                                                <input type="file"  name="images[]" class="form-control " accept="image/*" capture="camera" multiple>
                                            </div>
                                            <div class="form-group">
                                                <span class="roboto">დამატებითი ინფორმაცია</span>
                                                <textarea name="description" class="form-control" style="height: 100px;"></textarea>
                                            </div>
                                            <button class="tg-btn roboto form-control" type="submit">დამატება</button>
                                        </fieldset>
                                    </form>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!--************************************
                Main End
        *************************************-->

@endsection


@section('scripts')
        <script type="text/javascript">
            
      // This example displays an address form, using the autocomplete feature
      // of the Google Places API to help users fill in the information.

      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">

      var placeSearch, autocomplete;
      var componentForm = {
        street_number: 'short_name',
        route: 'long_name',
        locality: 'long_name',
        administrative_area_level_1: 'short_name',
        country: 'long_name',
        postal_code: 'short_name'
      };

      function initAutocomplete() {
        // Create the autocomplete object, restricting the search to geographical
        // location types.
        autocomplete = new google.maps.places.Autocomplete(
            /** @type {!HTMLInputElement} */(document.getElementById('autocomplete')),
            {types: ['geocode']});

        // When the user selects an address from the dropdown, populate the address
        // fields in the form.
        autocomplete.addListener('place_changed', fillInAddress);
      }

      function fillInAddress() {
        // Get the place details from the autocomplete object.
        var place = autocomplete.getPlace();
            document.getElementById('lat').value = place.geometry.location.lat();
            document.getElementById('long').value = place.geometry.location.lng();
        for (var component in componentForm) {
          document.getElementById(component).value = '';
          document.getElementById(component).disabled = false;
        }

        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          if (componentForm[addressType]) {
            var val = place.address_components[i][componentForm[addressType]];
            document.getElementById(addressType).value = val;
          }
        }
      }

      // Bias the autocomplete object to the user's geographical location,
      // as supplied by the browser's 'navigator.geolocation' object.
      function geolocate() {
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var geolocation = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };
            var circle = new google.maps.Circle({
              center: geolocation,
              radius: position.coords.accuracy
            });
            autocomplete.setBounds(circle.getBounds());
          });
        }
      }
    
        </script>
         <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfoT18BDb_Kf10LgJuGs45sAJOY9sCX18&libraries=places&callback=initAutocomplete"
        async defer></script>
        
        <script type="text/javascript">
            $('#datetime').datetimepicker();
        </script>
        @stop
