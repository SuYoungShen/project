<!--<!DOCTYPE html>
<html>
<head>
    <title></title>-->
    <style type="text/css">

        img
        {

            border-width: 0px; /* 避免img受到超連結影響出現border，所以border-width: 0px;*/
            width: 350px;
            height: 233px;
        }
    </style>



              <marquee scrollAmount="35" BEHAVIOR="scroll"  loop="0">

                <img src="images/marquee/IMG_3350.jpg"  />
                <img src="white.gif"  />
                <img src="black.gif"  />
              </marquee>
            
<!--
</head>
<body>
    <div class="bannerMarquee" align="center">
        <ul>
            <li><a href="#">
                <img src="IMG_3350.jpg" alt="*" /></a></li>
                <li><a href="#">
                    <img src="white.gif" alt="*" /></a></li>
                    <li><a href="#">
                        <img src="black.gif" alt="*" /></a></li>
                        <li><a href="#">
                            <img src="IMG_3350.jpg" alt="*" /></a></li>
                            <li><a href="#">
                                <img src="IMG_3350.jpg" alt="*" /></a></li>
                                <li><a href="#">
                                    <img src="IMG_3350.jpg" alt="*" /></a></li>

        </ul>
    </di
<!--</body>--><!--
<script src="jquery-1.11.0.min.js" type="text/javascript"></script>
<!--
<script type="text/javascript">
    $(document).ready(init);
    var t;
    function init() {

        $("div.bannerMarquee ul li").mouseenter(MouseEnterHandler);
        $("div.bannerMarquee ul li").mouseleave(MouseLeaveHandler);
        t = setTimeout(myFunc, 2000); //初始畫面載入後，2秒後執行myFunc()
    }

    function myFunc() {


        //1. 先把前三個li代碼 複製暫存起來
        var $ThreeLi = $("div.bannerMarquee ul li").slice(0,3).clone();
        //2. 把剛剛複製的li物件附加到最後一個li元素的後面
        $("div.bannerMarquee ul li").last().after($ThreeLi);
        //3. 移除掉前三個li物件
        //把前三個li物件先徹底隱藏後再移除掉
        $("div.bannerMarquee ul li").slice(0, 3).hide(500, function () {

            $(this).remove(); /*這裡要注意用$(this)，使用$("div.bannerMarquee ul li").slice(0, 3)會全部消失*/
        });

        t = setTimeout(myFunc, 2000); //每2秒鐘執行myFunc()
    }
    function MouseEnterHandler() {
        clearTimeout(t);

    }

    function MouseLeaveHandler() {
        //滑鼠離開圖片2秒後，執行myFunc
        t = setTimeout(myFunc, 2000);
    }

</script>
-->
<!--</html>-->
