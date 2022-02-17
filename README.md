## Интеграция с системой оплаты КЛИК

### Установка

 - composer require teamprodev/laravel_payment_clickuz
 - You specify it in the file .env these dash components:
CLICKUZ_RETURN_URL=
CLICKUZ_SERVICE_ID=
CLICKUZ_MERCHANT_ID=
 - You will send a get request to " /click_pay" with the "amount" parameter and at the same time you must be authorized in the system
 - Add exceptions to "/clprepare" and "/clcomplete" in the file "app/Http/Middleware/VerifyCsrfToken"
