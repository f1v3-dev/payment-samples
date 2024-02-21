# payment-cancel-api/django

ASP를 이용한 결제 취소 샘플 코드입니다.

## 테스트

로컬에 IIS를 설치하고 ASP 관련 설정을 완료한후

## 실행하기

1. 샘플 코드 레포지토리를 클론(Clone)하세요.

   ```sh
   $ git clone https://github.com/tosspayments/payment-samples # 샘플 프로젝트 클론
   ```

2. `/asp/cancel.asp` 파일에서 테스트하고 싶은 `paymentKey`, `secretKey`를 넣으세요.

3. `/asp` 샘플을 `inetpub/wwwroot`에 복사하고 샘플 코드를 http://127.0.0.1/cancel.asp 주소에서 테스트 가능합니다.
