<?php include("header.php"); ?>
    <style>
        *{
    margin: 0;
    padding: 0;
    font-family: "Open Sans",sans-serif;
    box-sizing: border-box;
}

body{
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    background-color: white;
}

.about-section{
    background: url(about.jpg) no-repeat left;
    background-size: 55%;
    background-color: white;
    overflow: hidden;
    padding: 100px 0;
}

.inner-container{
    width: 55%;
    float: right;
    background-color: white;
    padding: 150px;
}

.inner-container h1{
    margin-bottom: 30px;
    font-size: 30px;
    font-weight: 900;
}

.text{
    font-size: 13px;
    color: black;
    line-height: 30px;
    text-align: justify;
    margin-bottom: 40px;
}

.skills{
    display: flex;
    justify-content: space-between;
    font-weight: 700;
    font-size: 13px;
}

@media screen and (max-width:1200px){
    .inner-container{
        padding: 80px;
    }
}

@media screen and (max-width:1000px){
    .about-section{
        background-size: 100%;
        padding: 100px 40px;
    }
    .inner-container{
        width: 100%;
    }
}

@media screen and (max-width:600px){
    .about-section{
        padding: 0;
    }
    .inner-container{
        padding: 60px;
    }
}
    </style>
<body>
    <div class="about-section">
        <div class="inner-container">
            <h1>About Us</h1>
            <p class="text">
                Tech atlas is a costumer focused company who always satisfies their costumers with products of the latest technology . Our purpose is to create smart clients and this could be done through our services and up to date devices.
            </p>
            <div class="skills">
                <span></span>
                <span>HERE FOR YOUR TECH NEEDS</span>
                <span></span>
            </div>
        </div>
    </div>
</body>
</html>