# payment-cancel-api/django

## 준비하기

[Python](https://www.python.org/downloads/), [Django](https://www.djangoproject.com/download/), [pip](https://pip.pypa.io/en/stable/installation/)를 설치하세요.

1. 샘플 코드 레포지토리를 클론(Clone)하고 Django 폴더로 진입하세요.

   ```sh
   $ git clone https://github.com/tosspayments/payment-samples # 샘플 프로젝트 클론
   $ cd payment-samples/payment-cancel-api/django
   ```

2. `/payments/templates/payments/cancelapi.html` 파일에 테스트하고 싶은 `paymentKey`, `secretKey`를 넣으세요.

3. `/payments` 앱을 참조해서 `templates/payments`, `urls.py`, `views.py` 를 원하는 프로젝트에 사용하세요.
