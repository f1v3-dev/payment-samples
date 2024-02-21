# payment-cancel-api/go

Go 를 이용한 결제 취소 샘플 코드입니다.

## 준비하기

Go 공식 웹사이트인 https://go.dev/dl/ 에서 해당 OS 버전의 Go 를 다운로드하여 설치 합니다.

- 설치 및 환경 구성 참고 링크 주소
  > http://golang.site/go/article/2-Go-%EC%84%A4%EC%B9%98%EC%99%80-Go-%ED%8E%B8%EC%A7%91%EA%B8%B0-%EC%86%8C%EA%B0%9C

## 실행하기

1. 샘플 코드 레포지토리를 클론(Clone)하고 go 폴더로 진입하세요.

   ```sh
   $ git clone https://github.com/tosspayments/payment-samples # 샘플 프로젝트 클론
   $ cd payment-samples/payment-cancel-api/go
   ```

2. `cancel.go` 파일에 테스트하고 싶은 `paymentKey`, `secretKey`를 넣으세요.

3. go 서버를 실행합니다.

   ```sh
   $ > go run cancel.go  # 서버 실행
   ```

4. http://localhost:9090 에서 샘플 프로젝트를 확인하세요.
