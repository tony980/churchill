<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="" method="post" name="myform" onkeyup="calculate()">
    <label>Num of People</label>
    <input type="text" name="qty" />
    <br/>
    <label>Price</label>
    <input type="text" name="cost" />
    <br/>
    <input type="text" name="textbox5" />
</form>
</body>
</html>
<script type="text/javascript">
	var form = document.forms.myform,
    qty = form.qty,
    cost = form.cost,
    output = form.textbox5;

window.calculate = function () {
    var q = parseInt(qty.value, 10) || 0,
        c = parseFloat(cost.value) || 0;
    output.value = (q * c).toFixed(2);
};
</script>


<main>
<label for="firstNum">Number 1:</label>
<input type="number" id="firstNum" name="firstNum">

<label for="secondNum">Number 2:</label>
<input type="number" id="secondNum" name="secondNum"></br></br>

<button onclick="multiply()">Multiply</button></br></br>

<label for="result">Result</label>
<input type="number" id="result" name="result"/>
</main>

<script>
function multiply(){
	num1 = document.getElementById("firstNum").value;
	num2 = document.getElementById("secondNum").value;
	result = num1 * num2;
	document.getElementById("result").value = result;
}
</script>





<head runat="server">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <title></title>
    <script>
        $(document).ready(function () {
            $("#txt1, #txt2").keyup(function () {
                $("#txt3").val($("#txt1").val() * $("#txt2").val());
            });
        });
    </script>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <input type="text" id="txt1" />
            <input type="text" id="txt2" />
            <input type="text" id="txt3" />
        </div>
    </form>
</body>

<input type="radio" name="r1" value="10" onClick="document.getElementById('hidfield').value=this.value"/>vip
    <br/>
    <input type="radio" name="r1" value="45" onClick="document.getElementById('hidfield').value=this.value"/>
    regular
    <br/>
    <input type="text" name="sum" value="" id="hidfield" />