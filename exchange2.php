<?php
   $money = $_POST["money"];
   $rate_str =  $_POST["rate"];
   list($rate,$rate_name) = explode(",",$rate_str);
?>

<html>
<body style="font-family:微軟正黑體;font-size:16pt;">

<form action="exchange2.php" method="post">
換算金額:台幣 
<input type="text" name="money" value=<?php echo $money;?>>元<br>
換算匯率:
<select name="rate">
    <option value="28.3">美金</option>
    <option value="36.7">英鎊</option>
    <option value="0.2655">日幣</option>
    <option value="33.02">歐元</option>
</select>
<input type="submit" value="開始換算">
</form>

<?php  
   if($money>0){
       $result = $money / $rate;
       echo "新台幣:".$money."元";
       echo "轉換成".$rate_name."的金額為:".round($result,2)."元";
   }
?>
</body>
</html>