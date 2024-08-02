<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $company = htmlspecialchars($_POST['company']);
    $details = htmlspecialchars($_POST['details']);

    // 이메일로 견적 요청 내용 전송 (예시)
    $to = "your-email@example.com";
    $subject = "새로운 견적 요청";
    $message = "이름: $name\n이메일: $email\n회사명: $company\n프로젝트 세부사항: $details";
    $headers = "From: no-reply@example.com";

    if (mail($to, $subject, $message, $headers)) {
        echo "견적 요청이 성공적으로 전송되었습니다.";
    } else {
        echo "견적 요청 전송에 실패했습니다. 다시 시도해주세요.";
    }
}
?>
