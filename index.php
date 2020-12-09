<!DOCTYPE html>

<html>

<title>Calculator Converter</title>
<body>

<!---Source code below reference from W3Schools -->
<!---https://www.w3schools.com/howto/howto_js_temperature_converter.asp -->

<h2>Terrance Whitehead</h2>

<p>Given the current temperature in degrees Kelvin, determine the temperature in degrees Celsius:</p>

<p>
  <label>degrees Kelvin:<label>
  <input id="inputKelvin" type="number" placeholder="Enter Temperature" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
</p>
<p>degrees Celcius: <span id="outputCelcius"></span></p>


<script>

/*Here below, a function was made to formulate whatever input is entered, a - (negative) output will exploint, in Celsius. -273.15 is a placeholder and a start.*/

function temperatureConverter(valNum) {
  valNum = parseFloat(valNum);
  document.getElementById("outputCelcius").innerHTML=valNum-273.15;
}

</script>

</body>
</html>
