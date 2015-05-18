<!DOCTYPE html>
<html>
<body>
<div id="mainBlock">
<h1> DONT FORGET TO SUBMIT TO SAVE ANY CHANGES </h1>
<div id="namesBlock">
<h4> Basic Info </h4>
	<strong>First:</strong>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="firstName" readonly id="firstName"><br>
	<strong>Last:</strong>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lastName" readonly id="lastName"><br>
    <strong>Bib Number:</strong> &nbsp;<input type="text" name="number" readonly id="number"><br>
    <strong>Gender:</strong> Male <input type="radio" name="gender" readonly id="male" value="male"> Female <input type="radio" name="gender" readonly id="female" value="female"><br>
    <strong>Location:</strong> Main Tent <input type="radio" name="location"  id="mainTent" value="mainTent"> Battery Tent <input type="radio" name="location"  id="batteryTent" value="batteryTent"> Oakledge Tent <input type="radio" name="location"  id="oakledgeTent" value="oakledgeTent"> Sag Wagon <input type="radio" name="location"  id="sagWagon" value="sagWagon"> BFD on course <input type="radio" name="location"  id="bfdOnCourse" value="bfdOnCourse"><br>
    <strong>Pt. Info:</strong> Marathon <input type="radio" name="PtInfo"  id="marathon" value="marathon"> Relay <input type="radio" name="PtInfo"  id="relay" value="relay"> Volenteer <input type="radio" name="PtInfo"  id="volenteer" value="volenteer"> Other <input type="radio" name="PtInfo"  id="marathon" value="marathon">
</div>

<div id="timeStampBlock">
<h4> Time In/Out </h4>
	Time In :  &nbsp; <input type="text" name="timeIn"  id="timeIn"><br>
	Time Out:   <input type="text" name="timeOut"  id="timeOut"><br>
    Race Chip Collected: &nbsp;&nbsp;<input type="checkbox" name="chipCollected"  id="chipCollected"><br>
    Medal Given: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="medalGiven" id="medalGiven"><br>
</div>
<div id="otherInfoBlock">
	<strong>PMH:</strong> <input type="text" id="pmh"> <br>
    <strong>Allergies</strong> <input type="text" id="allergies"> <strong>Meds:</strong> <input type="text" id="meds"><br>
    <strong>Body Weight: </strong> Pre-Race(kg) <input type="text" id="preRaceWeight">Pre-Race(kg) <input type="text" id="postRaceWeight">
</div>
<div id="chiefComplaintBlock">
	<h4> Chief Complaint </h4>
	<strong>General:</strong>&nbsp;&nbsp; Fatigue <input type="checkbox" id="fatigue"> Chills <input type="checkbox" id="chills"> Overheated <input type="checkbox" id="overheated"> Weakness <input type="checkbox" id="weakness"> Dehydration <input type="checkbox" id="dehydration"> Allergic Reaction <input type="checkbox" id="allergicReaction">  <br>
	<strong>Neuro:</strong> &nbsp;&nbsp;Dizziness <input type="checkbox" id="dizziness"> Lightheaded <input type="checkbox" id="lightheaded"> Headache <input type="checkbox" id="headache"> Syncope <input type="checkbox" id="syncope"> Aletered Mental Status <input type="checkbox" id="alteredMentalStatus">   <br>
    <strong>GI:</strong>&nbsp;&nbsp; Diarrhea <input type="checkbox" id="diarrhea"> Nasuea <input type="checkbox" id="nasuea"> Vomiting <input type="checkbox" id="vomiting"> Rectal Bleed <input type="checkbox" id="rectalBleed"> Abdominal Pain <input type="checkbox" id="abdominalPain"> <br>
    <strong>Skin:</strong>&nbsp;&nbsp; Abrasion <input type="checkbox" id="abrasion"> Laceration <input type="checkbox" id="laceration"> Blisters <input type="checkbox" id="blisters"> Sunburn <input type="checkbox" id="sunburn">  <br>
    <strong>Cardiopulmonary:</strong>&nbsp;&nbsp; Tachycardia <input type="checkbox" id="tachycardia"> Palpitations <input type="checkbox" id="palpitations"> Chest Pain/Pressure <input type="checkbox" id="chestPain"> SOB <input type="checkbox" id="sob"> Wheeze <input type="checkbox" id="wheeze"><br>
    <strong>Ortho:</strong> &nbsp;&nbsp;Muscle Cramps <input type="checkbox" id="muscleCramps"> Muscle Strain <input type="checkbox" id="muscleStrain"> Joint Pain(location): <input type="text" id="jointPain"> Other: <input type="text" id="otherComplaint"> 
</div>
<div id="vitalSignsBlock">
<h4> Vital Signs </h4>
    <table>
    	<tr>
        	<td id="time">  Time  </td>
            <td id="bp"> BP </td>
            <td id="pulse"> Pulse </td>
            <td id="rr"> RR </td>
            <td id="temp"> Temp </td>
            <td id="O2Sat"> O2Sat </td>
        </tr>
        <tr>
        	<td id="time1">  <input type="text" name="time1" id="time1" size=5><br> </td>
            <td id="bp1">  <input type="text" name="bp1" id="bp1" size=5><br> </td>
            <td id="pulse1">  <input type="text" name="pulse1" size=5 id="pulse1"><br> </td>
            <td id="rr1">  <input type="text" name="rr1" size=5 id="rr1"><br> </td>
            <td id="temp1">  <input type="text" name="temp1" size=5 id="temp1"><br> </td>
            <td id="O2Sat1">  <input type="text" name="temp1" size=5 id="temp1"><br> </td>
        </tr>
        <tr>
        	<td id="time2">  <input type="text" name="time2" id="time2" size=5><br> </td>
            <td id="bp2">  <input type="text" name="bp2" id="bp2" size=5><br> </td>
            <td id="pulse2">  <input type="text" name="pulse2" size=5 id="pulse2"><br> </td>
            <td id="rr2">  <input type="text" name="rr2" size=5 id="rr2"><br> </td>
            <td id="temp2">  <input type="text" name="temp2" size=5 id="temp2"><br> </td>
            <td id="O2Sat2">  <input type="text" name="temp2" size=5 id="temp2"><br> </td>
        </tr>
        <tr>
         	<td id="time3">  <input type="text" name="time3" id="time3" size=5><br> </td>
            <td id="bp3">  <input type="text" name="bp3" id="bp3" size=5><br> </td>
            <td id="pulse3">  <input type="text" name="pulse3" size=5 id="pulse3"><br> </td>
            <td id="rr3">  <input type="text" name="rr3" size=5 id="rr3"><br> </td>
            <td id="temp3">  <input type="text" name="temp3" size=5 id="temp3"><br> </td>
            <td id="O2Sat3">  <input type="text" name="temp3" size=5 id="temp3"><br> </td>
        </tr>
    </table>
</div>
<div id="physicalExamBlock">
	<h4> Physical Exam </h4>
	<textarea rows="5" cols="30" id="treatmentNotes"></textarea>
</div>
<div id="treatmentBlock">
	<h4> Treatment </h4>
    Fluids/PO (cups) <input type="number" name="fluidsPO"  id="fluidsPO"> Water <input type="radio" name="fluidType" value="water"> Gatorade <input type="radio" name="fluidType" value="gatorade"> Bouillion <input type="radio" name="fluidType" value="bouillion"><br>
    Fluids/IV NS (L) <input type="number" name="fluidsIV"  id="fluidsIV" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Start Time: <input type="text" id="ivStart"> Stop Time <input type="text" id="ivStop"><br>
    Fluids/PO (cups) <input type="number" name="fluidsPO"  id="fluidsPO"> Amt: &nbsp;&nbsp;<input type="text" id="ivAMT">Start Time: <input type="text" id="iv2Start"> Stop Time <input type="text" id="iv2Stop"><br>
    Medications: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="medication1"> Time: <input type="text" id="medication1Time"> <br>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="medication2">  Time: <input type="text" id="medication2Time"> <br>
    Misc: &nbsp;&nbsp; Ice: <input type="checkbox" id="ice">  Splint: <input type="checkbox" id="splint">  Compression: <input type="checkbox" id="compression">  Wound Care: <input type="checkbox" id="woundCare">  Blister Care: <input type="checkbox" id="blisterCare">  Other: <input type="text" id="otherTreatment">
</div>
<div id="labsBlock">
	<h4> Labs </h4>
    Na: &nbsp;&nbsp;&nbsp;<input type="text" name="Na"  id="na"><br>
	K:  &nbsp;&nbsp;&nbsp;&nbsp; <input type="text" name="K"  id="k"><br>
    Glu:  &nbsp;&nbsp; <input type="text" name="Glu"  id="glu"><br>
	BUN:   <input type="text" name="BUN"  id="bun"><br>
</div>
<div id="diagnosisBlock">
	<h4> Diagnosis </h4>
    <input type="text" name="diagnosis"  id="diagnosis"><br>
</div>
<div id="dispositionBlock">
	<h4> Disposition </h4>
    Released: </br>
    &nbsp;&nbsp;&nbsp;On Own <input type="radio" name="released" value="own"> With Family <input type="radio" name="released" value="family"><br>
    Follow up care needed <input type="checkbox" name="followUpCare" id="followUpCare"> <br>
    Left AMA <input type="checkbox" name="leftAMA" id="leftAMA"><br>
    Medical Transport to FAHC <input type="checkbox" name="medicalTransport" id="medicalTransport"><br>
</div>
<div id="treatmentNotesBlock">
	<h4> Treatment Notes </h4>
	<textarea rows="5" cols="30" id="treatmentNotes"></textarea>
</div>
<div id="provider">
	<h4> Provider </h4>
    	<strong>Print Name: </strong> <input type="text" id="providerPrintName"> MD: <input type="radio" name="provider" value="MD">RN: <input type="radio" name="provider" value="RN"> ATC<input type="radio" name="provider" value="atc">EMT<input type="radio" name="provider" value="emt">DO<input type="radio" name="provider" value="do"><br>
        <strong> E-Sign: </strong><input type="text" id="providerESign"> <strong> Date: </strong><input type="text" id="providerDate">
</div>
	<input type="submit" name="Save Changes" readonly id="save" value="Save Changes" ><br>
</div>


<style>
div {
	background-color: #66FFFF;
	border: 2px solid black;
	border-radius: 5px;
	display: inline-block;
	padding: 5px;
	border-spacing: 5px;
	vertical-align: top;
}
#mainBlock {
	background-color: #00FF8C;	
}
#chiefComplaintBlock {
	display: block;	
}
table, th, td {
	border: 1px solid black;
	padding: 5px;	
}
table, td {
	padding: 5px;	
}
td {
	border-spacing: 5px;
}
</style>
<script>
	var x = document.getElementById("firstName");
	x.value = "testing... Changing Info";
</script>

</body>
</html>
