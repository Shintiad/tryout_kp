<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>TRYOUT Web Application</title>
    <!-- <link rel="stylesheet" href="../style.css"> -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

        *,
        *::before,
        *::after {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
        }

        /* img{
    width: 100%;
} */

        a {
            text-decoration: none;
        }

        /* Container */
        .container {
            position: relative;
            max-width: 1296px;
            width: 100%;
            margin: 0 auto;
            padding: 0 80px;
        }

        /* Logo Section */
        .logo {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .logo img {
            height: 40px;
            width: auto;
            margin-right: 9px;
            margin-top: -9px;
        }

        .logo h3 {
            font-size: 24px;
            font-weight: 700;
        }

        /* Showcase Area */
        .showcase-area .container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            align-items: center;
            justify-content: center;
        }

        .title h1 {
            font-size: 40px;
            line-height: 1.4;
        }

        .text {
            font-size: 18px;
            margin: 30px 0 15px;
            max-width: 600px;
            line-height: 1.7;
        }

        /* Button */
        .btn {
            display: inline-block;
            padding: 7px 20px;
            color: #fff !important;
            background-color: #1f2a47;
            border-radius: 16px;
            text-transform: capitalize;
            transition: 0.3s;
        }

        .btn:hover {
            background-color: #232836;
            transform: scale(1.05) !important;
        }

        .person {
            width: 100%;
            transform: translate(0%, 40px);
        }


        /* Responsive Styles */
        @media screen and (max-width: 1104px) {
            .title h1 {
                font-size: 30px;
            }

            .text {
                font-size: 16px;
                margin: 20px 0 15px;
                line-height: 1.4;
            }

            .btn {
                padding: 5px 16px;
            }
        }

        @media screen and (max-width: 768px) {
            .logo h3 {
                font-size: 18px;
            }

            .logo {
                margin-left: -15px;
            }

            .showcase-area .container {
                grid-template-columns: 1fr;
                text-align: center;
                justify-content: center;
                grid-gap: 32px;
            }

            .title h1 {
                font-size: 20px;
                margin-top: 50px;
            }

            .text {
                font-size: 11px;
                margin: 15px 0 7px;
                line-height: 1.3;
            }

            .person {
                width: 80%;
                transform: none;
            }

            .btn {
                padding: 5px 16px;
            }
        }
    </style>
</head>

<body>

    <div class="main">

        <header>
            <div class="container">
                <div class="logo">
                    <img src="<?= base_url('assets/images/logo-small.png') ?>" alt="Logo">
                    <h3>TRYOUT Web Application</h3>
                </div>
            </div>
        </header>
        <div class="showcase-area">
            <div class="container">
                <div class="left">
                    <div class="title">
                        <h1>Education and Training <br> Organization</h1>
                    </div>
                    <p class="text">University is an advanced solution for education and <br> training organization, university events and more...</p>
                    <!-- <div class="cta btn">
                            <a href="#" class="btn">Get Started</a>
                        </div> -->
                </div>
                <div class="right ">
                    <img src="<?= base_url('assets/images/Online__lesson__11.svg') ?>" alt="" class="person">
                </div>
            </div>
        </div>
    </div>
</body>

</html>