# payment-window-all/react

결제창 JavaScript SDK로 결제 과정을 구현한 React 샘플 프로젝트입니다. 자세한 연동 방법과 결제 과정은 [공식 연동 문서](https://docs.tosspayments.com/guides/payment/integration)에서 확인하세요.

## 실행하기

1. 결제창 샘플 프로젝트 레포지토리를 클론(Clone)하고 React 폴더로 진입하세요.

   ```sh
   $ git clone https://github.com/tosspayments/payment-samples # 샘플 프로젝트 클론
   $ cd payment-samples/payment-window-all/react
   ```

2. 의존성 패키지를 다운로드하고 서버를 실행합니다.

   ```sh
   $ npm install # 의존성 패키지 다운로드
   $ npm run dev # 서버 실행
   ```

3. 샘플 프로젝트를 확인하세요.

## 인증하기

샘플에 있는 키로 연동이 가능하지만, 내 테스트 연동 키를 사용하면 테스트 결제내역, 웹훅 기능을 사용할 수 있어요. 내 테스트 연동 키는 [개발자센터](https://developers.tosspayments.com/my/api-keys)에서 확인할 수 있습니다. 더 자세한 내용은 [API 키 가이드](https://docs.tosspayments.com/reference/using-api/api-keys)를 참고하세요.

- **클라이언트 키**: `checkout.html` 파일에 있는 `clientKey`를 내 API 개별 연동 키 클라이언트 키로 수정하세요.
- **시크릿 키**: `success.jsp` 파일에 있는 `secretKey`를 내 API 개별 연동 키 시크릿 키로 수정하세요. **시크릿 키는 외부에 노출되면 안 됩니다.**
