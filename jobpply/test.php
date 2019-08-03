<?php
/**
 * Created by PhpStorm.
 * User: Mohanad Assim
 * Date: 8/2/2019
 * Time: 9:35 PM
 */
include_once 'class/sql_queries.php';

Open_Connection();
Close_Connection()
?>
<?php
if (isset($_GET['save']))
{
    Open_Connection();
    Insert_CV($_GET[$full_name],$_GET[$birthday],$_GET[$address],$_GET[$certificate_1],$_GET[$specialty_1],$_GET[$date_1],$_GET[$certificate_2],$_GET[$specialty_2],$_GET[$date_2],$_GET[$course_1],$_GET[$date_3],$_GET[$course_2],$_GET[$date_4],$_GET[$details]);
    Close_Connection();
    ob_end_flush();
}

?>
<div class="row">
    <div class="col-md-12 col-lg-8 mb-5">
        <form action="add_cv.php" class="p-5 bg-white">
            <div class="col-md-4 "><h4>الاسم الثلاثي و اللقب</h4></div>
            <div class="col-md-6 mb-1 mb-md-0">
                <input type="text" id="full_name" class="form-control" placeholder="ابراهيم محمد صالح العذاري">
            </div>

            <div class="col-md-4"><h4>تاريخ الولادة</h4></div>
            <div class="col-md-6 mb-3 mb-md-0">
                <input type="text" id="birthday" class="form-control" placeholder="20-5-1990">
            </div>

            <div class="col-md-4"><h3>عنوان السكن</h3></div>
            <div class="col-md-6 mb-3 mb-md-0">
                <input type="text" id="address" class="form-control" placeholder="العراق - النجف الاشرف">
            </div>

            <div class="col-md-12"><h3>التحصيل الدراسي</h3></div>
            <div class="col-md-1"><h4>1.</h4></div>
            <div class="col-md-3 mb-3 mb-md-0">
                <select name="certificate_1" id="certificate_1" class="form-control" placeholder="التحصيل الدراسي">
                    <option value="0" selected >اختر الشهادة</option>
                    <option value="1">ثانوي</option>
                    <option value="2">معهد</option>
                    <option value="3">بكلوريوس</option>
                    <option value="4">ماجستير</option>
                    <option value="5">دكتورا</option>
                </select>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <input type="text" id="specialty_1" class="form-control" placeholder="الاختصاص">
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <input type="text" id="date_1" class="form-control" placeholder="سنة التخرج">
            </div>

            <div class="col-md-12"></div>
            <div class="col-md-1"><h4>2.</h4></div>
            <div class="col-md-3 mb-3 mb-md-0">
                <select name="" id="" class="form-control" placeholder="التحصيل الدراسي">
                    <option value="0" selected >اختر الشهادة</option>
                    <option value="1">ثانوي</option>
                    <option value="2">معهد</option>
                    <option value="3">بكلوريوس</option>
                    <option value="4">ماجستير</option>
                    <option value="5">دكتورا</option>
                </select>
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <input type="text" id="specialty_2" class="form-control" placeholder="الاختصاص">
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <input type="text" id="date_2" class="form-control" placeholder="سنة التخرج">
            </div>

            <div class="col-md-12"><h3>كورسات اضافية</h3></div>
            <div class="col-md-1"><h4>1.</h4></div>
            <div class="col-md-6 mb-3 mb-md-0">
                <input type="text" id="course_1" class="form-control" placeholder="الاختصاص">
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <input type="text" id="date_3" class="form-control" placeholder="سنة التخرج">
            </div>

            <div class="col-md-12"></div>
            <div class="col-md-1"><h4>2.</h4></div>
            <div class="col-md-6 mb-3 mb-md-0">
                <input type="text" id="course_2" class="form-control" placeholder="الاختصاص">
            </div>
            <div class="col-md-3 mb-3 mb-md-0">
                <input type="text" id="date_4" class="form-control" placeholder="سنة التخرج">
            </div>
            <div class="col-md-12 " ><h3>تفاصيل اضافية</h3></div>
            <div class="col-md-10 mb-3 mb-md-0">
                <textarea id="details" class="form-control"  cols="30" rows="5"></textarea>
            </div>


            <div class="row form-group">
                <div class="col-md-12">
                    <input type="submit" value="حفظ المعلومات" id="save" class="btn btn-primary  py-2 px-5">
                </div>
            </div>
    </div>

    </form>
</div>