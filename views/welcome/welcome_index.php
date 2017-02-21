<link rel="stylesheet" href="assets\components\pickaday\css\pikaday.css">

<form method="post" role="form">

    <div class="form-group">
        <input id="locationTextField" type="text" class="form-control" v-model="destination" placeholder="<?= __('Destination') ?>">
        <input type="text" id="checkIn" v-model="checkIn" placeholder="<?= __('Check-In Date') ?>" >
        <input type="text" id="checkOut" v-model="checkOut" placeholder="<?= __('Check-Out Date') ?>">
    </div>
<button type="submit" class="btn btn-primary" :disabled="this.checkIn == Date() || this.checkOut == Date() || this.destination == ''">Submit</button>



</form>

<script src="assets\components\pickaday\pikaday.js"></script>
<script src="https://unpkg.com/vue/dist/vue.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBwtjEiqtf46UUzo6FNOM8NiA8T1U61ouc&libraries=places"></script>

<script>

    var app = new Vue({
        el: 'form',
        data: {
            checkIn: (new Date()).toString().split(' ').splice(1,3).join(' '),
            checkOut:(new Date(Date.now() + 1 * 24*60*60*1000)).toString().split(' ').splice(1,3).join(' '),
            destination: ''
        }
    });
    var checkIn = new Pikaday({ field: document.getElementById('checkIn') });
    var checkOut = new Pikaday({ field: document.getElementById('checkOut') });

    // Set checkIn's minimum date to current value of checkOut
    checkOut.setMinDate(checkIn.getDate());
    $('#checkIn').on('change', function () {
        checkOut.setMinDate(checkIn.getDate())
    });

    // and vice versa
    checkIn.setMinDate(checkIn.getDate());
    $('#checkOut').on('change', function () {
        checkIn.setMinDate(checkOut.getDate())
    });

    // google maps autocomplete
    function init() {
        var input = document.getElementById('locationTextField');
        var autocomplete = new google.maps.places.Autocomplete(input);
    }

    google.maps.event.addDomListener(window, 'load', init);
</script>





