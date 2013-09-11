function max(a,b)
{
	if (a > b)
		return a;
	return b;
}

function displayModal()
{
	paramMap = {};
	getURLParams(paramMap);
	if (paramMap["modalID"] == undefined)
		return;
	if($("#" + paramMap["modalID"]).length == 1)
	{
		$("#" + paramMap["modalID"]).modal('show');
	}
}

function getURLParams(paramMap)
{
	rawparams=window.location.href.substring(
		window.location.href.indexOf("?") + 1);
	if (rawparams.length == window.location.href.length)
		return;
	while(rawparams.length > 0){
		if (rawparams.indexOf("=") > 0)
			if (rawparams.indexOf("&") > 0)
				singleParam = rawparams.substring(0,
						rawparams.indexOf("&"));
			else
				singleParam = rawparams;
		singleKey = singleParam.substring(0, singleParam.indexOf("="));
		singleVal = singleParam.substring(singleParam.indexOf("=") + 1);
		paramMap[singleKey]=singleVal;
		rawparams = rawparams.substring(singleParam.length + 1);
	}
}
$(document).ready(displayModal);
