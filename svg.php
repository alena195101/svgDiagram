<!DOCTYPE html>
<html>
<body>

	<h1>My frst SVG diagream</h1>
	<?php
		$super=0;
		$bat=0;
		$wonder=0;
		$flash=0;
		$lamp=0;
		$aqua=0;
		$arrow=0;
		$superY=0;
		$batY=0;
		$wonderY=0;
		$flashY=0;
		$lampY=0;
		$aquaY=0;
		$arrowY=0;
		echo <<<EOD
				<form action=" " method="POST">
		<p>
		<br>Супермен:            <input type="text" name="super">
		<br>Бэтмен:        <input type="text" name="bat">	
		<br>Чудоженщина:  <input type="text" name="wonder">	
		<br>Флэш:         <input type="text" name="flash">
		<br>Зеленый фонарь:      <input type="text" name="lamp">
		<br>Аквамен:        <input type="text" name="aqua">	
		<br>Зеленая стрела:         <input type="text" name="arrow">
		</p>
		<p><input type="submit" name="submit" value="Отправить"</p>
		</form>
EOD;
		if (isset($_POST['submit']) )
		{
			$super = $_POST['super'];
			$bat = $_POST['bat'];
			$wonder = $_POST['wonder'];
			$flash = $_POST['flash'];
			$lamp = $_POST['lamp'];
			$aqua = $_POST['aqua'];
			$arrow = $_POST['arrow'];
		}
		$arr = array($super, $bat, $wonder, $flash, $lamp, $aqua, $arrow);
        if(max($arr) <= 5)
        {
            $n = 100;
        }
        else if(max($arr) <= 50)
        {
            $n = 10;
        }
        else if(max($arr) <= 100)
        {
            $n = 5;
        }
        else if(max($arr) <= 200)
        {
            $n = 2.5;
        }
        else if(max($arr) <= 300)
        {
            $n = 5 / 3;
        }
        else if(max($arr) <= 400)
        {
            $n = 5 / 4;
        }
        else if(max($arr)>500)
        {
            $n = 0.1;
        }
        else if(max($arr)>5000)
        {
            $n = 0.01;
        }
        else if(max($arr)>50000)
        {
            $n = 0.001;
        }
        else
        {
            $n  = 1;
        }
        $text1 = 500 / $n;
        $text2 = 400 / $n;
        $text3 = 300 / $n;
        $text4 = 200 / $n;
        $text5 = 100 / $n;
		$superY =499 - $super*$n;
		$batY=499 - $bat*$n;
		$wonderY=499  - $wonder*$n;
		$flashY=499 - $flash*$n;
		$lampY=499 - $lamp*$n;
		$aquaY = 499 - $aqua*$n;
		$arrowY=499 - $arrow*$n;
		$super1 = $super*$n;
		$bat1 = $bat*$n;
		$wonder1 = $wonder*$n;
		$flash1 = $flash*$n;
		$lamp1 = $lamp*$n;
		$aqua1 = $aqua*$n;
		$arrow1 = $arrow*$n;
		echo $super;
	echo <<<EOD
	<svg width="1000" height="800">
		<line x1="50" y1="0" x2="50" y2=500 stroke-width="2" stroke="rgb(0,0,0)"/>
	    <line x1="50" y1="0" x2="55" y2="10" stroke-width="2" stroke="rgb(0,0,0)"/>
	    <line x1="45" y1="10" x2="50" y2="0" stroke-width="2" stroke="rgb(0,0,0)"/>
	    <line x1="50" y1=500 x2="600" y2=500 stroke-width="2" stroke="rgb(0,0,0)"/>
	    <line x1="590" y1=495 x2="600" y2=500 stroke-width="2" stroke="rgb(0,0,0)"/>
	    <line x1="600" y1=500 x2="590" y2=505 stroke-width="2" stroke="rgb(0,0,0)"/>

	  <rect x="60" y={$superY} width="40" height={$super1} style="fill:rgb(0, 0, 255)" />
	  <text x=75 y=510 style="writing-mode: tb;" >Супермен</text>
	  <text x=65 y={$superY}> $super </text>

	  <rect x="110" y={$batY} width="40" height={$bat1} style="fill:rgb(0,0,0)" />
	  <text x=130 y=510 style="writing-mode: tb;" >Бэтмен</text>
	  <text x=115 y={$batY}> $bat </text>

	  <rect x="170" y={$wonderY} width="40" height={$wonder1} style="fill:rgb(225,0,0)" />
	  <text x=190 y=510 style="writing-mode: tb;" >Чудо-женщина</text>
	  <text x=175 y={$wonderY}> $wonder </text>

		<rect x="230" y={$flashY} width="40" height={$flash1} style="fill:rgb(128,0,0)" />
		<text x=250 y=510 style="writing-mode: tb;" >Флэш</text>
		<text x=235 y={$flashY}> $flash </text>

		<rect x="290" y={$lampY} width="40" height={$lamp1} style="fill:rgb(50, 205, 50)" />
	 	<text x=310 y=510 style="writing-mode: tb;" >Зеленый фонарь</text>
	 	<text x=295 y={$lampY}> $lamp </text>

	 	<rect x="350" y={$aquaY} width="40" height={$aqua1} style="fill:rgb(0, 255, 255)" />
	 	<text x=370 y=510 style="writing-mode: tb;" >Аквамен</text>
	 	<text x=355 y={$aquaY}> $aqua </text>

	 	<rect x="410" y={$arrowY} width="40" height={$arrow1} style="fill:rgb(0, 100, 0)" />
	 	<text x=430 y=510 style="writing-mode: tb;" >Зеленая стрела</text>
	 	<text x=415 y={$arrowY}> $arrow </text>

	 	<line x1="45" y1="0" x2="600" y2=0 stroke-width="1" stroke="rgb(128, 128, 128)"/>
	 	<text x=10 y=10> $text1 </text>
	 	<line x1="45" y1="100" x2="600" y2=100 stroke-width="1" stroke="rgb(128, 128, 128)"/>
	 	<text x=10 y=100> $text2 </text>
	 	<line x1="45" y1="200" x2="600" y2=200 stroke-width="1" stroke="rgb(128, 128, 128)"/>
	 	<text x=10 y=200> $text3 </text>
	 	<line x1="45" y1="300" x2="600" y2=300 stroke-width="1" stroke="rgb(128, 128, 128)"/>
	 	<text x=10 y=300> $text4 </text>
	 	<line x1="45" y1="400" x2="600" y2=400 stroke-width="1" stroke="rgb(128, 128, 128)"/>
	 	<text x=10 y=400> $text5 </text>
	  Sorry, your browser does not support inline SVG.  

	</svg>
EOD;
	?>


	
</body>
</html>