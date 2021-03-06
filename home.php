<?php
include ('includes/header.php')
?>

<section id="showcase">
    <div class="container">
        <h1>#1 Platform To Make You Feel At Home Wherever You Go</h1>
    </div>
    <div class="image">
        <img src="./images/cheap.png">
        <h3>Cheap</h3>
    </div>
    <div class="image">
        <img src="./images/fast.png">
        <h3>Fast</h3>
    </div>
    <div class="image">
        <img src="./images/hotel.png">
        <div id="convenient">
            <h3>Convenient</h3>
        </div>
    </div>
</section>

<script type="text/javascript" src="http://services.iperfect.net/js/IP_generalLib.js"></script>

<section id="select">
    <div class="box">
        <h1>Destination</h1>
        <select class = "select-css" name="destination" id="destination" required>
            <option selected disabled>Select the city...</option>
            <option value="Nashville">Nashville, TN</option>
            <option value="Miami">Miami, FL</option>
            <option value="Atlanta">Atlanta, GA</option>
            <option value="NewYork">New York, NY</option>
            <option value="LosAngeles">Los Angeles, CA</option>
        </select>
    </div>
    <div class="box">
        <h1>Check-in Date</h1>
        <input type="text" name="check-in" id="check-in" alt="date" class="IP_calendar" title="d/m/Y">
    </div>
    <div class="box">
        <h1>Check-out Date</h1>
        <input type="text" name="check-out" id="check-out" alt="date" class="IP_calendar" title="d/m/Y">
    </div>

    <div class="box-2">
        <h1>Rooms</h1>
        <input type="number" id="rooms" name="rooms" min="1" max=5 value="1">
    </div>
    <div class="box-2">
        <h1>Guests</h1>
        <input type="number" id="guests" name="guests" min="1" max=20 value="1">
    </div>

    <div class="box-3">
      <form action="results.php" method="post">
        <input type="submit" id="search" value="Show options">
      </form>
    </div>
</section>


<?php
include ('includes/footer.php')
?>
</html>
