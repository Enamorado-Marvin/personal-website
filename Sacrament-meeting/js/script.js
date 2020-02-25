function changeText() {
	var valores = document.getElementById("id");
	var hymnNumber = valores.getAttribute("numberHymn");
	var hymnName = valores.getAttribute("nameHymn");
  	document.getElementById("openingHymn").value = hymnNumber + " - " + hymnName;
}

function add_speaker(){
	var speaker1 = document.getElementById('speaker').value;
	var subject1 = document.getElementById('subject').value;

	function Speaker(speaker, subject){	
		this.speaker = speaker;
		this.subject = subject;
	}

	newSpeaker = new Speaker(speaker1, subject1);
	addSpeaker();

}

var dataList= [];
function addSpeaker(){
	dataList.push(newSpeaker);
	document.getElementById('speakerList').innerHTML += 
	'<span>'+newSpeaker.speaker+'</span><span>'+newSpeaker.subject+
	'</span>';
}

function add_preview(){
	var date = document.getElementById("date").value;
	document.getElementById("date_entered").innerHTML = date;
	var pLeader = document.getElementById("presiding").value;
	document.getElementById("presidingL").innerHTML = pLeader;
	var dLeader = document.getElementById("directing").value;
	document.getElementById("directingL").innerHTML = dLeader;

	var announcements = document.getElementById("announcements").value;
	document.getElementById("announcementsP").innerHTML = announcements;

	var oHymn = document.getElementById("openingHymn").value;
	document.getElementById("ohymn").innerHTML = oHymn;

}
