<!DOCTYPE html>
<html>
	<head>
		<title>Patient Forms - CanopyMD</title>


<?php
	$links = file_get_contents("../include.txt");
	$includes = explode("~",$links);
	echo $includes[0]; ?>
	
			<div id="text">
				<h1>Patient Forms</h1>
				<p>Your first visit to CanopyMD involves a few special steps so that we can get to know you. To understand what to expect, please read through this page. Filling out any necessary forms in advance will make your appointment run smoother!</p>
				<p>HIPAA FORMS</p>
				<ul>
					<li><a href="/forms/2013_10_09_09_15_53.pdf" target="_blank">HIPAA Disclosure Form</a></li>
					<li><a href="/forms/Accounting%20for%20Disclosures%20of%20PHI%20Individual%20Rights.pdf" target="_blank">Accounting for Disclosures of PHI Individual Rights</a></li>
					<li><a href="/forms/Individual%20Rights%20Authorizations.pdf" target="_blank">Individual Rights Authorizations</a></li>
					<li><a href="/forms/Inspect%20and%20Copy%20PHI%20Individual%20Rights.pdf" target="_blank">Inspect and Copy PHI Individual Rights</a></li>
					<li><a href="/forms/Notice%20of%20Privacy%20Practices.pdf" target="_blank">Notice of Privacy Practices</a></li>
					<li><a href="/forms/Notice%20of%20Privacy%20Practices%20Individual%20Rights.pdf" target="_blank">Notice of Privacy Practices Individual Rights</a></li>
					<li><a href="/forms/Request%20Amendment%20to%20PHI%20Individual%20Rights.pdf" target="_blank">Request Amendment to PHI Individual Rights.pdf</a></li>
					<li><a href="/forms/Request%20Confidential%20Communications%20Individual%20Rights.pdf" target="_blank">Request Confidential Communications Individual Rights</a></li>
					<li><a href="/forms/Request%20Restriction%20of%20Disclosures%20Indvidual%20Rights.pdf" target="_blank">Request Restriction of Disclosures Indvidual Rights</a></li>
					<li><a href="/forms/Waiver%20of%20Individual%20Rights.pdf" target="_blank">Waiver of Individual Rights</a></li>
				</ul>
				<p>NEW PATIENT FORMS</p>
				<ul>
					<li><a href="/forms/CombinedForms.pdf" target="_blank">All New Patient Forms (Combined)</a></li>
					<li><a href="/forms/Welcome_letter-1.pdf" target="_blank">Welcome Letter</a></li>
					<li><a href="/forms/RegistrationFormMarch2010_REVISED.pdf" target="_blank">Registration Form</a></li>
					<li><a href="/forms/AgreementAuth.pdf" target="_blank">Agreements and Authorization</a></li>
					<li><a href="/forms/Authorization_to_ReleaseInfo_to_FamilyMembers-1.pdf" target="_blank">Authorization to Release Info to Family Members</a></li>
					<li><a href="/forms/HartsoughDermatologyMedicalHistory2.pdf" target="_blank">Medical History</a></li>
					<li><a href="/forms/PatientHistory-MedLog-1.pdf" target="_blank">Medication Log</a></li>
				</ul>
				<p>EXISTING PATIENT FORMS</p>
				<p>Please print and fill out these forms if you have changed medications since your last visit:</p>
				<ul>
					<li><a href="/forms/PatientHistory-MedLog-1.pdf" target="_blank">Medication Log</a></li>
					<li><a href="/forms/AgreementAuth.pdf">Agreements and Authorization</a></li>
				</ul>
				<p>MINOR PATIENT FORMS</p>
				<p>In addition to the new patient or existing patient forms, the following form is needed to treat anyone under the age of 18:</p>
				<ul>
					<li><a href="/forms/MinorTxAuthorization-Revised.pdf" target="_blank">Authorization to Treat Minors</a></li>
				</ul>
				<p>LASER PATIENT FORMS</p>
				<p>In addition to the new patient and existing patient forms, the following forms are necessary to treat with our lasers.  If you are having a Profractional select the Profractional form and if you are having a BBL please select the BBL form.</p>
				<ul>
					<li><a href="/forms/LaserForms.pdf" target="_blank">Profractional Laser Medical History form</a></li>
					<li><a href="/forms/MedicalHistoryBBL-LaserProcedure.pdf" target="_blank">BBL Laser Medical History form</a></li>
				</ul>
			</div>
			<table id="center">
				<tr>
					<td id="logopic">
						<a href="/"><img src="/logo2.png" alt="CanopyMD logo Loves Park dermatology" /></a>
						<img src="/6.jpg" />
					</td>
				</tr>
			</table>
			
<?php echo $includes[1]; ?>
