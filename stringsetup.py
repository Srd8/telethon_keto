#! / usr / bin / env python3
# (ج) https://t.me/TelethonChat/37677
# نموذج كود المصدر هذا يخضع لشروط GNU
# الترخيص العام العام ، الإصدار 3.0. إذا لم يتم توزيع نسخة من GPL مع هذا
# ملف ، يمكنك الحصول على واحد على https://www.gnu.org/licenses/gpl-3.0.en.html.

من telethon.sessions استيراد StringSession
من telethon.sync استيراد TelegramClient

مطبعة(
    الرجاء الانتقال إلى my.telegram.org
تسجيل الدخول باستخدام حساب Telegram الخاص بك
انقر فوق أدوات تطوير API
قم بإنشاء تطبيق جديد عن طريق إدخال التفاصيل المطلوبة "" "
)
APP_ID = int (input ("أدخل معرف التطبيق هنا:"))
API_HASH = input ("أدخل API HASH هنا:")

مع TelegramClient (StringSession () ، APP_ID ، API_HASH) كعميل:
    طباعة (client.session.save ())
    client.send_message ("أنا" ، client.session.save ())
