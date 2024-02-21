# payment-cancel-api/php

PHP를 이용한 결제 취소 샘플 코드입니다.

## 준비하기

환경에 맞춰 [php를 설치하세요](https://www.php.net/manual/en/install.php).

```
brew install php
```

## 실행하기

1. 샘플 코드 레포지토리를 클론(Clone)하고 php 폴더로 진입하세요.

   ```sh
   $ git clone https://github.com/tosspayments/payment-samples # 샘플 프로젝트 클론
   $ cd payment-samples/payment-cancel-api/php
   ```

2. `cancel.php` 파일에 테스트하고 싶은 `paymentKey`, `secretKey`를 넣으세요.

3. php 서버를 실행합니다.

   ```sh
   $ php -S localhost:4242 # 서버 실행
   ```

4. http://localhost:4242/cancel.php 에서 샘플 프로젝트를 확인하세요.
