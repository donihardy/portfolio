<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--developed by doni hardy - 2012-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>MTF Calculator</title>
    <script type="text/javascript" src="js/mtf.js"></script>
    <link href="css/mtf.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="wrap">
        <form action="" id="mtfform" onsubmit="return false;">
        <div>
            <div class="cont_order">
               <fieldset>
                <legend>Select your Program</legend>
            
					<br/>
                <label >Program</label>
                <select id="program" name='program' onchange="calculateTotal()">
				<option value="Select">Select</option>
				<option value="Accounting, AAS">Accounting, AAS (67 credit hours), FA eligible (AACT)</option> 
                <option value="Accounting, Cert">Accounting, Cert (55 credit hours), FA eligible (AACT)</option>
				<option value="Advanced Systems Technology, AAS">Advanced Systems Technology, AAS (74 credit hours), FA eligible (ADSYST)</option>
				<option value="Advanced Systems Technology, AAS">Advanced Systems Technology, AAS - Concentration  (2002) Automation and Communication (74 credit hours), FA eligible (ADSYST)</option>
				<option value="Advanced Systems Technology, AAS">Advanced Systems Technology, AAS - Concentration (2003) Microsystems and Laser Optics (74 credit hours), FA eligible (ADSYST)</option>
				<option value="ATL - Elementary Education Cert">ATL - Elementary Education Cert (21 credit hours), FA eligible (ATLELEM) **</option> 
				<option value="ATL - Early Childhood Muliticultural Education Cert">ATL - Early Childhood Muliticultural Education Cert (21 credit hours), FA eligible (ATLECME) **</option> 
				<option value="ATL - Secondary Education Cert">ATL - Secondary Education Cert (18 credit hours), FA eligible (ATLSECE) **</option> 	
				<option value="ATL - Special Education Cert">ATL - Special Education Cert (21 credit hours), FA eligible (ATLSPED) **</option> 
				<option value="Anthropology, AA">Anthropology, AA (65 credit hours), FA eligible (ANTHRO)</option>
				<option value="Apprenticeships">Apprecenticeships</options>	
				<option value="Commercial Carpentry Apprenticeship"> -- Commerical Carpentry Apprenticeship, FA ineligible</option>
				<option value="Electrical Trades Apprenticeship"> -- Electrical Trades Apprenticeship, FA ineligible</option>
				<option value="General Trades Apprenticeship"> -- General Trades Apprenticeship, FA ineligible</option>
				<option value="Industrial Plant Maintenance Apprenticeship"> -- Industrial Plant Maintenance Apprenticeship, FA ineligible</option>
				<option value="Iron Worker Apprenticeship"> -- Iron Worker Apprenticeship, FA ineligible</option>
				<option value="Plumbing Apprenticeship"> -- Plumbing Apprenticeship, FA ineligible</option>
				<option value="Sheet Metal Apprenticeship"> -- Sheet Metal Apprenticeship, FA ineligible</option>
				<option value="Architectural/Engineering Drafting Technology, AAS">Architectural/Engineering Drafting Technology, AAS (73 credit hours),FA eligible (ARDR)</option>
				<option value="Architectural/Engineering Drafting Technology, Cert">Architectural/Engineering Drafting Technology, Cert (39 credit hours),FA eligible (ARDR)</option>
				<option value="Architectural Woodworking, Cert of Completion">Architectural Woodworking, Cert of Completion (17 credit hours), FA ineligible (AWW)</option>
				<option value="Automotive Service Fundamentals, Cert">Automotive Service Fundamentals, Cert (16 credit hours), FA eligible (AUTO_SF)</option>
				<option value="Automotive Technology, Cert">Automotive Technology, Cert (44 credit hours), FA eligible (AUTC)</option>	
				<option value="Airframe Maintenance Technician, Cert">Airframe Maintenance Technician, Cert (58 credit hours), FA eligible (AMTECH)</option>
				<option value="Aviation Maintenance Technology, AAS">Aviation Maintenance Technology, AAS (105 credit hours), FA eligible (AMTECH)</option>
				<option value="Baking, Cert of Completion">Baking, Cert of Completion (27 credit), FA eligible (BKNG)</option>
				<option value="Biology, AS">Biology, AS (73 credit hours),FA eligible (BIOLOGY)</option>
				<option value="Biotechnology, AAS">Biotechnology, AAS (63 credit hours), FA eligible (BIOT) + **</option>
				<option value="Biotechnology, Cert of Completion">Biotechnology, Cert of Completion (36 credit hours), FA eligible (BIOT) + **</option>
				<option value="Bookkeeping, Cert">Bookkeeping, Cert (37 credit hours), FA eligible (BKKPG)</option>
				<option value="Business, AA">Business, AA (66 credit hours),FA eligible (BUSINESS)</option>
				<option value="Business Administration, AAS"> Business Administration (65 credit hours), FA eligible (BA)</option>
				<option value="Business Administration, AAS"> -- Concentration (5111) Entrepreneurship (65 credit hours), FA eligible (BA)</option>
				<option value="Business Administration, AAS"> -- Concentration (5110) Management (65 credit hours), FA eligible (BA)</option>
				<option value="Business Administration, AAS"> -- Concentration (5116) Marketing (65 credit hours), FA eligible (BA)</option>
				<option value="Business Administration, AAS"> -- Concentration (5118) Project Management (65 credit hours), FA eligible (BA)</option>
				<option value="Business Administration, AAS"> -- Concentration (5107) Real Estate (65 credit hours), FA eligible (BA)</option>
				<option value="Business Adminstration, Cert of Completion">Business Adminstration, Cert of Completion (39 credit hours), FA eligible (BA)</option>
				<option value="Carpentry, Cert of Completion">Carpentry, Cert of Completion (27 credit hours), FA eligible (CARP)</option>
				<option value="Certified Public Accountant (CPA) Prep, Cert">Certified Public Accountant Prep, Cert (33 credit hours), FA eligible (CPA) *</option>
				<option value="Chemistry, AS">Chemistry, AS (65 credit hours), FA eligible (CHEM)</option>
				<option value="Child Development, Cert of Achievement">Child Development, Cert of Achievement (11 credit hours), FA ineligible (CD)</option>
				<option value="Child, Youth and Family Development, AA">Child, Youth and Family Development, AA (62 credit hours), FA eligible (CYFD)</option>
				<option value="Child, Youth and Family Development, AA"> -- Concentration (4201) Family Studies (62 credit hours), FA eligible (CYFD)</option>
				<option value="Child, Youth and Family Development, AA"> -- Concentration  (4204) Social Work (62 credit hours), FA eligible (CYFD)</option>
				<option value="Class B CDL, Cert of Achievement">Class B CDL, Cert of Achievement (10 credit hours),FA ineligible (CDL)</option>
				<option value="Clinical Laboratory Assistant, Cert of Completion">Clinical Laboratory Assistant, Cert of Completion (9 credit hours),FA ineligible (CLA)</option>
				<option value="Commercial, Industrial HVAC & Building Performance, Cert of Completion">Commercial, Industrial HVAC & Building Performance, Cert of Completion (58 credit hours),FA eligible (CIHVAC)</option>
				<option value="Communication, AA">Communication, AA (65 credit hours), FA eligible (COMM)</option>
				<option value="Computer Information Systems, AAS">Computer Information Systems, AAS (64 credit hours), FA eligible (CIS)</option>
				<option value="Computer Information Systems, AAS"> -- Concentration (5141) Computer Programming (64 credit hours), FA eligible (CIS)</option>
				<option value="Computer Information Systems, AAS"> -- Concentration (5142) Database Technology (64 credit hours), FA eligible (CIS)</option>
				<option value="Computer Information Systems, AAS"> -- Concentration (5136) Digital Media (64 credit hours), FA eligible (CIS)</option>
				<option value="Computer Information Systems, AAS"> -- Concentration (5137) Network Administration (64 credit hours), FA eligible (CIS)</option>
				<option value="Computer Information Systems, AAS"> -- Concentration (5138) Software Systems and Application (64 credit hours), FA eligible (CIS)</option>
				<option value="Computer Information Systems, AAS"> -- Concentration (5139) Systems Administration (64 credit hours), FA eligible (CIS)</option>
				<option value="Computer Information Systems, AAS"> -- Concentration (5143) Web Technology (64 credit hours), FA eligible (CIS)</option>
				<option value="Computer Information Systems, Cert of Completion">-- Computer Information Systems, Cert of Completion (40 credit hours), FA eligible (CIS)</option>
				<option value="Construction Estimating and Scheduling, Cert of Completion">Construction Estimating and Scheduling, Cert of Completion (30 credit hours), FA eligible (CES)</option>
				<option value="Construction Management Technology, AAS">Construction Management Technology, AAS (71 credit hours), FA eligible (CMT)</option>
				<option value="Construction Technology, AAS">Construction Technology, AAS (64 credit hours), FA eligible (CT)</option>
				<option value="Construction Technology, AAS"> -- Concentration (1288) Electrical (64 credit hours), FA eligible (CT)</option>
				<option value="Construction Technology, AAS"> -- Concentration (1287) General Construction (64 credit hours), FA eligible (CT)</option>
				<option value="Construction Technology, AAS"> -- Concentration (1286) Electrical Photovoltaic Installation (64 credit hours), FA eligible (CT)</option>
				<option value="Cosmetology, AAS">Cosmetology, AAS (73 credit hours), FA eligible (COS)</option>
				<option value="Criminal Justice, AAS">Criminal Justice, AAS (67 credit hours), FA eligible (CJ)</option>
				<option value="Criminology, AA">Criminology, AA (64 credit hours), FA eligible (CRIM)</option>
				<option value="Culinary Arts, AAS">Culinary Arts, AAS (63 credit hours), FA eligible (CULARTS)</option>
				<option value="Culinary Arts, AAS"> -- Concentration (1401) Advanced Baking and Pastry (63 credit hours), FA eligible (CULARTS)</option>
				<option value="Culinary Arts, AAS"> -- Concentration (1402) Culinary Arts (63 credit hours), FA eligible (CULARTS)</option>
				<option value="Culinary Fundamentals, Cert of Completion">Culinary Fundamentals, Cert of Completion (25 credit hours), FA eligible (CUL_FND)</option>
				<option value="Dental Assistant, Cert of Completion">Dental Assistant, Cert of Completion (46 credit hours), FA eligible (adjusted) (DA) + **</option>
				<option value="Diagnostic Medical Sonography, AAS">Diagnostic Medical Sonography, AAS (70 credit hours), FA eligible (DMS) + **</option>
				<option value="Diesel Equipment Technology, Cert of Completion">Diesel Equipment Technology, Cert of Completion (44 credit hours), FA eligible (DETC)</option>
				<option value="Dietary Manager, Cert of Completion">Dietary Manager, Cert of Completion (26 credit hours), FA eligible (DIETMGR)</option>
				<option value="Early Childhood Multicultural Education, AA">Early Childhood Multicultural Education, AA (64 credit hours), FA eligible (ECME)</option>
				<option value="Early Childhood Multicultural Education, AA"> -- Concentration (3551) Birth-3rd Teach (64 credit hours), FA eligible (ECME)</option>
				<option value="Early Childhood Multicultural Education, AA"> -- Concentration (3552) Early Childhood Program Administration (64 credit hours), FA eligible (ECME)</option>
				<option value="Early Childhood Multicultural Education, AA"> -- Concentration (3553) Family, Infant and Toddler	 (64 credit hours), FA eligible (ECME)</option>
				<option value="Electrical Trades, Cert of Completion">Electrical Trades, Cert of Completion (39 credit hours), FA eligible (ELTR)</option>
				<option value="Emergency Medical Services - Intermediate, Cert of Achievement">Emergency Medical Services - Intermediate, Cert of Achievement (7 credit hours), FA ineligible (EMT_INT)</option>
				<option value="Emergency Medical Services - Paramedic, AAS">Emergency Medical Services - Paramedic, AAS (61 credit hours), FA eligible (EMS) + **</option>
				<option value="Engineering, AS">Engineering, AS (74 credit hours), FA eligible (ENGR)</option>
				<option value="English, AA">English, AA (65 credit hours), FA eligible (ENGLISH)</option>
				<option value="Film Crew Technician, Cert of Completion">Film Crew Technician, Cert of Completion (28 credit hours),FA eligible (adjusted) (FMTECH)</option>	
				<option value="Fine Arts, AA">Fine Arts, AA (68 credit hours),FA eligible (FA)</option>
				<option value="Fine Arts, AA"> -- Concentration (3103) Art History (68 credit hours),FA eligible (FA)</option>
				<option value="Fine Arts, AA"> -- Concentration (3102) Art Studio (68 credit hours),FA eligible (FA)</option>
				<option value="Fire Science, AAS">Fire Science, AAS (64 credit hours),FA eligible (FS)</option>
				<option value="Fire Science, AAS"> -- Concentration (3103) Art History (64 credit hours),FA eligible (FS)</option>
				<option value="Fire Science, AAS">Fire Science, AAS (64 credit hours),FA eligible (FS)</option>
				<option value="Fire Science, AAS"> -- Concentration (1461) Structural Firefighting(64 credit hours),FA eligible (FS)</option>
				<option value="Fire Science, AAS"> -- Concentration (1462) Wildland Firefighting (64 credit hours),FA eligible (FS)</option>
				<option value="Fire Science, AAS"> -- Concentration (1463) Emergengy Medical Service (64 credit hours),FA eligible (FS)</option>
				<option value="Fitness Technician, Cert of Completion">Fitness Technician, Cert of Completion (28 credit hours),FA eligible (adjusted) (FITT)</option>
				<option value="Food Service Management, Cert of Completion">Food Service Management, Cert of Completion (27 credit hours),FA eligible (FSMG)</option>
				<option value="General Business, Cert of Completion">General Business, Cert of Completion (18 credit hours), FA eligible (GENBUS)</option>	
				<option value="Geographic Information Technology, AAS">Geographic Information Technology, AAS (66 credit hours),FA eligible (GEOG)</option>
				<option value="Geographic Information Systems, Cert Only"> -- Concentration (2176) Geographic Information Systems, Cert Only (15 credit hours),FA ineligible (GEOG)</option>
				<option value="Geographic Information Technology, Surveying Cert Only"> -- Concentration (2177) Surveying - Cert Only ( 37 credit hours),FA eligib
				<option value="Health Information Technology, AAS">Health Information Technology, AAS (69 credit hours),FA eligible (HIT) + **</option>
				<option value="Heating, Ventilating, Air Conditioning and Refrigeration, AAS">Heating, Ventilating, Air Conditioning and Refrigeration, AAS (72 credit hours),FA eligible) (HVACTECH)</option>
				<option value="History, AA">History, AA (65 credit hours),FA eligible (HISTORY)</option>
				<option value="Hospitality and Tourism, AA">Hospitality and Tourism, AA (73 credit hours),FA eligible (HSTR)</option>
				<option value="Hospitality and Tourism, Cert of Completion">Hospitality and Tourism, Cert of Completion (30 credit hours),FA eligible (HSTR)</option>	
				<option value="Integrated Studies, AAS">Integrated Studies, AAS (62 credit hours),FA eligible (INTEGST)</option>
				<option value="Landscape Construction Crew Leadership, Cert of Completion">Landscape Construction Crew Leadership, Cert of Completion (26 credit hours),FA ineligible (LAND_CC)</option>
				<option value="Landscape Maintenance Crew Leadership, Cert of Completion">Landscape Maintenance Crew Leadership, Cert of Completion (31 credit hours),FA ineligible (LAND_MC)</option>
				<option value="Liberal Arts, AA">Liberal Arts, AA (65 credit hours),FA eligible(LIBARTS)</option>
				<option value="Machine Tool Technology, Cert of Completion">Machine Tool Technology, Cert of Completion (36 credit hours),FA eligible (MATT)</option>
				<option value="Medical Laboratory Technician, AAS">Medical Laboratory Technician, AAS (70 credit hours),FA eligible (MLT) + **</option>
				<option value="Medical Office Assistant, Certificiate of Completion">Medical Office Assistant, Certificiate of Completion (30 credit hours),FA eligible (MEDOFF)</option>			
				<option value="Medical Office Transcription, Cert of Completion">Medical Office Transcription, Cert of Completion (18 credit hours),FA eligible (MOF)</option>	
				<option value="Metals Technology, AAS">Metals Technology, AAS (62 credit hours),FA eligible (METALS)</option>
				<option value="Metals Technology, AAS"> -- Concentration (1611) Machine Tool Technology(62 credit hours),FA eligible (METALS)</option>
				<option value="Metals Technology, AAS"> -- Concentration (1612) Welding(62 credit hours),FA eligible (METALS)</option>
				<option value="Nursing, AAS">Nursing, AAS (72 credit hours),FA eligible (NURS) + **</option>	
				<option value="Nursing Assistant, Cert of Achievement">Nursing Assistant, Cert of Achievement (7 credit hours),FA ineligible (NA) *</option>
				<option value="Nursing Assistant/Unit Coordinator, Cert of Achievement">Nursing Assistant/Unit Coordinator, Cert of Achievement (13 credit hours),FA ineligible (NAUC)</option>	
				<option value="Nurse Refresher">Nurse Refresher (9 credit hours),FA ineligible (NR) *</option>
				<option value="Nutrition, AS">Nutrition, AS (65 credit hours),FA eligible (NUTR)</option>		
				<option value="Office Assistant, Cert of Completion">Office Assistant, Cert of Completion (29 credit hours),FA eligible (OFFASST)</option>
				<option value="Office Technology, AAS">	Office Technology, AAS (69 credit hours),FA eligible (OFFTECH)</option>	
				<option value="Office Technology, Cert of Completion">Office Technology, Cert of Completion (44 credit hours),FA eligible (OFFTECH)</option>	
				<option value="Paralegal Studies, AAS">Paralegal Studies, AAS (62 credit hours),FA eligible (PARALEG)</option>	
				<option value="Payroll Clerk, Cert of Completion">Payroll Clerk, Cert of Completion (21 credit hours), FA eligible (PC)</option>
				<option value="Pharmacy Technician, Cert of Completion">Pharmacy Technician, Cert of Completion (31 credit hours),FA eligible (adjusted) (PHARMT)</option>
				<option value="Phlebotomy Technician, Cert of Achievement">Phlebotomy Technician, Cert of Achievement (9 credit hours),FA ineligible (PHLB)</option>
				<option value="Photovoltaic Installation, Cert of Completion">Photovoltaic Installation, Cert of Completion (68 credit hours), FA eligible (adjusted) (PHINST)</option>
				<option value="Physics, AS">Physics, AS (65 credit hours),FA eligible (PHYSICS)</option>
				<option value="Plumbing and Gas Fitting, AAS">Plumbing and Gas Fitting, AAS (70 credit hours),FA eligible (PLMB_GF)</option>
				<option value="Plumbing and Gas Fitting, Cert of Completion">Plumbing and Gas Fitting, Cert of Completion (37 credit hours),FA eligible (PLMB_GF)</option>
				<option value="Political Science, Associate of Arts">Political Science, Associate of Arts (65 credit hours),FA eligible (PSCI)</option>
				<option value="Manufacturing Technology, Post Degree Cert of Completion">Manufacturing Technology, Post Degree Cert of Completion (28 credit hours),FA eligible (PDMFG) *</option>
				<option value="Paralegal Studies, Post Degree Cert of Completion">Paralegal Studies, Post Degree Cert of Completion (32 credit hours),FA eligible (PDPL) *</option>
				<option value="Photonics Technology, Post Degree Cert of Completion">Photonics Technology, Post Degree Cert of Completion (35 credit hours),FA eligible (PDPT) *</option>
				<option value="Post Production Technician, Cert of Completion">Post Production Technician, Cert of Completion (31 credit hours),FA eligible (adjusted) (PPTECH)</option>
				<option value="Powerplant Maintenance Technician, Cert">Powerplant Maintenance Technician, Cert (62 credit hours), FA eligible (PMT)</option>
				<option value="Practical Nursing, Cert of Completion">Practical Nursing, Cert of Completion (48 credit hours),FA eligible (adjusted) (PNURS) + **</option>
				<option value="Pre-Health Sciences">Pre-Health Sciences, AA (67 credit hours), FA eligible (PHLTHSCI)</option>
				<option value="Pre-Health Sciences"> -- Pre-Health General Health Sciences - Transfer (67 credit hours), FA eligible (PHLTHSCI - 7521)</option>
				<option value="Pre-Health Sciences"> -- Pre-Biotechnology (67 credit hours),FA eligible (PHLTHSCI - 7522)</option>
				<option value="Pre-Health Sciences"> -- Pre-Dental Assisting (67 credit hours),FA eligible (PHLTHSCI - 7523)</option>
				<option value="Pre-Health Sciences"> -- Pre-Dental Hygiene Transfer (67 credit hours),FA eligible (PHLTHSCI - 7524)</option>
				<option value="Pre-Health Sciences"> -- Pre-Diagnostic Medical Sonography (67 credit hours),FA eligible (PHLTHSCI - 7525)</option>
				<option value="Pre-Health Sciences"> -- Pre-Emergency Medical Services Transfer (67 credit hours), FA eligible (PHLTHSCI - 7526)</option>
				<option value="Pre-Health Sciences"> -- Pre-Exercise Science Transfer (67 credit hours),FA eligible (PHLTHSCI - 7527)</option>
				<option value="Pre-Health Sciences"> -- Pre-Health Education Transfer - Community Health (67 credit hours),FA eligible (PHLTHSCI - 7528)</option>
				<option value="Pre-Health Sciences"> -- Pre-Health Education Transfer - School Health (67 credit hours),FA eligible (PHLTHSCI - 7529)</option>
				<option value="Pre-Health Sciences"> -- Pre-Medical Laboratory Sciences Transfer (67 credit hours),FA eligible (PHLTHSCI - 7531)</option>
				<option value="Pre-Health Sciences"> -- Pre-Medical Laboratory Technician (67 credit hours),FA eligible (PHLTHSCI - 7532)</option>
				<option value="Pre-Health Sciences"> -- Pre-Nursing (67 credit hours),FA eligible (PHLTHSCI - 7533)</option>
				<option value="Pre-Health Sciences"> -- Pre-Nursing Transfer (67 credit hours),FA eligible (PHLTHSCI - 7534)</option>
				<option value="Pre-Health Sciences"> -- Pre-Paramedic (67 credit hours),FA eligible (PHLTHSCI - 7535)</option>
				<option value="Pre-Health Sciences"> -- Pre-Pharmacy Transfer (67 credit hours),FA eligible (PHLTHSCI - 7536)</option>
				<option value="Pre-Health Sciences"> -- Pre-Practical Nursing (67 credit hours),FA eligible (PHLTHSCI - 7537)</option>
				<option value="Pre-Health Sciences"> -- Pre-Radiologic Technology (67 credit hours),FA eligible (PHLTHSCI - 7538)</option>
				<option value="Pre-Health Sciences"> -- Pre-Respiratory Therapy (67 credit hours),FA eligible (PHLTHSCI - 7539)</option>
				<option value="Pre-Health Sciences"> -- Pre-Veterinary Technology (67 credit hours),FA eligible (PHLTHSCI - 7540)</option>
				<option value="Project Management, Cert of Completion">Project Management, Cert of Completion (16 credit hours), FA eligible (PM)</option>
				<option value="Psychology, AA">Psychology, AA (65 credit hours),FA eligible (PSYCH)</option>
				<option value="Radiologic Technology, AAS">Radiologic Technology, AAS (79 credit hours),FA eligible (RADT) + **</option>
				<option value="Records Clerk, Cert of Achievement">Records Clerk, Cert of Achievement (15 credit hours),FA ineligible (RC)</option>
				<option value="Residential HVAC, Cert of Completion">Residential HVAC, Cert of Completion (32 credit hours),FA eligible (RHVAC)</option>
				<option value="Residential Wiring, Cert of Completion">Residential Wiring, Cert of Completion (26 credit hours),FA eligible (RESWIR)</option>
				<option value="Respiratory Therapy, AAS">Respiratory Therapy, AAS (69 credit hours),FA eligible (RT) + **</option>
				<option value="Sociology, AA">Sociology, AA (65 credit hours),FA eligible (SOCIOLOGY)</option>
				<option value="Surgical Technology, Cert of Completion">Surgical Technology, Cert of Completion (52 credit hours),FA eligible (adjusted) (SURGT)</option>
				<option value="Surveying Engineering, AS">Surveying Engineering, AS (63 credit hours),FA eligible(SURV_ENGR)</option>
				<option value="Teacher Education, AA">Teacher Education, AA (70 credit hours),FA eligible (TE)</option>
				<option value="Teacher Education, AA"> -- Concentration (3801) Bilingual Elementary Ed (70 credit hours),FA eligible (TE)</option>
				<option value="Teacher Education, AA"> -- Concentration (3802) Career & Technical Ed (70 credit hours),FA eligible (TE)</option>
				<option value="Teacher Education, AA"> -- Concentration (3803) Elemtary Education  (70 credit hours),FA eligible (TE)</option>
				<option value="Teacher Education, AA"> -- Concentration (3804) Secondary Education (70 credit hours),FA eligible (TE)</option>
				<option value="Teacher Education, AA"> -- Concentration (3805) Special Education (70 credit hours),FA eligible (TE)</option>
				<option value="Technology Management and Training, AA">Technology Management and Training, AA (82 credit hours),FA eligible (TMT) *</option>
				<option value="Transportation Technology, AAS">Transportation Technology, AAS (73 credit hours),FA eligible (TRANST)</option>
				<option value="Transportation Technology, AAS"> -- Concentration (1811) Automotive Technology (73 credit hours),FA eligible (TRANST)</option>
				<option value="Transportation Technology, AAS"> -- Concentration (1812) Diesel Equipment Technoloby (73 credit hours),FA eligible (TRANST)</option>				
				<option value="Truck Driving, Cert of Achievement">Truck Driving, Cert of Achievement (13 credit hours),FA ineligible (TRDR)</option>
				<option value="Veterinary Technology, AAS">Veterinary Technology, AAS (74 credit hours),FA eligible (VT) + **</option>
				<option value="Welding, Cert of Completion">Welding, Cert of Completion (39 credit hours),FA eligible (WELD)</option>		
				
				<option style="font-weight:bold; value="Eliminated programs"> ----- Eliminated Programs ----- </option>
					
				<option value="Continuous Quality Improvement, Cert of Acheivement">Continuous Quality Improvement, Cert of Acheivement (6 credit hours), FA ineligible (CQI)</option>
				<option value="Human Resources, Cert of Achievement">Human Resources, Cert of Achievement (15 credit hours), FA ineligible (HR)</option>
				<option value="Woodworking Projects">Woodworking Projects, FA ineligible</option>
				<option value="Computer Assisted Drafting, Cert of Achievement">Computer Assisted Drafting, Cert of Achievement (12 credit hours), FA ineligible (CAD)</option>
				<option value="Framing, Certtificate of Achievement">Framing, Certtificate of Achievement (14 credit hours), FA ineligible (FRAMING)</option>
				<option value="Educational Paraprofessional, Cert of Achievement">Educational Paraprofessional, Cert of Achievement (28 credit hours), FA ineligible (EP)</option>
				<option value="Electronics Technology, AAS">Electronics Technology, AAS (68 credit hours), FA eligible (ET)</option>
				<option value="Electronics Technology, Cert of Completion">Electronics Technology, Cert of Completion (42 credit hours), FA eligible (ET)</option>
				<option value="Elementary Math Education, Cert of Completion">Elementary Math Education, Cert of Completion {24 credit hours), FA ineligible (EMATHED)</option>
				<option value="Emergency Medical Services - Basic, Cert of Achievement">Emergency Medical Services - Basic, Cert of Achievement (8 credit hours), FA ineligible (EMS_BAS)</option>
				<option value="Emergency Medical Services - First Responder, Cert of Achievement">Emergency Medical Services - First Responder, Cert of Achievement (4 credit hours), FA ineligible (EMS_FR)</option>
				<option value="Environmental Safety and Health">Environmental Safety and Health</option>
				<option value="Environmental Safety and Health, AAS">Environmental Safety and Health, AAS (63 credit hours), FA eligible </option>	
				<option value="Hazardous Materials, Cert of Achievement">Hazardous Materials, Cert of Achievement (14 credit hours), FA ineligible</option>
				<option value="Occupational Safety and Health, Cert of Achievement">Occupational Safety and Health, Cert of Achievement (11 credit hours), FA ineligible</option>
				<option value="Water and Wastewater, Cert of Achievement">Water and Wastewater, Cert of Achievement (15 credit hours),FA ineligible</option>
				<option value="Firefighter 1, Cert of Achievement">Firefighter 1, Cert of Achievement (12 credit hours),FA ineligible (FF)</option>
				<option value="Heating, Ventilating, Air Conditionain and Refrigeration (HVAC)">Heating, Ventilating, Air Conditionain and Refrigeration (HVAC)</option>
				<option value="Homeland Security, Cert of Achievement">Homeland Security, Cert of Achievement (9 credit hours),FA ineligible (HOMESEC) *</option>
				<option value="Judicial Studies Fundamentals, Cert of Achievement">Judicial Studies Fundamentals, Cert of Achievement (12 credit hours),FA ineligible (JDF)</option>
				<option value="Judicial Studies, Cert of Completion">Judicial Studies, Cert of Completion (31 credit hours),FA ineligible (JDST)</option>
				<option value="Manufacturing Technology, AAS">Manufacturing Technology, AAS (70 credit hours),FA eligible (MFGT)</option>
				<option value="Nursing (LPN Mobility), AAS">Nursing (LPN Mobility), AAS (72 credit hours),FA eligible</option>
				<option value="Word Processing, Cert of Achievement">Word Processing, Cert of Achievement (15 credit hours),FA ineligible (WP)</option>	
				<option value="Photonics Technology, AAS">Photonics Technology, AAS (77 credit hours),FA eligible (PHOT)</option>
				
			   </select>
				<p></p>
              
                <h4><div id="totalCalc"></div></h4>
				<br><font size="1">AA=Associates of Arts Degree
				<br>AS=Associate of Science Degree 
				<br>AAS=Associate of Applied Sciences Degree
				<br>CERT=Certificate
                <p><font size="1"><i>* Requires CNM academic school approval to enter program.
				<br>** Requires special admission process.
				<br>+ Because entry into this program is limited, new students interested in this program should consider Pre-Health Sciences.</i></font></p>
                </fieldset>
				 
            </div>
		
 
       </form>
	</div>
<div id="signature">© 2012</div>
</body>

</html>
