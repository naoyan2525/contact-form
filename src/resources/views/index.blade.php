<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>

    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>


<body>
<header class="header">
    <h1>Contact Form</h1>
</header>
    
<form class="contact-form">
  <div class="form-group">
    <label>名前 <span class="required">必須</span></label>
    <input type="text" name="name">
  </div>

  <div class="form-group">
    <label>メールアドレス <span class="required">必須</span></label>
    <input type="email" name="email">
  </div>

  <div class="form-group">
    <label>お問い合わせ内容 <span class="required">必須</span></label>
    <textarea name="message"></textarea>
  </div>

  <button type="submit">送信</button>
</form>


</body>



</html>