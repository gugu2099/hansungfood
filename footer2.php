<!DOCTYPE html>
<html lang="en">
<head>
    <title>HANSUNGFOOD</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="css/footer.css"> -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<style>

body {
    word-break: keep-all;
}
a {
	text-decoration: none;
	color: #3f3f3f;
}
ul, ol {
	list-style: none;
}
img {
	vertical-align: top;
	border: none;
}
p, b, span, div, body {
    color: #3f3f3f;
}

#footer {
    background-color: #f5f5f5;
    padding: 126px 0;
}

#footer-group {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
}

#footer-group .box1 {
    padding: 0 20px 0 20px;
    position: relative;
}

#footer-group .box1 h3 {}

#footer-group .box1 h3 a {
    display: block;
}

#footer-group .box1 h3 a img {
    position: absolute;
    width: 220px;
    top: 50%;
    transform: translate(0, -50%);
} 

#footer-group .box2{
    padding: 0 20px 0 20px;
}
#footer-group .box2 .box-text1 {
    font-size: 20px;
}
#footer-group .box2 .box-text1 ul {
    display: flex;
    margin-bottom: 36px;
}
#footer-group .box2 .box-text1 ul li {
    padding-right: 15px;
}

#footer-group .box2 .box-text1 ul li:after {
    content: "";
    border-right: #000 solid 2px;
    padding-right: 15px;
}
#footer-group .box2 .box-text1 ul li:last-child::after{
    display: none;
}

#footer-group .box2 .box-text1 ul li a {
    color: #3f3f3f;
}

#footer-group .box2 .box-text2 {}

#footer-group .box2 .box-text2 .footer-text {
    display: flex;
    font-size: 16px;
    color: #b1b1b1;
}

#footer-group .box2 .box-text2 .footer-text li:last-child {
    display: none;
}

#footer-group .box2 .box-text2 .footer-text li {
    line-height: 20px;
}


@media only screen and (max-width: 1100px) {
    ul {
    padding-inline-start: 0;
    }
    #footer {
    padding: 60px 0;
    }
    #footer #footer-group{
    flex-direction: column;
    text-align: center;
    }
    #footer #footer-group .box1 {
    height: 80px;
    line-height: 80px;
    margin-bottom: 40px;
    }
    #footer #footer-group .box1 > h3 {
    margin: 0;
    }
    #footer #footer-group .box1 h3 a img {
    width: 160px;
    position: static;
    vertical-align: middle;
    padding-top: 60px;
    }
    #footer #footer-group .box2 .box-text1 {
    width: 80%;
    margin: 0 auto;
    }
    #footer-group .box-text1 ul li {

    }
    #footer-group .box-text1 ul li {
    font-size: 16px;
    display: inline-block;
    }
    #footer-group .box-text2 .footer-text li {
    font-size: 12px;
    }
    #footer-group .box2 {
    padding: 0;
    }
    #footer-group .box2 .box-text2 .footer-text li:first-child {
    display: none; 
    }
    #footer-group .box2 .box-text2 .footer-text li:last-child {
    display: block;
    margin: 0 auto;
    width: 90%;
    text-align: center;
    }
    #footer-group .box2 .box-text1 ul {
    display: block;
    margin-bottom: 36px;
    }
}

</style>

<body>

<footer id="footer">
    <div id="footer-group">
        <div class="box1">
            <h3>
                <a href="../index.html">
                    <img src="../image/logo5.png" alt="푸터로고">
                </a>
            </h3>
        </div>
        <div class="box2">
            <div class="box-text1">
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">개인정보취급방침</a></li>
                    <li><a href="">이용약관</a></li>
                    <li><a href="">고객센터</a></li>
                    <li><a href="">사이트맵</a></li>
                </ul>
            </div>
            <div class="box-text2">
                <ul class="footer-text">
                    <li>
                        법인명: 한성푸드영농조합법인 | 대표자: 김종남 | 사업자 등록번호: 416-81-39368<br>
                        전화: 061-830-1000 | 팩스: 061-835-7857 | 주소: 59502 전라남도 고흥군 동강면 죽암로 13 한성푸드<br>
                        문의메일: hansungfood0413@naver.com | 통신판매업신고번호: 제 2009-21호<br>
                        Copyrightⓒ - 2012 by HANSUNGFOOD CO.,LTD.ALL rights reserved<br>
                    </li>
                    <li>
                        법인명: 한성푸드영농조합법인 | 대표자: 김종남 |<br>
                        사업자 등록번호: 416-81-39368<br>
                        전화: 061-830-1000 | 팩스: 061-835-7857 |<br>
                        주소: 59502 전라남도 고흥군 동강면 죽암로 13 한성푸드<br>
                        문의메일: hansungfood0413@naver.com |<br>
                        통신판매업신고번호: 제 2009-21호<br>
                        Copyrightⓒ - 2012 by HANSUNGFOOD CO.,LTD.ALL rights reserved
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

</body>
</html>