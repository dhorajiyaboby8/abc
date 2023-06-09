<!DOCTYPE html>
<html>

<head>
    <script src="https://code.jquery.com/jquery-3.1.1.js"></script>
    <link rel="stylesheet" type="text/css" href="CSS.css">
</head>

<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

*:before,
*:after {
    box-sizing: border-box;
}

* {
    position: relative;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    position: relative;
    width: 100%;
    min-height: 100vh;
    background-image: linear-gradient(to right, #43e97b 0%, #38f9d7 100%);
    display: flex;
    align-items: center;
    justify-content: center;
    font-family: 'Roboto', sans-serif;
}

.box {
    position: relative;
    background: rgba(255, 255, 255, .6);
    width: 768px;
    backdrop-filter: blur(15px);
    padding: 20px;
    border-radius: 20px;
    transition: width 500ms ease;
}

.box h4 {
    text-align: center;
    margin-bottom: 20px;
    font-size: 1.2rem;
    text-transform: uppercase;
}

.box .date-picker {
    position: relative;
    display: flex;
    align-items: center;
}

.box .date-picker input {
    margin: 0 10px;
    border: 0;
    padding: .5rem;
    border-radius: 10px;
    transition: box-shadow 500ms ease;
}

.box .date-picker input:focus {
    outline: none;
    box-shadow: 0 0 10px #292929;
}

.box .date-picker span {
    display: inline-block;
    text-transform: uppercase;
}

.box .date-picker span#choseDate {
    margin-left: auto;
}

.age-calc {
    position: relative;
    display: flex;
    align-items: center;
    flex-wrap: wrap;
    margin-top: 0;
    max-height: 0;
    opacity: 0;
    overflow: hidden;
    transition: max-height 2s, opacity 3s, margin 250ms ease;
}

.age-calc.expand {
    margin-top: 30px;
    max-height: 1000px;
    opacity: 1;
}

.age-calc .age-box {
    position: relative;
    background: #fff;
    border-radius: 10px;
    margin: 10px;
    width: 222px;
    transition: 500ms ease;
}

.age-calc .age-box p.header {
    position: relative;
    text-align: center;
    background: #3af7c9;
    padding: 10px 30px;
    border-radius: 10px 10px 0 0;
    font-size: 1.2rem;
    font-size: 500;
    text-transform: uppercase;
}

.age-calc .age-box:nth-child(even) p.header {
    background: #40ef9b;
}

.age-calc .age-box .value {
    text-align: center;
    padding: 30px 20px;
    font-size: 1.5rem;
    transition: 500ms ease;
}

@media (max-width: 768px) {
    body {
        display: block;
        margin: 2rem 0;
    }

    .box {
        width: 600px;
        margin: 0 auto;
    }

    .age-calc .age-box {
        width: 150px;
        margin: 15px;
    }

    .age-calc .age-box p.header {
        padding: 10px 20px;
        font-size: 1rem;
    }

    .age-calc .age-box .value {
        padding: 30px 20px;
        font-size: 1rem;
    }
}

@media (max-width: 600px) {
    .box {
        width: 300px;
    }

    .box .date-picker {
        display: block;
    }

    .box .date-picker input {
        margin: 10px 0;
        width: 100%;
    }

    .age-calc .age-box {
        width: 120px;
        margin: 5px;
    }

    .age-calc .age-box p.header {
        padding: 10px 5px;
        font-size: .8rem;
    }

    .age-calc .age-box .value {
        padding: 30px 5px;
        font-size: .9rem;
    }
}
</style>

<body>

    <body>
        <div class="box">
            <h4>age calculator</h4>
            <div class="date-picker">
                <span>choose your birth date</span>
                <input type="date" id="datePicker">
                <span id="choseDate"></span>
            </div>
            <div class="age-calc">
                <div class="age-box">
                    <p class="header">years</p>
                    <p class="value" id="ageYear">0</p>
                </div>
                <div class="age-box">
                    <p class="header">months</p>
                    <p class="value" id="ageMonth">0</p>
                </div>
                <div class="age-box">
                    <p class="header">days</p>
                    <p class="value" id="ageDays">0</p>
                </div>
                <div class="age-box">
                    <p class="header">hours</p>
                    <p class="value" id="ageHours">0</p>
                </div>
                <div class="age-box">
                    <p class="header">seconds</p>
                    <p class="value" id="ageSeconds">0</p>
                </div>
                <div class="age-box">
                    <p class="header">mili seconds</p>
                    <p class="value" id="ageMiliSeconds">0</p>
                </div>
            </div>
        </div>

        <script type="text/javascript" src="Javascript.js"></script>



        <script>
        // Variables For Datepicker

        var datePicker = document.getElementById('datePicker');
        var choseDate = document.getElementById('choseDate');

        // Variables For Prinitng Values

        var ageYear = document.getElementById('ageYear');
        var ageMonth = document.getElementById('ageMonth');
        var ageDays = document.getElementById('ageDays');
        var ageHours = document.getElementById('ageHours');
        var ageSeconds = document.getElementById('ageSeconds');
        var ageMiliSeconds = document.getElementById('ageMiliSeconds');

        datePicker.addEventListener('change', function() {

            var options = {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            var selectedDate = new Date(this.value);
            var DOB = selectedDate.toLocaleDateString('en-US', options);


            choseDate.innerHTML = "DOB : " + " " + DOB;


            var miliSeconds_Btw_DOB = Date.parse(DOB);
            var miliSecond_Btw_Now = Date.now();

            var age_in_MiliSeconds = miliSecond_Btw_Now - miliSeconds_Btw_DOB;

            // console.log(age_in_MiliSeconds);

            var miliSeconds = age_in_MiliSeconds;
            var second = 1000;
            var minute = second * 60;
            var hour = minute * 60;
            var day = hour * 24;
            var month = day * 30;
            var year = day * 365;



            // NOW START THE CALCULATION

            var years = Math.round(miliSeconds / year);
            var months = years * 12;
            var days = years * 365;
            var hours = Math.round(miliSeconds / hour);
            var seconds = Math.round(miliSeconds / second);



            // Now it is time to print values in boxes

            ageYear.innerHTML = years
            ageMonth.innerHTML = months
            ageDays.innerHTML = days
            ageHours.innerHTML = hours
            ageSeconds.innerHTML = seconds
            ageMiliSeconds.innerHTML = miliSeconds;

            document.querySelector('.age-calc').classList.add('expand');
        })
        </script>

    </body>

</html>