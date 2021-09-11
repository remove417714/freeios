<?php
unset($name);
$name = $_POST['name'];

if (isset($_POST['name'])){

    $nameb = 1;
};
echo ($name);

file_put_contents("one4.txt", "<li class='car'>".$name."</li><br><img src='".$name."' style='width: 100px; height: 100px'><br><br>", FILE_APPEND);

$push = "<div style='background-color: black; padding: 60px; color: white; border-color: cyan; width: 100%'>".file_get_contents("one4.txt")."</div><br>";
echo($array);
?>

<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var arr = ["can2.png","can1.png", "can3.png"];
  

  $("img").width(300).height(300);
  $("li").click(function(){
  var x = $(".can").attr("class") + $(this).index();
  $(".image").attr("id",x);
 
  


  
  $("#"+x).attr("src",arr[$(this).index()]);
  
  
  if (x === "can" + $(this).index() +1){ $(".image").attr("src",arr[$(this).index()]);  };
  
  });
  $("input").hide();
  $("p").click(function(){

$("input").show();
  });

   
});
</script>
</head>
<body style="background-color: cyan">
<div style="background-color: orange; height: 300px; width: 100%">
<h4 style="font-color: Verdana; letter-spacing: 8px; font-size: 35px">fREE ios Image Slider</h4>

<div style="overflow:scroll; background-color: darkgray; color: black; line-spacing: 10px; width: 87%; margin: 4%; padding: 16px; font-family: Arial; letter-spacing: 2px; height: 100px"><?php echo file_get_contents("input.txt");?></div>

</div>
    <form action="index.php" method="post">
URL: <input type="text" name="name"><br>

<input type="submit" value="change">
</form>

<div style="background-color: tan; height: 600px; padding: 34px; width: 80%; border-style: double; border-color: black; border-width: 6px; border-radius: 14px; ">
<div style=" float: left; width: 60%">
<li class="can">Image 1<p style="background-color: gray; padding: 5px; width: 140px">Change URL</p></li>
<li class="can">Image 2<p style="background-color: gray; padding: 5px; width: 140px">Change URL</p></li>
<li class="can">Image 3<p style="background-color: gray; padding: 5px; width: 140px">Change URL</p></li></div><img class="image" style="float: right; width: 40%"></div>

<?php echo ($push);?>

</body>
</html>
