<html>
<body background="7.jpg">
<body>

<?php
$w=$_POST['todo'];

if ($w=='symptom')
{
?>
<font size=5 color="indigo"><B>SYMPTOMS PAGE</B></FONT><hr><BR><BR>
<font size=4 color="darkred"><B>View the symptoms of---</B></font><br>
<form action="sym1.php" method="post">
Select the cancer you want to view
<select name="cantype">
<option value="">select...</option>
<option value="Acute lymphoblastic leukemia">Acute lymphoblastic leukemia</option>
<option value="Acute myeloid leukemia">Acute myeloid leukemia</option>
<option value="Adrenocortical carcinoma">Adrenocortical carcinoma</option>
<option value="AIDS">AIDS</option>
<option value="AIDS-related lymphoma">AIDS-related lymphoma</option>
<option value="Anal cancer">Anal cancer</option>
<option value="Appendix cancer">Appendix cancer</option>
<option value="Astrocytoma">Astrocytoma</option>
<option value="Basal-cell carcinoma">Basal-cell carcinoma</option>
<option value="Bladder cancer">Bladder cancer</option>
<option value="Bone tumor">Bone tumor</option>
<option value="Brain tumor">Brain tumor</option>
<option value="Brainstem glioma">Brainstem glioma</option>
<option value="Breast cancer">Breast cancer</option>
<option value="Bronchial adenomas">Bronchial adenomas</option>
<option value="Burkitts lymphoma">Burkitts lymphoma</option>
<option value="Carcinoid tumor">Carcinoid tumor</option>
<option value="Carcinoma of unknown primary">Carcinoma of unknown primary</option>
<option value="Central nervous system lymphoma, primary">Central nervous system lymphoma, primary</option>
<option value="Cerebellar astrocytoma">Cerebellar astrocytoma</option>
<option value="Cervical cancer">Cervical cancer</option>
<option value="Cholangiocarcinoma">Cholangiocarcinoma</option>
<option value="Chronic lymphocytic leukemia">Chronic lymphocytic leukemia</option>
<option value="Chronic myelogenous leukemia">Chronic myelogenous leukemia</option>
<option value="Chronic myeloproliferative disorders">Chronic myeloproliferative disorders</option>
<option value="Colon Cancer">Colon Cancer</option>
<option value="Cutaneous T-cell lymphoma">Cutaneous T-cell lymphoma</option>
<option value="Cancer of Unknown primary site">Cancer of Unknown primary site</option>
<option value="Desmoplastic small round cell tumor">Desmoplastic small round cell tumor</option>
<option value="Endometrial cancer">Endometrial cancer</option>
<option value="Ependymoma">Ependymoma</option>
<option value="Esophageal cancer">Esophageal cancer</option>
<option value="Ewings sarcoma in the Ewing family of tumors">Ewings sarcoma in the Ewing family of tumors</option>
<option value="Eye Cancer">Eye Cancer</option>
<option value="Gallbladder cancer">Gallbladder cancer</option>
<option value="Gastric (Stomach) cancer">Gastric (Stomach) cancer</option>
<option value="Gastrointestinal stromal tumor (GIST)">Gastrointestinal stromal tumor (GIST)</option>
<option value="Germ cell tumor">Germ cell tumor</option>
<option value="Gestational trophoblastic tumor">Gestational trophoblastic tumor</option>
<option value="Hairy cell leukemia">Hairy cell leukemia</option>
<option value="Head and neck cancer">Head and neck cancer</option>
<option value="Heart cancer">Heart cancer</option>
<option value="Hepatocellular (liver) cancer">Hepatocellular (liver) cancer</option>
<option value="Hodgkin lymphoma">Hodgkin lymphoma</option>
<option value="Hypopharyngeal cancer">Hypopharyngeal cancer</option>
<option value="Hypothalamic and visual pathway glioma, childhood">Hypothalamic and visual pathway glioma, childhood</option>
<option value="Intraocular Melanoma">Intraocular Melanoma</option>
<option value="Islet Cell Carcinoma (Endocrine Pancreas)">Islet Cell Carcinoma (Endocrine Pancreas)</option>
<option value="Kaposi sarcoma">Kaposi sarcoma</option>
<option value="Kidney cancer (renal cell cancer)">Kidney cancer (renal cell cancer)</option>
<option value="Laryngeal Cancer">Laryngeal Cancer</option>
<option value="Leukemias">Leukemias</option>
<option value="Lip and Oral Cavity Cancer">Lip and Oral Cavity Cancer</option>
<option value="Liposarcoma">Liposarcoma</option>
<option value="Lung Cancer">Lung Cancer</option>
<option value="Lymphomas">Lymphomas</option>
<option value="Malignant Fibrous Histiocytoma of bone">Malignant Fibrous Histiocytoma of bone</option>
<option value="Medulloblastoma, Childhood">Medulloblastoma, Childhood</option>
<option value="Melanoma">Melanoma</option>
<option value="Merkel Cell Carcinoma">Merkel Cell Carcinoma</option>
<option value="Mesothelioma">Mesothelioma</option>
<option value="Metastatic Squamous Neck Cancer with Occult Primary">Metastatic Squamous Neck Cancer with Occult Primary</option>
<option value="Multiple Endocrine Neoplasia Syndrome, Childhood">Multiple Endocrine Neoplasia Syndrome, Childhood</option>
<option value="Multiple Myeloma or Plasma Cell Neoplasm">Multiple Myeloma or Plasma Cell Neoplasm</option>
<option value="Mycosis Fungoides">Mycosis Fungoides</option>
<option value="Myelodysplastic or Myeloproliferative Diseases">Myelodysplastic or Myeloproliferative Diseases</option>
<option value="Nasal cavity and paranasal sinus cancer">Nasal cavity and paranasal sinus cancer</option>
<option value="Nasopharyngeal carcinoma">Nasopharyngeal carcinoma</option>
<option value="Neuroblastoma">Neuroblastoma</option>
<option value="Non-Hodgkin lymphoma">Non-Hodgkin lymphoma</option>
<option value="Neuroectodermal tumors">Neuroectodermal tumors</option>
<option value="Oral cancer">Oral cancer</option>
<option value="Oropharyngeal cancer">Oropharyngeal cancer</option>
<option value="Ovarian cancer">Ovarian cancer</option>
<option value="Ovarian epithelial cancer (Surface epithelial-stromal tumor)">Ovarian epithelial cancer (Surface epithelial-stromal tumor)</option>
<option value="Pancreatic cancer">Pancreatic cancer</option>
<option value="Parathyroid cancer">Parathyroid cancer</option>
<option value="Penile cancer">Penile cancer</option>
<option value="Pharyngeal cancer">Pharyngeal cancer</option>
<option value="Pheochromocytoma">Pheochromocytoma</option>
<option value="Pinealoma">Pinealoma</option>
<option value="Pituitary adenoma">Pituitary adenoma</option>
<option value="Pleuropulmonary blastoma">Pleuropulmonary blastoma</option>
<option value="Primary central nervous system lymphoma">Primary central nervous system lymphoma</option>
<option value="Rectal cancer">Rectal cancer</option>
<option value="Renal cell carcinoma (kidney cancer)">Renal cell carcinoma (kidney cancer)</option>
<option value="Renal pelvis and ureter, transitional cell cancer">Renal pelvis and ureter, transitional cell cancer</option>
<option value="Retinoblastoma">Retinoblastoma</option>
<option value="Rhabdomyosarcoma, childhoods">Rhabdomyosarcoma, childhoods</option>
<option value="Salivary gland cancer">Salivary gland cancer</option>
<option value="Sarcoma, Ewing family of tumors">Sarcoma, Ewing family of tumors</option>
<option value="S�zary syndrome">S�zary syndrome</option>
<option value="Skin cancer">Skin cancer</option>
<option value="Soft tissue sarcoma">Soft tissue sarcoma</option>
<option value="Supratentorial primitive neuroectodermal tumor, childhood">Supratentorial primitive neuroectodermal tumor, childhood</option>
<option value="Testicular cancer">Testicular cancer</option>
<option value="Throat cancer">Throat cancer</option>
<option value="Thymoma">Thymoma</option>
<option value="Thyroid cancer">Thyroid cancer</option>
<option value="Ureter and renal pelvis, transitional cell cancer">Ureter and renal pelvis, transitional cell cancer</option>
<option value="Urethral cancer">Urethral cancer</option>
<option value="Uterine cancer, endometrial">Uterine cancer, endometrial</option>
<option value="Vaginal cancer">Vaginal cancer</option>
<option value="Vulvar cancer">Vulvar cancer</option>
<option value="Waldenstr�m macroglobulinemia">Waldenstr�m macroglobulinemia</option>
<option value="Wilms tumor (kidney cancer), childhood">Wilms tumor (kidney cancer), childhood</option>
</select>
<input type="submit" value="go" />
</form>
<hr>
OR--<br><br>
<font size=4 color="darkred"><B>Show the names of cancers that have the symptom(type any one symptom)</B></font>
<form action="sym.php" method="post">
<input type="text" name="which" /><br /><br />
<input type="submit" value="submit" />
</form>
<?php
}

elseif ($w=='test')
{
?>

<font size=5 color="indigo"><B>DIAGNOSIS PAGE</B></FONT><hr><BR><BR>
<font size=4 color="darkred"><B>View the diagnostic tests of---</B></font><br>
<form action="dia1.php" method="post">
Select the cancer you want to view
<select name="cantype">
<option value="">select...</option>
<option value="Acute lymphoblastic leukemia">Acute lymphoblastic leukemia</option>
<option value="Acute myeloid leukemia">Acute myeloid leukemia</option>
<option value="Adrenocortical carcinoma">Adrenocortical carcinoma</option>
<option value="AIDS">AIDS</option>
<option value="AIDS-related lymphoma">AIDS-related lymphoma</option>
<option value="Anal cancer">Anal cancer</option>
<option value="Appendix cancer">Appendix cancer</option>
<option value="Astrocytoma">Astrocytoma</option>
<option value="Basal-cell carcinoma">Basal-cell carcinoma</option>
<option value="Bladder cancer">Bladder cancer</option>
<option value="Bone tumor">Bone tumor</option>
<option value="Brain tumor">Brain tumor</option>
<option value="Brainstem glioma">Brainstem glioma</option>
<option value="Breast cancer">Breast cancer</option>
<option value="Bronchial adenomas">Bronchial adenomas</option>
<option value="Burkitts lymphoma">Burkitts lymphoma</option>
<option value="Carcinoid tumor">Carcinoid tumor</option>
<option value="Carcinoma of unknown primary">Carcinoma of unknown primary</option>
<option value="Central nervous system lymphoma, primary">Central nervous system lymphoma, primary</option>
<option value="Cerebellar astrocytoma">Cerebellar astrocytoma</option>
<option value="Cervical cancer">Cervical cancer</option>
<option value="Cholangiocarcinoma">Cholangiocarcinoma</option>
<option value="Chronic lymphocytic leukemia">Chronic lymphocytic leukemia</option>
<option value="Chronic myelogenous leukemia">Chronic myelogenous leukemia</option>
<option value="Chronic myeloproliferative disorders">Chronic myeloproliferative disorders</option>
<option value="Colon Cancer">Colon Cancer</option>
<option value="Cutaneous T-cell lymphoma">Cutaneous T-cell lymphoma</option>
<option value="Cancer of Unknown primary site">Cancer of Unknown primary site</option>
<option value="Desmoplastic small round cell tumor">Desmoplastic small round cell tumor</option>
<option value="Endometrial cancer">Endometrial cancer</option>
<option value="Ependymoma">Ependymoma</option>
<option value="Esophageal cancer">Esophageal cancer</option>
<option value="Ewings sarcoma in the Ewing family of tumors">Ewings sarcoma in the Ewing family of tumors</option>
<option value="Eye Cancer">Eye Cancer</option>
<option value="Gallbladder cancer">Gallbladder cancer</option>
<option value="Gastric (Stomach) cancer">Gastric (Stomach) cancer</option>
<option value="Gastrointestinal stromal tumor (GIST)">Gastrointestinal stromal tumor (GIST)</option>
<option value="Germ cell tumor">Germ cell tumor</option>
<option value="Gestational trophoblastic tumor">Gestational trophoblastic tumor</option>
<option value="Hairy cell leukemia">Hairy cell leukemia</option>
<option value="Head and neck cancer">Head and neck cancer</option>
<option value="Heart cancer">Heart cancer</option>
<option value="Hepatocellular (liver) cancer">Hepatocellular (liver) cancer</option>
<option value="Hodgkin lymphoma">Hodgkin lymphoma</option>
<option value="Hypopharyngeal cancer">Hypopharyngeal cancer</option>
<option value="Hypothalamic and visual pathway glioma, childhood">Hypothalamic and visual pathway glioma, childhood</option>
<option value="Intraocular Melanoma">Intraocular Melanoma</option>
<option value="Islet Cell Carcinoma (Endocrine Pancreas)">Islet Cell Carcinoma (Endocrine Pancreas)</option>
<option value="Kaposi sarcoma">Kaposi sarcoma</option>
<option value="Kidney cancer (renal cell cancer)">Kidney cancer (renal cell cancer)</option>
<option value="Laryngeal Cancer">Laryngeal Cancer</option>
<option value="Leukemias">Leukemias</option>
<option value="Lip and Oral Cavity Cancer">Lip and Oral Cavity Cancer</option>
<option value="Liposarcoma">Liposarcoma</option>
<option value="Lung Cancer">Lung Cancer</option>
<option value="Lymphomas">Lymphomas</option>
<option value="Malignant Fibrous Histiocytoma of bone">Malignant Fibrous Histiocytoma of bone</option>
<option value="Medulloblastoma, Childhood">Medulloblastoma, Childhood</option>
<option value="Melanoma">Melanoma</option>
<option value="Merkel Cell Carcinoma">Merkel Cell Carcinoma</option>
<option value="Mesothelioma">Mesothelioma</option>
<option value="Metastatic Squamous Neck Cancer with Occult Primary">Metastatic Squamous Neck Cancer with Occult Primary</option>
<option value="Multiple Endocrine Neoplasia Syndrome, Childhood">Multiple Endocrine Neoplasia Syndrome, Childhood</option>
<option value="Multiple Myeloma or Plasma Cell Neoplasm">Multiple Myeloma or Plasma Cell Neoplasm</option>
<option value="Mycosis Fungoides">Mycosis Fungoides</option>
<option value="Myelodysplastic or Myeloproliferative Diseases">Myelodysplastic or Myeloproliferative Diseases</option>
<option value="Nasal cavity and paranasal sinus cancer">Nasal cavity and paranasal sinus cancer</option>
<option value="Nasopharyngeal carcinoma">Nasopharyngeal carcinoma</option>
<option value="Neuroblastoma">Neuroblastoma</option>
<option value="Non-Hodgkin lymphoma">Non-Hodgkin lymphoma</option>
<option value="Neuroectodermal tumors">Neuroectodermal tumors</option>
<option value="Oral cancer">Oral cancer</option>
<option value="Oropharyngeal cancer">Oropharyngeal cancer</option>
<option value="Ovarian cancer">Ovarian cancer</option>
<option value="Ovarian epithelial cancer (Surface epithelial-stromal tumor)">Ovarian epithelial cancer (Surface epithelial-stromal tumor)</option>
<option value="Pancreatic cancer">Pancreatic cancer</option>
<option value="Parathyroid cancer">Parathyroid cancer</option>
<option value="Penile cancer">Penile cancer</option>
<option value="Pharyngeal cancer">Pharyngeal cancer</option>
<option value="Pheochromocytoma">Pheochromocytoma</option>
<option value="Pinealoma">Pinealoma</option>
<option value="Pituitary adenoma">Pituitary adenoma</option>
<option value="Pleuropulmonary blastoma">Pleuropulmonary blastoma</option>
<option value="Primary central nervous system lymphoma">Primary central nervous system lymphoma</option>
<option value="Rectal cancer">Rectal cancer</option>
<option value="Renal cell carcinoma (kidney cancer)">Renal cell carcinoma (kidney cancer)</option>
<option value="Renal pelvis and ureter, transitional cell cancer">Renal pelvis and ureter, transitional cell cancer</option>
<option value="Retinoblastoma">Retinoblastoma</option>
<option value="Rhabdomyosarcoma, childhoods">Rhabdomyosarcoma, childhoods</option>
<option value="Salivary gland cancer">Salivary gland cancer</option>
<option value="Sarcoma, Ewing family of tumors">Sarcoma, Ewing family of tumors</option>
<option value="S�zary syndrome">S�zary syndrome</option>
<option value="Skin cancer">Skin cancer</option>
<option value="Soft tissue sarcoma">Soft tissue sarcoma</option>
<option value="Supratentorial primitive neuroectodermal tumor, childhood">Supratentorial primitive neuroectodermal tumor, childhood</option>
<option value="Testicular cancer">Testicular cancer</option>
<option value="Throat cancer">Throat cancer</option>
<option value="Thymoma">Thymoma</option>
<option value="Thyroid cancer">Thyroid cancer</option>
<option value="Ureter and renal pelvis, transitional cell cancer">Ureter and renal pelvis, transitional cell cancer</option>
<option value="Urethral cancer">Urethral cancer</option>
<option value="Uterine cancer, endometrial">Uterine cancer, endometrial</option>
<option value="Vaginal cancer">Vaginal cancer</option>
<option value="Vulvar cancer">Vulvar cancer</option>
<option value="Waldenstr�m macroglobulinemia">Waldenstr�m macroglobulinemia</option>
<option value="Wilms tumor (kidney cancer), childhood">Wilms tumor (kidney cancer), childhood</option>
</select>
<input type="submit" value="go" />
</form>
<hr>
OR--<br><br>
<font size=4 color="darkred"><B>Show the names of cancers that have the diagnostic test(type any one test)</B></font>
<form action="dia.php" method="post">
<br /><input type="text" name="which" /><br /><br />
<input type="submit" value="submit" />
</form>
<?php
}
elseif ($w=='treatment')
{
?>
<font size=5 color="indigo"><B>TREATMENT PAGE</B></FONT><hr><BR><BR>
<font size=4 color="darkred"><B>View the treatments of---</B></font><br>
<form action="tre1.php" method="post">
Select the cancer you want to view
<select name="cantype">
<option value="">select...</option>
<option value="Acute lymphoblastic leukemia">Acute lymphoblastic leukemia</option>
<option value="Acute myeloid leukemia">Acute myeloid leukemia</option>
<option value="Adrenocortical carcinoma">Adrenocortical carcinoma</option>
<option value="AIDS">AIDS</option>
<option value="AIDS-related lymphoma">AIDS-related lymphoma</option>
<option value="Anal cancer">Anal cancer</option>
<option value="Appendix cancer">Appendix cancer</option>
<option value="Astrocytoma">Astrocytoma</option>
<option value="Basal-cell carcinoma">Basal-cell carcinoma</option>
<option value="Bladder cancer">Bladder cancer</option>
<option value="Bone tumor">Bone tumor</option>
<option value="Brain tumor">Brain tumor</option>
<option value="Brainstem glioma">Brainstem glioma</option>
<option value="Breast cancer">Breast cancer</option>
<option value="Bronchial adenomas">Bronchial adenomas</option>
<option value="Burkitts lymphoma">Burkitts lymphoma</option>
<option value="Carcinoid tumor">Carcinoid tumor</option>
<option value="Carcinoma of unknown primary">Carcinoma of unknown primary</option>
<option value="Central nervous system lymphoma, primary">Central nervous system lymphoma, primary</option>
<option value="Cerebellar astrocytoma">Cerebellar astrocytoma</option>
<option value="Cervical cancer">Cervical cancer</option>
<option value="Cholangiocarcinoma">Cholangiocarcinoma</option>
<option value="Chronic lymphocytic leukemia">Chronic lymphocytic leukemia</option>
<option value="Chronic myelogenous leukemia">Chronic myelogenous leukemia</option>
<option value="Chronic myeloproliferative disorders">Chronic myeloproliferative disorders</option>
<option value="Colon Cancer">Colon Cancer</option>
<option value="Cutaneous T-cell lymphoma">Cutaneous T-cell lymphoma</option>
<option value="Cancer of Unknown primary site">Cancer of Unknown primary site</option>
<option value="Desmoplastic small round cell tumor">Desmoplastic small round cell tumor</option>
<option value="Endometrial cancer">Endometrial cancer</option>
<option value="Ependymoma">Ependymoma</option>
<option value="Esophageal cancer">Esophageal cancer</option>
<option value="Ewings sarcoma in the Ewing family of tumors">Ewings sarcoma in the Ewing family of tumors</option>
<option value="Eye Cancer">Eye Cancer</option>
<option value="Gallbladder cancer">Gallbladder cancer</option>
<option value="Gastric (Stomach) cancer">Gastric (Stomach) cancer</option>
<option value="Gastrointestinal stromal tumor (GIST)">Gastrointestinal stromal tumor (GIST)</option>
<option value="Germ cell tumor">Germ cell tumor</option>
<option value="Gestational trophoblastic tumor">Gestational trophoblastic tumor</option>
<option value="Hairy cell leukemia">Hairy cell leukemia</option>
<option value="Head and neck cancer">Head and neck cancer</option>
<option value="Heart cancer">Heart cancer</option>
<option value="Hepatocellular (liver) cancer">Hepatocellular (liver) cancer</option>
<option value="Hodgkin lymphoma">Hodgkin lymphoma</option>
<option value="Hypopharyngeal cancer">Hypopharyngeal cancer</option>
<option value="Hypothalamic and visual pathway glioma, childhood">Hypothalamic and visual pathway glioma, childhood</option>
<option value="Intraocular Melanoma">Intraocular Melanoma</option>
<option value="Islet Cell Carcinoma (Endocrine Pancreas)">Islet Cell Carcinoma (Endocrine Pancreas)</option>
<option value="Kaposi sarcoma">Kaposi sarcoma</option>
<option value="Kidney cancer (renal cell cancer)">Kidney cancer (renal cell cancer)</option>
<option value="Laryngeal Cancer">Laryngeal Cancer</option>
<option value="Leukemias">Leukemias</option>
<option value="Lip and Oral Cavity Cancer">Lip and Oral Cavity Cancer</option>
<option value="Liposarcoma">Liposarcoma</option>
<option value="Lung Cancer">Lung Cancer</option>
<option value="Lymphomas">Lymphomas</option>
<option value="Malignant Fibrous Histiocytoma of bone">Malignant Fibrous Histiocytoma of bone</option>
<option value="Medulloblastoma, Childhood">Medulloblastoma, Childhood</option>
<option value="Melanoma">Melanoma</option>
<option value="Merkel Cell Carcinoma">Merkel Cell Carcinoma</option>
<option value="Mesothelioma">Mesothelioma</option>
<option value="Metastatic Squamous Neck Cancer with Occult Primary">Metastatic Squamous Neck Cancer with Occult Primary</option>
<option value="Multiple Endocrine Neoplasia Syndrome, Childhood">Multiple Endocrine Neoplasia Syndrome, Childhood</option>
<option value="Multiple Myeloma or Plasma Cell Neoplasm">Multiple Myeloma or Plasma Cell Neoplasm</option>
<option value="Mycosis Fungoides">Mycosis Fungoides</option>
<option value="Myelodysplastic or Myeloproliferative Diseases">Myelodysplastic or Myeloproliferative Diseases</option>
<option value="Nasal cavity and paranasal sinus cancer">Nasal cavity and paranasal sinus cancer</option>
<option value="Nasopharyngeal carcinoma">Nasopharyngeal carcinoma</option>
<option value="Neuroblastoma">Neuroblastoma</option>
<option value="Non-Hodgkin lymphoma">Non-Hodgkin lymphoma</option>
<option value="Neuroectodermal tumors">Neuroectodermal tumors</option>
<option value="Oral cancer">Oral cancer</option>
<option value="Oropharyngeal cancer">Oropharyngeal cancer</option>
<option value="Ovarian cancer">Ovarian cancer</option>
<option value="Ovarian epithelial cancer (Surface epithelial-stromal tumor)">Ovarian epithelial cancer (Surface epithelial-stromal tumor)</option>
<option value="Pancreatic cancer">Pancreatic cancer</option>
<option value="Parathyroid cancer">Parathyroid cancer</option>
<option value="Penile cancer">Penile cancer</option>
<option value="Pharyngeal cancer">Pharyngeal cancer</option>
<option value="Pheochromocytoma">Pheochromocytoma</option>
<option value="Pinealoma">Pinealoma</option>
<option value="Pituitary adenoma">Pituitary adenoma</option>
<option value="Pleuropulmonary blastoma">Pleuropulmonary blastoma</option>
<option value="Primary central nervous system lymphoma">Primary central nervous system lymphoma</option>
<option value="Rectal cancer">Rectal cancer</option>
<option value="Renal cell carcinoma (kidney cancer)">Renal cell carcinoma (kidney cancer)</option>
<option value="Renal pelvis and ureter, transitional cell cancer">Renal pelvis and ureter, transitional cell cancer</option>
<option value="Retinoblastoma">Retinoblastoma</option>
<option value="Rhabdomyosarcoma, childhoods">Rhabdomyosarcoma, childhoods</option>
<option value="Salivary gland cancer">Salivary gland cancer</option>
<option value="Sarcoma, Ewing family of tumors">Sarcoma, Ewing family of tumors</option>
<option value="S�zary syndrome">S�zary syndrome</option>
<option value="Skin cancer">Skin cancer</option>
<option value="Soft tissue sarcoma">Soft tissue sarcoma</option>
<option value="Supratentorial primitive neuroectodermal tumor, childhood">Supratentorial primitive neuroectodermal tumor, childhood</option>
<option value="Testicular cancer">Testicular cancer</option>
<option value="Throat cancer">Throat cancer</option>
<option value="Thymoma">Thymoma</option>
<option value="Thyroid cancer">Thyroid cancer</option>
<option value="Ureter and renal pelvis, transitional cell cancer">Ureter and renal pelvis, transitional cell cancer</option>
<option value="Urethral cancer">Urethral cancer</option>
<option value="Uterine cancer, endometrial">Uterine cancer, endometrial</option>
<option value="Vaginal cancer">Vaginal cancer</option>
<option value="Vulvar cancer">Vulvar cancer</option>
<option value="Waldenstr�m macroglobulinemia">Waldenstr�m macroglobulinemia</option>
<option value="Wilms tumor (kidney cancer), childhood">Wilms tumor (kidney cancer), childhood</option>
</select>
<input type="submit" value="go" />
</form>
<hr>
OR--<br><br>
<font size=4 color="darkred"><B>Show the names of cancers that have the treatment(type any one treatment)</B></font>
<form action="tre.php" method="post">
<br /><input type="text" name="which" /><br /><br />
<input type="submit" value="submit" />
</form>
<?php
}
elseif ($w=='cause/riskfactor')
{
?>

<font size=5 color="indigo"><B>CAUSES PAGE</B></FONT><hr><BR><BR>
<font size=4 color="darkred"><B>View the causes/riskfactors of---</B></font><br>
<form action="cau1.php" method="post">
Select the cancer you want to view
<select name="cantype">
<option value="">select...</option>
<option value="Acute lymphoblastic leukemia">Acute lymphoblastic leukemia</option>
<option value="Acute myeloid leukemia">Acute myeloid leukemia</option>
<option value="Adrenocortical carcinoma">Adrenocortical carcinoma</option>
<option value="AIDS">AIDS</option>
<option value="AIDS-related lymphoma">AIDS-related lymphoma</option>
<option value="Anal cancer">Anal cancer</option>
<option value="Appendix cancer">Appendix cancer</option>
<option value="Astrocytoma">Astrocytoma</option>
<option value="Basal-cell carcinoma">Basal-cell carcinoma</option>
<option value="Bladder cancer">Bladder cancer</option>
<option value="Bone tumor">Bone tumor</option>
<option value="Brain tumor">Brain tumor</option>
<option value="Brainstem glioma">Brainstem glioma</option>
<option value="Breast cancer">Breast cancer</option>
<option value="Bronchial adenomas">Bronchial adenomas</option>
<option value="Burkitts lymphoma">Burkitts lymphoma</option>
<option value="Carcinoid tumor">Carcinoid tumor</option>
<option value="Carcinoma of unknown primary">Carcinoma of unknown primary</option>
<option value="Central nervous system lymphoma, primary">Central nervous system lymphoma, primary</option>
<option value="Cerebellar astrocytoma">Cerebellar astrocytoma</option>
<option value="Cervical cancer">Cervical cancer</option>
<option value="Cholangiocarcinoma">Cholangiocarcinoma</option>
<option value="Chronic lymphocytic leukemia">Chronic lymphocytic leukemia</option>
<option value="Chronic myelogenous leukemia">Chronic myelogenous leukemia</option>
<option value="Chronic myeloproliferative disorders">Chronic myeloproliferative disorders</option>
<option value="Colon Cancer">Colon Cancer</option>
<option value="Cutaneous T-cell lymphoma">Cutaneous T-cell lymphoma</option>
<option value="Cancer of Unknown primary site">Cancer of Unknown primary site</option>
<option value="Desmoplastic small round cell tumor">Desmoplastic small round cell tumor</option>
<option value="Endometrial cancer">Endometrial cancer</option>
<option value="Ependymoma">Ependymoma</option>
<option value="Esophageal cancer">Esophageal cancer</option>
<option value="Ewings sarcoma in the Ewing family of tumors">Ewings sarcoma in the Ewing family of tumors</option>
<option value="Eye Cancer">Eye Cancer</option>
<option value="Gallbladder cancer">Gallbladder cancer</option>
<option value="Gastric (Stomach) cancer">Gastric (Stomach) cancer</option>
<option value="Gastrointestinal stromal tumor (GIST)">Gastrointestinal stromal tumor (GIST)</option>
<option value="Germ cell tumor">Germ cell tumor</option>
<option value="Gestational trophoblastic tumor">Gestational trophoblastic tumor</option>
<option value="Hairy cell leukemia">Hairy cell leukemia</option>
<option value="Head and neck cancer">Head and neck cancer</option>
<option value="Heart cancer">Heart cancer</option>
<option value="Hepatocellular (liver) cancer">Hepatocellular (liver) cancer</option>
<option value="Hodgkin lymphoma">Hodgkin lymphoma</option>
<option value="Hypopharyngeal cancer">Hypopharyngeal cancer</option>
<option value="Hypothalamic and visual pathway glioma, childhood">Hypothalamic and visual pathway glioma, childhood</option>
<option value="Intraocular Melanoma">Intraocular Melanoma</option>
<option value="Islet Cell Carcinoma (Endocrine Pancreas)">Islet Cell Carcinoma (Endocrine Pancreas)</option>
<option value="Kaposi sarcoma">Kaposi sarcoma</option>
<option value="Kidney cancer (renal cell cancer)">Kidney cancer (renal cell cancer)</option>
<option value="Laryngeal Cancer">Laryngeal Cancer</option>
<option value="Leukemias">Leukemias</option>
<option value="Lip and Oral Cavity Cancer">Lip and Oral Cavity Cancer</option>
<option value="Liposarcoma">Liposarcoma</option>
<option value="Lung Cancer">Lung Cancer</option>
<option value="Lymphomas">Lymphomas</option>
<option value="Malignant Fibrous Histiocytoma of bone">Malignant Fibrous Histiocytoma of bone</option>
<option value="Medulloblastoma, Childhood">Medulloblastoma, Childhood</option>
<option value="Melanoma">Melanoma</option>
<option value="Merkel Cell Carcinoma">Merkel Cell Carcinoma</option>
<option value="Mesothelioma">Mesothelioma</option>
<option value="Metastatic Squamous Neck Cancer with Occult Primary">Metastatic Squamous Neck Cancer with Occult Primary</option>
<option value="Multiple Endocrine Neoplasia Syndrome, Childhood">Multiple Endocrine Neoplasia Syndrome, Childhood</option>
<option value="Multiple Myeloma or Plasma Cell Neoplasm">Multiple Myeloma or Plasma Cell Neoplasm</option>
<option value="Mycosis Fungoides">Mycosis Fungoides</option>
<option value="Myelodysplastic or Myeloproliferative Diseases">Myelodysplastic or Myeloproliferative Diseases</option>
<option value="Nasal cavity and paranasal sinus cancer">Nasal cavity and paranasal sinus cancer</option>
<option value="Nasopharyngeal carcinoma">Nasopharyngeal carcinoma</option>
<option value="Neuroblastoma">Neuroblastoma</option>
<option value="Non-Hodgkin lymphoma">Non-Hodgkin lymphoma</option>
<option value="Neuroectodermal tumors">Neuroectodermal tumors</option>
<option value="Oral cancer">Oral cancer</option>
<option value="Oropharyngeal cancer">Oropharyngeal cancer</option>
<option value="Ovarian cancer">Ovarian cancer</option>
<option value="Ovarian epithelial cancer (Surface epithelial-stromal tumor)">Ovarian epithelial cancer (Surface epithelial-stromal tumor)</option>
<option value="Pancreatic cancer">Pancreatic cancer</option>
<option value="Parathyroid cancer">Parathyroid cancer</option>
<option value="Penile cancer">Penile cancer</option>
<option value="Pharyngeal cancer">Pharyngeal cancer</option>
<option value="Pheochromocytoma">Pheochromocytoma</option>
<option value="Pinealoma">Pinealoma</option>
<option value="Pituitary adenoma">Pituitary adenoma</option>
<option value="Pleuropulmonary blastoma">Pleuropulmonary blastoma</option>
<option value="Primary central nervous system lymphoma">Primary central nervous system lymphoma</option>
<option value="Rectal cancer">Rectal cancer</option>
<option value="Renal cell carcinoma (kidney cancer)">Renal cell carcinoma (kidney cancer)</option>
<option value="Renal pelvis and ureter, transitional cell cancer">Renal pelvis and ureter, transitional cell cancer</option>
<option value="Retinoblastoma">Retinoblastoma</option>
<option value="Rhabdomyosarcoma, childhoods">Rhabdomyosarcoma, childhoods</option>
<option value="Salivary gland cancer">Salivary gland cancer</option>
<option value="Sarcoma, Ewing family of tumors">Sarcoma, Ewing family of tumors</option>
<option value="S�zary syndrome">S�zary syndrome</option>
<option value="Skin cancer">Skin cancer</option>
<option value="Soft tissue sarcoma">Soft tissue sarcoma</option>
<option value="Supratentorial primitive neuroectodermal tumor, childhood">Supratentorial primitive neuroectodermal tumor, childhood</option>
<option value="Testicular cancer">Testicular cancer</option>
<option value="Throat cancer">Throat cancer</option>
<option value="Thymoma">Thymoma</option>
<option value="Thyroid cancer">Thyroid cancer</option>
<option value="Ureter and renal pelvis, transitional cell cancer">Ureter and renal pelvis, transitional cell cancer</option>
<option value="Urethral cancer">Urethral cancer</option>
<option value="Uterine cancer, endometrial">Uterine cancer, endometrial</option>
<option value="Vaginal cancer">Vaginal cancer</option>
<option value="Vulvar cancer">Vulvar cancer</option>
<option value="Waldenstr�m macroglobulinemia">Waldenstr�m macroglobulinemia</option>
<option value="Wilms tumor (kidney cancer), childhood">Wilms tumor (kidney cancer), childhood</option>
</select>
<input type="submit" value="go" />
</form>
<hr>
OR--<br><br>
<font size=4 color="darkred"><B>Show the names of cancers that have the cause/riskfactor(type any one cause/riskfactor)</B></font>
<form action="cau.php" method="post">
<br /><input type="text" name="which" /><br /><br />
<input type="submit" value="submit" />
</form>
<?php
}
?>
</body>
</html>