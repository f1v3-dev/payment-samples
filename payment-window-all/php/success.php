<!-- 토스페이먼츠 결제 샘플 소스코드 -->
<?php
error_reporting(E_ALL);
ini_set("display_errors", true);

$paymentKey = $_GET['paymentKey'];
$orderId = $_GET['orderId'];
$amount = $_GET['amount'];

$url = 'https://api.tosspayments.com/v1/payments/confirm';
$data = ['paymentKey' => $paymentKey, 'orderId' => $orderId, 'amount' => $amount];

$secretKey = 'test_sk_zXLkKEypNArWmo50nX3lmeaxYG5R'; 
$credential = base64_encode($secretKey . ':');

$curlHandle = curl_init($url);
curl_setopt_array($curlHandle, [
    CURLOPT_POST => TRUE,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_HTTPHEADER => [
        'Authorization: Basic ' . $credential,
        'Content-Type: application/json'
    ],
    CURLOPT_POSTFIELDS => json_encode($data)
]);

$response = curl_exec($curlHandle);
$httpCode = curl_getinfo($curlHandle, CURLINFO_HTTP_CODE);
$isSuccess = $httpCode == 200;
$responseJson = json_decode($response);
?>

<!DOCTYPE html>
<html lang="kr">

<head>
  <meta charset="utf-8" />
  <link rel="icon" href="https://static.toss.im/icons/png/4x/icon-toss-logo.png" />
  <link rel="stylesheet" type="text/css" href="./public/style.css" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>토스페이먼츠 샘플 프로젝트</title>
</head>

<body>
  <!-- 결제 성공 시 -->
  <?php if ($isSuccess) { ?>

    <div class="box_section" style="width: 600px">
      <img width="100px" src="https://static.toss.im/illusts/check-blue-spot-ending-frame.png"></img>
      <h2> 결제를 완료했어요 </h2>


      <div class="p-grid typography--p" style="margin-top: 50px">
        <div class="p-grid-col text--left"><b>결제금액</b></div>
        <div class="p-grid-col text--right"><?php echo $responseJson->totalAmount ?>원</div>
      </div>
      <div class="p-grid typography--p" style="margin-top: 10px">
        <div class="p-grid-col text--left"><b>주문번호</b></div>
        <div class="p-grid-col text--right"><?php echo $responseJson->orderId ?></div>
      </div>
      <div class="p-grid typography--p" style="margin-top: 10px">
        <div class="p-grid-col text--left"><b>결제수단</b></div>
        <div class="p-grid-col text--right"><?php echo $responseJson->method ?> (
        <?php if($responseJson->method === "카드") { echo $responseJson->card->number;} ?>
        <?php if($responseJson->method === "가상계좌") { echo $responseJson->virtualAccount->accountNumber;} ?>
        <?php if($responseJson->method === "계좌이체") { echo $responseJson->transfer->bank;} ?>
        <?php if($responseJson->method === "휴대폰") { echo $responseJson->mobilePhone->customerMobilePhone;} ?>
      )</div>
      </div>
      <div class="p-grid">
        <button class="button p-grid-col5" onclick="location.href='https://docs.tosspayments.com/guides/payment/integration';">연동 문서</button>
        <button class="button p-grid-col5" onclick="location.href='https://discord.gg/A4fRFXQhRu';"
          style="background-color: #e8f3ff;color:#1b64da ">실시간 문의</button>
      </div>   
    </div> 

    <div class="box_section" style="width: 600px; text-align: left">
      <b>Response Data :</b>
      <pre>
        <?php echo trim(json_encode($responseJson,JSON_PRETTY_PRINT|JSON_UNESCAPED_UNICODE)); ?>
      </pre>
    </div>

    <!-- 결제 실패 시 -->
    <?php }else{ ?>

      <div id="info" class="box_section" style="width: 600px">
      <img width="100px" src="https://static.toss.im/lotties/error-spot-no-loop-space-apng.png"></img>
      <h2> 결제를 실패했어요 </h2>

      <div class="p-grid typography--p" style="margin-top: 50px">
        <div class="p-grid-col text--left"><b>에러메시지</b></div>
        <div class="p-grid-col text--right"><?php echo $responseJson->message ?></div>
      </div>
      <div class="p-grid typography--p" style="margin-top: 10px">
        <div class="p-grid-col text--left"><b>에러코드</b></div>
        <div class="p-grid-col text--right"><?php echo $responseJson->code ?></div>
      </div>
      <div class="p-grid">
        <button class="button p-grid-col5" onclick="location.href='https://docs.tosspayments.com/guides/payment/integration';">연동 문서</button>
        <button class="button p-grid-col5" onclick="location.href='https://discord.gg/A4fRFXQhRu';"
          style="background-color: #e8f3ff;color:#1b64da ">실시간 문의</button>
      </div>   

    </div>

  </body>
      
  <?php } ?>

</body>


</html>