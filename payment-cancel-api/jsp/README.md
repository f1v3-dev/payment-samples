# payment-cancel-api/jsp

JSP를 이용한 결제 취소 샘플 코드입니다.

## 준비하기

- [Java](https://www.oracle.com/kr/java/technologies/downloads/)
- [Apache Tomcat](https://tomcat.apache.org/download-90.cgi)

## 실행하기

1. 샘플 코드 레포지토리를 클론(Clone)하세요.

   ```sh
   $ git clone https://github.com/tosspayments/payment-samples # 샘플 프로젝트 클론
   ```

2. 클론한 레포지토리의 `/payment-cancel-api/jsp` 폴더를 Tomcat의 `webapp` 폴더에 넣어주세요.

3. `/cancel.jsp` 파일에 테스트하고 싶은 `paymentKey`, `secretKey`를 넣으세요.

4. Tomcat을 실행하고 http://localhost:{PORT_NUMBER}/jsp/checkout.html 에서 샘플 프로젝트를 확인하세요.
