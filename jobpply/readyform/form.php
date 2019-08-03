<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 7/31/2019
 * Time: 11:02 AM
 */
function header_1()
{
 echo "<nav class=\"navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light\" id=\"ftco-navbar\">
    <div class=\"container\">
        <a class=\"navbar-brand\" href=\"home.php\">Jobpply</a>
        <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#ftco-nav\"
                aria-controls=\"ftco-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"oi oi-menu\"></span> Menu
        </button>

        <div class=\"collapse navbar-collapse\" id=\"ftco-nav\">
            <ul class=\"navbar-nav ml-auto\">
                <li class=\"nav-item active\"><a href=\"home.php\" class=\"nav-link\"><h5>الرئيسية</h5></a></li>
                <li class=\"nav-item\"><a href=\"contact_us.php\" class=\"nav-link\"><h5>عرض الوظائف</h5></a></li>
                <li class=\"nav-item\"><a href=\"contact_us.php\" class=\"nav-link\"><h5>عرض السير الذاتية</h5></a></li>
                <li class=\"nav-item\"><a href=\"add_offer.php\" class=\"nav-link\"><h5>اضافة وظيفة</h5></a></li>
                <li class=\"nav-item\"><a href=\"add_cv.php\" class=\"nav-link\"><h5>اضافة سيرة ذاتية</h5></a></li>
                <li class=\"nav-item\"><a href=\"contact_us.php\" class=\"nav-link\"><h5>تواصل معنا</h5></a></li>
                <li class=\"nav-item\"><a href=\"about.php\" class=\"nav-link\"><h5>من نحن</h5></a></li>

            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->";
}

function footer_1()
{
    echo "<footer class=\"ftco-footer ftco-bg-dark ftco-section\">
    <div class=\"container\">
        <div class=\"row mb-5\">
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">About</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts.</p>
                    <ul class=\"ftco-footer-social list-unstyled float-md-left float-lft mt-3\">
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-twitter\"></span></a></li>
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-facebook\"></span></a></li>
                        <li class=\"ftco-animate\"><a href=\"#\"><span class=\"icon-instagram\"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">Employers</h2>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\" class=\"py-2 d-block\">How it works</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Register</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Post a Job</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Advance Skill Search</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Recruiting Service</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Blog</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Faq</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4 ml-md-4\">
                    <h2 class=\"ftco-heading-2\">Workers</h2>
                    <ul class=\"list-unstyled\">
                        <li><a href=\"#\" class=\"py-2 d-block\">How it works</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Register</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Post Your Skills</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Job Search</a></li>
                        <li><a href=\"#\" class=\"py-2 d-block\">Emploer Search</a></li>
                    </ul>
                </div>
            </div>
            <div class=\"col-md\">
                <div class=\"ftco-footer-widget mb-4\">
                    <h2 class=\"ftco-heading-2\">Have a Questions?</h2>
                    <div class=\"block-23 mb-3\">
                        <ul>
                            <li><span class=\"icon icon-map-marker\"></span><span class=\"text\">203 Fake St. Mountain View, San Francisco, California, USA</span>
                            </li>
                            <li><a href=\"#\"><span class=\"icon icon-phone\"></span><span
                                    class=\"text\">+2 392 3929 210</span></a></li>
                            <li><a href=\"#\"><span class=\"icon icon-envelope\"></span><span class=\"text\">info@yourdomain.com</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-12 text-center\">

                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with <i class=\"icon-heart text-danger\"
                                                                        aria-hidden=\"true\"></i> by <a
                            href=\"https://colorlib.com\" target=\"_blank\">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer> 
";
}

function Company_info()
{
    echo " <div class=\"col-lg-4\">
                <div class=\"p-4 mb-3 bg-white\">
                    <h3 class=\"h5 text-black mb-3\">للتواصل معنا</h3>
                    <p class=\"mb-0 font-weight-bold\">العنوان</p>
                    <p class=\"mb-4\">العراق - النجف الاشرف</p>

                    <p class=\"mb-0 font-weight-bold\">هاتف</p>
                    <p class=\"mb-4\"><a href=\"#\" dir='rtl'>964-7800-000-000</a></p>

                    <p class=\"mb-0 font-weight-bold\">البريد الالكتروني</p>
                    <p class=\"mb-0\"><a href=\"#\"><span class=\"__cf_email__\"
                                                      data-cfemail=\"671e081215020a060e0b2703080a060e094904080a\">e-solution@info.com</span></a>
                    </p>

                </div>

                <div class=\"p-4 mb-3 bg-white\">
                    <h3 class=\"h5 text-black mb-3\">تفاصيل اخرى</h3>
                    <p>هل تبحث عن وظيفة؟ تنقيب هو أكبر محرك بحث عن الوظائف في المنطقة العربية، يجلب لك الوظائف من جميع الشركات .</p>
                    <p><a href=\"#\" class=\"btn btn-primary  py-2 px-4\">Learn More</a></p>
                </div>
            </div>";
}

function News_letter()
{
    echo "<section class=\"ftco-section-parallax\">
    <div class=\"parallax-img d-flex align-items-center\">
        <div class=\"container\">
            <div class=\"row d-flex justify-content-center\">
                <div class=\"col-md-7 text-center heading-section heading-section-white ftco-animate\">
                    <h2>Subcribe to our Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there
                        live the blind texts. Separated they live in</p>
                    <div class=\"row d-flex justify-content-center mt-4 mb-4\">
                        <div class=\"col-md-12\">
                            <form action=\"#\" class=\"subscribe-form\">
                                <div class=\"form-group d-flex\">
                                    <input type=\"text\" class=\"form-control\" placeholder=\"Enter email address\">
                                    <input type=\"submit\" value=\"Subscribe\" class=\"submit px-3\">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
}

function Display_Job()
{
    echo "<section class=\"ftco-section bg-light\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-9 pr-lg-5\">
                <div class=\"row justify-content-center pb-3\">
                    <div class=\"col-md-12 heading-section ftco-animate\">
                        <span class=\"subheading\">اخر العروض المضافة</span>
                        <h2 class=\"mb-4\">وظائف متوفرة</h2>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item py-4 d-block d-lg-flex align-items-center\">
                            <div class=\"one-third mb-4 mb-md-0\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black\"><a href=\"#\">Frontend Development</a></h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"bg-primary text-white badge py-2 px-3\">Partime</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">Facebook, Inc.</a></div>
                                    <div><span class=\"icon-my_location\"></span> <span>Western City, UK</span></div>
                                </div>
                            </div>

                            <div class=\"one-forth ml-auto d-flex align-items-center mt-4 md-md-0\">
                                <div>
                                    <a href=\"#\" class=\"icon text-center d-flex justify-content-center align-items-center icon mr-2\">
                                        <span class=\"icon-heart\"></span>
                                    </a>
                                </div>
                                <a href=\"job-single.html\" class=\"btn btn-primary py-2\">Apply Job</a>
                            </div>
                        </div>
                    </div><!-- end -->

                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item py-4 d-block d-lg-flex align-items-center\">
                            <div class=\"one-third mb-4 mb-md-0\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black\"><a href=\"#\">Full Stack Developer</a></h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"bg-warning text-white badge py-2 px-3\">Fulltime</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">Google, Inc.</a></div>
                                    <div><span class=\"icon-my_location\"></span> <span>Western City, UK</span></div>
                                </div>
                            </div>

                            <div class=\"one-forth ml-auto d-flex align-items-center mt-4 md-md-0\">
                                <div>
                                    <a href=\"#\" class=\"icon text-center d-flex justify-content-center align-items-center icon mr-2\">
                                        <span class=\"icon-heart\"></span>
                                    </a>
                                </div>
                                <a href=\"job-single.html\" class=\"btn btn-primary py-2\">Apply Job</a>
                            </div>
                        </div>
                    </div><!-- end -->

                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item py-4 d-block d-lg-flex align-items-center\">
                            <div class=\"one-third mb-4 mb-md-0\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black\"><a href=\"#\">Open Source Interactive Developer</a></h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"bg-info text-white badge py-2 px-3\">Freelance</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">New York Times</a></div>
                                    <div><span class=\"icon-my_location\"></span> <span>Western City, UK</span></div>
                                </div>
                            </div>

                            <div class=\"one-forth ml-auto d-flex align-items-center mt-4 md-md-0\">
                                <div>
                                    <a href=\"#\" class=\"icon text-center d-flex justify-content-center align-items-center icon mr-2\">
                                        <span class=\"icon-heart\"></span>
                                    </a>
                                </div>
                                <a href=\"job-single.html\" class=\"btn btn-primary py-2\">Apply Job</a>
                            </div>
                        </div>
                    </div><!-- end -->

                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item py-4 d-block d-lg-flex align-items-center\">
                            <div class=\"one-third mb-4 mb-md-0\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black\"><a href=\"#\">Frontend Development</a></h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"bg-secondary text-white badge py-2 px-3\">Internship</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">Facebook, Inc.</a></div>
                                    <div><span class=\"icon-my_location\"></span> <span>Western City, UK</span></div>
                                </div>
                            </div>

                            <div class=\"one-forth ml-auto d-flex align-items-center mt-4 md-md-0\">
                                <div>
                                    <a href=\"#\" class=\"icon text-center d-flex justify-content-center align-items-center icon mr-2\">
                                        <span class=\"icon-heart\"></span>
                                    </a>
                                </div>
                                <a href=\"job-single.html\" class=\"btn btn-primary py-2\">Apply Job</a>
                            </div>
                        </div>
                    </div><!-- end -->

                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item py-4 d-block d-lg-flex align-items-center\">
                            <div class=\"one-third mb-4 mb-md-0\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black\"><a href=\"#\">Open Source Interactive Developer</a></h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"bg-danger text-white badge py-2 px-3\">Temporary</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">New York Times</a></div>
                                    <div><span class=\"icon-my_location\"></span> <span>Western City, UK</span></div>
                                </div>
                            </div>

                            <div class=\"one-forth ml-auto d-flex align-items-center mt-4 md-md-0\">
                                <div>
                                    <a href=\"#\" class=\"icon text-center d-flex justify-content-center align-items-center icon mr-2\">
                                        <span class=\"icon-heart\"></span>
                                    </a>
                                </div>
                                <a href=\"job-single.html\" class=\"btn btn-primary py-2\">Apply Job</a>
                            </div>
                        </div>
                    </div><!-- end -->

                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item py-4 d-block d-lg-flex align-items-center\">
                            <div class=\"one-third mb-4 mb-md-0\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black\"><a href=\"#\">Full Stack Developer</a></h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"bg-warning text-white badge py-2 px-3\">Fulltime</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">Google, Inc.</a></div>
                                    <div><span class=\"icon-my_location\"></span> <span>Western City, UK</span></div>
                                </div>
                            </div>

                            <div class=\"one-forth ml-auto d-flex align-items-center mt-4 md-md-0\">
                                <div>
                                    <a href=\"#\" class=\"icon text-center d-flex justify-content-center align-items-center icon mr-2\">
                                        <span class=\"icon-heart\"></span>
                                    </a>
                                </div>
                                <a href=\"job-single.html\" class=\"btn btn-primary py-2\">Apply Job</a>
                            </div>
                        </div>
                    </div><!-- end -->

                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item py-4 d-block d-lg-flex align-items-center\">
                            <div class=\"one-third mb-4 mb-md-0\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black\"><a href=\"#\">Open Source Interactive Developer</a></h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"bg-info text-white badge py-2 px-3\">Freelance</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">New York Times</a></div>
                                    <div><span class=\"icon-my_location\"></span> <span>Western City, UK</span></div>
                                </div>
                            </div>

                            <div class=\"one-forth ml-auto d-flex align-items-center mt-4 md-md-0\">
                                <div>
                                    <a href=\"#\" class=\"icon text-center d-flex justify-content-center align-items-center icon mr-2\">
                                        <span class=\"icon-heart\"></span>
                                    </a>
                                </div>
                                <a href=\"job-single.html\" class=\"btn btn-primary py-2\">Apply Job</a>
                            </div>
                        </div>
                    </div><!-- end -->

                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item py-4 d-block d-lg-flex align-items-center\">
                            <div class=\"one-third mb-4 mb-md-0\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black\"><a href=\"#\">Frontend Development</a></h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"bg-secondary text-white badge py-2 px-3\">Internship</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">Facebook, Inc.</a></div>
                                    <div><span class=\"icon-my_location\"></span> <span>Western City, UK</span></div>
                                </div>
                            </div>

                            <div class=\"one-forth ml-auto d-flex align-items-center mt-4 md-md-0\">
                                <div>
                                    <a href=\"#\" class=\"icon text-center d-flex justify-content-center align-items-center icon mr-2\">
                                        <span class=\"icon-heart\"></span>
                                    </a>
                                </div>
                                <a href=\"job-single.html\" class=\"btn btn-primary py-2\">Apply Job</a>
                            </div>
                        </div>
                    </div><!-- end -->

                    <div class=\"col-md-12 ftco-animate\">
                        <div class=\"job-post-item py-4 d-block d-lg-flex align-items-center\">
                            <div class=\"one-third mb-4 mb-md-0\">
                                <div class=\"job-post-item-header d-flex align-items-center\">
                                    <h2 class=\"mr-3 text-black\"><a href=\"#\">Open Source Interactive Developer</a></h2>
                                    <div class=\"badge-wrap\">
                                        <span class=\"bg-danger text-white badge py-2 px-3\">Temporary</span>
                                    </div>
                                </div>
                                <div class=\"job-post-item-body d-block d-md-flex\">
                                    <div class=\"mr-3\"><span class=\"icon-layers\"></span> <a href=\"#\">New York Times</a></div>
                                    <div><span class=\"icon-my_location\"></span> <span>Western City, UK</span></div>
                                </div>
                            </div>

                            <div class=\"one-forth ml-auto d-flex align-items-center mt-4 md-md-0\">
                                <div>
                                    <a href=\"#\" class=\"icon text-center d-flex justify-content-center align-items-center icon mr-2\">
                                        <span class=\"icon-heart\"></span>
                                    </a>
                                </div>
                                <a href=\"job-single.html\" class=\"btn btn-primary py-2\">Apply Job</a>
                            </div>
                        </div>
                    </div><!-- end -->
                </div>
            </div>
            <div class=\"col-lg-3 sidebar\">
                <div class=\"row justify-content-center pb-3\">
                    <div class=\"col-md-12 heading-section ftco-animate\">
                        <span class=\"subheading\"><!-- نص اعلى الاعلانات --></span>
                        <h2 class=\"mb-4\"><!-- نص اعلى الاعلانات --></h2>
                    </div>
                </div>
                <div class=\"sidebar-box ftco-animate\">
                    <div class=\"border\">
                        <a href=\"#\" class=\"company-wrap\"><img src=\"images/company-1.jpg\" class=\"img-fluid\" alt=\"Colorlib Free Template\"></a>
                        <div class=\"text p-3\">
                            <h3><a href=\"#\">Google Company</a></h3>
                            <p><span class=\"number\">500</span> <span>Open position</span></p>
                        </div>
                    </div>
                </div>
                <div class=\"sidebar-box ftco-animate\">
                    <div class=\"border\">
                        <a href=\"#\" class=\"company-wrap\"><img src=\"images/company-2.jpg\" class=\"img-fluid\" alt=\"Colorlib Free Template\"></a>
                        <div class=\"text p-3\">
                            <h3><a href=\"#\">Facebook Company</a></h3>
                            <p><span class=\"number\">700</span> <span>Open position</span></p>
                        </div>
                    </div>
                </div>
                <div class=\"sidebar-box ftco-animate\">
                    <div class=\"border\">
                        <a href=\"#\" class=\"company-wrap\"><img src=\"images/company-3.jpg\" class=\"img-fluid\" alt=\"Colorlib Free Template\"></a>
                        <div class=\"text p-3\">
                            <h3><a href=\"#\">IT Programming INC</a></h3>
                            <p><span class=\"number\">700</span> <span>Open position</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> ";
}

function summary()
{
    echo"<section class=\"ftco-section ftco-counter img\" id=\"section-counter\" style=\"background-image: url(images/bg_1.jpg);\" data-stellar-background-ratio=\"0.5\">
    <div class=\"container\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-12\">
                <div class=\"row\">
                    <div class=\"col-md-3 d-flex justify-content-center counter-wrap ftco-animate\">
                        <div class=\"block-18 text-center\">
                            <div class=\"text\">
                                <div class=\"icon\">
                                    <span class=\"flaticon-employee\"></span>
                                </div>
                                <strong class=\"number\" data-number=\"435000\">0</strong>
                                <span>Jobs</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 d-flex justify-content-center counter-wrap ftco-animate\">
                        <div class=\"block-18 text-center\">
                            <div class=\"text\">
                                <div class=\"icon\">
                                    <span class=\"flaticon-collaboration\"></span>
                                </div>
                                <strong class=\"number\" data-number=\"40000\">0</strong>
                                <span>Members</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 d-flex justify-content-center counter-wrap ftco-animate\">
                        <div class=\"block-18 text-center\">
                            <div class=\"text\">
                                <div class=\"icon\">
                                    <span class=\"flaticon-resume\"></span>
                                </div>
                                <strong class=\"number\" data-number=\"30000\">0</strong>
                                <span>Resume</span>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-md-3 d-flex justify-content-center counter-wrap ftco-animate\">
                        <div class=\"block-18 text-center\">
                            <div class=\"text\">
                                <div class=\"icon\">
                                    <span class=\"flaticon-promotions\"></span>
                                </div>
                                <strong class=\"number\" data-number=\"10500\">0</strong>
                                <span>Company</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>";
}

?>