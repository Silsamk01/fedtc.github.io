<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="https://i.ibb.co/YWzxL1h/IMG-0683.jpg" type="image/x-icon">
    <link rel="stylesheet" href="membership.css">
    <title>FEDTC Membership Form</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-white">
		<div class="container-fluid">
			<img class="logo" src="https://i.ibb.co/YWzxL1h/IMG-0683.jpg" alt="" border="0">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
				aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="background-color: black;">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="btn btn-secondary dropdown-toggle" href="about.php" role="button" style="color: #150569;">
							About <span style="color: #FFC857;">Us</span>
						</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#" style="color: #150569;">Our <span
								style="color: #FFC857;">Publications</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="membership.php" style="color: #150569;">Become<span
								style="color: #FFC857;"> a Member</span></a>

					</li>
				</ul>
			</div>
		</div>
	</nav>
	


    <div class="container mt-5">
        <form class="membership-form">
            <h2 class="text-center mb-4">FEDTC Membership Form</h2>

            <!-- Membership Tiers Section -->
            <section class="membership-tiers mb-4">
                <h3>Membership Tiers</h3>
                <div class="mb-3">
                    <label for="membership-tier" class="form-label">Select Membership Tier</label>
                    <select class="form-select" id="membership-tier" name="membership-tier">
                        <option value="standard">Student Member</option>
                    </select>
                </div>
            </section>

            <!-- Personal Information Section -->
            <section class="personal-info mb-4">
                <h3>Personal Information</h3>
                <div class="mb-3">
                    <label for="prefix" class="form-label">Prefix</label>
                    <input type="text" class="form-control" id="prefix" name="prefix">
                </div>
                <div class="mb-3">
                    <label for="first-name" class="form-label">First Name*</label>
                    <input type="text" class="form-control" id="first-name" name="first-name" required>
                </div>
                <div class="mb-3">
                    <label for="middle-name" class="form-label">Middle Name</label>
                    <input type="text" class="form-control" id="middle-name" name="middle-name">
                </div>
                <div class="mb-3">
                    <label for="last-name" class="form-label">Last Name*</label>
                    <input type="text" class="form-control" id="last-name" name="last-name" required>
                </div>
                <div class="mb-3">
                    <label for="suffix" class="form-label">Suffix</label>
                    <input type="text" class="form-control" id="suffix" name="suffix">
                </div>
            </section>

            <!-- Address Section -->
            <section class="address-info mb-4">
                <h3>Address</h3>
                <div class="mb-3">
                    <label for="street" class="form-label">Street*</label>
                    <input type="text" class="form-control" id="street" name="street" required>
                </div>
                <div class="mb-3">
                    <label for="city" class="form-label">City*</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">State/Province</label>
                    <input type="text" class="form-control" id="state" name="state" required>
                   
                </div>
                <div class="mb-3">
                    <label for="postal-code" class="form-label">Postal Code*</label>
                    <input type="text" class="form-control" id="postal-code" name="postal-code" required>
                </div>
                <div class="mb-3">
    <label for="country" class="form-label">Country/Region*</label>
    <select class="form-select" id="country" name="country" required>
        <option value="">-Select-</option>
        <option value="afghanistan">Afghanistan</option>
        <option value="albania">Albania</option>
        <option value="algeria">Algeria</option>
        <option value="andorra">Andorra</option>
        <option value="angola">Angola</option>
        <option value="antigua_and_barbuda">Antigua and Barbuda</option>
        <option value="argentina">Argentina</option>
        <option value="armenia">Armenia</option>
        <option value="australia">Australia</option>
        <option value="austria">Austria</option>
        <option value="azerbaijan">Azerbaijan</option>
        <option value="bahamas">Bahamas</option>
        <option value="bahrain">Bahrain</option>
        <option value="bangladesh">Bangladesh</option>
        <option value="barbados">Barbados</option>
        <option value="belarus">Belarus</option>
        <option value="belgium">Belgium</option>
        <option value="belize">Belize</option>
        <option value="benin">Benin</option>
        <option value="bhutan">Bhutan</option>
        <option value="bolivia">Bolivia</option>
        <option value="bosnia_and_herzegovina">Bosnia and Herzegovina</option>
        <option value="botswana">Botswana</option>
        <option value="brazil">Brazil</option>
        <option value="brunei">Brunei</option>
        <option value="bulgaria">Bulgaria</option>
        <option value="burkina_faso">Burkina Faso</option>
        <option value="burundi">Burundi</option>
        <option value="cabo_verde">Cabo Verde</option>
        <option value="cambodia">Cambodia</option>
        <option value="cameroon">Cameroon</option>
        <option value="canada">Canada</option>
        <option value="central_african_republic">Central African Republic</option>
        <option value="chad">Chad</option>
        <option value="chile">Chile</option>
        <option value="china">China</option>
        <option value="colombia">Colombia</option>
        <option value="comoros">Comoros</option>
        <option value="congo">Congo</option>
        <option value="costa_rica">Costa Rica</option>
        <option value="croatia">Croatia</option>
        <option value="cuba">Cuba</option>
        <option value="cyprus">Cyprus</option>
        <option value="czechia">Czechia</option>
        <option value="denmark">Denmark</option>
        <option value="djibouti">Djibouti</option>
        <option value="dominica">Dominica</option>
        <option value="dominican_republic">Dominican Republic</option>
        <option value="ecuador">Ecuador</option>
        <option value="egypt">Egypt</option>
        <option value="el_salvador">El Salvador</option>
        <option value="equatorial_guinea">Equatorial Guinea</option>
        <option value="eritrea">Eritrea</option>
        <option value="estonia">Estonia</option>
        <option value="eswatini">Eswatini</option>
        <option value="ethiopia">Ethiopia</option>
        <option value="fiji">Fiji</option>
        <option value="finland">Finland</option>
        <option value="france">France</option>
        <option value="gabon">Gabon</option>
        <option value="gambia">Gambia</option>
        <option value="georgia">Georgia</option>
        <option value="germany">Germany</option>
        <option value="ghana">Ghana</option>
        <option value="greece">Greece</option>
        <option value="grenada">Grenada</option>
        <option value="guatemala">Guatemala</option>
        <option value="guinea">Guinea</option>
        <option value="guinea_bissau">Guinea-Bissau</option>
        <option value="guyana">Guyana</option>
        <option value="haiti">Haiti</option>
        <option value="honduras">Honduras</option>
        <option value="hungary">Hungary</option>
        <option value="iceland">Iceland</option>
        <option value="india">India</option>
        <option value="indonesia">Indonesia</option>
        <option value="iran">Iran</option>
        <option value="iraq">Iraq</option>
        <option value="ireland">Ireland</option>
        <option value="israel">Israel</option>
        <option value="italy">Italy</option>
        <option value="jamaica">Jamaica</option>
        <option value="japan">Japan</option>
        <option value="jordan">Jordan</option>
        <option value="kazakhstan">Kazakhstan</option>
        <option value="kenya">Kenya</option>
        <option value="kiribati">Kiribati</option>
        <option value="korea_north">Korea (North)</option>
        <option value="korea_south">Korea (South)</option>
        <option value="kuwait">Kuwait</option>
        <option value="kyrgyzstan">Kyrgyzstan</option>
        <option value="laos">Laos</option>
        <option value="latvia">Latvia</option>
        <option value="lebanon">Lebanon</option>
        <option value="lesotho">Lesotho</option>
        <option value="liberia">Liberia</option>
        <option value="libya">Libya</option>
        <option value="liechtenstein">Liechtenstein</option>
        <option value="lithuania">Lithuania</option>
        <option value="luxembourg">Luxembourg</option>
        <option value="madagascar">Madagascar</option>
        <option value="malawi">Malawi</option>
        <option value="malaysia">Malaysia</option>
        <option value="maldives">Maldives</option>
        <option value="mali">Mali</option>
        <option value="malta">Malta</option>
        <option value="marshall_islands">Marshall Islands</option>
        <option value="mauritania">Mauritania</option>
        <option value="mauritius">Mauritius</option>
        <option value="mexico">Mexico</option>
        <option value="micronesia">Micronesia</option>
        <option value="moldova">Moldova</option>
        <option value="monaco">Monaco</option>
        <option value="mongolia">Mongolia</option>
        <option value="montenegro">Montenegro</option>
        <option value="morocco">Morocco</option>
        <option value="mozambique">Mozambique</option>
        <option value="myanmar">Myanmar</option>
        <option value="namibia">Namibia</option>
        <option value="nauru">Nauru</option>
        <option value="nepal">Nepal</option>
        <option value="netherlands">Netherlands</option>
        <option value="new_zealand">New Zealand</option>
        <option value="nicaragua">Nicaragua</option>
        <option value="niger">Niger</option>
        <option value="nigeria">Nigeria</option>
        <option value="north_macedonia">North Macedonia</option>
        <option value="norway">Norway</option>
        <option value="oman">Oman</option>
        <option value="pakistan">Pakistan</option>
        <option value="palau">Palau</option>
        <option value="palestine">Palestine</option>
        <option value="panama">Panama</option>
        <option value="papua_new_guinea">Papua New Guinea</option>
        <option value="paraguay">Paraguay</option>
        <option value="peru">Peru</option>
        <option value="philippines">Philippines</option>
        <option value="poland">Poland</option>
        <option value="portugal">Portugal</option>
        <option value="qatar">Qatar</option>
        <option value="romania">Romania</option>
        <option value="russia">Russia</option>
        <option value="rwanda">Rwanda</option>
        <option value="saint_kitts_and_nevis">Saint Kitts and Nevis</option>
        <option value="saint_lucia">Saint Lucia</option>
        <option value="saint_vincent_and_the_grenadines">Saint Vincent and the Grenadines</option>
        <option value="samoa">Samoa</option>
        <option value="san_marino">San Marino</option>
        <option value="sao_tome_and_principe">Sao Tome and Principe</option>
        <option value="saudi_arabia">Saudi Arabia</option>
        <option value="senegal">Senegal</option>
        <option value="serbia">Serbia</option>
        <option value="seychelles">Seychelles</option>
        <option value="sierra_leone">Sierra Leone</option>
        <option value="singapore">Singapore</option>
        <option value="slovakia">Slovakia</option>
        <option value="slovenia">Slovenia</option>
        <option value="solomon_islands">Solomon Islands</option>
        <option value="somalia">Somalia</option>
        <option value="south_africa">South Africa</option>
        <option value="south_sudan">South Sudan</option>
        <option value="spain">Spain</option>
        <option value="sri_lanka">Sri Lanka</option>
        <option value="sudan">Sudan</option>
        <option value="suriname">Suriname</option>
        <option value="sweden">Sweden</option>
        <option value="switzerland">Switzerland</option>
        <option value="syria">Syria</option>
        <option value="taiwan">Taiwan</option>
        <option value="tajikistan">Tajikistan</option>
        <option value="tanzania">Tanzania</option>
        <option value="thailand">Thailand</option>
        <option value="timor_leste">Timor-Leste</option>
        <option value="togo">Togo</option>
        <option value="tonga">Tonga</option>
        <option value="trinidad_and_tobago">Trinidad and Tobago</option>
        <option value="tunisia">Tunisia</option>
        <option value="turkey">Turkey</option>
        <option value="turkmenistan">Turkmenistan</option>
        <option value="tuvalu">Tuvalu</option>
        <option value="uganda">Uganda</option>
        <option value="ukraine">Ukraine</option>
        <option value="united_arab_emirates">United Arab Emirates</option>
        <option value="united_kingdom">United Kingdom</option>
        <option value="united_states">United States</option>
        <option value="uruguay">Uruguay</option>
        <option value="uzbekistan">Uzbekistan</option>
        <option value="vanuatu">Vanuatu</option>
        <option value="vatican_city">Vatican City</option>
        <option value="venezuela">Venezuela</option>
        <option value="vietnam">Vietnam</option>
        <option value="yemen">Yemen</option>
        <option value="zambia">Zambia</option>
        <option value="zimbabwe">Zimbabwe</option>
    </select>
</div>

                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="release-info" name="release-info">
                    <label class="form-check-label" for="release-info">Please do not release my postal address to third parties.</label>
                </div>
            </section>

            <!-- Contact Information Section -->
            <section class="contact-info mb-4">
                <h3>Contact Information</h3>
                <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control" id="phone" name="phone">
                </div>
                <div class="mb-3">
                    <label for="fax" class="form-label">Fax</label>
                    <input type="tel" class="form-control" id="fax" name="fax">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address*</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="acm-announcements" name="acm-announcements">
                    <label class="form-check-label" for="acm-announcements">Yes, please send me FEDTC Announcements via email</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="acm-announcements-no" name="acm-announcements-no">
                    <label class="form-check-label" for="acm-announcements-no">No, please do not send me FEDTC Announcements via email</label>
                </div>
            </section>

            <!-- Student Member Profile Section -->
            <section class="student-profile mb-4">
                <h3>Student Member Profile</h3>
                <div class="mb-3">
                    <label for="school-name" class="form-label">Name of School*</label>
                    <input type="text" class="form-control" id="school-name" name="school-name" required>
                </div>
               
                <div class="mb-3">
    <label for="graduation-month" class="form-label">Expected Month of Graduation*</label>
    <select class="form-select" id="graduation-month" name="graduation-month" required>
        <option value="">-Select-</option>
        <option value="january">January</option>
        <option value="february">February</option>
        <option value="march">March</option>
        <option value="april">April</option>
        <option value="may">May</option>
        <option value="june">June</option>
        <option value="july">July</option>
        <option value="august">August</option>
        <option value="september">September</option>
        <option value="october">October</option>
        <option value="november">November</option>
        <option value="december">December</option>
    </select>
</div>
                <div class="mb-3">
                    <label for="graduation-year" class="form-label">Expected Year of Graduation*</label>
                    <input type="text" class="form-control" id="graduation-year" name="graduation-year" required>
                   
                </div>
                <div class="mb-3">
    <label for="degree-area" class="form-label">My degree will be in the following area:*</label>
    <select class="form-select" id="degree-area" name="degree-area" required>
        <option value="">-Select-</option>
        <option value="computer-science">Computer Science</option>
        <option value="software-engineering">Software Engineering</option>
        <option value="information-technology">Information Technology</option>
        <option value="cyber-security">Cyber Security</option>
        <option value="data-science">Data Science</option>
        <option value="artificial-intelligence">Artificial Intelligence</option>
        <option value="cloud-computing">Cloud Computing</option>
        <option value="network-engineering">Network Engineering</option>
        <option value="game-development">Game Development</option>
        <option value="web-development">Web Development</option>
        <option value="blockchain-technology">Blockchain Technology</option>
        <option value="mobile-app-development">Mobile App Development</option>
        <option value="devops">DevOps</option>
    </select>
</div>

                <div class="mb-3">
                    <label for="degree-type" class="form-label">Expected Degree [or equivalent]*</label>
                    <select class="form-select" id="degree-type" name="degree-type" required>
                        <option value="select">-Select-</option>
                        <option value="bachelor">Bachelor's</option>
                        <option value="master">Master's</option>
                    </select>
                </div>
            </section>

            <!-- Demographic Questionnaire Section -->
            <section class="demographic-survey mb-4">
                <h3>Demographic Questionnaire</h3>

                <h5>Gender</h5>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="gender-woman" name="gender" value="woman">
                    <label class="form-check-label" for="gender-woman">Woman</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="gender-man" name="gender" value="man">
                    <label class="form-check-label" for="gender-man">Man</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="gender-non-binary" name="gender" value="non-binary">
                    <label class="form-check-label" for="gender-non-binary">Non-binary or gender diverse</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="gender-prefer-not" name="gender" value="prefer-not">
                    <label class="form-check-label" for="gender-prefer-not">Prefer not to disclose</label>
                </div>

                <h5>Year of Birth</h5>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dob-2001" name="dob" value="2001-or-later">
                    <label class="form-check-label" for="dob-2001">2001 or later</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dob-1981-2000" name="dob" value="1981-2000">
                    <label class="form-check-label" for="dob-1981-2000">1981 - 2000</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dob-1965-1980" name="dob" value="1965-1980">
                    <label class="form-check-label" for="dob-1965-1980">1965 - 1980</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dob-1946-1964" name="dob" value="1946-1964">
                    <label class="form-check-label" for="dob-1946-1964">1946 - 1964</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="dob-1945-or-earlier" name="dob" value="1945-or-earlier">
                    <label class="form-check-label" for="dob-1945-or-earlier">1945 or earlier</label>
                </div>

                <h5>Region</h5>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-western-europe" name="region" value="western-europe">
    <label class="form-check-label" for="region-western-europe">Western Europe</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-pacific" name="region" value="pacific-oceania">
    <label class="form-check-label" for="region-pacific">Pacific/Oceania</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-eastern-europe" name="region" value="eastern-europe">
    <label class="form-check-label" for="region-eastern-europe">Eastern Europe</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-north-america" name="region" value="north-america">
    <label class="form-check-label" for="region-north-america">North America</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-south-america" name="region" value="south-america">
    <label class="form-check-label" for="region-south-america">South America</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-sub-saharan-africa" name="region" value="sub-saharan-africa">
    <label class="form-check-label" for="region-sub-saharan-africa">Sub-Saharan Africa</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-north-africa-middle-east" name="region" value="north-africa-middle-east">
    <label class="form-check-label" for="region-north-africa-middle-east">North Africa/Middle East</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-central-asia" name="region" value="central-asia">
    <label class="form-check-label" for="region-central-asia">Central Asia</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-south-asia" name="region" value="south-asia">
    <label class="form-check-label" for="region-south-asia">South Asia</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-east-asia" name="region" value="east-asia">
    <label class="form-check-label" for="region-east-asia">East Asia</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-southeast-asia" name="region" value="southeast-asia">
    <label class="form-check-label" for="region-southeast-asia">Southeast Asia</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-arctic" name="region" value="arctic">
    <label class="form-check-label" for="region-arctic">Arctic</label>
</div>
<div class="form-check">
    <input type="checkbox" class="form-check-input" id="region-antarctica" name="region" value="antarctica">
    <label class="form-check-label" for="region-antarctica">Antarctica</label>
</div>


                <!-- Continue with other regions and race/ethnicity questions in similar format -->
                
            </section>

            <!-- Submit Button -->
            <div class="text-center">
            <button type="button" class="btn btn-primary btn-lg">Submit</button>
            </div>
        </form>
    </div>
    <br>
    <footer>
    <p>&copy; 2024 Federation of Data and Technology Council</p>
  </footer>

    <!-- Link to Bootstrap JS and Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
