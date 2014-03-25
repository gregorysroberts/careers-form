<!DOCTYPE html>
<html>
<head>
    <title>careers form</title>
    <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure-min.css">
    <link rel="stylesheet" href="http://www.insidesales.com/careers.css">
</head>
<body>

<p>We appreciate your interest in the positions at InsideSales.com. Please take some time to complete the application by filling out the form below.</p>


<form class="pure-form pure-form-aligned" method="POST" name="applicationForm" onsubmit="return validate(fieldArray, this);" action="career-results-test">
    <fieldset>
    <h2>Applicant Information</h2>

    <div>
        <label for="first_name">First Name:</label>
        <input name="first_name" type="text" id="first_name" maxlength="25"<?php echo empty($_REQUEST['first_name'])?'':' value="'.html($_REQUEST['first_name']).'"'; ?> />
        <?php if (isset($errors['first_name'])): ?><div class="error"><?php echo $errors['first_name']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="last_name"><span class="requiredFieldMarker">*</span>Last Name:</label>
        <input name="last_name" type="text" id="last_name" maxlength="35"<?php echo empty($_REQUEST['last_name'])?'':' value="'.html($_REQUEST['last_name']).'"'; ?> />
        <?php if (isset($errors['last_name'])): ?><div class="error"><?php echo $errors['last_name']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="position_title"><span class="requiredFieldMarker">*</span>Position:</label>
        <input name="position_title" type="text" id="position" readonly="readonly"<?php echo empty($_REQUEST['position'])?'':' value="'.substr($_REQUEST['position'], strpos($_REQUEST['position'], ' - ')+3).'"'; ?> />
        <input name="position" type="hidden"<?php echo empty($_REQUEST['position'])?'':' value="'.$_REQUEST['position'].'"'; ?> />
        <?php if (isset($errors['position'])): ?><div class="error"><?php echo $errors['position']; ?></div><?php endif; ?>
    </div>

    <div class="hidden">
        <label for="phone"><span class="requiredFieldMarker">*</span>Phone:</label>
        <input name="phone" type="text" id="phone" maxlength="40"<?php echo empty($_REQUEST['phone'])?'':' value="'.html($_REQUEST['phone']).'"'; ?> />
        <?php if (isset($errors['phone'])): ?><div class="error"><?php echo $errors['phone']; ?></div><?php endif; ?>
    </div>

    <div class="hidden">
        <label for="email"><span class="requiredFieldMarker">*</span>Email:</label>
        <input name="email" type="text" id="email" maxlength="50"<?php echo empty($_REQUEST['email'])?'':' value="'.html($_REQUEST['email']).'"'; ?> />
        <?php if (isset($errors['email'])): ?><div class="error"><?php echo $errors['email']; ?></div><?php endif; ?>
    </div>

    <div class="hidden">
        <label for="zip"><span class="requiredFieldMarker">*</span>Zip Code:</label>
        <input name="zip" type="text" id="zip" maxlength="20" <?php echo empty($_REQUEST['zip'])?'':' value="'.html($_REQUEST['zip']).'"'; ?>/>
        <?php if (isset($errors['zip'])): ?><div class="error"><?php echo $errors['zip']; ?></div><?php endif; ?>
    </div>

    <div class="hidden">
        <label for="addr1"><span class="requiredFieldMarker">*</span>Address:</label>
        <input name="addr1" type="text" id="addr1" maxlength="60"<?php echo empty($_REQUEST['addr1'])?'':' value="'.html($_REQUEST['addr1']).'"'; ?> />
        <?php if (isset($errors['addr1'])): ?><div class="error"><?php echo $errors['addr1']; ?></div><?php endif; ?>
    </div>

    <div class="hidden">
        <input name="addr2" type="text" id="addr2" maxlength="60"<?php echo empty($_REQUEST['addr2'])?'':' value="'.html($_REQUEST['addr2']).'"'; ?> />
        <?php if (isset($errors['addr2'])): ?><div class="error"><?php echo $errors['addr2']; ?></div><?php endif; ?>
    </div>

    <div class="hidden">
        <label for="city"><span class="requiredFieldMarker">*</span>City:</label>
        <input name="city" type="text" id="city" maxlength="255"<?php echo empty($_REQUEST['city'])?'':' value="'.html($_REQUEST['city']).'"'; ?> />
        <?php if (isset($errors['city'])): ?><div class="error"><?php echo $errors['city']; ?></div><?php endif; ?>
    </div>

    <div class="hidden">
        <label for="state"><span class="requiredFieldMarker">*</span>State:</label>
        <input name="state" type="text" id="state" maxlength="25"<?php echo empty($_REQUEST['state'])?'':' value="'.html($_REQUEST['state']).'"'; ?> />
        <?php if (isset($errors['state'])): ?><div class="error"><?php echo $errors['state']; ?></div><?php endif; ?>
    </div>

    <div class="hidden">
        <label for="country"><span class="requiredFieldMarker">*</span>Country:</label>
        <input name="country" type="text" id="country" maxlength="25"<?php echo empty($_REQUEST['country'])?'':' value="'.html($_REQUEST['country']).'"'; ?> />
        <?php if (isset($errors['country'])): ?><div class="error"><?php echo $errors['country']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="linkedin">LinkedIn:<br /><span class="labelSubscript">(URL)</span></label>
        <input name="linkedin" type="text" id="linkedin" maxlength="255"<?php echo empty($_REQUEST['linkedin'])?'':' value="'.html($_REQUEST['linkedin']).'"'; ?> />
        <?php if (isset($errors['linkedin'])): ?><div class="error"><?php echo $errors['linkedin']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="website">Portfolio/website:</label>
        <input name="website" type="text" id="website" maxlength="85"<?php echo empty($_REQUEST['website'])?'':' value="'.html($_REQUEST['website']).'"'; ?> />
        <?php if (isset($errors['website'])): ?><div class="error"><?php echo $errors['website']; ?></div><?php endif; ?>
    </div>

    <div class="hidden">
        <label for="email_2">Additional email:</label>
        <input name="email_2" type="text" id="email_2" maxlength="80"<?php echo empty($_REQUEST['email_2'])?'':' value="'.html($_REQUEST['email_2']).'"'; ?> />
        <?php if (isset($errors['email_2'])): ?><div class="error"><?php echo $errors['email_2']; ?></div><?php endif; ?>
    </div>

    <div id="careersReferrer">How did you hear about us?</div>
    <div class="pure-control-group">
        <label for="source"><span class="requiredFieldMarker">*</span>Source:<br /></label>
        <select name="source" id="source">
            <option value=""<?php echo !empty($_REQUEST['source'])?'':' selected="selected"'; ?>>[SELECT]</option>
            <option value="Job Board - CraigsList"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - CraigsList"?' selected="selected"':''); ?>>Job Board - Craig's List</option>
            <option value="Job Board - KSL"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - KSL"?' selected="selected"':''); ?>>Job Board - KSL</option>
            <option value="Job Board - Silicon Slopes"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - Silicon Slopes"?' selected="selected"':''); ?>>Job Board - Silicon Slopes</option>
    <option value="Job Board - Provo Buzz"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - Provo Buzz"?' selected="selected"':''); ?>>Job Board - Provo Buzz</option>
            <option value="Job Board - Utah Tech Council"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - Utah Tech Council"?' selected="selected"':''); ?>>Job Board - Utah Tech Council</option>
            <option value="Job Board - BYU eRecruiting"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - BYU eRecruiting"?' selected="selected"':''); ?>>Job Board - BYU eRecruiting</option>
            <option value="Job Board - BYU computer science"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - BYU computer science"?' selected="selected"':''); ?>>Job Board - BYU computer science</option>
            <option value="Job Board - BYU Alumni"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - BYU Alumni"?' selected="selected"':''); ?>>Job Board - BYU Alumni</option>
            <option value="Job Board - UVU"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - UVU"?' selected="selected"':''); ?>>Job Board - UVU</option>
            <option value="Job Board - LDSjobs"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - LDSjobs"?' selected="selected"':''); ?>>Job Board - LDSjobs</option>
            <option value="Job Board - Rockyjobs"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - Rockyjobs"?' selected="selected"':''); ?>>Job Board - Rockyjobs</option>
            <option value="Job Board - VentureLoop"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - VentureLoop"?' selected="selected"':''); ?>>Job Board - VentureLoop</option>
            <option value="Job Board - ActiveHire"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board – ActiveHire"?' selected="selected"':''); ?>>Job Board – ActiveHire</option>
            <option value="Job Board - Ladders"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - Ladders"?' selected="selected"':''); ?>>Job Board - Ladders</option>
            <option value="Job Board - SimplyHired"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - SimplyHired"?' selected="selected"':''); ?>>Job Board - SimplyHired</option>
            <option value="Job Board - Indeed"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - Indeed"?' selected="selected"':''); ?>>Job Board - Indeed</option>
            <option value="Job Board - UPHPU"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - UPHPU"?' selected="selected"':''); ?>>Job Board - UPHPU</option>
            <option value="Job Board - Utah Workforce Services"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - Utah Workforce Services"?' selected="selected"':''); ?>>Job Board - Utah Workforce Services</option>
            <option value="Job Board - UofU"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - UofU"?' selected="selected"':''); ?>>Job Board - UofU</option>
            <option value="Job Board - Other"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Job Board - Other"?' selected="selected"':''); ?>>Job Board - Other</option>
            <option value="Web - Organic Search"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Web - Organic Search"?' selected="selected"':''); ?>>Web - Search Engine</option>
            <option value="Ad - Facebook"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Ad - Facebook"?' selected="selected"':''); ?>>Ad - Facebook</option>
            <option value="Ad - LinkedIn"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Ad - LinkedIn"?' selected="selected"':''); ?>>Ad - LinkedIn</option>
            <option value="Ad - Banner"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Ad - Banner"?' selected="selected"':''); ?>>Ad - Banner</option>
            <option value="Ad - Google+"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Ad - Google+"?' selected="selected"':''); ?>>Ad - Google+</option>
            <option value="Ad - Billboard"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Ad - Billboard"?' selected="selected"':''); ?>>Ad - Billboard</option>
            <option value="Ad - Other"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Ad - Other"?' selected="selected"':''); ?>>Ad - Other</option>
            <option value="Network - Employee Referral"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Network - Employee Referral"?' selected="selected"':''); ?>>Network - Employee Referral</option>
            <option value="Network - Other Referral"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Network - Other Referral"?' selected="selected"':''); ?>>Network - Other Referral</option>
            <option value="Event - Career Fair (BYU)"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Event - Career Fair (BYU)"?' selected="selected"':''); ?>>Event - Career Fair (BYU)</option>
            <option value="Event - Career Fair (UVU)"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Event - Career Fair (UVU)"?' selected="selected"':''); ?>>Event - Career Fair (UVU)</option>
            <option value="Event - Career Fair (UofU)"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Event - Career Fair (UofU)"?' selected="selected"':''); ?>>Event - Career Fair (UofU)</option>
            <option value="Event - Career Fair (USU)"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Event - Career Fair (USU)"?' selected="selected"':''); ?>>Event - Career Fair (USU)</option>
            <option value="Event - Other"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Event - Other"?' selected="selected"':''); ?>>Event - Other</option>
            <option value="Other (please specify)"<?php echo (!empty($_REQUEST['source']) && $_REQUEST['source'] == "Other (please specify)"?' selected="selected"':''); ?>>Other (please specify)</option>
        </select>
        <?php if (isset($errors['source'])): ?><div class="error"><?php echo $errors['source']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="other">Other:<br /></label>
        <input name="other" type="text" id="referrer" maxlength="255"<?php echo empty($_REQUEST['other'])?'':' value="'.html($_REQUEST['other']).'"'; ?> />
        <?php if (isset($errors['other'])): ?><div class="error"><?php echo $errors['other']; ?></div><?php endif; ?>
    </div>

    <div class="hidden">
        <label for="referrer">Referred By:<br /></label>
        <input name="referrer" type="text" id="referrer" maxlength="255"<?php echo empty($_REQUEST['referrer'])?'':' value="'.html($_REQUEST['referrer']).'"'; ?> />
        <?php if (isset($errors['referrer'])): ?><div class="error"><?php echo $errors['referrer']; ?></div><?php endif; ?>
    </div>

    <h2>Availability</h2>
    <div class="pure-control-group">
        <label for="available"><span class="requiredFieldMarker">*</span>Availabiliy Date:<br /><span class="labelSubscript">(YYYY-MM-DD)</span></label>
        <input name="available" type="date" id="available" maxlength="80"<?php echo empty($_REQUEST['available'])?'':' value="'.html($_REQUEST['available']).'"'; ?> />
        <?php if (isset($errors['available'])): ?><div class="error"><?php echo $errors['available']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="relocate">Relocation:<br /><span class="labelSubscript">(willing to relocate)</span></label>
        <select name="relocate" id="relocate">
            <option value=""<?php echo !empty($_REQUEST['relocate'])?'':' selected="selected"'; ?>>[SELECT]</option>
            <option value="Moving to Utah"<?php echo (!empty($_REQUEST['relocate']) && $_REQUEST['relocate'] == 'Moving to Utah'?' selected="selected"':''); ?>>No need to relocate</option>
            <option value="Willing to relocate"<?php echo (!empty($_REQUEST['relocate']) && $_REQUEST['relocate'] == 'Willing to relocate'?' selected="selected"':''); ?>>Willing to relocate</option>
            <option value="Willing with Assistance"<?php echo (!empty($_REQUEST['relocate']) && $_REQUEST['relocate'] == 'Willing with Assistance'?' selected="selected"':''); ?>>Willing with Assistance</option>
            <option value="Not Willing"<?php echo (!empty($_REQUEST['relocate']) && $_REQUEST['relocate'] == 'Not Willing'?' selected="selected"':''); ?>>Not Willing</option>
        </select>
        <?php if (isset($errors['relocate'])): ?><div class="error"><?php echo $errors['relocate']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="employment"><span class="requiredFieldMarker">*</span>Employment type:</label>
        <select name="employment[]" id="employment" multiple="multiple" size="3">
            <option value='Full-time'<?php echo (!empty($_REQUEST['employment']) && in_array('Full-time', $_REQUEST['employment'])?' selected="selected"':''); ?>>Full Time</option>
            <option value='Part-time'<?php echo (!empty($_REQUEST['employment']) && in_array('Part-time', $_REQUEST['employment'])?' selected="selected"':''); ?>>Part Time</option>
            <option value='Contract'<?php echo (!empty($_REQUEST['employment']) && in_array('Contract', $_REQUEST['employment'])?' selected="selected"':''); ?>>Contract</option>
        </select>
        <?php if (isset($errors['employment'])): ?><div class="error"><?php echo $errors['employment']; ?></div><?php endif; ?>
    </div>

    <h3 class="hidden">Desired Salary</h3>
    <div>
        <label for="salary_low"><span class="requiredFieldMarker">*</span>Current Salary:</label>
        <input name="salary_low" type="text" id="salary_low" maxlength="6"<?php echo empty($_REQUEST['salary_low'])?'':' value="'.html($_REQUEST['salary_low']).'"'; ?> />
        <span class="dollar-sign">$</span>
        <?php if (isset($errors['salary_low'])): ?><div class="error"><?php echo $errors['salary_low']; ?></div><?php endif; ?>
    </div>

    <div class="hidden">
        <label for="salary_high"><span class="requiredFieldMarker">*</span>High:</label>
        <input name="salary_high" type="text" id="salary_high" maxlength="6"<?php echo empty($_REQUEST['salary_high'])?'':' value="'.html($_REQUEST['salary_high']).'"'; ?> />
        <span class="dollar-sign">$</span>
        <?php if (isset($errors['salary_high'])): ?><div class="error"><?php echo $errors['salary_high']; ?></div><?php endif; ?>
    </div>

    <h2>Qualifications Summary</h2>
    <div class="pure-control-group">
        <label for="experience">Years of experience in <?php echo substr($_REQUEST['position'], 0, strpos($_REQUEST['position'], ' - ')); ?>?</label>
        <input name="experience" type="text" id="experience" maxlength="2"<?php echo empty($_REQUEST['experience'])?'':' value="'.html($_REQUEST['experience']).'"'; ?> />
        <?php if (isset($errors['experience'])): ?><div class="error"><?php echo $errors['experience']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="position_experience">Years of experience in a(n) <?php echo substr($_REQUEST['position'], strpos($_REQUEST['position'], ' - ')+3); ?> position</label>
        <input name="position_experience" type="text" id="position_experience" maxlength="2"<?php echo empty($_REQUEST['position_experience'])?'':' value="'.html($_REQUEST['position_experience']).'"'; ?> />
        <?php if (isset($errors['position_experience'])): ?><div class="error"><?php echo $errors['position_experience']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="industry_experience">Years of experience in the Computer Software industry?</label>
        <input name="industry_experience" type="text" id="industry_experience" maxlength="2"<?php echo empty($_REQUEST['industry_experience'])?'':' value="'.html($_REQUEST['industry_experience']).'"'; ?> />
        <?php if (isset($errors['industry_experience'])): ?><div class="error"><?php echo $errors['industry_experience']; ?></div><?php endif; ?>
    </div>
	<div <?php if(substr($_REQUEST['position'], 0, strpos($_REQUEST['position'], ' - '))!= 'Information Systems'){echo 'class="hidden"';} ?>>
		Please Describe your experience with the following:
	</div>
		<div <?php if(substr($_REQUEST['position'], 0, strpos($_REQUEST['position'], ' - '))!= 'Information Systems'){echo 'class="hidden"';} ?>>
			<label for="linux">Linux:</label>
			<textarea name="linux" id="linux" style="height:50px; float:right; border: 1px solid rgb(207, 207, 207); border-width: 2px;border-radius: 3px;margin: 6px 0;background-color: rgb(255, 255, 255);"<?php echo empty($_REQUEST['linux'])?'':' value="'.html($_REQUEST['linux']).'"'; ?> ></textarea>
			<?php if (isset($errors['linux'])): ?><div class="error"><?php echo $errors['linux']; ?></div><?php endif; ?>
		</div>
		<div <?php if(substr($_REQUEST['position'], 0, strpos($_REQUEST['position'], ' - '))!= 'Information Systems'){echo 'class="hidden"';} ?>>
			<label for="php">PHP:</label>
			<textarea name="php" id="php" style="height:50px; float:right; border: 1px solid rgb(207, 207, 207); border-width: 2px;border-radius: 3px;margin: 6px 0;background-color: rgb(255, 255, 255);"<?php echo empty($_REQUEST['php'])?'':' value="'.html($_REQUEST['php']).'"'; ?> ></textarea>
			<?php if (isset($errors['php'])): ?><div class="error"><?php echo $errors['php']; ?></div><?php endif; ?>
		</div>
		<div <?php if(substr($_REQUEST['position'], 0, strpos($_REQUEST['position'], ' - '))!= 'Information Systems'){echo 'class="hidden"';} ?>>
			<label for="mysql">MySQL:</label>
			<textarea name="mysql" id="mysql" style="height:50px; float:right; border: 1px solid rgb(207, 207, 207); border-width: 2px;border-radius: 3px;margin: 6px 0;background-color: rgb(255, 255, 255);"<?php echo empty($_REQUEST['mysql'])?'':' value="'.html($_REQUEST['mysql']).'"'; ?> ></textarea>
			<?php if (isset($errors['mysql'])): ?><div class="error"><?php echo $errors['mysql']; ?></div><?php endif; ?>
		</div>
	
	
    <div class="pure-control-group">
        <label for="education">Education-highest degree received:</label>
        <select name="education" id="education">
            <option value=""<?php echo !empty($_REQUEST['education'])?'':' selected="selected"'; ?>>[SELECT]</option>
            <option value="0"<?php echo (!empty($_REQUEST['education']) && $_REQUEST['education'] == '0'?' selected="selected"':''); ?>>High School</option>
            <option value="2"<?php echo (!empty($_REQUEST['education']) && $_REQUEST['education'] == '2'?' selected="selected"':''); ?>>Associates</option>
            <option value="4"<?php echo (!empty($_REQUEST['education']) && $_REQUEST['education'] == '4'?' selected="selected"':''); ?>>Bachelors</option>
            <option value="6"<?php echo (!empty($_REQUEST['education']) && $_REQUEST['education'] == '6'?' selected="selected"':''); ?>>Masters</option>
            <option value="8"<?php echo (!empty($_REQUEST['education']) && $_REQUEST['education'] == '8'?' selected="selected"':''); ?>>Doctorate</option>
        </select>
        <?php if (isset($errors['education'])): ?><div class="error"><?php echo $errors['education']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="school">School:<br /><span class="labelSubscript">(highest education)</span></label>
        <input name="school" type="text" id="school" maxlength="80"<?php echo empty($_REQUEST['school'])?'':' value="'.html($_REQUEST['school']).'"'; ?> />
        <?php if (isset($errors['school'])): ?><div class="error"><?php echo $errors['school']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="emphasis">Major/emphasis:<br /><span class="labelSubscript">(highest education)</span></label>
        <input name="emphasis" type="text" id="emphasis" maxlength="255"<?php echo empty($_REQUEST['emphasis'])?'':' value="'.html($_REQUEST['emphasis']).'"'; ?> />
        <?php if (isset($errors['emphasis'])): ?><div class="error"><?php echo $errors['emphasis']; ?></div><?php endif; ?>
    </div>

    <div class="pure-control-group">
        <label for="gpa">GPA:<br /><span class="labelSubscript">(highest education)</span></label>
        <select name="gpa" id="gpa">
            <option value=""<?php echo !empty($_REQUEST['gpa'])?'':' selected="selected"'; ?>>[SELECT]</option>
            <option value="4.0"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '4.0'?' selected="selected"':''); ?>>4.0</option>
            <option value="3.9"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '3.9'?' selected="selected"':''); ?>>3.9</option>
            <option value="3.8"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '3.8'?' selected="selected"':''); ?>>3.8</option>
            <option value="3.7"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '3.7'?' selected="selected"':''); ?>>3.7</option>
            <option value="3.6"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '3.6'?' selected="selected"':''); ?>>3.6</option>
            <option value="3.5"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '3.5'?' selected="selected"':''); ?>>3.5</option>
            <option value="3.4"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '3.4'?' selected="selected"':''); ?>>3.4</option>
            <option value="3.3"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '3.3'?' selected="selected"':''); ?>>3.3</option>
            <option value="3.2"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '3.2'?' selected="selected"':''); ?>>3.2</option>
            <option value="3.1"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '3.1'?' selected="selected"':''); ?>>3.1</option>
            <option value="3.0"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '3.0'?' selected="selected"':''); ?>>3.0</option>
            <option value="2.9"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '2.9'?' selected="selected"':''); ?>>2.9</option>
            <option value="2.8"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '2.8'?' selected="selected"':''); ?>>2.8</option>
            <option value="2.7"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '2.7'?' selected="selected"':''); ?>>2.7</option>
            <option value="2.6"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '2.6'?' selected="selected"':''); ?>>2.6</option>
            <option value="2.5"<?php echo (!empty($_REQUEST['gpa']) && $_REQUEST['gpa'] == '2.5'?' selected="selected"':''); ?>>2.5</option>
        </select>
        <?php if (isset($errors['gpa'])): ?><div class="error"><?php echo $errors['gpa']; ?></div><?php endif; ?>
    </div>

    <h2>Voluntary Equal Opportunity Questionnaire</h2>
    <p>As an equal opportunity employer, we hire without consideration to race, religion, creed, color, national origin, age, gender, sexual orientation, marital status, veteran status or disability. We invite you to complete the optional self-identification fields below used for compliance with government regulations and record-keeping guidelines.</p>
    <div>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender">
            <option value="Choose not to disclose"<?php echo (!empty($_REQUEST['gender']) && $_REQUEST['gender'] == 'Choose not to disclose'?' selected="selected"':''); ?>>[SELECT]</option>
            <option value="Female"<?php echo (!empty($_REQUEST['gender']) && $_REQUEST['gender'] == 'Female'?' selected="selected"':''); ?>>Female</option>
            <option value="Male"<?php echo (!empty($_REQUEST['gender']) && $_REQUEST['gender'] == 'Male'?' selected="selected"':''); ?>>Male</option>
        </select>
        <?php if (isset($errors['gender'])): ?><div class="error"><?php echo $errors['gender']; ?></div><?php endif; ?>
    </div>

    <div>
        <label for="race">Race:<a class="labelSubscript" onclick="popup('raceHelp')">(details)</a></label>
        <select name="race" id="race">
            <option value="Choose not to Disclose"<?php echo (!empty($_REQUEST['race']) && $_REQUEST['race'] == 'Choose not to Disclose'?' selected="selected"':''); ?>>[SELECT]</option>
            <option value="Hispanic or Latino"<?php echo (!empty($_REQUEST['race']) && $_REQUEST['race'] == 'Hispanic or Latino'?' selected="selected"':''); ?>>Hispanic or Latino</option>
            <option value="White"<?php echo (!empty($_REQUEST['race']) && $_REQUEST['race'] == 'White'?' selected="selected"':''); ?>>White</option>
            <option value="Black or African American"<?php echo (!empty($_REQUEST['race']) && $_REQUEST['race'] == 'Black or African American'?' selected="selected"':''); ?>>Black or African American</option>
            <option value="Native Hawaiian or Other Pacific Islander"<?php echo (!empty($_REQUEST['race']) && $_REQUEST['race'] == 'Native Hawaiian or Other Pacific Islander'?' selected="selected"':''); ?>>Native Hawaiian or Other Pacific Islander</option>
            <option value="Asian"<?php echo (!empty($_REQUEST['race']) && $_REQUEST['race'] == 'Asian'?' selected="selected"':''); ?>>Asian</option>
            <option value="American Indian or Alaska Native"<?php echo (!empty($_REQUEST['race']) && $_REQUEST['race'] == 'American Indian or Alaska Native'?' selected="selected"':''); ?>>American Indian or Alaska Native</option>
            <option value="Two or More Races"<?php echo (!empty($_REQUEST['race']) && $_REQUEST['race'] == 'Two or More Races'?' selected="selected"':''); ?>>Two or More Races</option>
        </select>
        <?php if (isset($errors['race'])): ?><div class="error"><?php echo $errors['race']; ?></div><?php endif; ?>
        <div class="popup" id="raceHelp">
            <p>The Equal Employment Opportunity Commission (EEOC) requires organizations with 100 or more employees to complete an EEO-1 report each year. Completion of the data is voluntary and will not affect your opportunity for employment or terms or conditions of employment. The information will be kept confidential and will only be used in accordance with the provisions of applicable laws, executive orders, and regulations, including those that require the information to be summarized and reported to the federal government for civil rights enforcement.</p>
            <dl>
                <dt>Hispanic or Latino</dt><dd>A person of Cuban, Mexican, Puerto Rican, South or Central American, or other Spanish culture or origin regardless of race. According to the EEOC<!--seriously, http://www.eeoc.gov/employers/eeo1survey/2007instructions.cfm, look for "4. RACE AND ETHNIC IDENTIFICATION"-->, this option should take precedence over any other option, including two or more races.</dd>
                <dt>White</dt><dd>A person having origins in any of the original peoples of Europe, the Middle East, or North Africa.</dd>
                <dt>Black or African American</dt><dd>A person having origins in any of the black racial groups of Africa.</dd>
                <dt>Native Hawaiian or Other Pacific Islander</dt><dd>A person having origins in any of the peoples of Hawaii, Guam, Samoa or other Pacific islands.</dd>
                <dt>Asian</dt><dd>A person having origins in any of the original peoples of the Far East, Southeast Asia or the Indian Subcontinent, including, for example, Cambodia, China, India, Japan, Korea, Malaysia, Pakistan, the Philippine Islands, Thailand, and Vietnam.</dd>
                <dt>American Indian or Alaska Native</dt><dd>A person having origins in any of the original peoples of North and South America (including Central America) and who maintain tribal affiliation or community attachment.</dd>
                <dt>Two or More Races</dt><dd>All persons who identify with more than one of the above five races.</dd>
        </div>
    </div>

    <div>
        <label for="veteran">Veteran:</label>
        <select name="veteran" id="veteran">
            <option value="Choose not to disclose"<?php echo (!empty($_REQUEST['veteran']) && $_REQUEST['veteran'] == 'Choose not to disclose'?' selected="selected"':''); ?>>[SELECT]</option>
            <option value="None"<?php echo (!empty($_REQUEST['veteran']) && $_REQUEST['veteran'] == 'None'?' selected="selected"':''); ?>>None</option>
            <option value="Disabled Veterans"<?php echo (!empty($_REQUEST['veteran']) && $_REQUEST['veteran'] == 'Disabled Veterans'?' selected="selected"':''); ?>>Disabled Veterans</option>
            <option value="Other Protected Veterans"<?php echo (!empty($_REQUEST['veteran']) && $_REQUEST['veteran'] == 'Other Protected Veterans'?' selected="selected"':''); ?>>Other Protected Veterans</option>
            <option value="Armed Forces Service Medal Veterans"<?php echo (!empty($_REQUEST['veteran']) && $_REQUEST['veteran'] == 'Armed Forces Service Medal Veterans'?' selected="selected"':''); ?>>Armed Forces Service Medal Veterans</option>
            <option value="Recently Separated Veterans"<?php echo (!empty($_REQUEST['veteran']) && $_REQUEST['veteran'] == 'Recently Separated Veterans'?' selected="selected"':''); ?>>Recently Separated Veterans</option>
        </select>
        <?php if (isset($errors['veteran'])): ?><div class="error"><?php echo $errors['veteran']; ?></div><?php endif; ?>
    </div>

    <h2>Conclusion</h2>
    <div>
        <p>I certify that my answers are true and complete to the best of my knowledge.  If this application leads to employment, I understand that false or misleading information in my application or interview may be just cause for subsequent dismissal.  I hereby authorize any former employer, person, firm or corporation listed hereon, including InsideSales.com to answer any questions and agrees to hold all persons harmless for providing any and all truthful information within their records.  I also approve for a background check and drug screen to be conducted by my employer or an authorized third-party vendor.  By submitting this application, I agree to allow InsideSales.com to contact references concerning my employment application, verify compensation, and request supporting documentation from current or former employers. If employed, I understand that my employment is voluntary and may be terminated at will or at any time.  I agree to comply with all company policies and procedures as a condition of employment. I also understand that InsideSales.com is an equal opportunity employer and all applicants are given equal consideration.  I understand this to be a preliminary application and not a contract of employment.</p>
        <label for="signature"><span class="requiredFieldMarker">*</span>Signature:</label>
        <input name="signature" type="text" id="signature" maxlength="80"<?php echo empty($_REQUEST['signature'])?'':' value="'.html($_REQUEST['signature']).'"'; ?> />
        <?php if (isset($errors['signature'])): ?><div class="error"><?php echo $errors['signature']; ?></div><?php endif; ?>
    </div>
<div>
</div>
<div class="careers-form-submit">
    <input type="Submit" value="Save and Complete" />
<div>
</fieldset>
</form>

<script language="JavaScript"><!--
  // SET UP VALIDATION ARRAY
  var fieldArray = new Array();
  // field|field name|blank,DDSEelected,phone,email
  fieldArray[0] = "first_name|First Name|blank";
  fieldArray[1] = "last_name|Last Name|blank";
  fieldArray[2] = "phone|Phone|blank";
  fieldArray[3] = "position|Position|blank";
  fieldArray[4] = "email|Email|email,blank";
  fieldArray[5] = "zip|Zip Code|blank";

  fieldArray[6] = "available|Availability Date|blank";
  fieldArray[7] = "salary_low|Salary lower range|blank";

  fieldArray[8] = "signature|Signature|blank";

  $('#careersFormFull > h2').after('<canvas class="triangle" height="24" width="48"></canvas>');
  $(".triangle").each(function() {
    var c = $(this)[0];
    var ctx = c.getContext("2d");
    ctx.moveTo(0, 0);
    ctx.lineTo(48, 0);
    ctx.lineTo(24, 24);
    ctx.fillStyle = "rgb(0,81,153)";
    ctx.globalCompositeOperation = "destination-over";
    ctx.shadowColor = "rgb(0,121,193)";
    ctx.shadowBlur = 4;
    ctx.shadowOffsetX = 0;
    ctx.shadowOffsetY = -3;
    ctx.fill();
  });
// --></script>

</body>
</html>