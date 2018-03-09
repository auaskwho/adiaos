<?php
// 感谢您参与此次YEEZY BOOST 350 V2预约注册活动！

// 请直接回复：“尺码编号，您最喜欢哪个节假日？请以下三选一：国庆节/七夕节/春节，身份证号，手机号”

// 例如：C，国庆节，310111111111112222，13811111111

// 请严格按照格式回复，以获得我们下一步指令，谢谢！

// 例如：C，国庆节，310111111111112222，13811111111

$idCard = "123456789012345678";
$phone = "15012345678";
$sizeCode = "M";

$original = isset($_POST['content']) ? trim($_POST['content']) : "";

$content = preg_replace([
    "/例如：/",
    "/例如:/",
    "/(?<!\d)[0-9]{11}(?!\d)/",
    "/(?<!\d)[0-9]{18}(?!\d)/",
    "/(?<![A-Z])[A-Z](?![A-Z])/",
], [
    "",
    "",
    $phone,
    $idCard,
    $sizeCode,
], $original)

?>
<!DOCTYPE html>
<html lang="zh-CN">
    <header>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.bootcss.com/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://cdn.bootcss.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.bootcss.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    </header>
    <body>
        <div class="container">
            <br >
            <div>
                <form action="/yeezy.php" method="post">
                  <div class="form-group">
                    <label for="input">输入：</label>
                    <input type="text" class="form-control" name="content" placeholder="" value="<?php echo $original; ?>" AUTOCOMPLETE="off">
                  </div>
                  <button class="btn btn btn-primary" type="submit">格式化</button>
                </form>
            </div>
            <br />
            <div>
                <input id="contents" type="text" class="form-control" value="<?php echo $content; ?>">
                <br>
                <input class="btn btn-primary" type="button" onClick="jsCopy();" value="复制">
                <span id="notice"></span>
            </div>
        </div>
    </body>
<script type="text/javascript">
    function jsCopy(){
        var e = document.getElementById("contents");
        e.select();
        tag=document.execCommand("Copy");
        if(tag){
          var n = document.getElementById("notice");
          n.innerHTML = "已复制";
        }
    }
</script>
</html>
