<!DOCTYPE html>

<html>

<title>Calculator Converter</title>
<body>

<!---Source code below reference from W3Schools -->

<h2>Terrance Whitehead</h2>

<p>Given the current temperature in degrees Kelvin, determine the temperature in degrees Celsius:</p>

<p>
  <label>Kelvin:<label>
  <input id="inputKelvin" type="number" placeholder="Enter Temperature" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
</p>
<p>Celcius: <span id="outputCelcius"></span></p>

<script>
function temperatureConverter(valNum) {
  valNum = parseFloat(valNum);
  document.getElementById("outputCelcius").innerHTML=valNum-273.15;
}
</script>

</body>
</html>
