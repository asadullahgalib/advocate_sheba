<link rel="stylesheet" type="text/css" href="{{asset('assets/css/rating.css')}}">

<!-- Client Rating & Reviews -->
<div class="col-lg-4 col-md-4 wow animate__animated animate__fadeIn custom_doctor_profile_bottom" data-wow-delay=".4s">
    <div class="doctor-profile-card">

        <!-- Header -->
        <div class="doctor-profile-title">
            <h3>
                Client Rating & Reviews
            </h3>
        </div>

        <!-- =========================================
             Client Ratings & Reviews
        ========================================= -->

            <!-- =================================
                 Header
            ================================== -->


            <!-- =================================
                 Overall Rating
            ================================== -->

            <div class="overall-rating">

                <!-- Rating Number -->
                <div class="rating-score">
                    4.8
                </div>


                <!-- Stars & Reviews -->
                <div class="rating-summary">

                    <div class="rating-stars">

                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>

                    </div>

                    <div class="total-reviews">
                        (128 Reviews)
                    </div>

                </div>

            </div>


            <!-- =================================
                 Rating Breakdown
            ================================== -->

            <div class="rating-breakdown">


                <!-- 5 Star -->
                <div class="rating-row">

                    <div class="rating-label">
                        5
                    </div>

                    <div class="rating-small-star">
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <div class="rating-progress">

                        <div class="rating-progress-bar rating-five"
                             style="width: 72%;">
                        </div>

                    </div>

                    <div class="rating-count">
                        92
                    </div>

                </div>


                <!-- 4 Star -->
                <div class="rating-row">

                    <div class="rating-label">
                        4
                    </div>

                    <div class="rating-small-star">
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <div class="rating-progress">

                        <div class="rating-progress-bar rating-four"
                             style="width: 19%;">
                        </div>

                    </div>

                    <div class="rating-count">
                        24
                    </div>

                </div>


                <!-- 3 Star -->
                <div class="rating-row">

                    <div class="rating-label">
                        3
                    </div>

                    <div class="rating-small-star">
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <div class="rating-progress">

                        <div class="rating-progress-bar rating-three"
                             style="width: 6.5%;">
                        </div>

                    </div>

                    <div class="rating-count">
                        8
                    </div>

                </div>


                <!-- 2 Star -->
                <div class="rating-row">

                    <div class="rating-label">
                        2
                    </div>

                    <div class="rating-small-star">
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <div class="rating-progress">

                        <div class="rating-progress-bar rating-two"
                             style="width: 2%;">
                        </div>

                    </div>

                    <div class="rating-count">
                        2
                    </div>

                </div>


                <!-- 1 Star -->
                <div class="rating-row">

                    <div class="rating-label">
                        1
                    </div>

                    <div class="rating-small-star">
                        <i class="bi bi-star-fill"></i>
                    </div>

                    <div class="rating-progress">

                        <div class="rating-progress-bar rating-one"
                             style="width: 2%;">
                        </div>

                    </div>

                    <div class="rating-count">
                        2
                    </div>

                </div>


            </div>


            <!-- =================================
                 Write Review Button
            ================================== -->

            <div class="write-review-wrapper">

                <a href="#"
                   class="write-review-btn"
                   data-bs-toggle="modal"
                   data-bs-target="#reviewModal">

                    Write a Review

                </a>

                <p style="margin-top: 10px;font-size: 18px;font-style: italic;">Note: Reviews reflect individual client experience and do not constitute legal advice.</p>
            </div>
    </div>
</div>

<!-- =========================================
     Review Modal
========================================= -->

<div class="modal fade" id="reviewModal" tabindex="-1"
     aria-labelledby="reviewModalLabel" aria-hidden="true">

    <div class="modal-dialog modal-dialog-centered review-modal-dialog">

        <div class="modal-content review-modal-content">

            <!-- Close Button -->
            <button type="button"
                    class="review-modal-close"
                    data-bs-dismiss="modal"
                    aria-label="Close">

                <i class="bi bi-x-lg"></i>

            </button>


            <div class="modal-body review-modal-body">

                <!-- =================================
                     Advocate Information
                ================================== -->

                <div class="review-doctor-info">

                    <div class="review-doctor-image">

                        <img src="{{asset('frontend/profile/adv.png')}}"
                             alt="Doctor">

                    </div>

                    <h4>
                        এড. মোঃ আসাদুল্লাহ গালিব 
                    </h4>

                    <p>
                        Advocate
                        <br>
                        Supreme Court of Bangladesh
                    </p>

                    <div class="review-title-line"></div>

                </div>


                <!-- =================================
                     Review Form
                ================================== -->

                <form action="#" method="POST" id="doctorReviewForm">

                    @csrf


                    <!-- Rating -->
                    <div class="review-form-group">

                        <label class="review-label">
                            Overall provider rating<span>*</span>
                        </label>


                        <div class="rating-stars-input">

                            <input type="radio"
                                   name="rating"
                                   id="rating1"
                                   value="1">

                            <label for="rating1">
                                <i class="bi bi-star"></i>
                            </label>


                            <input type="radio"
                                   name="rating"
                                   id="rating2"
                                   value="2">

                            <label for="rating2">
                                <i class="bi bi-star"></i>
                            </label>


                            <input type="radio"
                                   name="rating"
                                   id="rating3"
                                   value="3">

                            <label for="rating3">
                                <i class="bi bi-star"></i>
                            </label>


                            <input type="radio"
                                   name="rating"
                                   id="rating4"
                                   value="4">

                            <label for="rating4">
                                <i class="bi bi-star"></i>
                            </label>


                            <input type="radio"
                                   name="rating"
                                   id="rating5"
                                   value="5">

                            <label for="rating5">
                                <i class="bi bi-star"></i>
                            </label>

                        </div>

                    </div>


                    <!-- Review Text -->

                    <div class="review-form-group email-group">

                        <textarea class="form-control" placeholder="Write Your Review *" style="height: 100px;"></textarea>

                    </div>

                    <!-- Email -->
                    <div class="review-form-group email-group"  style="margin-bottom: 15px;">

                        <input type="text"
                               name="mobile" 
                               class="form-control"
                               placeholder="Mobile No*"
                               required>

                    </div>


                    <!-- Terms -->
                    <div class="review-terms">

                        By clicking the "Submit Review" button,
                        you agree to <br>

                        <a href="#">
                            Terms and Conditions
                        </a>

                        and

                        <a href="#">
                            Privacy Policy
                        </a>.

                    </div>


                    <!-- Submit -->
                    <button type="submit"
                            class="submit-review-btn"
                            style="padding: 5px 40px;">

                        Submit Review

                    </button>

                </form>

            </div>

        </div>

    </div>

</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {

        const ratingInputs = document.querySelectorAll(
            '.rating-stars-input input[name="rating"]'
        );

        const ratingLabels = document.querySelectorAll(
            '.rating-stars-input label'
        );


        ratingInputs.forEach(function (input) {

            input.addEventListener('change', function () {

                const selectedRating = parseInt(this.value);

                ratingLabels.forEach(function (label, index) {

                    const starNumber = index + 1;

                    if (starNumber <= selectedRating) {

                        label.classList.add('active');

                        label.innerHTML =
                            '<i class="bi bi-star-fill"></i>';

                    } else {

                        label.classList.remove('active');

                        label.innerHTML =
                            '<i class="bi bi-star"></i>';

                    }

                });

            });

        });

    });
</script>