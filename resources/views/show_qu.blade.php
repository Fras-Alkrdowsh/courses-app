<!DOCTYPE html>
<html lang="ar" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>نموذج الأسئلة</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
           
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            background-color: #f8f9fa;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 800px; /* حد أقصى للعرض */
            margin: 20px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2 class="text-center">أسئلة حول الشبكات وهندسة البرمجيات والذكاء الاصطناعي</h2>
    <form>
        <!-- قسم الشبكات -->
        <h5>أسئلة حول أساسيات الشبكات</h5>
        <div class="form-group">
            <label>1. ما هو البروتوكول الذي يستخدمه الإنترنت؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" value="TCP/IP" required>
                <label class="form-check-label">TCP/IP</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" value="HTTP">
                <label class="form-check-label">HTTP</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" value="FTP">
                <label class="form-check-label">FTP</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q1" value="SMTP">
                <label class="form-check-label">SMTP</label>
            </div>
        </div>
        <div class="form-group">
            <label>2. ما هي وظيفة جهاز التوجيه (Router)؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" value="توجيه البيانات بين الشبكات" required>
                <label class="form-check-label">توجيه البيانات بين الشبكات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" value="تخزين البيانات">
                <label class="form-check-label">تخزين البيانات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" value="تشفير البيانات">
                <label class="form-check-label">تشفير البيانات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q2" value="تحليل البيانات">
                <label class="form-check-label">تحليل البيانات</label>
            </div>
        </div>
        <div class="form-group">
            <label>3. ما هو عنوان IP؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" value="معرف فريد لجهاز في الشبكة" required>
                <label class="form-check-label">معرف فريد لجهاز في الشبكة</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" value="نوع من البروتوكولات">
                <label class="form-check-label">نوع من البروتوكولات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" value="خدمة الإنترنت">
                <label class="form-check-label">خدمة الإنترنت</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q3" value="نظام تشغيل">
                <label class="form-check-label">نظام تشغيل</label>
            </div>
        </div>
        <div class="form-group">
            <label>4. ما هي الشبكة المحلية (LAN)؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" value="شبكة تغطي منطقة صغيرة" required>
                <label class="form-check-label">شبكة تغطي منطقة صغيرة</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" value="شبكة تغطي منطقة واسعة">
                <label class="form-check-label">شبكة تغطي منطقة واسعة</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" value="شبكة عالمية">
                <label class="form-check-label">شبكة عالمية</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q4" value="شبكة افتراضية">
                <label class="form-check-label">شبكة افتراضية</label>
            </div>
        </div>
        <div class="form-group">
            <label>5. ما هو البروتوكول المستخدم في إرسال البريد الإلكتروني؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" value="SMTP" required>
                <label class="form-check-label">SMTP</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" value="POP3">
                <label class="form-check-label">POP3</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" value="IMAP">
                <label class="form-check-label">IMAP</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q5" value="FTP">
                <label class="form-check-label">FTP</label>
            </div>
        </div>

        <!-- قسم هندسة البرمجيات -->
        <h5>أسئلة حول هندسة البرمجيات</h5>
        <div class="form-group">
            <label>6. ما هو مفهوم "البرمجة الكائنية"؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" value="تنظيم البرمجيات حول الكائنات" required>
                <label class="form-check-label">تنظيم البرمجيات حول الكائنات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" value="كتابة الشيفرة البرمجية فقط">
                <label class="form-check-label">كتابة الشيفرة البرمجية فقط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" value="تطوير البرمجيات فقط">
                <label class="form-check-label">تطوير البرمجيات فقط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q6" value="تحليل البيانات">
                <label class="form-check-label">تحليل البيانات</label>
            </div>
        </div>
        <div class="form-group">
            <label>7. ما هو نموذج "إدارة دورة حياة البرمجيات" (SDLC)؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" value="عملية تطوير البرمجيات" required>
                <label class="form-check-label">عملية تطوير البرمجيات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" value="تحليل البيانات">
                <label class="form-check-label">تحليل البيانات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" value="اختبار البرمجيات">
                <label class="form-check-label">اختبار البرمجيات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q7" value="إدارة المشاريع">
                <label class="form-check-label">إدارة المشاريع</label>
            </div>
        </div>
        <div class="form-group">
            <label>8. ما هو الفرق بين "البرمجة الهيكلية" و"البرمجة الكائنية"؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" value="البرمجة الهيكلية تركز على الوظائف" required>
                <label class="form-check-label">البرمجة الهيكلية تركز على الوظائف</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" value="البرمجة الكائنية تركز على الوظائف">
                <label class="form-check-label">البرمجة الكائنية تركز على الوظائف</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" value="لا يوجد فرق">
                <label class="form-check-label">لا يوجد فرق</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q8" value="البرمجة الهيكلية أفضل">
                <label class="form-check-label">البرمجة الهيكلية أفضل</label>
            </div>
        </div>
        <div class="form-group">
            <label>9. ما هو "اختبار البرمجيات"؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" value="عملية التحقق من جودة البرمجيات" required>
                <label class="form-check-label">عملية التحقق من جودة البرمجيات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" value="كتابة الشيفرة البرمجية">
                <label class="form-check-label">كتابة الشيفرة البرمجية</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" value="إدارة المشاريع">
                <label class="form-check-label">إدارة المشاريع</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q9" value="تحليل البيانات">
                <label class="form-check-label">تحليل البيانات</label>
            </div>
        </div>
        <div class="form-group">
            <label>10. ما هو مفهوم "البرمجة التكرارية"؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" value="تطوير البرمجيات في مراحل متعددة" required>
                <label class="form-check-label">تطوير البرمجيات في مراحل متعددة</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" value="كتابة الشيفرة البرمجية مرة واحدة">
                <label class="form-check-label">كتابة الشيفرة البرمجية مرة واحدة</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" value="تطوير البرمجيات بشكل سريع">
                <label class="form-check-label">تطوير البرمجيات بشكل سريع</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q10" value="إدارة المشاريع">
                <label class="form-check-label">إدارة المشاريع</label>
            </div>
        </div>

        <!-- قسم الذكاء الاصطناعي -->
        <h5>أسئلة حول الذكاء الاصطناعي</h5>
        <div class="form-group">
            <label>11. ما هو الذكاء الاصطناعي؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q11" value="تمكين الآلات من محاكاة الذكاء البشري" required>
                <label class="form-check-label">تمكين الآلات من محاكاة الذكاء البشري</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q11" value="كتابة الشيفرة البرمجية فقط">
                <label class="form-check-label">كتابة الشيفرة البرمجية فقط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q11" value="تخزين البيانات">
                <label class="form-check-label">تخزين البيانات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q11" value="تحليل البيانات">
                <label class="form-check-label">تحليل البيانات</label>
            </div>
        </div>
        <div class="form-group">
            <label>12. ما هو التعلم الآلي؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q12" value="فرع من الذكاء الاصطناعي" required>
                <label class="form-check-label">فرع من الذكاء الاصطناعي</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q12" value="تطوير البرمجيات فقط">
                <label class="form-check-label">تطوير البرمجيات فقط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q12" value="تحليل البيانات">
                <label class="form-check-label">تحليل البيانات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q12" value="تخزين البيانات">
                <label class="form-check-label">تخزين البيانات</label>
            </div>
        </div>
        <div class="form-group">
            <label>13. ما هو الهدف من التعلم العميق؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q13" value="محاكاة الشبكات العصبية البشرية" required>
                <label class="form-check-label">محاكاة الشبكات العصبية البشرية</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q13" value="تطوير البرمجيات">
                <label class="form-check-label">تطوير البرمجيات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q13" value="تخزين البيانات">
                <label class="form-check-label">تخزين البيانات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q13" value="تحليل البيانات">
                <label class="form-check-label">تحليل البيانات</label>
            </div>
        </div>
        <div class="form-group">
            <label>14. ما هو "البيانات الضخمة"؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q14" value="مجموعة كبيرة جدًا من البيانات" required>
                <label class="form-check-label">مجموعة كبيرة جدًا من البيانات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q14" value="تحليل البيانات فقط">
                <label class="form-check-label">تحليل البيانات فقط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q14" value="تخزين البيانات">
                <label class="form-check-label">تخزين البيانات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q14" value="تنظيم البيانات">
                <label class="form-check-label">تنظيم البيانات</label>
            </div>
        </div>
        <div class="form-group">
            <label>15. ما هو بروتوكول الإنترنت المستخدم في الشبكات؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q15" value="TCP/IP" required>
                <label class="form-check-label">TCP/IP</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q15" value="HTTP">
                <label class="form-check-label">HTTP</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q15" value="FTP">
                <label class="form-check-label">FTP</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q15" value="SMTP">
                <label class="form-check-label">SMTP</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>16. ما هي وظيفة جهاز التوجيه؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q16" value="توجيه البيانات بين الشبكات" required>
                <label class="form-check-label">توجيه البيانات بين الشبكات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q16" value="تخزين البيانات">
                <label class="form-check-label">تخزين البيانات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q16" value="عرض المحتوى">
                <label class="form-check-label">عرض المحتوى</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q16" value="تشفير البيانات">
                <label class="form-check-label">تشفير البيانات</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>17. ما هو عنوان IP؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q17" value="معرف فريد لجهاز في الشبكة" required>
                <label class="form-check-label">معرف فريد لجهاز في الشبكة</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q17" value="بروتوكول نقل البيانات">
                <label class="form-check-label">بروتوكول نقل البيانات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q17" value="نوع من الشبكات">
                <label class="form-check-label">نوع من الشبكات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q17" value="نظام تشغيل">
                <label class="form-check-label">نظام تشغيل</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>18. ما هي الشبكة المحلية (LAN)؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q18" value="شبكة تغطي منطقة صغيرة" required>
                <label class="form-check-label">شبكة تغطي منطقة صغيرة</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q18" value="شبكة تغطي منطقة واسعة">
                <label class="form-check-label">شبكة تغطي منطقة واسعة</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q18" value="شبكة غير متصلة">
                <label class="form-check-label">شبكة غير متصلة</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q18" value="شبكة لاسلكية فقط">
                <label class="form-check-label">شبكة لاسلكية فقط</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>19. ما هو بروتوكول البريد الإلكتروني؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q19" value="SMTP" required>
                <label class="form-check-label">SMTP</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q19" value="POP3">
                <label class="form-check-label">POP3</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q19" value="IMAP">
                <label class="form-check-label">IMAP</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q19" value="FTP">
                <label class="form-check-label">FTP</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>20. ما هو مفهوم "البرمجة الكائنية"؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q20" value="تنظيم البرمجيات حول الكائنات" required>
                <label class="form-check-label">تنظيم البرمجيات حول الكائنات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q20" value="كتابة الشيفرة البرمجية فقط">
                <label class="form-check-label">كتابة الشيفرة البرمجية فقط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q20" value="تطوير البرمجيات فقط">
                <label class="form-check-label">تطوير البرمجيات فقط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q20" value="تحليل البيانات">
                <label class="form-check-label">تحليل البيانات</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>21. ما هو نموذج تطوير البرمجيات؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q21" value="عملية تطوير البرمجيات" required>
                <label class="form-check-label">عملية تطوير البرمجيات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q21" value="نوع من الخوارزميات">
                <label class="form-check-label">نوع من الخوارزميات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q21" value="لغة برمجة">
                <label class="form-check-label">لغة برمجة</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q21" value="نظام تشغيل">
                <label class="form-check-label">نظام تشغيل</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>22. ما هي البرمجة الهيكلية؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q22" value="تركز على الوظائف" required>
                <label class="form-check-label">تركز على الوظائف</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q22" value="تتركز على الكائنات">
                <label class="form-check-label">تتركز على الكائنات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q22" value="تعتمد على قواعد البيانات">
                <label class="form-check-label">تعتمد على قواعد البيانات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q22" value="تستخدم لغات البرمجة فقط">
                <label class="form-check-label">تستخدم لغات البرمجة فقط</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>23. ما هو اختبار البرمجيات؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q23" value="عملية التحقق من جودة البرمجيات" required>
                <label class="form-check-label">عملية التحقق من جودة البرمجيات</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q23" value="عملية كتابة الكود">
                <label class="form-check-label">عملية كتابة الكود</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q23" value="عملية تصميم واجهة المستخدم">
                <label class="form-check-label">عملية تصميم واجهة المستخدم</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q23" value="عملية تطوير قاعدة البيانات">
                <label class="form-check-label">عملية تطوير قاعدة البيانات</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>24. ما هو نموذج تطوير البرمجيات التكراري؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q24" value="تطوير البرمجيات في مراحل متعددة" required>
                <label class="form-check-label">تطوير البرمجيات في مراحل متعددة</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q24" value="تطوير البرمجيات مرة واحدة فقط">
                <label class="form-check-label">تطوير البرمجيات مرة واحدة فقط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q24" value="تطوير البرمجيات بدون تخطيط">
                <label class="form-check-label">تطوير البرمجيات بدون تخطيط</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q24" value="تطوير البرمجيات باستخدام الذكاء الاصطناعي">
                <label class="form-check-label">تطوير البرمجيات باستخدام الذكاء الاصطناعي</label>
            </div>
        </div>
        
        <div class="form-group">
            <label>25. ما هو الذكاء الاصطناعي؟</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q25" value="تمكين الآلات من محاكاة الذكاء البشري" required>
                <label class="form-check-label">تمكين الآلات من محاكاة الذكاء البشري</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q25" value="فرع من الذكاء الاصطناعي">
                <label class="form-check-label">فرع من الذكاء الاصطناعي</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q25" value="محاكاة الشبكات العصبية البشرية">
                <label class="form-check-label">محاكاة الشبكات العصبية البشرية</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="q25" value="مجموعة كبيرة جدًا من البيانات">
                <label class="form-check-label">مجموعة كبيرة جدًا من البيانات</label>
            </div>
        </div>
        
        <button type="button" onclick="checkAnswers()" class="btn btn-primary">تحقق من الإجابات</button>
        <a href="{{route('dashboard')}}">عودة</a>

        <div id="result" class="result"></div>

    </body>
  <script>
    function checkAnswers() {
    // عرض رسالة التحميل
    const resultDiv = document.getElementById("result");
    resultDiv.innerHTML = "<p>جاري التحقق من الإجابات...</p>";

    // استخدام setTimeout لمحاكاة التحميل
    setTimeout(() => {
        const answers = {
    q1: "TCP/IP",
    q2: "توجيه البيانات بين الشبكات",
    q3: "معرف فريد لجهاز في الشبكة",
    q4: "شبكة تغطي منطقة صغيرة",
    q5: "SMTP",
    q6: "تنظيم البرمجيات حول الكائنات",
    q7: "عملية تطوير البرمجيات",
    q8: "تركز على الوظائف",
    q9: "عملية التحقق من جودة البرمجيات",
    q10: "تطوير البرمجيات في مراحل متعددة",
    q11: "تمكين الآلات من محاكاة الذكاء البشري",
    q12: "برنامج يدير موارد الحاسوب",
    q13: "مجموعة منظمة من البيانات",
    q14: "مجموعة من القواعد للتواصل",
    q15: "جهاز يقدم خدمات لأجهزة أخرى",
    q16: "تنفيذ عدة مهام في وقت واحد",
    q17: "مجموعة من التعليمات لحل مشكلة",
    q18: "شبكة تغطي منطقة جغرافية واسعة",
    q19: "تخزين البيانات على الإنترنت",
    q20: "شبكة عالمية من الشبكات",
    q21: "عملية تطوير البرمجيات",
    q22: "تركز على الوظائف",
    q23: "عملية التحقق من جودة البرمجيات",
    q24: "تطوير البرمجيات في مراحل متعددة",
    q25: "تمكين الآلات من محاكاة الذكاء البشري"
};


        let score = 0;

        for (let question in answers) {
            const selectedAnswer = document.querySelector(`input[name="${question}"]:checked`);
            if (selectedAnswer && selectedAnswer.value === answers[question]) {
                score++;
            }
        }

        // عرض النتيجة بعد انتهاء التحميل
        resultDiv.innerHTML = `<p>نتيجتك: ${score} من 25</p>`;
    }, 2000); // تأخير لمدة ثانيتين (2000 مللي ثانية)
}

  </script>
</html>