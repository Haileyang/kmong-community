<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COMMUNITY</title>

    <script src="./assets/js/jquery.js" type="text/javascript"></script>
    <script src="./assets/js/includeHTML.js"></script> <!-- html include script -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script> <!-- swiper script -->

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css" integrity="sha384-OX60W5no62t3a7IWb/778scS02RmUVFiMWgxiaEMwIlqYjLONUVz9xqTGVWlyiFH" crossorigin="anonymous"><link rel="stylesheet" href="//cdn.jsdelivr.net/npm/xeicon@2.3.3/xeicon.min.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>


</head>
<body>
  <div id="wrap">
    <header class="theme-header">
      <div class="theme-header-inner">
        <h1 class="theme-logo">
          <img alt="로고" src="./assets/img/logo.svg" />
        </h1>

        <ul class="header-menu-list">
          <li class="header-menu-item">
            <a href="" class="header-menu-link">구매이력</a>
          </li>
          <li class="header-menu-item">
            <!-- TODO 새로운 메세지 알림 시 클래스 new 추가 -->
            <a href="" class="header-menu-link new">메세지</a>
          </li>
          <li class="header-menu-item">
            <a href="" class="header-menu-link">잔액 100G</a>
          </li>
          <li class="header-menu-item">
            <a href="" class="header-menu-link">
              <span class="header-menu-user-name"> USERID님</span>
            </a>
          </li>
        </ul>
      </div>
    </header>

    <main class="theme-content-inner">
      <div class="theme-content-flex-wrap">
        <div class="theme-content-col col-side">
          <div class="chatting-list-wrap">
            <span class="chatting-list-head">채팅방 연결중...</span>
            <div class="live-chatting-box">
              <!-- TODO KBU 바로가기 링크 버튼 -->
              <a href="https://www.naver.com/" class="live-chatting-link">바로가기 ></a>

              <!-- TODO 채팅 리스트 -->
              <div class="live-chatting-list-wrap" >
                <ul  class="live-chatting-list" id = "ul123">
                </ul>
              </div>
            </div>

            <!-- TODO 채팅 입력하는 곳 -->
            <div class="live-chatting-input-box">
              <!-- TODO 채팅 입력 input box / 비로그인 시 placeholder 나타나며 read-only 로 변경 -->
              <input type="text" class="chatting-input" placeholder="로그인 후 채팅을 이용하실 수 있습니다.">
              <!-- TODO 비로그인 시 "로그인" 으로 텍스트 변경 -->
              <button type="button"onclick="getPhpFunction();" class="chatting-export-btn">전송</button>
            </div>
          </div>

          <!-- TODO 광고영상 영역 -->
          <div class="advertisement-video">
            광고영상
          </div>

          <!-- TODO 새로운 게시글 & 새로운 댓글 -->
          <div class="new-board-tab-wrap">
            <ul class="new-board-tab-list">
              <!-- 활성화 시 클래스 active 추가 -->
              <li class="new-board-tab-item active" data-tab="new_board">새로운 게시판</li>
              <li class="new-board-tab-item" data-tab="new_comment">새로운 댓글</li>
            </ul>

            <!-- TODO 게시판 게시글 최대 3개 노출 -->
            <div class="new-board-tab on" id="new_board">
              <ul class="board-list">
                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="board-item-title">새로운 게시글 입니다.</h3>
                    <span class="board-item-date">2022.05.31</span>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="board-item-title">새로운 게시글 입니다.</h3>
                    <span class="board-item-date">2022.05.31</span>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="board-item-title">새로운 게시글 입니다.</h3>
                    <span class="board-item-date">2022.05.31</span>
                  </a>
                </li>
              </ul>
            </div>

            <!-- TODO 댓글 게시판 최대 3개 노출 -->
            <div class="new-board-tab" id="new_comment">
              <ul class="board-list">
                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="board-item-title">새로운 댓글 입니다.</h3>
                    <span class="board-item-date">2022.05.31</span>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="board-item-title">새로운 댓글 입니다.</h3>
                    <span class="board-item-date">2022.05.31</span>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="board-item-title">새로운 댓글 입니다.</h3>
                    <span class="board-item-date">2022.05.31</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>


        </div>

        <div class="theme-content-col col-center">
          <div class="main-visual-slide-wrap">
            <!-- TODO 메인 비주얼 배너 슬라이드 -->
            <div class="swiper main-visual-slide">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="./assets/img/main-banner.png" alt="">
                </div>
              </div>

              <div class="swiper-pagination"></div>
            </div>
          </div>

          <!-- TODO 상품명 리스트 / 최대 3개 -->
          <div class="product-list-wrap">
            <ul class="product-list">

              <li class="product-item">
                <a href="./sub.php?idx=" class="product-link">
                  <!-- TODO 상품 이미지 -->
                  <div class="product-img" style="background-image: url('./assets/img/main-banner.png');"></div>
                  <!-- TODO 상품명 -->
                  <span class="product-name"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="theme-content-col col-side">
          <!-- TODO 광고 배너 4개 -->
          <div class="advertisement-banner-wrap">
            <ul class="advertisement-list">
              <li class="advertisement-item">
                <a href="" class="advertisement-link">
                  <img src="./assets/img/main-banner.png" alt="광고배너">
                </a>
              </li>

              <li class="advertisement-item">
                <a href="" class="advertisement-link">
                  <img src="./assets/img/main-banner.png" alt="광고배너">
                </a>
              </li>

              <li class="advertisement-item">
                <a href="" class="advertisement-link">
                  <img src="./assets/img/main-banner.png" alt="광고배너">
                </a>
              </li>

              <li class="advertisement-item">
                <a href="" class="advertisement-link">
                  <img src="./assets/img/main-banner.png" alt="광고배너">
                </a>
              </li>
            </ul>
          </div>

          <div class="news-board-tab-wrap">
            <ul class="news-board-tab-list">
              <!-- 활성화 시 클래스 active 추가 -->
              <li class="news-board-tab-item active" data-tab="hot_news">HOT NEWS</li>
              <li class="news-board-tab-item" data-tab="gram_news">NEWS</li>
            </ul>

            <!-- TODO 게시판 게시글 최대 5개 노출 -->
            <div class="news-board-tab on" id="hot_news">
              <ul class="board-list">
                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="news-board-title">뉴스레터 공지사항 글입니다.</h3>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="news-board-title">뉴스레터 공지사항 글입니다.</h3>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="news-board-title">뉴스레터 공지사항 글입니다.</h3>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="news-board-title">뉴스레터 공지사항 글입니다.</h3>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="news-board-title">뉴스레터 공지사항 글입니다.</h3>
                  </a>
                </li>
              </ul>
            </div>

            <!-- TODO 댓글 게시판 최대 5개 노출 -->
            <div class="news-board-tab" id="gram_news">
              <ul class="board-list">
                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="news-board-title">뉴스레터 공지사항 글입니다.</h3>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="news-board-title">뉴스레터 공지사항 글입니다.</h3>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="news-board-title">뉴스레터 공지사항 글입니다.</h3>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="news-board-title">뉴스레터 공지사항 글입니다.</h3>
                  </a>
                </li>

                <li class="board-item">
                  <a href="" class="board-link">
                    <h3 class="news-board-title">뉴스레터 공지사항 글입니다.</h3>
                  </a>
                </li>
              </ul>
            </div>
          </div>

          <!-- TODO 결제정보 -->
          <div class="payment-list-wrap">
            <span class="payment-list-head">결제 정보</span>
            <div class="payment-list-box">
              <ul class="payment-list">
                <!-- TODO 결제상품 아이템 -->
                <li class="payment-item">
                  <!-- TODO 결제 상품 이미지 -->
                  <img src="./assets/img/main-banner.png" alt="결제 상품 이미지">
                  <div class="payment-item-info">
                    <!-- TODO 결제 상품명 -->
                    <h3 class="payment-item-title">상품명이 입력되는 곳입니다. </h3>
                    <!-- TODO 결제 상품 가격 -->
                    <span class="payment-item-price">54,800원</span>
                  </div>
                  <button class="payment-delete-btn" type="button">
                    <img src="./assets/img/delete-btn.svg" alt="상품 리스트 삭제 버튼">
                  </button>
                </li>

                <li class="payment-item">
                  <!-- TODO 결제 상품 이미지 -->
                  <img src="./assets/img/main-banner.png" alt="결제 상품 이미지">
                  <div class="payment-item-info">
                    <!-- TODO 결제 상품명 -->
                    <h3 class="payment-item-title">상품명이 입력되는 곳입니다. </h3>
                    <!-- TODO 결제 상품 가격 -->
                    <span class="payment-item-price">54,800원</span>
                  </div>
                  <button class="payment-delete-btn" type="button">
                    <img src="./assets/img/delete-btn.svg" alt="상품 리스트 삭제 버튼">
                  </button>
                </li>

                <li class="payment-item">
                  <!-- TODO 결제 상품 이미지 -->
                  <img src="./assets/img/main-banner.png" alt="결제 상품 이미지">
                  <div class="payment-item-info">
                    <!-- TODO 결제 상품명 -->
                    <h3 class="payment-item-title">상품명이 입력되는 곳입니다. </h3>
                    <!-- TODO 결제 상품 가격 -->
                    <span class="payment-item-price">54,800원</span>
                  </div>
                  <button class="payment-delete-btn" type="button">
                    <img src="./assets/img/delete-btn.svg" alt="상품 리스트 삭제 버튼">
                  </button>
                </li>
              </ul>
            </div>
            <!-- TODO 총 결제금액 -->
            <div class="total-payment-box">
              <span class="total-payment-text">총 결제금액</span>
              <span class="total-payment-price">207,500원</span>
            </div>

            <!-- TODO 결제하기 버튼 / 활성화 시 클래스 active 추가-->
            <div class="total-payment-btn-box">
              <button type="button" class="total-payment-btn">구매하기</button>
            </div>
          </div>

          <!-- TODO 실시간 채팅 -->
          <button type="button" class="live-chatting-text-box">
            <span class="live-chatting-text-item">1:1 문의</span>
          </button>
        </div>
      </div>
    </main>
</div>
<script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script>

   function getPhpFunction() {

	 alert("plz login");

    }



      $(function(){
        var swiper = new Swiper(".main-visual-slide", {
          pagination: {
            el: ".swiper-pagination",
          },
          loop:true,
          autoplay: {
          delay: 2500,
        },
        });


        /* new board */
        $(".new-board-tab-list li.new-board-tab-item").click(function(){
          var target = $(this).attr('data-tab');

          $('.new-board-tab-item').removeClass('active');
          $(this).addClass('active');

          $('.new-board-tab').removeClass('on');
          $("#" + target).addClass('on');
        });

        /* news board */
        $(".news-board-tab-list li.news-board-tab-item").click(function(){
          var target = $(this).attr('data-tab');

          $('.news-board-tab-item').removeClass('active');
          $(this).addClass('active');

          $('.news-board-tab').removeClass('on');
          $("#" + target).addClass('on');
        });
      });
    </script>
</body>
</html>
