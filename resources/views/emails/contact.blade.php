<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>新視野網頁設計 - 聯絡表單通知</title>
</head>
<body>
    <h2>聯絡表單通知</h2>
    <p>您收到一筆新的聯絡表單訊息，詳細資訊如下：</p>
    
    <table style="width: 100%; border-collapse: collapse;">
        <tr>
            <th style="text-align: left; padding: 8px; border: 1px solid #ddd;">項目</th>
            <th style="text-align: left; padding: 8px; border: 1px solid #ddd;">內容</th>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">姓名</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $name }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">電話</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $phone }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">Email</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $email }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">公司名稱</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $company }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">想詢問的方案</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $plan }}</td>
        </tr>
        <tr>
            <td style="padding: 8px; border: 1px solid #ddd;">需求內容</td>
            <td style="padding: 8px; border: 1px solid #ddd;">{{ $message }}</td>
        </tr>
    </table>
    
    <p style="margin-top: 20px;">請盡快與客戶聯繫，提供專業的建議和服務。</p>
</body>
</html> 