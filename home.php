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

<section id="select">
    <div class="box">
        <h1>Destination</h1>
        <select class = "select-css" name="destination" id="destination" required>
            <option selected disabled>Select the city...</option>
            <option value="Nashville">Nashville, TN</option>
            <option value="Miami">Miami, FL</option>
        </select>
    </div>
    <div class="box">
        <h1>Check-in Date</h1>
        <input type="date" id="check-in" name="check-in" required value="03/04/2020" min="03/04/2020">
    </div>
    <div class="box">
        <h1>Check-out Date</h1>
        <input type="date" id="check-out" name="check-out" required value="03/05/2020" min="03/04/2020">
    </div>

    <div class="box-2">
        <h1>Rooms</h1>
        <input type="number" id="rooms" name="rooms" min="1" value="1">
    </div>
    <div class="box-2">
        <h1>Guests</h1>
        <input type="number" id="guests" name="guests" min="1" value="1">
    </div>

    <div class="box-3">
        <input type="submit" id="search" value="Show options">
    </div>
</section>
<!--    <form action="" method="GET">-->
<!--        <fieldset>-->
<!--            <legend>Destination </legend>-->
<!--            <label for="destination">Where to? </label>-->
<!--            <select name = "city" required>-->
<!--                <option value=""> </option>-->
<!--                <option value="Nashville">Nashville, TN</option>-->
<!--                <option value="Miami">Miami, FL</option>-->
<!--                <option value="Atlanta">Atlanta, GA</option>-->
<!--                <option value="NewYork">New York, NY</option>-->
<!--                <option value="LosAngeles">Los Angeles, CA</option>-->
<!--            </select>-->
<!--        </fieldset>-->
<!--        <br>-->
<!--        <fieldset>-->
<!--            <legend>Booking Details </legend>-->
<!--            <label for="inDate">Check-in Date </label><input type="date" name="inDate" min="2020-03-03">-->
<!--            <label for="outDate">Check-out Date </label><input type="date" name="outDate" min="2020-03-03">-->
<!--            <br>-->
<!--            <br>-->
<!--            <label for="roomNum">Rooms </label><input type="number" name="roomNum" min="1" max="20">-->
<!--            <label for="guestNum">Guests </label><input type="number" name="guestNum" min="1" max="6">-->
<!--        </fieldset>-->
<!--    </form>-->
</body>

<?php
include ('includes/footer.php')
?>
</html>