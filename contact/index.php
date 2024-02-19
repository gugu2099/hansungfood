<!DOCTYPE html>
<html lang="en">
<head>
    <title>HANSUNGFOOD</title>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

</head>
<body>

    <!-- header -->
    <div data-include-path="../header2.html"></div>
    <!-- //header -->

    <section id="page1">
        <div id="main">
            <div class="main-box">
                <p>홈  >  상담문의</p>
                <div class="background">
                    <img src="image/main30.png" alt="한성푸드 상세페이지 메인">
                </div>
                <div class="box">
                    <b>상담문의</b>
                </div>
            </div>
            <div class="article">
                <div class="article-box">
                    <ul>
                        <li><a href="">기업소개<span></span><i>▼</i></a></li>
                        <li><a href="">공장소개<span></span><i>▼</i></a></li>
                        <li><a href="">제품소개<span></span><i>▼</i></a></li>
                        <li><a href="">상담문의<span></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    
    <section id="page2">
        <div id="title">
            <div class="title-box" data-aos="fade-down" data-aos-duration="1600">
                <strong>상담문의</strong>
                <p>
                    OEM 제품 상담 및 기타 문의<br>
                    신뢰를 바탕으로 함께 성장할 수 있는 파트너
                </p>
                <span data-aos="fade-down" data-aos-duration="1000">
                    한성푸드는 영어, 중국어, 일본어 언어 응대가 가능합니다.<br>
                    당사 제품에 문의 사항이 있으신 경우, 아래 양식을 통해 연락 주시면 최대한 빠른 회신 드리겠습니다.
                </span>
            </div>
        </div>
    </section>

    <section id="page3" data-aos="fade-up" data-aos-duration="1200">
        <div class="form-group">
            <!-- <div class="form-bg">
                <img src="image/bg1.png" alt="배경이미지">
            </div> -->
            <form action="" id="form">
                <fieldset class="fieldset">
                    <!-- <tr> -->
                        <!-- <th></th> -->
                        <!-- <td> -->
                            <!-- <legend></legend> -->
                            <input type="name" id="name" placeholder="이름*" autofocus><br>
                            <input type="text" id="text" placeholder="회사명*"><br>
                            <input type="tel" id="tel" placeholder="연락처*"><br>
                            <input type="email" id="useremail" name="useremail" placeholder="E-mail*"><br>
                            <input type="" placeholder="연락처*"><br>
                            <select name="product" id="product-select">
                                <optgroup>
                                    <option value="제품1" selected>문의제품1</option>
                                    <option value="제품2">문의제품2</option>
                                    <option value="제품3">문의제품3</option>
                                </optgroup>
                            </select><br>
                            <textarea name="" id="" cols="30" rows="10" placeholder="문의내용*"></textarea>
                            <input type="submit" value="전송하기">
                            <!-- <input type="reset" value="취소"> -->
                        <!-- </td> -->
                    <!-- </tr> -->
                </fieldset>
            </form>
        </div>
    </section>
    
    <!-- footer -->
    <div data-include-path="../footer2.html"></div>
    <!-- //footer -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>