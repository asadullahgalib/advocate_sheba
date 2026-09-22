<style>
    .notice-bar{background-color:#129AF7;color:white;display:flex;align-items:center;justify-content:space-between;padding:5px 5px;font-size:15px;position:relative;}
    .notice-label{background-color:#1B489D;padding:6px 15px;border-radius:25px 0 0 25px;font-weight:bold;margin-right:10px;}
    .notice-content{flex:1;overflow:hidden;}
    .notice-content marquee{font-weight:500;color:#fff;}
    .notice-content a{font-weight:900 !important;color:#fff !important;}
    .close-btn{background-color:#1B489D;color:white;border:none;font-size:20px;font-weight:bold;padding:0 10px;border-radius:0 25px 25px 0;cursor:pointer;transition:background 0.3s;}
    .close-btn:hover{background-color:#b30000;}
</style>

<section class="noticeBar" id="noticeBar" style="padding: 5px 0px 5px 0px;background:#129AF7;margin-bottom: 15px;border-radius: 15px;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-12 col-lg-12">
                <div class="notice-bar">
                    <div class="notice-content">
                        <marquee behavior="scroll" direction="left" scrollamount="5" onmouseover="this.stop();" onmouseout="this.start();" style="    padding-top: 10px;">
                            <a href="#">
                                📢 Welcome to Advocate Sheba  &nbsp;&nbsp; | &nbsp;&nbsp;
                            </a>

                            <a href="#">
                                📢 Advocate Sheba ন্যায়ের পাশে আমরা  &nbsp;&nbsp; | &nbsp;&nbsp;
                            </a>
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    function closeNotice() {
        document.getElementById('noticeBar').style.display = 'none';
    }
</script>