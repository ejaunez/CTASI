/**
 * Looks up the Customer Full Name for a string <b>text</b>.
 * @param $select The component where the Options pair List will be inserted.
 * @param baseUrl The base URL for call the searchFullName service.
 * @param text The text string to look up.
 */
function customerByNameOptions($select, baseUrl, text) {
	$select.load(baseUrl + '/searchFullName/' + text, function(respTxt, statTxt, xhr){
		if( statTxt == "success") { $(".JSON_DBG").val("OK, RESP:["+respTxt+"]."); }
		if( statTxt == "error") { alert("Error: " + xhr.status + ": " + xhr.statusText); }
	});
}

function customerNameSuggestions(token, done) {
	$.get("/ctasiweb/customers/getNamesByToken/" + token, function(respTxt, statTxt, xhr){
		if( statTxt == "success") { alert("Success: " + xhr.status + ": " + respTxt); }
		if( statTxt == "error") { alert("Error: " + xhr.status + ": " + xhr.statusText); }
		done(respTxt);
	});
}
