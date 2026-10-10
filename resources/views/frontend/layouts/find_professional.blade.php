<style>
    .find_more_div{
        padding: 12px 20px;
        margin-bottom: 15px;
        min-height: 45px;
        background: rgb(16, 60, 109);
        border-radius: 12px;
        box-shadow: rgba(0, 32, 91, 0.2) 0px 4px 15px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: 0.3s;
        border: 1px solid rgba(255, 255, 255, 0.1);
        transform: translateY(0px);
        margin: 0px 15px 7px 15px;
    }
    .find_more_div:hover{
        background-color: #1B489D !important;
    }
</style>
<section class="join-professional-section" style="margin-bottom: 15px;">

    <!-- Legal Category Cards Section (4 Columns Each) -->
    <div class="row" style="margin-top: 5px;">
        <!-- Card 1: Advocate -->
        <h5 style="text-align: center;margin-bottom: 10px;"> অন্যান্য আইনি পেশাজীবী খুঁজুন </h5>
        <div class="col-md-3">
            <a href="{{route('find.our.advocate-list')}}" class="practice-area-card" style="text-decoration: none !important;">
                <div class="card-1 find_more_div"
                     onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0, 32, 91, 0.35)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 32, 91, 0.2)';">
                    
                    <h6 style="font-size: 16px; color: #fff; font-family: 'Georgia', serif; font-weight: bold; margin: 0; letter-spacing: 0.5px;">
                        Find Advocates
                    </h6>
                    <span style="color: #fff; font-size: 20px; font-weight: bold; line-height: 1;">&rarr;</span>
                </div>
            </a>
        </div>

        <!-- Card 2: Barrister -->
        <div class="col-md-3">
            <a href="{{route('find.our.barrister-list')}}" class="practice-area-card" style="text-decoration: none !important;">
                <div class="card-1 find_more_div"
                     onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0, 32, 91, 0.35)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 32, 91, 0.2)';">
                    
                    <h6 style="font-size: 16px; color: #fff; font-family: 'Georgia', serif; font-weight: bold; margin: 0; letter-spacing: 0.5px;">
                        Find Barristers
                    </h6>
                    <span style="color: #fff; font-size: 20px; font-weight: bold; line-height: 1;">&rarr;</span>
                </div>
            </a>
        </div>

        <!-- Card 3: Legal Consultant -->
        <div class="col-md-3">
            <a href="{{route('find.our.consultant-list')}}" class="practice-area-card" style="text-decoration: none !important;">
                <div class="card-1 find_more_div"
                     onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0, 32, 91, 0.35)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 32, 91, 0.2)';">
                    
                    <h6 style="font-size: 16px; color: #fff; font-family: 'Georgia', serif; font-weight: bold; margin: 0; letter-spacing: 0.5px;">
                        Find Legal Consultants
                    </h6>
                    <span style="color: #fff; font-size: 20px; font-weight: bold; line-height: 1;">&rarr;</span>
                </div>
            </a>
        </div>

        <!-- Card 4: Law Firm -->
        <div class="col-md-3">
            <a href="{{route('find.our.law-firm-list')}}" class="practice-area-card" style="text-decoration: none !important;">
                <div class="card-1 find_more_div"
                     onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 6px 20px rgba(0, 32, 91, 0.35)';"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 15px rgba(0, 32, 91, 0.2)';">
                    
                    <h6 style="font-size: 16px; color: #fff; font-family: 'Georgia', serif; font-weight: bold; margin: 0; letter-spacing: 0.5px;">
                        Find Law Firms
                    </h6>
                    <span style="color: #fff; font-size: 20px; font-weight: bold; line-height: 1;">&rarr;</span>
                </div>
            </a>
        </div>
    </div>
</section>