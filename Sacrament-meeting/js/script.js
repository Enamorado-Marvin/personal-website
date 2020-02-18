function changeText() {
	var valores = document.getElementById("id");
	var hymnNumber = valores.getAttribute("numberHymn");
	var hymnName = valores.getAttribute("nameHymn");
  	document.getElementById("openingHymn").value = hymnNumber + " - " + hymnName;
}
