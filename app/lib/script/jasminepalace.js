
function toggleShowHide(elementID) {
	var oElement	= document.getElementById(elementID);
	if (oElement) {
		if (oElement.style.display == "block") {
			oElement.style.display = "none";
		} else {
			oElement.style.display = "block";
		}
	}
	return true;
}