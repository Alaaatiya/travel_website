<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">

</head>
<body>

<div class="container">

    <div class="card-container">

        <div class="front">
            <div class="image">
                <img src="images/chip.png" alt="">
                <img src="images/visa.png" alt="">
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>card holder</span>
                    <div class="card-holder-name">full name</div>
                </div>
                <div class="box">
                    <span>expires</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">yy</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="images/visa.png" alt="">
            </div>
        </div>

    </div>

    <form action="pay_form.php" method="post" class="pay-form">
        <div class="inputBox">
            <span>card_number</span>
            <input type="text" maxlength="16" class="card-number-input" name="card_number">
        </div>
        <div class="inputBox">
            <span>card_holder</span>
            <input type="text" class="card-holder-input" name="card_holder">
        </div>
        <div class="flexbox">
            <div class="inputBox">
                <span>expiration_mm_dd_yy</span>
                <input type="date" name="expiration_mm_dd_yy">
               
            </div>
            <!-- <div class="inputBox"> -->
                <!-- <span>expiration_yy</span> -->
                <!-- <input type="date"   name="expiration_yy"  > -->
                <!-- <select name="" id="" class="year-input"> -->
                    <!-- <option value="year" selected disabled>year</option> -->
                    <!-- <option value="2021">2021</option> -->
                    <!-- <option value="2022">2022</option> -->
                    <!-- <option value="2023">2023</option> -->
                    <!-- <option value="2024">2024</option> -->
                    <!-- <option value="2025">2025</option> -->
                    <!-- <option value="2026">2026</option> -->
                    <!-- <option value="2027">2027</option> -->
                    <!-- <option value="2028">2028</option> -->
                    <!-- <option value="2029">2029</option> -->
                    <!-- <option value="2030">2030</option> -->
                <!-- </select> -->
            <!-- </div> -->
            <div class="inputBox">
                <span>cvv</span>
                <input type="text" maxlength="4" class="cvv-input" name="cvv">
            </div>
        </div>
        <input type="submit" value="submit" class="submit-btn" name="submit">
    </form>

</div>    
    





<script>

document.querySelector('.card-number-input').oninput = () =>{
    document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
}

document.querySelector('.card-holder-input').oninput = () =>{
    document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
}

document.querySelector('.month-input').oninput = () =>{
    document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
}

document.querySelector('.year-input').oninput = () =>{
    document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
}

document.querySelector('.cvv-input').onmouseenter = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
}

document.querySelector('.cvv-input').onmouseleave = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
}

document.querySelector('.cvv-input').oninput = () =>{
    document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
}

</script>







</body>
</html>